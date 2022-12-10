#!/bin/sh
docker-compose exec laravel.test php "$@"
return $?