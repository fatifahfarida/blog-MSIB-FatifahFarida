@extends('index')
@section('title', 'Home')

@section('isihalaman')
<h3>Tugas Laravel - Buat Blog MSIB</h3>
<p>
<h4>Study case "Blog MSIB"</h4>

Modules and Features: <br>
1. Authors: <br>
CRUD Operations: Create, Read, Update, Delete. <br>
Relationship: One author can have multiple blog posts. <br>
2. Categories: <br>
CRUD Operations: Create, Read, Update, Delete. <br>
Relationship: One category can have multiple blog posts. <br>
3. Posts: <br>
CRUD Operations: Create, Read, Update, Delete. <br>
Relationships: <br>
Many-to-one relationship with authors (each post belongs to one author). <br>
Many-to-one relationship with categories (each post belongs to one category). <br>
<br>
Steps guide: <br>
1. Setup laravel project <br>
2. Create model & migration <br>
3. Database migration (php artisan migrate) <br>
4. CRUD implementasi <br>
5. Templating views <br>
6. Login & register <br>
7. Mengamankan route akses <br>
8. Authors, boleh used table users or create new table yaitu authors (CRUD) <br>
9. Additional halaman show di tiap view post & category <br>
Laravel breeze => scaffolding auth <br>

No scaffolding: <br>
1. AuthController <br>
2. View login & register <br>
3. layout app.blade.php => navigation untuk show login & register <br>
4. Route group middleware
<p>

    @endsection