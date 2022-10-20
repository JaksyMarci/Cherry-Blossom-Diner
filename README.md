# Cherry Blossom Diner
## A project for the Tools of Software Projects subject, ELTE IK 2022-2023/1

### Steps to create the developer environment:

- Install nodeJS (it installs npm by deafault)
- Install Composer (it installs php by default)
- Sync the repository to your local machine
   * create a copy of the `.env.example` file, rename it to `.env`
- Modify your `php.ini` configuration file: 
   * enable `fileinfo`
   * enable `pdo_sqlite`
- Run the following commands:
   * `php artisan key:generate`
   * `php artisan migrate`
   * `php artisan db:seed`
  
  
- Running `php artisan serve` will create a server on localhost:8000, on which you can test the app
  
