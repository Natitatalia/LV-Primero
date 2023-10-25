<?php

use Illuminate\Support\Facades\Route;

Route::view("/", "index")->name("index");
Route::view("/about", "about")->name("about");
Route::view("/services", "services")->name("services");
Route::view("/contact", "contact")->name("contact");

Route::view("/miIdea","idea")->name("idea");
Route::view("/nuevo", "new")->name("news");