# OpenLaravelWeek - [Beer And Code](https://github.com/beerandcodeteam)

## Framework:

- [**Laravel 9.35**](https://laravel.com/)
- [**VueJS**](https://vuejs.org/)

## Pacote:

- [**InertiaJS**](https://inertiajs.com/)

## API

- [**Punk API**](https://punkapi.com/)


## Requerimenos minimos

- [**PHP 8**](https://www.php.net/)
- [**REDIS**](https://redis.io/docs/getting-started/)
- [**MinIO**](https://min.io/)
- [**MailHog**](https://github.com/mailhog/MailHog)
- [**Composer**](https://getcomposer.org/)
- [**NodeJS**](https://nodejs.org/en/)
- [**Git**](https://git-scm.com/)


<hr>

### Projeto

Consumindo uma API de bebidas e exportando em excel uma lista de bebidas filtrada pelos tipos buscados.

<hr>

### Como rodar a aplicação:

Cópie o repositório:

```
git clone git@github.com:Elivandro/devmedia_appCliente.git
```

Para instalar as dependências:

```
composer install
npm install
```

renomeie arquivo de variaveis env

```
cp .env.example .env
```

Gere uma chave para aplicação

```
php artisan key:generate
```

### configure no arquivo .env

```
APP_NAME
```

configure as variaveis no .env

```
DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

QUEUE_CONNECTION=redis

MAIL_MAILER=
MAIL_HOST=
MAIL_PORT=1025
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
php artisan migrate
```

coloque alguns dados no banco

```
php artisan db:seed
```

configurando o vite (o primeiro precisa permanecer em execução, o segundo compila tudo.)

```
npm run dev
npm run build
```

por fim rode o servidor

```
php artisan queue:work
php artisan serve
```