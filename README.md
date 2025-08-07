# Laravel Blade Template Mastering Project

This project demonstrates the conversion of static HTML pages into dynamic, maintainable Laravel Blade templates. It showcases the effective use of Blade layouts, components (partials), directives, and asset management within a Laravel application.

## Objective

The primary goal of this assignment was to transform a set of static HTML pages into a fully functional Laravel application using Blade templating engine features, focusing on maintainability and best practices.

## Project Structure & Key Features

The project is structured as a standard Laravel application, with the converted Blade templates residing in the `resources/views` directory and static assets in the `public` directory.

### 1. Base Layout (`resources/views/layouts/app.blade.php`)

A central `app.blade.php` file serves as the base layout for all pages. It defines the common HTML structure, including the `<head>`, header, navigation, and footer. It utilizes:

-   `@yield('title', 'IBlog | Modern Blog')`: To allow individual pages to define their specific title, with a fallback default.
-   `@include('partials.header')`: To pull in the reusable header partial.
-   `@yield('content')`: A placeholder for page-specific content.
-   `@include('partials.footer')`: To pull in the reusable footer partial.

### 2. Components/Partials (`resources/views/partials/header.blade.php`, `resources/views/partials/footer.blade.php`)

The header and footer sections, which are common across multiple pages, have been extracted into separate Blade partials. This promotes reusability and keeps the main layout clean.

-   `@include` directive is used in `app.blade.php` to embed these partials.

### 3. Page Conversion (`resources/views/*.blade.php`, `resources/views/auth/*.blade.php`)

Each static HTML page has been converted into its own Blade view file. These views:

-   `@extends('layouts.app')`: Inherit the structure defined in the base `app.blade.php` layout.
-   `@section('content')`: Define the unique content for each page, which is then injected into the `@yield('content')` slot in the base layout.
-   The `login.blade.php` and `register.blade.php` forms now include the `@csrf` directive for CSRF protection, a standard Laravel security feature.

### 4. Styling & Assets

Custom CSS and JavaScript files were moved from the original static template directory to Laravel's `public` directory to be served efficiently.

-   `public/css/style.css`
-   `public/js/script.js`

These assets are linked in `resources/views/layouts/app.blade.php` using the `asset()` helper function:

-   `asset('css/style.css')`
-   `asset('js/script.js')`

This helper automatically generates the correct URL to the asset, making the application more robust to changes in the base URL.

Tailwind CSS and FontAwesome are included via CDN links in the base layout, as per the original static pages.

### 5. Routing (`routes/web.php`)

Basic routes have been defined in `routes/web.php` to serve each of the converted Blade templates. Placeholder POST routes for login and registration have also been added to demonstrate form submission handling.

## How to Run the Project

1.  **Clone the repository:**
    ```bash
    git clone https://github.com/md-anisujjaman-bd/Blade-Template-Mastering.git
    cd blog-template
    ```
2.  **Install Composer dependencies:**
    ```bash
    composer install
    ```
3.  **Copy the environment file:**
    ```bash
    cp .env.example .env
    ```
4.  **Generate application key:**
    ```bash
    php artisan key:generate
    ```
5.  **Start the Laravel development server:**
    ```bash
    php artisan serve
    ```
6.  **Access in browser:** Open your web browser and navigate to `http://127.0.0.1:8000` (or the address shown in your terminal).

## Available Routes

-   **Home:** `/`
-   **Login:** `/login`
-   **Register:** `/register`
-   **Categories:** `/categories`
-   **Profile:** `/profile`
-   **Single Blog Post:** `/single-blog`

This project successfully demonstrates the core concepts of Laravel Blade templating for building dynamic web applications from static content.