<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HmsController;
use App\Http\Controllers\Auth\RegisterController;

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

// Route::get('/clear-cache', function(){
// $exitcode = Artisan::call('cache:clear');
// $exitcode = Artisan::call('config:cache');
// return "Cleared";
// });

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
// Route::get('/reg1', [App\Http\Controllers\RegisterController::class, 'redirect'])->name('reg');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('show/{id}', [HmsController::class, 'show_student'])->name('show/{id}');
Route::get('country', [HmsController::class, 'country'])->name('country');
// Route::get('st1/{id}', [HmsController::class, 'show_student'])->name('st1{id}');
Route::group(['middleware' => ['auth','isAdmin']], function () {
    Route::get('/dashboard', function () {
       return view('admin.dashboard');
    });
    // Route::get('/stud', function () {
    //     return view('admin.studash');
    //  });
 
 });
 Route::post('atte', [HmsController::class, 'attend'])->name('attendance');
 Route::post('adbi', [HmsController::class, 'bill'])->name('addbill');
 Route::post('blo', [HmsController::class, 'block'])->name('blocks');
 Route::post('cos', [HmsController::class, 'costm'])->name('costmanage');
 Route::post('dep', [HmsController::class, 'deposit'])->name('deposit');
 Route::post('rat', [HmsController::class, 'mealrate'])->name('mealra');
 Route::post('mea', [HmsController::class, 'meal'])->name('meals');
 Route::post('noti', [HmsController::class, 'notice'])->name('noticeb');
 Route::post('roo', [HmsController::class, 'rooms'])->name('room');
 Route::post('sala', [HmsController::class, 'salary'])->name('salarys');
 Route::post('sea', [HmsController::class, 'seat'])->name('seats');
 Route::post('pay', [HmsController::class, 'studentpay'])->name('studentpay');
 Route::post('stude', [HmsController::class, 'student'])->name('students');
 Route::post('emp', [HmsController::class, 'employe'])->name('employee');
 Route::get('/rol', [RegisterController::class, 'role'])->name('rol');
 Route::get('attenv', [HmsController::class, 'viewattend'])->name('attenv');
 Route::get('billv', [HmsController::class, 'viewbill'])->name('billv');
 Route::get('blockv', [HmsController::class, 'viewblock'])->name('blockv');
 Route::get('noticev', [HmsController::class, 'viewnotice'])->name('noticev');
 Route::get('costv', [HmsController::class, 'viewcost'])->name('costv');
 Route::get('employv', [HmsController::class, 'viewemploy'])->name('employv');
 Route::get('salaryv', [HmsController::class, 'viewsalary'])->name('salaryv');
 Route::get('mealv', [HmsController::class, 'viewmeal'])->name('mealv');
 Route::get('ratev', [HmsController::class, 'viewrate'])->name('ratev');
 Route::get('roomv', [HmsController::class, 'viewroom'])->name('roomv');
 Route::get('studentv', [HmsController::class, 'viewstudent'])->name('studentv');
 Route::get('studv', [HmsController::class, 'viewstudpay'])->name('studv');
 Route::get('depositv', [HmsController::class, 'viewdeposit'])->name('depositv');
 Route::get('seatv', [HmsController::class, 'viewseat'])->name('seatv');
 Route::get('userv', [HmsController::class, 'viewuser'])->name('userv');
  Route::get('sv', [HmsController::class, 'index'])->name('sv');
  Route::get('dash', [HmsController::class, 'total'])->name('dash');
  Route::get('hom', [HmsController::class, 'tota'])->name('hom');
//for edit route only

Route::get('editat/{id}', [HmsController::class, 'editattend'])->name('editat/{id}');
Route::get('editbill/{id}', [HmsController::class, 'editbill'])->name('editbill/{id}');
Route::get('editblo/{id}', [HmsController::class, 'editblock'])->name('editblo/{id}');
Route::get('editcos/{id}', [HmsController::class, 'editcost'])->name('editcos/{id}');
Route::get('editemp/{id}', [HmsController::class, 'editemploy'])->name('editemp/{id}');
Route::get('editsala/{id}', [HmsController::class, 'editsalary'])->name('editsala/{id}');
Route::get('editmeal/{id}', [HmsController::class, 'editmeal'])->name('editmeal/{id}');
Route::get('editra/{id}', [HmsController::class, 'editrate'])->name('editra/{id}');
Route::get('editnot/{id}', [HmsController::class, 'editnotice'])->name('editnot/{id}');
Route::get('editro/{id}', [HmsController::class, 'editroom'])->name('editro/{id}');
Route::get('editst/{id}', [HmsController::class, 'editstudent'])->name('editst/{id}');
Route::get('editd/{id}', [HmsController::class, 'editdep'])->name('editd/{id}');
Route::get('editse/{id}', [HmsController::class, 'editseat'])->name('editse/{id}');
Route::get('editpa/{id}', [HmsController::class, 'editstudpay'])->name('editpa/{id}');
Route::get('editu/{id}', [HmsController::class, 'edituser'])->name('editu/{id}');
//for updating only
Route::any('updateat/{id}', [HmsController::class, 'updateattend'])->name('updateat/{id}');
Route::any('updatebill/{id}', [HmsController::class, 'updatebill'])->name('updatebill/{id}');
Route::any('updatebloc/{id}', [HmsController::class, 'updatebloc'])->name('updatebloc/{id}');
Route::any('updatecos/{id}', [HmsController::class, 'updatecost'])->name('updatecos/{id}');
Route::any('updated/{id}', [HmsController::class, 'updatedep'])->name('updated/{id}');
Route::any('updatep/{id}', [HmsController::class, 'updateemp'])->name('updatep/{id}');
Route::any('updatera/{id}', [HmsController::class, 'updaterate'])->name('updatera/{id}');
Route::any('updateme/{id}', [HmsController::class, 'updatemea'])->name('updateme/{id}');
Route::any('updateno/{id}', [HmsController::class, 'updatenotice'])->name('updateno/{id}');
Route::any('updatero/{id}', [HmsController::class, 'updateroom'])->name('updatero/{id}');
Route::any('updatesa/{id}', [HmsController::class, 'updatesalary'])->name('updatesa/{id}');
Route::any('updateset/{id}', [HmsController::class, 'updateseat'])->name('updateset/{id}');
Route::any('updatestu/{id}', [HmsController::class, 'updatestudent'])->name('updatestu/{id}');
Route::any('updatepay/{id}', [HmsController::class, 'updatepay'])->name('updatepay/{id}');
Route::any('updateu/{id}', [HmsController::class, 'updateuser'])->name('updateu/{id}');

//for delete only

Route::delete('deleteatte/{id}', [HmsController::class, 'destroyattend'])->name('deleteatte/{id}');
Route::delete('deletebill/{id}', [HmsController::class, 'destroybill'])->name('deletebill/{id}');
Route::delete('deleteblo/{id}', [HmsController::class, 'destroybloc'])->name('deleteblo/{id}');
Route::delete('deleteco/{id}', [HmsController::class, 'destroycost'])->name('deleteco/{id}');
Route::delete('deleted/{id}', [HmsController::class, 'destroydep'])->name('deleted/{id}');
Route::delete('deleteem/{id}', [HmsController::class, 'destroyempl'])->name('deleteem/{id}');
Route::delete('deletera/{id}', [HmsController::class, 'destroyrate'])->name('deletera/{id}');
Route::delete('deletemea/{id}', [HmsController::class, 'destroymeal'])->name('deletemea/{id}');
Route::delete('deleteno/{id}', [HmsController::class, 'destroynoti'])->name('deleteno/{id}');
Route::delete('deletero/{id}', [HmsController::class, 'destroyroom'])->name('deletero/{id}');
Route::delete('deletesal/{id}', [HmsController::class, 'destroysalary'])->name('deletesal/{id}');
Route::delete('deleteset/{id}', [HmsController::class, 'destroyseat'])->name('deleteset/{id}');
Route::delete('deletestu/{id}', [HmsController::class, 'destroystudent'])->name('deletestu/{id}');
Route::delete('deletepay/{id}', [HmsController::class, 'destroypay'])->name('deletepay/{id}');
//for show


//for views only


 Route::get('attend', function(){
return view('attendance.take_attend');
 })->name('attend');

 Route::get('all', function(){
   return view('allu');
    })->name('all');
   
 Route::get('bill', function(){
    return view('billmanag.addbill');
     })->name('bill');

     Route::get('block', function(){
        return view('bloc.blocks');
         })->name('block');

         Route::get('cost', function(){
            return view('costmanag.addcost');
             })->name('cost');

             Route::get('employ', function(){
                return view('employee.add_emp');
                 })->name('employ');

                 Route::get('salary', function(){
                    return view('employee.add_salary');
                     })->name('salary');

                     Route::get('meal', function(){
                        return view('meal.creat_meal');
                         })->name('meal');

                         Route::get('mealrate', function(){
                            return view('mealra.meal_rate');
                             })->name('mealrate');

                             Route::get('notice', function(){
                                return view('noticeboard.create_notice');
                                 })->name('notice');

 Route::get('rooms', function(){
 return view('room.rooms');
  })->name('rooms');

 Route::get('addstud', function(){
       return view('student.admit_stud');
        })->name('addstud');

       Route::get('money', function(){
          return view('student.money_deposit');
          })->name('money');

   Route::get('seat', function(){
    return view('student.seat_alloca');
      })->name('seat');

      Route::get('studpay', function(){
        return view('studentpayment.addpay');
          })->name('studpay');

       
        

          