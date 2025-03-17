# 🚆 Laravel Lab 9 - Introduction to Eloquent ORM

## **📌 Overview**
This lab introduces **Eloquent ORM** in Laravel, replacing hardcoded data with database-driven queries. Key objectives:
- Creating and migrating an **Eloquent model** (`Product`).
- Using **database seeders** to populate data.
- Updating **controllers to fetch data dynamically**.
- Displaying **database-driven content in Blade views**.

---

## **📌 Project Setup**
### **1️⃣ Install Dependencies**
Ensure Laravel is installed and configured:
```sh
composer install
```
Run Laravel's development server:
```sh
php artisan serve
```
Visit:
```
http://127.0.0.1:8000/
```

---

## **📌 Database Setup**
### **1️⃣ Configure `.env`**
Set up database credentials in **`.env`**:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_lab
DB_USERNAME=****
DB_PASSWORD=****
```
Create the database in MySQL:
```sql
CREATE DATABASE laravel_lab;
```

### **2️⃣ Run Migrations**
Create the **products** table:
```sh
php artisan migrate
```

---

## **📌 Eloquent Model**
### **1️⃣ Create the `Product` Model**
Generate a new model:
```sh
php artisan make:model Product -m
```
Modify the migration file:
```php
public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->decimal('price', 8, 2);
        $table->timestamps();
    });
}
```
Run the migration:
```sh
php artisan migrate
```

---

## **📌 Seeding Data**
### **1️⃣ Create a Database Seeder**
Generate the seeder:
```sh
php artisan make:seeder ProductSeeder
```
Modify:
📂 **Path: `database/seeders/ProductSeeder.php`**
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // ✅ Import the model

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create(['name' => 'Laptop', 'price' => 1200.00]);
        Product::create(['name' => 'Phone', 'price' => 800.00]);
        Product::create(['name' => 'Tablet', 'price' => 500.00]);
    }
}
```
Run the seeder:
```sh
php artisan db:seed --class=ProductSeeder
```

---

## **📌 Update Controller**
Modify:
📂 **Path: `app/Http/Controllers/PageController.php`**
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function home()
    {
        $products = Product::all(); // Fetch products from database
        return view('home', compact('products'));
    }

    public function about()
    {
        return view('about');
    }
}
```

---

## **📌 Blade Template**
Modify:
📂 **Path: `resources/views/home.blade.php`**
```blade
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Welcome to Laravel Blade & Eloquent ORM Lab</h1>

    @if($products->isEmpty())
        <p>No products available.</p>
    @else
        <ul>
            @foreach($products as $product)
                <li>{{ $product->name }} - ${{ $product->price }}</li>
            @endforeach
        </ul>
    @endif
@endsection
```

---

## **📌 Run the Project**
1️⃣ Start the Laravel server:
```sh
php artisan serve
```
2️⃣ Visit in the browser:
```
http://127.0.0.1:8000/
```
✅ **Now, products are fetched dynamically from the database!** 🎉

---

## **📌 Submission Guidelines**
### **1️⃣ Required Files**
- `routes/web.php`
- `app/Http/Controllers/PageController.php`
- `app/Models/Product.php`
- `database/migrations/create_products_table.php`
- `resources/views/home.blade.php`
- `README.md`
- Screenshots of the application

### **2️⃣ Upload to GitHub**
```sh
git add .
git commit -m "Updated project to use Eloquent ORM"
git push origin main
```
Submit the **GitHub repository link**.

---

## **📌 Summary**
✔ **Set up a MySQL database**  
✔ **Created an Eloquent model (`Product`)**  
✔ **Migrated and seeded data**  
✔ **Updated the controller to use Eloquent**  
✔ **Modified Blade templates to display database-driven content**  
✔ **Project is uploaded and ready for submission!** 🚀  

## **SCREENSHOTS**
![image](https://github.com/user-attachments/assets/53434ebd-eeba-4da7-801c-03d7c5bd0623)

![image](https://github.com/user-attachments/assets/53932e4a-42ca-4fd3-b22b-7fda05180bc8)


