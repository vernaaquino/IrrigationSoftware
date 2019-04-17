# CSUN Irrigation Software

## About
An attempt to create a software Irrigation Scheduling System.

## Contributors
* Developer - [Maria Verna Aquino](https://github.com/mra88897)
* Developer - [Chris Nguyen](https://github.com/ilovecrt)
* Developer - [Dvin Badalzadeh](https://github.com/DBadalzadehCSUN)
* Developer - [Ghazal Jain](https://github.com/GhazalJain)
* Developer - [Kevin Lim](https://github.com/kikunojojou)

## Technologies Used
- Laravel

### Laravel Setup
1. Extract the archive and put it in the folder you want

2. Prepare your .env file there with database connection and other settings

3. Run "composer install" command

4. Run "php artisan migrate --seed" command. Notice: seed is important, because it will create the first admin user for you.

5. Run "php artisan key:generate" command.

And that's it, go to your domain and login:

Email: admin@admin.com
Password: password

P.S. If you want to use this admin panel for existing project, [here's an article with instructions](https://quickadminpanel.com/blog/using-quickadmin-for-existing-laravel-project/)

Notice: if you use CKEditor fields, there are a few more commands to launch for Laravel Filemanager package:
php artisan vendor:publish --tag=lfm_config
php artisan vendor:publish --tag=lfm_public
