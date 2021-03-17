echo "Haciendo dump de la BD..."
echo "" 
php bin/console doctrine:schema:update --dump-sql 
echo "" 
echo "No olvides ejecutar el comando para aplicar cambios"
echo ""
echo "php bin/console doctrine:schema:update --force"
echo ""
