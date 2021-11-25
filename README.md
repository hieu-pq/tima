<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

----------------------------------------

<h3> Features </h3>

Admin
- Manager budget for each year (can be fixed, adding the budget in batches to the total budget of the year.).
- Manager user account (customer, employee, sub-admin)
- Manager loans
- View loan contract list and status

Employee
- Contract processing and approval/rejection of loan contracts
- Check the budget
- Check loan status and customer information
- Manage recurring payments (monthly)
- Liquidation

Customer
- Sign in, sign up
- Create request loan contract
- Manager self information
- Verify information (upload ID card or something same to employee verify)
- Check loan status
- Check history loan contract

--------------------------------------

<h3>Require</h3>
- PHP 7
- Apache
- Homestead (windows) or valet (mac)
- Composer

<h3>Setup project</h3>
- Coppy file .env.example & paste + rename = .env 
- Edit configuration in .env file, with DB name, DB username, DB password + connect port 

<h3>Run project</h3>

- $ composer update 
- $ php artisan migrate --seed
- $ php artisan key:generate
- $ php artisan storage:link
- $ php artisan serve 

<h3>Admin/employee URL</h3>

- localhost:port/employee/dashboard

- Accout: admin@gmail.com / (password_not_provied , please manual insert in migrate sample data)
