
## ინსტრუქცია
```
cd project 
cp .env.example .env 
php artisan key:generate
```
## დატაბაზასთან დაკავშირება
```
DB_CONNECTION=mysql 
DB_HOST=localhost 
DB_PORT=3306 
DB_DATABASE=your db name 
DB_USERNAME=your username 
DB_PASSWORD=your password 
```
## მიგრაციები
```
php artisan migrate 
php artisan db:seed 
```
## Mailtrap-თან დაკავშირება
```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your username
MAIL_PASSWORD=your password
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=1999.seeker@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```

## ტესტ იუზერი
```
test123@gmail.com 
test1234
```
