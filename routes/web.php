<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::resource('categorias', CategoriasController::class);
Route::resource('users', UsersController::class);

// Ao adicionar o '?' no {category} estou setando como opcional a definição desse paramêtro
Route::get('/store/{category?}/{item?}', function($category = null, $item = null) {

    // $category = strip_tags(request('category')); // strip_tags() serve para remover as tags html e impedir de rodar scripts de certa forma, o request('category') esta pegando a Query ?category da url e salvando o valor na variável $category
    
    if ($category != null) {
        
        if ($item != null){
            return "<h4>Viewing the store of $category for $item</h4>";
        } else{
            return "<h4>Viewing the store of $category</h4>";
        }

    } else{

        return '<h4>Viewing the store of all products</h4>';

    }
}); 