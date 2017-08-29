

# Bar Application

## By Stephen Hartman 

This is a project deliverable 0 for Senior Project CIS4327.

## Installation

### Mac OSX

1. Clone [VolunteerSystem repository](https://github.com/stephenhartman/VolunteerSystem) into project folder of choice

`git clone https://github.com/stephenhartman/VolunteerSystem`

2. Install [PHP](http://php.net/)

- Install [Homebrew](https://github.com/Homebrew/brew)
`brew tap homebrew/homebrew-php`

3. Install [Composer](https://getcomposer.org/download/) Dependency Manager

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

4. Download [Laravel](https://laravel.com/) using Composer

`composer global require "laravel/installer"`

- Add $HOME/.composer/vendor/bin to $PATH in terminal rc file (e.g. ~/.bashrc)

5. Install npm in project folder

```
brew install npm
brew install node
```

6. Install [Laravel Mix](https://laravel.com/docs/5.4/mix) in project folder

`npm install`

`npm run watch` will monitor all relevant files for changes to compile

7. Setup Mysql database
- Download [mysql](https://www.mysql.com/downloads/) or use command line `brew install mysql`
- Start daemon `mysqld` or use GUI tool to start the server on localhost
- Create the database `mysql> create database vol_db;`
- Make sure you create the user, example `mysql> CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'password';`
- Grant permissions for that user `mysql> GRANT ALL PRIVILEGES ON vol_db . * TO 'newuser'@'localhost';`  
    - The first variable after `ON` is the database and the second variable after `.` is the table, * for all tables.
- Reset permissions `mysql> FLUSH PRIVILEGES;`
8. Migrate and seed database from shell
```
php artisan migrate
php artisan db:seed
```
