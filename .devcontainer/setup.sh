#!/bin/bash
cp env.example .env
composer install
npm install --legacy-peer-deps
php artisan migrate:fresh --seed --force
php artisan import:ubicaciones storage/files/Localidades.csv
php artisan import:consignatarios storage/files/Empresas.csv
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan sync:bovinos
php artisan sync:soja
php artisan sync:rural
php artisan sync:resultados
php artisan sync:camiones
php artisan sync:mercadoganadero
# Dummy data
php artisan db:seed --class=DummySeeder