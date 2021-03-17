SECONDS=0
echo "Iniciando proceso de subida a test. PACIENCIA!!"
echo "" 
echo "Creando el contenedor..."
docker build . -f "./docker/Dockerfile_test" -t riraasitur/riraweb:test
echo "" 
echo "Subiendo el contenedor..."
docker push riraasitur/riraweb:test
echo ""
#Esto sería para ir haciendolo de forma manual, pero lo podemos aglutinar en un comando
#echo "kubectl get pod --namespace=test -o wide"
#echo "kubectl delete pods <id_pod> --namespace=test"
echo ""
echo "Borrando los pods de TEST para que se descarguen la nueva imagen"
kubectl get pods --namespace=test --no-headers=true | awk '/rira/{print $1}'| xargs  kubectl delete --namespace=test pod
duration=$SECONDS
echo "Finalizada la subida en $(($duration / 60)) minutos y $(($duration % 60)) segundos."
