# Using a dotEnv file to protect sensitive data
As long as you do not have a .env file you should/will get errors!

## Get Symfony's DotEnv Class
Get the dotenv files from symfony using composer
```bash
composer require symfony/dotenv
```
Run composer install so that everything is in order
```bash
composer install
```
## Update gitignore 
Do not forget to update your gitignore

Let's ignore the new vendor folder (these commands will add them)
```bash
echo "#ignore vendor folder" >> .gitignore;
echo "/vendor" >> .gitignore;
```
And to ignore composer.json and composer.lock
```bash
echo "#Ignore composer files" >> .gitignore;
echo "composer.lock" >> .gitignore;
```
And ofcourse to ignore your sensitive data
```bash
echo ".env" >> .gitignore;
```

## Naming Variables in .env
Here I list some naming for the .env file, the values will be personal. Tough since these variables will be stored in the $_ENV superglobal, these will have to be the same for everyone for our code to work on everyone's individual system.
- MYSQL_HOST=localhost
- MYSQL_DATABASE=nameOfDataBase
- MYSQL_USER=yourSQLUserName
- MYSQL_PASSWORD=yourSQLPassword

## Test it all out
On your local device add 
```php
echo $_ENV['MYSQL_HOST'];
```
to the index.php and see if the value specified in your.env file is visible on the site