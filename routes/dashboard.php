<?php

use Illuminate\Support\Facades\Route;



Route::get('/panel',\App\Livewire\Dashboard\Index::class)->name('dashboard');
//-------------------------------------------------------{ UploadImage } ---------------------------------------
Route::post('/upload-image-tinymce', [\App\Http\Controllers\UploadController::class, 'upload_image_tinymc']);
//-------------------------------------------------------{ Category } ---------------------------------------
Route::get('/category/list',\App\Livewire\Dashboard\Category\Index::class)->name('category.list');
Route::get('/category/create',\App\Livewire\Dashboard\Category\Create::class)->name('category.create');
Route::get('/category/update/{id}',\App\Livewire\Dashboard\Category\Update::class)->name('category.update');
Route::get('/category/trash',\App\Livewire\Dashboard\Category\Trash::class)->name('category.trash');
//-------------------------------------------------------{ Post } ---------------------------------------
Route::get('/post/list',\App\Livewire\Dashboard\Post\Index::class)->name('post.list');
Route::get('/post/create',\App\Livewire\Dashboard\Post\Create::class)->name('post.create');
Route::get('/post/update/{id}',\App\Livewire\Dashboard\Post\Update::class)->name('post.update');
Route::get('/post/gallery/{id}',\App\Livewire\Dashboard\Post\Gallery::class)->name('post.gallery');
Route::get('/post/trash',\App\Livewire\Dashboard\Post\Trash::class)->name('post.trash');
//-------------------------------------------------------{ Service } ---------------------------------------
Route::get('/service/list',\App\Livewire\Dashboard\Service\Index::class)->name('service.list');
Route::get('/service/create',\App\Livewire\Dashboard\Service\Create::class)->name('service.create');
Route::get('/service/update/{id}',\App\Livewire\Dashboard\Service\Update::class)->name('service.update');
Route::get('/service/trash',\App\Livewire\Dashboard\Service\Trash::class)->name('service.trash');
//-------------------------------------------------------{ article } ---------------------------------------
Route::get('/article/list',\App\Livewire\Dashboard\Article\Index::class)->name('article.list');
Route::get('/article/create',\App\Livewire\Dashboard\Article\Create::class)->name('article.create');
Route::get('/article/update/{id}',\App\Livewire\Dashboard\Article\Update::class)->name('article.update');
Route::get('/article/trash',\App\Livewire\Dashboard\Article\Trash::class)->name('article.trash');
//-------------------------------------------------------{ tag } ---------------------------------------
Route::get('/tag/list',\App\Livewire\Dashboard\Tag\Index::class)->name('tag.list');
Route::get('/tag/trash',\App\Livewire\Dashboard\Tag\Trash::class)->name('tag.trash');
//-------------------------------------------------------{ Prices } ---------------------------------------
Route::get('/price/list',\App\Livewire\Dashboard\Price\Index::class)->name('price.list');
Route::get('/price/create',\App\Livewire\Dashboard\Price\Create::class)->name('price.create');
Route::get('/price/update/{id}',\App\Livewire\Dashboard\Price\Update::class)->name('price.update');
Route::get('/price/trash',\App\Livewire\Dashboard\Price\Trash::class)->name('price.trash');
//-------------------------------------------------------{ Queztion } ---------------------------------------
Route::get('/queztions/list',\App\Livewire\Dashboard\Queztions\Index::class)->name('queztions.list');
Route::get('/queztions/update/{id}',\App\Livewire\Dashboard\Queztions\Update::class)->name('queztions.update');
Route::get('/queztions/create',\App\Livewire\Dashboard\Queztions\Create::class)->name('queztions.create');

