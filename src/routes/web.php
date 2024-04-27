<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\Person;
use App\Models\Product;

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

Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});

Route::get('/softdelete', function () {
    Person::find(1)->delete();
});

Route::get('softdelete/get', function() {
    $person = Person::onlyTrashed()->get();
    dd($person);
});

Route::get('softdelete/store', function() {
    $result = Person::onlyTrashed()->restore();
    echo $result;
});

Route::get('softdelete/absolute', function() {
    $result = Person::onlyTrashed()->forceDelete();
    echo $result;
});

Route::get('uuid',function() {
    $products = Product::all();
    foreach($products as $product){
        echo $product.'<br>';
    }
});