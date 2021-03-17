#!/usr/bin/env bash




incorrectSelection() {
    echo "Mira bien el teclado anda. Inténtalo de nuevo!"
}

mainMenu(){
    #until [ "$selection" = "0" ]; do
    clear
    echo "-------- \e[92mBUILDER\e[0m  ------------"
    echo -e "1. \e[93mTEST\e[0m"
    echo -e "2. \e[91mPRODUCCIÓN\e[0m"
    echo -e "3. \e[96mLOGIN AZURE\e[0m"
    echo "0. SALIR"
    echo ""
    echo -n " Por favor, seleccione un entorno: "
    read selection
    echo ""
    case $selection in
        1 ) clear ; menu "TEST" "Test"; ;;
        2 ) clear ; menu "PRODUCCIÓN" "Prod"; ;;
        3 ) clear ; ./docker/k_loginAzure.sh; ;;
        0 ) clear ; exit ;;
        * ) clear ; incorrectSelection ; ;;
    esac
    #done
}

menu(){

    #until [ "$selection" = "0" ]; do
        clear
        echo -e "-- \e[92m$1 - Acción\e[0m -----------------"
        echo -e "1. \e[91mBUILD & DEPLOY\e[0m"
        echo -e "2. \e[93mRUN POD\e[0m"
        echo -e "3. \e[95mLIST PODS\e[0m"
        echo "0. VOLVER"
        echo ""
        echo -n " Por favor, introduzca una opción: "
        read selection
        echo ""
        case $selection in
            1 ) clear ; ./docker/k_deploy$2.sh; ;;
            2 ) clear ; ./docker/k_runPod$2.sh; ;;
            3 ) clear ; ./docker/k_listPod$2.sh; ;;
            0 ) clear ; mainMenu ;;
            * ) clear ; incorrectSelection ; ;;
        esac
    #done    

}


mainMenu