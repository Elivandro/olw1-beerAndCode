# OpenLaravelWeek - [Beer And Code](https://github.com/beerandcodeteam)

## Framework:

- [**Laravel 9.52**](https://laravel.com/)
- [**VueJS**](https://vuejs.org/)

## Pacote:

- [**InertiaJS**](https://inertiajs.com/)

## API

- [**Punk API**](https://punkapi.com/)


## Requerimenos minimos

- [**Docker**](https://docs.docker.com/engine/install/)
- [**Git**](https://git-scm.com/)


<hr>

### Projeto

Consumindo uma API de bebidas e exportando em excel uma lista de bebidas filtrada pelos tipos buscados.

<hr>

### Como rodar a aplicação:

Cópie o repositório:

```
git clone git@github.com:Elivandro/olw1-beerAndCode.git
cd olw1-beerAndcode
```

renomeie arquivo de variaveis env

```
cp .env.example .env
```

Para instalar as dependências do composer:

```
docker run --rm -it\
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

Inicie o sail
```
./vendor/bin/sail up -d
```

Para instalar as dependências do npm:
```
./vendor/bin/sail npm install
```

Gere uma chave para aplicação

```
./vendor/bin/sail artisan key:generate
```

configure no arquivo .env

```
APP_NAME

DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

QUEUE_CONNECTION=redis

REDIS_HOST=redis

MAIL_MAILER=
MAIL_HOST=
MAIL_PORT=
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=
MAIL_FROM_ADDRESS=

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=
AWS_BUCKET=
AWS_ENDPOINT=
AWS_URL=
AWS_USE_PATH_STYLE_ENDPOINT=
```
rode as migrações

```
./vendor/bin/sail artisan migrate
```

coloque alguns dados no banco

```
./vendor/bin/sail artisan db:seed
```

rodar o vite

```
./vendor/bin/sail npm run dev
```

por fim rode o servidor de filas

```
./vendor/bin/sail artisan queue:work
```


coloque um apelido ao sail
```
https://laravel.com/docs/10.x/sail#configuring-a-shell-alias
```