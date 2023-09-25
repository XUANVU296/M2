<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

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
    return view('bai3.admin.master');
});

// Route::post('/calculate-discount', function (Request $request) {
//     $productDescription = $request->input('product_description');
//     $listPrice = $request->input('list_price');
//     $discountPercent = $request->input('discount_percent');

//     $discountAmount = $listPrice * $discountPercent * 0.1;
//     $discountPrice = $discountAmount - $listPrice;

//     return view('show_discount_amount', compact('productDescription', 'listPrice', 'discountPercent', 'discountAmount', 'discountPrice'));
// });
// Route::get('/dictionary', function () {
//     return view('dictionary');
// });
// Route::post('/dictionary', function (Request $request) {
//     $Word = $request->input('english');
//     $dictionary = [
//         ['name', 'age', 'class'],
//         ['Tên', 'Tuổi', 'Lớp']
//     ];

//     $foundTranslation = false;

//     for ($i = 0; $i < count($dictionary[0]); $i++) {
//         if ($dictionary[0][$i] === $Word) {
//             $vietnameseWord = $dictionary[1][$i];
//             echo $Word . '<br>';
//             echo $vietnameseWord . '<br>';
//             $foundTranslation = true;
//             break;
//         }
//     }

//     if (!$foundTranslation) {
//         echo 'Không tìm thấy';
//         die();
//     }
// });
// Route::get('/login', function () {
//     return view('dangnhap.login');
// });
// Route::post('/login', function (Request $request) {
//     $name = $request->name;
//     $password = $request->password;
//     if ($name == 'xuanvu' && $password == 290602) {
//         return view('dangnhap.hello');
//     } 
//         return view('dangnhap.loi');
    
// });
// Route::get('/a/{id}/b/{b}', function($a,$b) {
//     echo 'Tích là:' . $a * $b;
// });
// Route::get('/soa/{a?}/sob/{b?}', function($a=null, $b=null) {
//     if (empty($a) || empty($b)) {
//         echo "Tham số không bắt buộc";
//     } else {
//         echo "Tổng là: " . ($a+$b);
//     }
// });


// Bài 2:

// Route::post('/time-zone', function (Request $request) {
//     if (isset($request->location)) {
//         $location = $request->location;
//         $todayDate = Carbon::now($location)->format('Y-m-d H:i:s');
//         echo 'Múi giờ bạn chọn ' . $location . ' hiện tại đang là: ' . $todayDate;
//     }
// });

// Route::get('/time_zone', function () {
//     return view('bai2.time_zone');
// });


// 

// Bài 3:
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'delete'])->name('user.destroy');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');