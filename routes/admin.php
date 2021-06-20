<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;



Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('usuario/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

Route::middleware(['auth:sanctum','verified', 'authadmin'])->group(function(){
    Route::get('dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('categorias', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('categorias/agregar', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('categorias/editar/{category}', AdminEditCategoryComponent::class)->name('admin.editcategory');

    Route::get('productos', AdminProductComponent::class)->name('admin.products');
    Route::get('productos/agregar', AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('productos/editar/{product}', AdminEditProductComponent::class)->name('admin.editproduct');

    Route::get('slider', AdminHomeSliderComponent::class)->name('admin.homeslider');
    Route::get('slider/agregar', AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
    Route::get('slider/editar/{slider}', AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');

});
