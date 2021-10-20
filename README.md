# Alish File Manager

## Documentation

[Laravel File Manager Docs](./docs/index.md)
* [Installation](./docs/installation.md)
* [Configuration](./docs/configuration.md)
* [Integration](./docs/integration.md)
* [ACL](./docs/acl.md)
* [Events](./docs/events.md)
* [Update](./docs/update.md)

## Features


* Work with the file system is organized by the standard means Laravel Flysystem:
  * Local, FTP, S3, Dropbox ...
  * The ability to work only with the selected disks
* Several options for displaying the file manager:
  * One-panel view
  * One-panel + Directory tree
  * Two-panel
* The minimum required set of operations:
   * Creating files
   * Creating folders
   * Copying / Cutting Folders and Files
   * Renaming
   * Uploading files (multi-upload)
   * Downloading files
   * Two modes of displaying elements - table and grid
   * Preview for images
   * Viewing images
   * Full screen mode
* More operations (v.2):
   * Audio player (mp3, ogg, wav, aac), Video player (webm, mp4) - ([Plyr](https://github.com/sampotts/plyr))
   * Code editor - ([Code Mirror](https://github.com/codemirror/codemirror))
   * Image cropper - ([Cropper.js](https://github.com/fengyuanchen/cropperjs))
   * Zip / Unzip - only for local disks
* Integration with WYSIWYG Editors:
  * CKEditor 4
  * TinyMCE 4
  * TinyMCE 5
  * SummerNote
  * Standalone button
* ACL - access control list
  * delimiting access to files and folders
  * two work strategies:
    * blacklist - Allow everything that is not forbidden by the ACL rules list
    * whitelist - Deny everything, that not allowed by the ACL rules list
  * You can use different repositories for the rules - an array (configuration file), a database (there is an example implementation), or you can add your own.
  * You can hide files and folders that are not accessible.
* Events (v2.2)
* Thumbnails lazy load
* Dynamic configuration (v2.4)
* Supported locales : ru, en, ar, sr, cs, de, es, nl, zh-CN, fa, it, tr, fr, pt-BR, zh-TW, pl

## In a new version 2.5

You can change Route prefix (default - 'file-manager')

```php
/**
 * ALISHFM Route prefix
 * !!! WARNING - if you change it, you should compile frontend with new prefix(baseUrl) !!!
 */
'routePrefix' => 'file-manager',
```

Open PDF files in a new tab (test) - use 'double-click'

## Upgrading to version 2.5

Add a new parameter to the configuration file (config/file-manager.php)

```php
/**
 * ALISHFM Route prefix
 * !!! WARNING - if you change it, you should compile frontend with new prefix(baseUrl) !!!
 */
'routePrefix' => 'file-manager',

```

Update pre-compiled css and js files.


```php
php artisan vendor:publish --tag=alishfm-assets --force
```
