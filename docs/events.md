# Events

### BeforeInitialization

> Alish\FileManager\Events\BeforeInitialization

Example:

```php
\Event::listen('Alish\FileManager\Events\BeforeInitialization',
    function ($event) {
        
    }
);
```

### DiskSelected

> Alish\FileManager\Events\DiskSelected

Example:

```php
\Event::listen('Alish\FileManager\Events\DiskSelected',
    function ($event) {
        \Log::info('DiskSelected:', [$event->disk()]);
    }
);
```

### FilesUploading

> Alish\FileManager\Events\FilesUploading

```php
\Event::listen('Alish\FileManager\Events\FilesUploading',
    function ($event) {
        \Log::info('FilesUploading:', [
            $event->disk(),
            $event->path(),
            $event->files(),
            $event->overwrite(),
        ]);
    }
);
```

### FilesUploaded

> Alish\FileManager\Events\FilesUploaded

```php
\Event::listen('Alish\FileManager\Events\FilesUploaded',
    function ($event) {
        \Log::info('FilesUploaded:', [
            $event->disk(),
            $event->path(),
            $event->files(),
            $event->overwrite(),
        ]);
    }
);
```

### Deleting

> Alish\FileManager\Events\Deleting

```php
\Event::listen('Alish\FileManager\Events\Deleting',
    function ($event) {
        \Log::info('Deleting:', [
            $event->disk(),
            $event->items(),
        ]);
    }
);
```

### Deleted

> Alish\FileManager\Events\Deleted

```php
\Event::listen('Alish\FileManager\Events\Deleted',
    function ($event) {
        \Log::info('Deleted:', [
            $event->disk(),
            $event->items(),
        ]);
    }
);
```

### Paste

> Alish\FileManager\Events\Paste

```php
\Event::listen('Alish\FileManager\Events\Paste',
    function ($event) {
        \Log::info('Paste:', [
            $event->disk(),
            $event->path(),
            $event->clipboard(),
        ]);
    }
);
```

### Rename

> Alish\FileManager\Events\Rename

```php
\Event::listen('Alish\FileManager\Events\Rename',
    function ($event) {
        \Log::info('Rename:', [
            $event->disk(),
            $event->newName(),
            $event->oldName(),
            $event->type(), // 'file' or 'dir'
        ]);
    }
);
```

### Download

> Alish\FileManager\Events\Download

```php
\Event::listen('Alish\FileManager\Events\Download',
    function ($event) {
        \Log::info('Download:', [
            $event->disk(),
            $event->path(),
        ]);
    }
);
```

*When using a text editor, the file you are editing is also downloaded! And this event is triggered!*

### DirectoryCreating

> Alish\FileManager\Events\DirectoryCreating

```php
\Event::listen('Alish\FileManager\Events\DirectoryCreating',
    function ($event) {
        \Log::info('DirectoryCreating:', [
            $event->disk(),
            $event->path(),
            $event->name(),
        ]);
    }
);
```

### DirectoryCreated

> Alish\FileManager\Events\DirectoryCreated

```php
\Event::listen('Alish\FileManager\Events\DirectoryCreated',
    function ($event) {
        \Log::info('DirectoryCreated:', [
            $event->disk(),
            $event->path(),
            $event->name(),
        ]);
    }
);
```

### FileCreating

> Alish\FileManager\Events\FileCreating

```php
\Event::listen('Alish\FileManager\Events\FileCreating',
    function ($event) {
        \Log::info('FileCreating:', [
            $event->disk(),
            $event->path(),
            $event->name(),
        ]);
    }
);
```

### FileCreated

> Alish\FileManager\Events\FileCreated

```php
\Event::listen('Alish\FileManager\Events\FileCreated',
    function ($event) {
        \Log::info('FileCreated:', [
            $event->disk(),
            $event->path(),
            $event->name(),
        ]);
    }
);
```

### FileUpdate

> Alish\FileManager\Events\FileUpdate

```php
\Event::listen('Alish\FileManager\Events\FileUpdate',
    function ($event) {
        \Log::info('FileUpdate:', [
            $event->disk(),
            $event->path(),
        ]);
    }
);
```

### Zip

> Alish\FileManager\Events\Zip

```php
\Event::listen('Alish\FileManager\Events\Zip',
    function ($event) {
        \Log::info('Zip:', [
            $event->disk(),
            $event->path(),
            $event->name(),
            $event->elements(),
        ]);
    }
);
```

### ZipCreated

> Alish\FileManager\Events\ZipCreated

```php
\Event::listen('Alish\FileManager\Events\ZipCreated',
    function ($event) {
        \Log::info('ZipCreated:', [
            $event->disk(),
            $event->path(),
            $event->name(),
            $event->elements(),
        ]);
    }
);
```

### ZipFailed

> Alish\FileManager\Events\ZipCreated

```php
\Event::listen('Alish\FileManager\Events\ZipFailed',
    function ($event) {
        \Log::info('ZipFailed:', [
            $event->disk(),
            $event->path(),
            $event->name(),
            $event->elements(),
        ]);
    }
);
```

### Unzip

> Alish\FileManager\Events\Unzip

```php
\Event::listen('Alish\FileManager\Events\Unzip',
    function ($event) {
        \Log::info('Unzip:', [
            $event->disk(),
            $event->path(),
            $event->folder(),
        ]);
    }
);
```

### UnzipCreated

> Alish\FileManager\Events\UnzipCreated

```php
\Event::listen('Alish\FileManager\Events\UnzipCreated',
    function ($event) {
        \Log::info('UnzipCreated:', [
            $event->disk(),
            $event->path(),
            $event->folder(),
        ]);
    }
);
```

### UnzipFailed

> Alish\FileManager\Events\UnzipFailed

```php
\Event::listen('Alish\FileManager\Events\UnzipFailed',
    function ($event) {
        \Log::info('UnzipFailed:', [
            $event->disk(),
            $event->path(),
            $event->folder(),
        ]);
    }
);
```
