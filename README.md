<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# Laravel Hospital Management

Laravel Hospital Management is a web-based application developed using Laravel, PHP, and MySQL for the backend, and HTML, CSS, and JavaScript for the frontend. The project aims to provide a convenient way for users to make appointments while incorporating email verification and registration processes to enhance security. The system also includes an administrative interface for managing doctors and appointments. Furthermore, it ensures effective communication by sending email updates to users regarding their appointments, thereby improving the overall patient experience and engagement.

## Features

- User registration and email verification: Users can register an account and verify their email address for enhanced security.
- Appointment scheduling: Users can conveniently schedule appointments with doctors.
- Administrative interface: Admins can manage doctors by adding or deleting them from the system.
- Appointment management: Admins can view and manage appointments, ensuring efficient organization.
- Email communication: Users receive email updates regarding their appointments, improving communication and engagement.

## Environment Setup

1. Setup Git if you haven't already: https://git-scm.com/download/win

2. Setup Xampp from this: 
    https://blog.templatetoaster.com/install-xampp-on-windows/

    After installing, on step 4, run only 'MySQL' from xampp control panel. You don't need to run 'apache'.

3. Setup Composer: 
    - Download and run this : https://getcomposer.org/Composer-Setup.exe
    - open your git/cmd terminal and check if composer is installed completely:
    ```
    composer -v   
    ```
    It will show the version installed, otherwise it has not been installed properly.

## Project Setup
1. Open your git CLI and clone the repository to your xampp directory (usually C://xampp/htdocs/):
  ```bash
   git clone https://github.com/MasshuraMadhurja/laravel-Hospital_Management.git
   ```

2. Go to http://localhost/phpmyadmin on browser and create a new database 'hospital' following this: 
https://media.geeksforgeeks.org/wp-content/uploads/20210316195142/php3.jpg

3. open the project directory (C://xampp/htdocs/laravel-Hospital_Management) on git CLI and execute the following commands serially : 

```
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan storage:link
```

4. Now run the project : 

```
php artisan serve
```


```
Super Admin Credentials:

email: admin@gmail.com
password: 12345678

```
5. Open your web browser and visit `http://localhost:8000` to access Laravel Hospital Management.

**Temporarily disable any antivirus or firewall software on your computer. In some cases, these security measures can interfere with SSL/TLS connections.

>>>>>>> origin/main
