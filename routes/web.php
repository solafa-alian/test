<?php

use Illuminate\Support\Facades\Route;



Route::get('/',function() 
{
    return 'HOME ';
});


Route::get('/about',function() 
{
    return 'about Us page ';
});


Route::get('/contact',function() 
{
    return 'contact page ';
});



Route::get('/admin',function() 
{
    return 'admin page ';
});


Route::get('user/{name}',function($name) 
{
    return 'welcome '.$name;
});







?>