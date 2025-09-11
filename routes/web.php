<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\ShopController;

Route::get('/', function () {

    $categories = Category::with([
        'categoryType.machines',
        'machines' => function ($query) {
            $query->whereNull('category_type_id');
        }
    ])->get();

    return view('index', compact(['categories']));
})->name('index');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');

// Optional: Add a search route for filtering by name, category, category type, and date range
Route::get('/shop/search', [ShopController::class, 'search'])->name('shop.search');

Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('admin')->group(function () {
    Route::get('/add_category', [AdminController::class, 'addCategory'])->name('admin.addCategory');
    Route::post('/add_category', [AdminController::class, 'storeCategory'])->name('admin.storeCategory');
    Route::get('/view_categories', [AdminController::class, 'viewCategories'])->name('admin.viewCategories');
    Route::get('/view_categories/{id}/edit', [AdminController::class, 'editCategory'])->name('admin.editCategory');
    Route::put('/view_categories/{id}', [AdminController::class, 'updateCategory'])->name('admin.updateCategory');
    Route::delete('/view_categories/{id}', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');

    Route::get('/add_category_type', [AdminController::class, 'addCategoryType'])->name('admin.addCategoryType');
    Route::post('/add_category_type', [AdminController::class, 'storeCategoryType'])->name('admin.storeCategoryType');
    Route::get('/view_category_types', [AdminController::class, 'showCategoryTypes'])->name('admin.showCategoryTypes');
    Route::get('/view_category_types/{id}/edit', [AdminController::class, 'editCategoryType'])->name('admin.editCategoryType');
    Route::put('/view_category_types/{id}', [AdminController::class, 'updateCategoryType'])->name('admin.updateCategoryType');
    Route::delete('/view_category_types/{id}', [AdminController::class, 'deleteCategoryType'])->name('admin.deleteCategoryType');
    

    Route::get('/new_machine', [AdminController::class, 'newMachine'])->name('admin.newMachine');
    Route::post('/add_machine', [AdminController::class, 'storeMachine'])->name('admin.storeMachine');
    Route::get('/view_machines', [AdminController::class, 'showMachines'])->name('admin.showMachines');
    Route::get('/view_category_types/{id}/edit', [AdminController::class, 'editMachine'])->name('admin.editMachine');
    Route::put('/view_category_types/{id}', [AdminController::class, 'updateMachine'])->name('admin.updateMachine');
    Route::delete('/view_category_types/{id}', [AdminController::class, 'deleteMachine'])->name('admin.deleteMachine');

    Route::get('/add_brand', [AdminController::class, 'addBrand'])->name('admin.addBrand');
    Route::post('/add_brand', [AdminController::class, 'storeBrand'])->name('admin.storeBrand');
    Route::get('/view_brands', [AdminController::class, 'showBrands'])->name('admin.showBrands');
    Route::get('/view_brands/{id}/edit', [AdminController::class, 'editBrand'])->name('admin.editBrand');
    Route::put('/view_brands/{id}', [AdminController::class, 'updateBrand'])->name('admin.updateBrand');
    Route::delete('/view_brands/{id}', [AdminController::class, 'deleteBrand'])->name('admin.deleteBrand');

    Route::get('/add_fuel', [AdminController::class, 'addFuel'])->name('admin.addFuel');
    Route::post('/add_fuel', [AdminController::class, 'storeFuel'])->name('admin.storeFuel');
    Route::get('/view_fuels', [AdminController::class, 'showFuels'])->name('admin.showFuels');
    Route::get('/view_fuels/{id}/edit', [AdminController::class, 'editFuel'])->name('admin.editFuel');
    Route::put('/view_fuels/{id}', [AdminController::class, 'updateFuel'])->name('admin.updateFuel');
    Route::delete('/view_fuels/{id}', [AdminController::class, 'deleteFuel'])->name('admin.deleteFuel');

    Route::get('/add_MachineModel', [AdminController::class, 'addMachineModel'])->name('admin.addMachineModel');
    Route::post('/add_MachineModel', [AdminController::class, 'storeMachineModel'])->name('admin.storeMachineModel');
    Route::get('/view_MachineModels', [AdminController::class, 'showMachineModels'])->name('admin.showMachineModels');
    Route::get('/view_MachineModels/{id}/edit', [AdminController::class, 'editMachineModel'])->name('admin.editMachineModel');
    Route::put('/view_MachineModels/{id}', [AdminController::class, 'updateMachineModel'])->name('admin.updateMachineModel');
    Route::delete('/view_MachineModels/{id}', [AdminController::class, 'deleteMachineModel'])->name('admin.deleteMachineModel');

});


require __DIR__.'/auth.php';
