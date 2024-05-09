# Two-Factor Authentication demo project

## Getting Started

First starting by cloning the project. Then:

1. If you are using docker, then good, just run `docker compose up -d`
2. If you are NOT using docker, then please use Docker.
3. `composer install`
4. `bin/console d:m:m`
5. Create a user in the database. For the password, just run `bin/console security:hash-password mysuperpassword` ! Then copy and paste the password for the user in the database.
6. Go to https://localhost/ (with the https).
