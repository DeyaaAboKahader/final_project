<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view(view: 'welcome');
// });
Route::get(uri: '/', action: function(): Factory|view {
    return view(view: 'welcome');
});
Route::get(uri: '/about', action: function(): Factory|view {
    $name = "Babran";

    return view(view: 'about')->with(key: 'name', value: $name );
});