#!/usr/bin/env bash
cron
service apache2 start

#####

cd /var/www/rira.com/web

# Borramos la posible cache y logs 
rm -R ./var/cache/*
rm -R ./var/log/*

#borramos los directorios de docker
rm -R ./docker
rm ./k_tools.sh

# Instalamos nuevos recursos
php bin/console assets:install

# Actualizamos los posibles cambios de BD
php bin/console doctrine:schema:update --force

# Creamos los nuevos parámetros
php bin/console fixParameters

#####

touch test
tail -0f test