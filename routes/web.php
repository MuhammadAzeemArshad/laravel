{{-- this commit is just for daily commit --}}

<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\FirstControler;
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

function studentsrecord(){
    return [
        60001 => [
            'name' => 'Muhammad Azeem Arshad',
             'class' => '9th',
             'grade' => 'A+',
              'address' => 'chack no 25 SB bhagtanwla',
        ],
        60002 => [
            'name' => 'Muhammad Abdullah Arshad',
             'class' => '8thth',
             'grade' => 'A+',
              'address' => 'chack no 25 SB bhagtanwla',
        ],
        60003 => [
            'name' => 'Umer Wahid',
             'class' => '10th',
             'grade' => 'A+',
              'address' => 'sargodha',
        ],
        60004 => [
            'name' => 'Moazzam Mahmood',
             'class' => '9th',
             'grade' => 'A+',
              'address' => 'fasilabad',
        ]
];
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', function () {
    return view('services');
})->name('Post');

Route::view('/about', 'about');

route::get('/header', function () {
    return view('header');

});

route::get('/footer', [FirstControler::class, 'test']);

route::get('/contact', function () {

    $name = "Data pass from route";
    return view('contact', ['data' => $name]);
})->name('contact');

route::get('/users', function () {
    $users = studentsrecord();
    return view('users', ['users' => $users]);
});



route::get('/user/{id}', function ($id) {
    $users = studentsrecord();
    $user = $users[$id];

    return view('user', ['id' => $user]);
})->name('view.user');