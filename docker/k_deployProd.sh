SECONDS=0
echo "Iniciando proceso de subida a producción. PACIENCIA!!"
echo "" 
echo "Creando el contenedor..."
docker build . -f "./docker/Dockerfile_prod" -t riraasitur/riraweb:pro
echo "" 
echo "Subiendo el contenedor..."
docker push riraasitur/riraweb:pro
echo ""
#Esto sería para ir haciendolo de forma manual, pero lo podemos aglutinar en un comando
#echo "kubectl get pod --namespace=pro -o wide"
#echo "kubectl delete pods <id_pod> --namespace=pro"
echo ""
echo "Borrando los pods de PROD para que se descarguen la nueva imagen"
kubectl get pods --namespace=pro --no-headers=true | awk '/rira/{print $1}'| xargs  kubectl delete --namespace=pro pod
duration=$SECONDS
echo "Finalizada la subida en $(($duration / 60)) minutos y $(($duration % 60)) segundos."
