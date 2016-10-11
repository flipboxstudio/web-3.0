# Web 3.0 Proposal

## Standar Baru

- Sebuah WebApp **SEHARUSNYA** memiliki sumber data yang terbuka
- Autentikasi _user_ **SEHARUSNYA** bersifat terbuka
- Data yang dihasilkan **SEHARUSNYA** mudah dicari
- Aplikasi dapat menawarkan fitur realtime

## Limitasi

- _Coupling_ antara HTTP _asset_ dengan data aplikasi **sangat ketat**
- Servis Aplikasi bersifat tertutup, sehingga implementasi antara satu _platform_ dengan _platform_ lainnya bisa jadi berbeda
- _Back-end developer_ mengerjakan porsi yang **lebih banyak** (relatif ketimbang _front-end developer_) karena data yang dikirimkan berupa _server-rendered-view_
- Berkaitan dengan poin di atas, pengerjaan _project_ jadi relatif lebih lambat, karena _front-end developer_ harus menunggu "kebutuhannya" siap


## Solusi

- Pisahkan arsitektur _back-end_ dengan _front-end_
- _Back-end developer_ mendesain API yang nantinya akan di-_consume_ oleh _front-end developer_
- Berkaitan dengan poin di atas, _back-end developer_ dapat melakukan _mocking_ supaya proses _development_ dapat dilanjutkan oleh _front-end developer_

## Recipe

- Lumen 5.3
  - Flipbox Fractal
  - Flipbox Console Support
    - Code Generator
    - Optimizer
    - Tinker
    - Key Generator
    - PHP Built-in-Server
  - Laravel Passport
  - Laravel Broadcaster
- Vue 2.0
  - Vuex
  - Vue Router
  - Webpack
  - SASS
  - Live Reload

## Usage

### _Back-end developer_

Berikut ini adalah metode untuk _bootstrapping_ aplikasi berbasis Web 3.0

```sh
cd backend
composer install
# configure your .env
php artisan key:generate
php artisan migrate
php artisan passport:install
```

Skeleton ini juga mendukung fasilitas untuk _developer_ menjalankan _development_ server melalui PHP _built in server_.

```sh
php artisan serve
```

Berikut ini adalah metode untuk _production delivery_ aplikasi berbasis Web 3.0

```sh
composer dump-autoload --no-dev --optimize
```

### _Back-end developer_

Berikut ini adalah metode untuk _bootstrapping_ aplikasi berbasis Web 3.0

```sh
cd frontend
npm install
npm run dev
```

> **NOTES** Dengan menjalankan _command_ `npm run dev`, maka secara otomatis _script_ akan membuat satu _endpoint_ untuk tujuan _development_ di: http://localhost:8080/

Berikut ini adalah metode untuk _production delivery_ aplikasi berbasis Web 3.0

```sh
npm run build
```

> **NOTES** Aplikasi akan di-_generate_ ke dalam folder `dist`

## ToDo

- [ ] Documentation
- [ ] Passport test
- [ ] Code Generator test
- [ ] Basis CSS Framework untuk front-end developer
- [ ] Any suggestion?
