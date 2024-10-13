Lesson 3

1. Laravel команди artisan що використовувалися на уроці
   
```
Список команд
php artisan list

Список параметрів(аргуменів) команди
php artisan help {command}

Створити контролер з методами для круду, Реквест форм та моделі
php artisan make:controller {NameController} --model={NameModel} --requests --resource

Створити міграцію
php artisan make:migration {migration_name}

Запустити міграції
php artisan migrate

Cтворити Seeder
php artisan make:seeder {seed_name}

Запустити(виконати) Seed
php artisan db:seed {seed_name}

Пабліш ларавел блейд пагінацій в проект, для кастомізації (якщо потрібно) 
php artisan vendor:publish --tag=laravel-pagination

```

2. Заповнення фейковими даними таблицю (Модель і міграції уже встановлені)
   Потрібні класи (див. PostSeeder/PostFactory)
```
 app/database/seeders/{ModelSeeder.php}
 app/database/factories/{ModelFactory.php}
```

3. Робота з блейд layouts. Ключові слова  @yield, @section, @extends
