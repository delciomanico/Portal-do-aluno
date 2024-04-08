<?php

use App\Http\Controllers\boletimController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiniPautaController;
use App\Http\Controllers\NotaController;
use App\Models\nota;
use App\Models\senhaAluno;
use App\Models\senhaProfessor;
use App\Models\User;

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

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/n', function () {
    User::create([
        'name'=> 'admin',
        'email'=> 'admin@gmail.com',
        'password'=> bcrypt('admin'),
    ]);
});*/

Route::get('/log', function () {
    return view('login');
})->name('telalogin');
Route::match(['get','post'],'/login',[loginController::class,'login'])->name('login');
Route::match(['get','post'],'/sair',[loginController::class,'logout'])->name('logout');


#=========================Professor================
Route::middleware(['auth:prof'])->group(function () {
    Route::match(['post','get'],'/prof',function(){
        return view('professor.MiniPauta');
    })->name('mini');
    Route::view('perfil-prof','professor.Perfil');
    Route::get('/nova_mini',[MiniPautaController::class,'create']);

    Route::post('/notas',[NotaController::class,'show'])->name('nota');

    Route::post('edit_nota',[NotaController::class,'edit']);
    
    Route::put('/updatenota',[NotaController::class,'update'])->name('upnota');
    

});
#=========================Aluno================
Route::middleware(['auth:aluno'])->group(function () {
    // Routes accessible to administrators
    Route::view('perfil-aluno','aluno.Perfil');
    Route::match(['get','post'],'/boletim',[boletimController::class,'index'])->name('boletim');
    Route::view('/noticias','aluno.noticias');
});

#=========================Admin================
Route::middleware(['auth:web'])->group(function () {
    // Routes accessible to administrators
    Route::view('admin','admin.dash')->name('admin');
    
});
