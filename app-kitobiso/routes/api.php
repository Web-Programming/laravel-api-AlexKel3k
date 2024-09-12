<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\FundingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/menu',function(request $request){
    return response()->json(['Home', 'Profile','About','Contact Us']);
});
// method in routes : get,post,put,patch,delete
// buat route menuju url /donatur
// buat response berupa data json seperti berikut
/*[{
    'id' : 1 ,
    'nama' : 'Alexander Therino'

}
    {
    'id' : 2 ,
    'nama' : 'Alexander'

}
    {
    'id' : 3 ,
    'nama' : 'Therino'

}]


*/

Route::get('/donatur',function(request $request){
    return response()->json([
        ['id'=> 1 ,'name'=> ' Donatur 1'],
         ['id'=> 2 ,'name'=> ' Donatur 2'],
          ['id'=> 3 ,'name'=> ' Donatur 3']
    ]);
});

// API CRUD FUNDING
Route::get('/funding',[FundingController::class,'index']); // get all data
Route::get('/funding',[FundingController::class,'store']); // create new data
Route::get('/funding/{id}',[FundingController::class,'show']); // get data by id
Route::get('/funding/{id}',[FundingController::class,'update']); // update data by id
Route::get('/funding/{id}',[FundingController::class,'destroy']); // delete data by id

// API CRUD Donation
Route::apiResource('donation',DonationController::class);