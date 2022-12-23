:: Install Composer packages
call composer install --no-interaction --quiet

:: Create .env file
@echo off
(
  echo APP_NAME="Cherry-Blossom-Diner"
  echo APP_ENV=local
  echo APP_KEY=
  echo APP_DEBUG=true
  echo APP_URL=http://localhost
  echo.
  echo DB_CONNECTION=sqlite
) > .env
@echo on

:: Generate key
call php artisan key:generate

:: Install NodeJS packages
call npm install --silent

:: Build the NodeJs packages
call npm run dev -- build

:: Create empty DB file
type nul > database/database.sqlite

:: Seed the DB
call php artisan migrate:fresh --seed

:: Run the application
call php artisan serve
