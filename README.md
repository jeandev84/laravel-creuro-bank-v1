### ТЗ (Credit Europa Bank)

1. Установка зависимостей проекта
```php 
$ composer install
```
2. Конфигурация ```.env``` файл 
3. Создание базы данных проекта.
4. Выполнение миграции
```php 
$ php artisan migrate
```
5. Генерация секретного ключа JWT 
```php
$ php artisan jwt:secret

JWT_TTL=1800
JWT_SECRET=YourSecretKeyHashed
```

6. Запуск сервера
```php 
$ php artisan serve
```
