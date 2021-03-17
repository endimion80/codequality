podCode=`kubectl get pods --namespace=test --no-headers=true | awk '/rira/{print $1}'`
if [ -z "$podCode" ]
then
    echo "No hay pod disponible"
else
    echo "Corriendo el pod: $podCode"
    kubectl exec --stdin --tty $podCode --namespace=test -- /bin/bash
fi