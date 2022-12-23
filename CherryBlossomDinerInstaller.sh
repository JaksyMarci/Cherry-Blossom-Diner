# Install Composer packages
composer install --no-interaction --quiet

# Create .env file
{
    echo 'APP_NAME="Cherry-Blossom-Diner"'
    echo 'APP_ENV=local'
    echo 'APP_KEY='
    echo 'APP_DEBUG=true'
    echo 'APP_URL=http://localhost'
    echo ''
    echo 'DB_CONNECTION=sqlite'
} > .env

# Generate key
php artisan key:generate

# Install NodeJS packages
npm install --silent

# Build the NodeJs packages
npm run dev -- build

# Create empty DB file
touch database/database.sqlite

## Seed the DB
php artisan migrate:fresh --seed

# Run the application
php artisan serve
