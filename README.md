# Cherry Blossom Diner
A project for the Tools of Software Projects subject, ELTE IK 2022-2023/1

steps to create the developer environment
- install nodeJS (it installs npm by deafault)
- install composer (it installs php by default)
- sync the repository to your local machine
- run these commands:
if you sync it first from github:
    // create the key for the .env file
    - php artisan key:generate
    // npm build 
    - npm run dev -- build
    // create the database.sqlite file (you can create it manually too)
    - type nul > database/database.sqlite
if you want to create and seed or reseed the db:
    - php artisan migrate:fresh --seed
if you want to run the application
    - php artisan serve