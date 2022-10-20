# Cherry Blossom Diner
A project for the Tools of Software Projects subject, ELTE IK 2022-2023/1

steps to create the developer environment
- install nodeJS (it installs npm by deafault)
- install Composer (it installs php by default)
- sync the repository to your local machine
   * create a copy of the `.env.example` file, rename it to `.env`
- modify your php.ini configuration file: 
   * enable `fileinfo`
   * enable `pdo_sqlite`
- run the following commands:
   * `php artisan key:generate`
   * `php artisan migrate`
   * `php artisan db:seed`
  
  
- running `php artisan serve` will create a server on localhost:8000, on which you can test the app
  
