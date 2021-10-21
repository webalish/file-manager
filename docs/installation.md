# Installation
1. Install package - using composer

    ```bash
    composer require alish-io/file-manager-pro
    ```

2. If you use Laravel 5.4, then add service provider to config/app.php (for the Laravel 5.5 and higher skip this step):

    ```php
    Alish\FileManager\FileManagerServiceProvider::class,
    ```
3. Publish configuration file

    ```bash
    php artisan vendor:publish --tag=alishfm-config
    ```

4.Publish compiled and minimized js and css files
   
   ```
   php artisan vendor:publish --tag=alishfm-assets
   ```
   
   Open the view file where you want to place the application block, and add:
   
   * add a csrf token to head block if you did not do it before
       
     ```html
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
     ```
   
   * the frontend package uses **Bootstrap 4** and **Font Awesome 5** styles, if you already use it, then you do not need to connect any styles.
    Otherwise add -
    
     ```html
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.1/css/bootstrap.min.css">
     ```
   
   * add file manager styles
   
     ```html
     <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
     ```
   
   * add file manager js
   
     ```html
     <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
     ```
   
   * add div for application (set application height!)
   
     ```html
     <div style="height: 600px;">
         <div id="alishfm"></div>
     </div>
     ```
  

## What's next

[Configuration](./configuration.md)
