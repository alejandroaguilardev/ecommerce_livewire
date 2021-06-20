<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\SearchComponent;

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

Route::get('/', HomeComponent::class)->name('home.index');

Route::get('tienda', ShopComponent::class)->name('shop');

Route::get('nosotros', AboutComponent::class)->name('about');

Route::get('contactanos', ContactComponent::class)->name('contact');

Route::get('productos/{product}', DetailsComponent::class)->name('product.details');

Route::get('productos-categoria/{category}', CategoryComponent::class)->name('product.category'); 

Route::get('search', SearchComponent::class)->name('product.search'); 

Route::get('carrito', CartComponent::class)->name('cart');

Route::get('checkout', CheckoutComponent::class)->name('checkout');