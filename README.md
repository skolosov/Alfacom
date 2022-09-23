# Разворачивание проекта

## OpenServer

Разархивировать папку c проектом в OSPanel/domains
открыть в терминале проект.
запустить 
```
composer install
npm i
```

Скопировать и сохранить файл env.example в .env
Настроить подключение к БД в .env
```
DB_CONNECTION=pgsql
DB_HOST=postgres
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=
```

Запустить запустить генерацию ключа и миграции
```
php artisan key:generate
php artisan migrate
```



## Docker

Клонировать репозиторий ларадок
```
git clone https://github.com/Laradock/laradock.git
cd laradock
cp .env.example .env
```

В файле .env найти и заменить 

```
POSTGRES_VERSION=alpine
POSTGRES_DB=default
POSTGRES_USER=default
POSTGRES_PASSWORD=secret
POSTGRES_PORT=5432
```
на

```
POSTGRES_VERSION=13-alpine
POSTGRES_DB=postgres
POSTGRES_USER=root
POSTGRES_PASSWORD=root
POSTGRES_PORT=5432
```

Запустить компнду 
```
docker-compose up -d nginx postgres redis workspace
```

Вернутся в корневую директорию и выполнить
```
cp .env.example .env

docker exec -it laradock_workspace_1 composer install
docker exec -it laradock_workspace_1 npm i
docker exec -it laradock_workspace_1 php artisan key:generate
docker exec -it laradock_workspace_1 php artisan migrate
```

Отановить проект
```
docker stop $(docker ps -a -q)
docker rm $(docker ps -a -q)
```

