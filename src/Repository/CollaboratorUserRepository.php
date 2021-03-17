<?php

namespace App\Repository;

use App\Entity\CollaboratorUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DBALException;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @method CollaboratorUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method CollaboratorUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method CollaboratorUser[]    findAll()
 * @method CollaboratorUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CollaboratorUserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CollaboratorUser::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(UserInterface $user, string $newEncodedPassword): void
    {
        if (!$user instanceof CollaboratorUser) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newEncodedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    /**
     * Función que filtra y rellena la tabla de colaboradores
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     */
    public function searchCollaboratorUsersTable($params, $form_filters, $search_filter)
    {
        //Array con las columnas para la ordenación
        $columns = [
            0 => "username",
            1 => "email",
            2 => "name",
            3 => "collaborator",
            4 => "id"
            ];

        $groupBy = $having = $sqlTot = $sqlRec = $sqlRecTot = "";
        $where = "WHERE TRUE ";

        //* Procesamos los filtros

        // Filtro de búsqueda general
        if( !is_null($search_filter) && $search_filter != '') {
            $where .= " AND c.username LIKE '%"."$search_filter"."%' 
                    OR c.email LIKE '%"."$search_filter"."%' 
                    OR c.name LIKE '%"."$search_filter"."%'  
                    OR collaborator.name LIKE '%"."$search_filter"."%'               
                    ";
        }

        //Montamos la consulta
        $sql = "SELECT   c.id               AS `id`,
                            collaborator.name  AS `collaborator`,
                            c.username         AS username,
                            c.roles            AS roles,
                            c.email            AS email,
                            c.name             AS `name`,
                            c.cif              AS cif,
                            c.creation_date    AS creation_date,
                            c.deletion_Date    AS deletion_Date,
                            c.timezone         AS timezone,
                            c.last_access      AS last_access,
                            c.locale           AS `language`

                FROM collaborator_user AS c

                LEFT JOIN collaborator ON c.collaborator_id = collaborator.id
                ";
        try {
            //Creamos una query para el total y otra para los datos filtrados
            $sqlTot .= $sql . $groupBy;
            $sqlRec .= $sql;

            //Concatenamos los filtros
            if (isset($where) && $where != '') {
                $sqlRec .= $where;
            }
            $sqlRec .= $groupBy;
            if (isset($having) && $having != '') {
                $sqlRec .= $having;
            }
            
            //Procesamos la ordenación
            if(isset($params['order'])){
                $sqlRec .= " ORDER BY " .
                $columns[$params['order'][0]['column']] . " " .
                $params['order'][0]['dir'] ;
            }else{
                $sqlRec .= " ORDER BY username ASC";
            }
            //Procesamos el paginado
            $limit=" ";
            if($params['length'] != -1){
                $limit=" LIMIT ".$params['start'].",".$params['length']." ";
            }
            //Guardamos en una variable la consulta filtrada antes de añadirle el
            // limit, para el contador
            $sqlRecTot .= $sqlRec;
            $sqlRec .= $limit;

            //Descomentar abajo para chequear la consulta final
            // ini_set("xdebug.var_display_max_children", -1);
            // ini_set("xdebug.var_display_max_data", -1);
            // ini_set("xdebug.var_display_max_depth", -1);

            //Ejecutamos las consultas
            $conn = $this->getEntityManager()->getConnection();
                
            $queryTot = count($conn->executeQuery($sqlTot)->fetchAll(\PDO::FETCH_ASSOC));
            $queryRecordsTot = count($conn->executeQuery($sqlRecTot)->fetchAll(\PDO::FETCH_ASSOC));
            $queryRecords = $conn->executeQuery($sqlRec)->fetchAll(\PDO::FETCH_ASSOC);
            $data = $queryRecords;

            //Montamos la respuesta
            $json_data = array(
                "draw" => intval($params['draw']),
                "recordsTotal" => intval($queryTot),
                "recordsFiltered" => intval($queryRecordsTot),
                "data" => $data
            );
        } 
        catch (DBALException $e) 
        {
            $json_data = $e->getMessage();
        }

        return $json_data;
    }

    /**
     * Función que crea un usuario colaborador nuevo
     * 
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @params Array $inputs    Datos a introducir en la nueva instancia de CollaboratorUser
     * 
     */
    public function createCollaboratorUser($inputs)
    {
        foreach($inputs as $item) {
            if(is_null($item['value']) || empty(trim($item['value']))) {
                $msg = $item['name'].': empty or null value';
                return array('status' => false, 'statusCode' => 500, 'message' => $msg);
            }

            $data[$item["name"]] = $item["value"];
        }

        $collaborator = $this->getEntityManager()->getRepository('App:Collaborator')->findOneBy(['id' => $data['c_collaborator']]);
        $checkUsername = $this->getEntityManager()->getRepository('App:CollaboratorUser')->findOneBy(['username' => $data['c_username']]);
        $checkEmail = $this->getEntityManager()->getRepository('App:CollaboratorUser')->findOneBy(['email' => $data['c_email']]);
        $checkCif = $this->getEntityManager()->getRepository('App:CollaboratorUser')->findOneBy(['cif' => $data['c_cif']]);

        // Comprobamos que la entidad colaboradora exista
        if(!$collaborator) {
            return array('status' => false, 'statusCode' => 500, 'message' => "Collaborator doesn't exist");
        }

        // Comprobamos que no exista un collaboratorUser con el mismo username, email y cif
        if($checkUsername || $checkEmail || $checkCif ) {
            return array('status' => false, 'statusCode' => 500, 'message' => 'Already exists');
        }

        $encryptedPassword = password_hash($data["c_password"], PASSWORD_BCRYPT, ["cost" => 13]);
        $collaboratorUser = new CollaboratorUser;
        
        try {
            $collaboratorUser->setCollaborator($collaborator);
            $collaboratorUser->setUsername($data["c_username"]);
            $collaboratorUser->setRoles(["ROLE_USER"]);
            $collaboratorUser->setPassword($encryptedPassword);
            $collaboratorUser->setEmail($data["c_email"]);
            $collaboratorUser->setName($data["c_name"]);
            $collaboratorUser->setCif($data["c_cif"]);
            $collaboratorUser->setCreationDate(new \DateTime());
            
            $this->getEntityManager()->persist($collaboratorUser);
            $this->getEntityManager()->flush();
        } catch (DBALException $e) {
            return $e->getMessage();
        }

        return array('status' => true, 'statusCode' => 200, 'message' => '');
    }
    



    // /**
    //  * @return CollaboratorUser[] Returns an array of CollaboratorUser objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CollaboratorUser
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
