<?php

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




Route::get('/home', function () {

    return view('home');
});
Route::post('/result', function (Illuminate\Http\Request $request){
    $arr = ['hello'=>'xin chào','goodbye'=>'tạm biệt','dog'=>'con chó'];
    $text = $request->text;
    $result = null;
    foreach ($arr as $item=>$value){
        if ($text == $item){
            $result = $value;
            break;

        }else{
            $result = 'Cannot find words to translate';

        }
        
    }
    return view('result', compact(['text', 'result']));
})->name('result');

