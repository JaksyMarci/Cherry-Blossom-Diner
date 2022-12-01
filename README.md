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
   * `composer install`
   * `php artisan key:generate`
   * `php artisan migrate:fresh --seed`
   * `npm install`
   * `npm run build` or `npm run dev` (it runs a development server)
   
- Running `php artisan serve` will create a server on localhost:8000, on which you can test the app

- Documentation:
Our documentation is made with scribe. We run it on the CI after every commit. but with this command you can run it manually:
   * `php artisan scribe:generate`
  
  
