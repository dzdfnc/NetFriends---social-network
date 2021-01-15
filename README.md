
## ინსტრუქცია
```
cd project <br>
cp .env.example .env <br>
php artisan key:generate
```
## დატაბაზასთან დაკავშირება
```
DB_CONNECTION=mysql <br>
DB_HOST=localhost <br>
DB_PORT=3306 <br>
DB_DATABASE=your db name <br>
DB_USERNAME=your username <br>
DB_PASSWORD=your password <br>
```
## მიგრაციები
```
php artisan migrate <br>
php artisan db:seed <br>
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
test123@gmail.com <br>
test1234
```
