<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[App\Http\Controllers\FrontendController::class, 'index'])->name('index');
Route::get('/list',[App\Http\Controllers\FrontendController::class, 'list'])->name('list');
Route::get('/list2',[App\Http\Controllers\FrontendController::class, 'list2']);
Route::get('/single/{id}',[App\Http\Controllers\FrontendController::class, 'single'])->name('house.show');
Route::get('/about',[App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/service',[App\Http\Controllers\FrontendController::class, 'service'])->name('service');
Route::get('/contact',[App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
Route::get('/coming',[App\Http\Controllers\FrontendController::class, 'coming']);
Route::get('/state',[App\Http\Controllers\FrontendController::class, 'state']);
Route::get('/share', [App\Http\Controllers\SocialShareButtonsController::class,'ShareWidget']);

// Route::get('/', function () {
//     return view('welcome');
// });

//Agents Routes
Route::group(['middleware'=>['auth']],function(){
    Route::get('/agents', [App\Http\Controllers\AgentController::class, 'index'])->name('agents');

    Route::get('agents/profile', [App\Http\Controllers\AgentController::class, 'Profile']);
    Route::get('agents/profile/edit', [App\Http\Controllers\AgentController::class, 'ProfileEdit']);
    Route::put('agents/profile/update/id', [App\Http\Controllers\AgentController::class, 'ProfileUpdate'])->name('profileUpdate');

    Route::get('/agents/house', [App\Http\Controllers\AgentController::class, 'House']);
    Route::get('/agents/house/create', [App\Http\Controllers\AgentController::class, 'HouseCreate']);
    Route::post('/agents/house/add', [App\Http\Controllers\AgentController::class, 'HouseAdd']);
    Route::get('agents/house/edit/{id}', [App\Http\Controllers\AgentController::class, 'HouseEdit']);
    Route::put('agents/house/update/{id}', [App\Http\Controllers\AgentController::class, 'HouseUpdate']);
    Route::get('/agent/house/delete/{id}', [App\Http\Controllers\AgentController::class, 'HouseDelete']);
});



//Admin Routes
Route::group(['middleware'=>['auth', 'isAdmin']],function(){
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);

    Route::get('admin/profile', [App\Http\Controllers\AdminController::class, 'Profile']);
    Route::get('admin/profile/edit', [App\Http\Controllers\AdminController::class, 'ProfileEdit']);
    Route::put('admin/profile/update/id', [App\Http\Controllers\AdminController::class, 'ProfileUpdate'])->name('updateprofile');

    Route::get('/admin/states', [App\Http\Controllers\AdminController::class, 'stateList']);
    Route::get('/admin/lgas', [App\Http\Controllers\AdminController::class, 'LGAList']);

    Route::get('/admin/type', [App\Http\Controllers\AdminController::class, 'Type']);
    Route::get('/admin/type/create', [App\Http\Controllers\AdminController::class, 'TypeCreate']);
    Route::post('/admin/type/add', [App\Http\Controllers\AdminController::class, 'TypeAdd']);
    Route::get('/admin/type/edit/{id}', [App\Http\Controllers\AdminController::class, 'TypeEdit']);
    Route::put('/admin/type/update/{id}', [App\Http\Controllers\AdminController::class, 'TypeUpdate']);
    Route::get('/admin/type/delete/{id}', [App\Http\Controllers\AdminController::class, 'TypeDelete']);

    Route::get('/admin/house', [App\Http\Controllers\AdminController::class, 'House']);
    Route::get('/admin/house/create', [App\Http\Controllers\AdminController::class, 'HouseCreate']);
    Route::post('/admin/house/add', [App\Http\Controllers\AdminController::class, 'HouseAdd']);
    Route::get('/admin/house/edit/{id}', [App\Http\Controllers\AdminController::class, 'HouseEdit']);
    Route::put('admin/house/update/{id}', [App\Http\Controllers\AdminController::class, 'HouseUpdate']);
    Route::get('/admin/house/delete/{id}', [App\Http\Controllers\AdminController::class, 'HouseDelete']);

    Route::get('/admin/feature', [App\Http\Controllers\AdminController::class, 'feature']);
    Route::get('/admin/feature/create', [App\Http\Controllers\AdminController::class, 'featureCreate']);
    Route::post('/admin/feature/add', [App\Http\Controllers\AdminController::class, 'featureAdd']);
    Route::get('/admin/feature/edit/{id}', [App\Http\Controllers\AdminController::class, 'featureEdit']);
    Route::put('/admin/feature/update/{id}', [App\Http\Controllers\AdminController::class, 'featureUpdate']);
    Route::get('/admin/feature/delete/{id}', [App\Http\Controllers\AdminController::class, 'featureDelete']);

    Route::get('/admin/image', [App\Http\Controllers\AdminController::class, 'image']);
    Route::get('/admin/image/create', [App\Http\Controllers\AdminController::class, 'imageCreate']);
    Route::post('/admin/image/add', [App\Http\Controllers\AdminController::class, 'imageAdd']);

    Route::get('/admin/status', [App\Http\Controllers\AdminController::class, 'Status']);
    Route::get('/admin/status/create', [App\Http\Controllers\AdminController::class, 'StatusCreate']);
    Route::post('/admin/status/add', [App\Http\Controllers\AdminController::class, 'StatusAdd']);

    Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'users']);
    Route::post('/admin/update-agent/{id}', [App\Http\Controllers\AdminController::class, 'toggleVerification'])->name('admin.update.agent');

    // Route::get('/admin/update-agent', function(){ return 123; });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
