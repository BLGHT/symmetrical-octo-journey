<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

use function Termwind\render;

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

Route::get('/ssti', function (Request $request) {
    $command = 'None.';

    if($request->has('command')) {
        $command = $request->get('command');
    }

    //dd($request->get('command'));

    $html = '<h1>' . $command . '</h1>';

    //return view('test', ['html' => $html]);
    
    return view('ssti')->with('command', $command);
});

Route::get('/test', function (Request $request) {
    $command = 'None.';

    if($request->has('command')) {
        $command = $request->get('command');
    }

    //dd($request->get('command'));

    $html = '<h1>' . $command . '</h1>';

    return view('test', ['html' => $html]);
});

