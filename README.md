<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Recruitment App Energeek
1. [ERD](https://drive.google.com/file/d/1fxFuSreefDMSm3oSej3k2BTRb8gJweHi/view?usp=sharing)
2. [Design](https://www.figma.com/proto/EHQPncCJLkvzosyASsuOqc/Energeek---Test-Fullstack-v2?page-id=0%3A1&node-id=1%3A2&viewport=-183%2C141%2C0.07&scaling=scale-down&starting-point-node-id=1%3A2)

## Requirement

1. Desain database menggunakan Link ERD yang terlampir
2. Dokumentasi API menggunakan Postman / Swagger
3. Database menggunakan MySQL / PostgreSQL
4. Wajib menggunakan laravel migration
5. Diperlukan seeder untuk data skill set dan list jabatan

## How to Run
1. Copy `.env.example` to `.env`
2. Run on terminal `php artisan migrate:fresh --seed`
3. Run on terminal `php artisan serve`
4. Import `recruitment-app.postman_collection.json` to postman
5. Run all collection

## Routes
#### Get Skill for Dropdown
Endpoint : `/api/skill?exclude=`<br>
Method : GET<br>
Example Response :
```json
{
    "status": true,
    "data": [
        {
            "id": 1,
            "name": "React.js",
            "created_at": "2022-09-07T09:44:35.000000Z",
            "updated_at": "2022-09-07T09:44:35.000000Z"
        },
        {
            "id": 2,
            "name": "Vue.js",
            "created_at": "2022-09-07T09:44:35.000000Z",
            "updated_at": "2022-09-07T09:44:35.000000Z"
        },
    ],
    "message": "success get all skill"
}
```
#### Get Job Role for Dropdown
Endpoint : `/api/job`<br>
Method : GET<br>
Example Response :
```json
{
    "status": true,
    "data": [
        {
            "id": 1,
            "name": "Backend Engineer",
            "created_at": "2022-09-07T09:44:35.000000Z",
            "updated_at": "2022-09-07T09:44:35.000000Z"
        },
        {
            "id": 2,
            "name": "Frontend Engineer",
            "created_at": "2022-09-07T09:44:35.000000Z",
            "updated_at": "2022-09-07T09:44:35.000000Z"
        },
        {
            "id": 3,
            "name": "Fullstack Engineer",
            "created_at": "2022-09-07T09:44:35.000000Z",
            "updated_at": "2022-09-07T09:44:35.000000Z"
        }
    ],
    "message": "success get all job"
}
```
#### Save Candidate
Endpoint : `/api/candidate`<br>
Method : POST<br>
Example Response :
```json
{
    "success": true,
    "data": {
        "id": 11,
        "job_id": 1,
        "name": "Muhammad Syarifudin",
        "email": "suicideudin@gmail.com",
        "phone": "08123283812",
        "year": 1999,
        "created_at": "2022-09-07T10:56:55.000000Z",
        "updated_at": "2022-09-07T10:56:55.000000Z",
    },
    "message": "candidate saved"
}
```

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
