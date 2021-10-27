<?php

use App\Models\Menu;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\TryCatch;

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

Route::get('/', function () {
    try {
        $menu = Menu::find(10);
        $menu = 1;
        if($menu == null) {
            throw new Exception("Error Processing Request");
        }
    } catch (\Exception $e) {
        $e->getMessage();
        return $e->getMessage();
    }
    return response()->json(['message' => 'aaaaaaa'], 404);
});
