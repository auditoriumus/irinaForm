<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/create', function (\Illuminate\Http\Request $request) {
    $validator = $request->validate(
        [
            'fio' => 'string|required',
            'country' => 'string|required',
            'town' => 'string|required',
            'phone' => 'string|required',
            'email' => 'email|required',
        ]
    );
    $credential = new \App\Models\Credential([
        'fio' => $request->input('fio'),
        'country' => $request->input('country'),
        'town' => $request->input('town'),
        'phone' => $request->input('phone'),
        'email' => $request->input('email'),
    ]);
    try {
        $credential->save();
        \Illuminate\Support\Facades\View::share(['messages' => ['Успешно']]);
    } catch (Exception $e) {
        \Illuminate\Support\Facades\View::share(['messages' => ['Что-то пошло не так, пожалуйста сообщите администрации']]);
    }
    return view('welcome');
})->name('create');
