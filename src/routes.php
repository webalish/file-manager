<?php

use Alish\FileManager\Services\ConfigService\ConfigRepository;

$config = resolve(ConfigRepository::class);

// App middleware list
$middleware = $config->getMiddleware();

/**
 * If ACL ON add "alishfm-acl" middleware to array
 */
if ($config->getAcl()) {
    $middleware[] = 'alishfm-acl';
}

Route::group([
    'middleware' => $middleware,
    'prefix'     => $config->getRoutePrefix(),
    'namespace'  => 'Alish\FileManager\Controllers',
], function () {

    Route::get('initialize', 'FileManagerController@initialize')
        ->name('alishfm.initialize');

    Route::get('content', 'FileManagerController@content')
        ->name('alishfm.content');

    Route::get('tree', 'FileManagerController@tree')
        ->name('alishfm.tree');

    Route::get('select-disk', 'FileManagerController@selectDisk')
        ->name('alishfm.select-disk');

    Route::post('upload', 'FileManagerController@upload')
        ->name('alishfm.upload');

    Route::post('delete', 'FileManagerController@delete')
        ->name('alishfm.delete');

    Route::post('paste', 'FileManagerController@paste')
        ->name('alishfm.paste');

    Route::post('rename', 'FileManagerController@rename')
        ->name('alishfm.rename');

    Route::get('download', 'FileManagerController@download')
        ->name('alishfm.download');

    Route::get('thumbnails', 'FileManagerController@thumbnails')
        ->name('alishfm.thumbnails');

    Route::get('preview', 'FileManagerController@preview')
        ->name('alishfm.preview');

    Route::get('url', 'FileManagerController@url')
        ->name('alishfm.url');

    Route::post('create-directory', 'FileManagerController@createDirectory')
        ->name('alishfm.create-directory');

    Route::post('create-file', 'FileManagerController@createFile')
        ->name('alishfm.create-file');

    Route::post('update-file', 'FileManagerController@updateFile')
        ->name('alishfm.update-file');

    Route::get('stream-file', 'FileManagerController@streamFile')
        ->name('alishfm.stream-file');

    Route::post('zip', 'FileManagerController@zip')
        ->name('alishfm.zip');

    Route::post('unzip', 'FileManagerController@unzip')
        ->name('alishfm.unzip');

    // Route::get('properties', 'FileManagerController@properties');

    // Integration with editors
    Route::get('ckeditor', 'FileManagerController@ckeditor')
        ->name('alishfm.ckeditor');

    Route::get('tinymce', 'FileManagerController@tinymce')
        ->name('alishfm.tinymce');

    Route::get('tinymce5', 'FileManagerController@tinymce5')
        ->name('alishfm.tinymce5');

    Route::get('summernote', 'FileManagerController@summernote')
        ->name('alishfm.summernote');

    Route::get('alishfm-button', 'FileManagerController@alishfmButton')
        ->name('alishfm.alishfm-button');
});
