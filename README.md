Lesson 2

1. Використовуємо методи dump() , dd() для дебагу коду
   dump(value) - виведе значення і скрипт продовжить виконнання. 
   dd(value)   - виведе заначченя і скрип завершеться 
2. Ключові слова namespace, use, Підключення класу
 При створенні нового класу (файлу). обовязково прописуємо namespace,
 прийнято вказувати namespace як шлях до файлу починаючи з app
```php
   <?php
    namespace App\Http\Controllers;

    class HomeController extends Controller
    {
    }
```
Це дасть нам змогу називати класи(файли) з однаковою назвою, але namespace буде різний 
Щоб викорисати клас де-інде декларуємо за допомогою use ПОВНА НАЗВА классу
```php
# routes/web.php

<?php

// підключаємо класс Route який знаходиться в namespace Illuminate\Support\Facades
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])
    ->name('tasks.index');

```
Тобто слідуюччий приклад еквівалентний попередньому
```php
# routes/web.php

<?php

Illuminate\Support\Facades\Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
    ->name('tasks.index');

```

2. CRUD: Create Read Update Delete actions
   Щоб побудувати простий CRUD, потрібні
 ```
сторінки (темплейти. блейди)
       index - вивід всіх записів
       show -  вивід одно запису
       create - форма створення одного запису     (форма action на роут /store )
       edit   - форма редагування одного запису з данними запису (форма action на роут /update )
роути
   method GET на сторінки
       /index 
       /show/{id}
       /edit/{id}
       /create
   method POST
       /store
   method UPDATE
       /update
   method DELETE
       /destroy 
```
PS: щоб виконати методи POST UPDATE DELETE з html - використовуємо ФОРМУ з відповідним методом,
    Також не забуваємо про міграції
