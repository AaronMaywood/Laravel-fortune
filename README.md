# Laravel カバラ占い

## 本番公開時の.env(yasumuraの場合)

```
APP_NAME=Fortune
APP_ENV=production
APP_KEY=base64:LgGMtcPcEncIsUV+lKx8vhFEf5qXRftPRPe9pinK0A8=
APP_DEBUG=true
APP_URL=https://academy-php.sakura.ne.jp/fortune

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=mysql3102.db.sakura.ne.jp
DB_PORT=3306
DB_DATABASE=academy-php_fortune
DB_USERNAME=academy-php_fortune
DB_PASSWORD=パスワードをここへ
```

# 開発の流れ
composer create-project --prefer-dist laravel/laravel Laravel-fortune "10.*"
cd Laravel-fortune
php artisan make:controller kabbalaController

composer require askdkc/breezejp --dev
php artisan breezejp

php artisan make:migration create_fortunes_table 
php artisan migrate
php artisan make:model Fortune 
php artisan make:seeder FortuneSeeder
php artisan db:seed --class=FortuneSeeder

php artisan make:test BirthNumberTest --unit
php artisan test .\tests\Unit\BirthNumberTest.php