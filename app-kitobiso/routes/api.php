<?php

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

