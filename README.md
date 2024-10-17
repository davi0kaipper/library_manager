# Guide to Use the Application

## Installation

To download the project locally, enter the following on your command line:
`git clone https://github.com/davi0kaipper/library_manager.git`

This will clone the project to your folder of preference.

## Database Configuration

Create a database with the name: **library_management** or any other of your preference, just remember that the database name should be configured in the .env file on the *DB_DATABASE* variable, together with your username and password on *DB_USERNAME* and *DB_PASSWORD* variables, respectively. Then run `php artisan migrate` on your command line to create the database.

## Configuring Front-End Assets

Run `npm install` and then `npm run build` on your command line.

## Create an User

Run `php artisan make:filament-user` on your command line to create an user passing your *name*, *email* and *password* to the UI.

## Starting the Server

On another tab of your command line, enter: `php artisan serve`

## Effectively Using the App

Access localhost:8000/ on you browser to use the application by logging in and creating the records, first Categories and Authors, then Books.

Enjoy :>
