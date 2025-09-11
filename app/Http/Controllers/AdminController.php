<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CategoryType;
use App\Models\Machine;
use App\Models\Brand;
use App\Models\Fuel;
use App\Models\MachineModel;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function addCategory(){
        return view('admin.category_form_view');
    }

    public function storeCategory(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);


        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        //return redirect()->route('admin.addCategory')->with('success', 'Category added successfully.');
        return redirect()->back()->with('success', 'Category added successfully.');
    }

    public function viewCategories(){

        $categories = Category::all();
        return view('admin.category_view', compact('categories'));
    }

    public function editCategory($id){
        $category = Category::findOrFail($id);
        return view('admin.category_edit_form_view', compact('category'));
    }

    public function updateCategory(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->back()->with('success', 'Category updated successfully.');
    }

    public function deleteCategory($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully.');
    }


    //category types functions below
    public function addCategoryType(){
        $categoryTypes = CategoryType::all();
        return view('admin.category_type.form_view', compact('categoryTypes'));
    }

    public function storeCategoryType(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $categoryType = new CategoryType();
        $categoryType->name = $request->name;
        $categoryType->category_id = $request->category_id;
        $categoryType->description = $request->description;
        $categoryType->save();

        return redirect()->back()->with('success', 'Category Type added successfully.');
    }

    public function showCategoryTypes(){

        $categoryTypes = CategoryType::all();
        return view('admin.category_type.view', compact('categoryTypes'));
    }

    public function editCategoryType($id){
        $categoryType = CategoryType::findOrFail($id);
        return view('admin.category_type.edit_form_view', compact('categoryType'));
    }

    public function updateCategoryType(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $categoryType = CategoryType::findOrFail($id);
        $categoryType->name = $request->name;
        $categoryType->category_id = $request->category_id;
        $categoryType->description = $request->description;
        $categoryType->save();

        return redirect()->back()->with('success', 'Type updated successfully.');
    }

    public function deleteCategoryType($id){
        $categoryType = CategoryType::findOrFail($id);
        $categoryType->delete();
        return redirect()->back()->with('success', 'Type deleted successfully.');
    }



    // machines methods

    public function newMachine(){

        return view('admin.machine.machine_form_view');
    }

    public function storeMachine(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'category_type_id' => 'integer|exists:category_types,id',
            'description' => 'nullable|string',
            'img_url' => 'image|mimes:jpg,jpeg,png,gif|max:4048'
        ]);

        //dd(vars: $request);
         // store in storage/app/public/uploads
        $path = $request->file('img_url')->store('uploads', 'public');
        
        $machine = new Machine();
        $machine->name = $request->name;
        $machine->category_type_id = $request->category_type_id;
        $machine->description = $request->description;
        $machine->category_id = $request->category_id;
        $machine->model_id = $request->model_id;
        $machine->video_url = $request->video_url;
        $machine->img_url = $path;
        $machine->fuel_id = $request->fuel_id;
        $machine->brand_id = $request->brand_id;
        $machine->save();

        // Save features
        if ($request->has('features') && is_array($request->features)) {
            foreach ($request->features as $feature) {
            if (!empty($feature['name'])) {
                $machine->machineFeatures()->create([
                'name' => $feature['name'],
                'value' => $feature['value'] ?? null,
                ]);
            }
            }
        }

        // Save properties
        if ($request->has('properties') && is_array($request->properties)) {
            foreach ($request->properties as $property) {
            if (!empty($property['name'])) {
                $machine->machineProperties()->create([
                'name' => $property['name'],
                'value' => $property['value'] ?? null,
                ]);
            }
            }
        }

        // Save photos (Album - morphMany)
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $photoPath = $photo->store('uploads/machine_models/albums', 'public');
                $machine->pictures()->create([
                    'img_url' => $photoPath,
                    'type' => 'photo',
                ]);
            }
        }
        

        return redirect()->back()->with('success', 'Machine added successfully.');
    }

    public function showMachines(){
        $machines = Machine::all();
        return view('admin.machine.machine_listview', compact('machines'));
    }

    public function editMachine($id){
        $machine = Machine::with(['category', 'type', 'model', 'fuel', 'brand', 'machineFeatures', 'machineProperties', 'pictures'])->findOrFail($id);
        return view('admin.machine.machine_edit_form_view', compact('machine'));
    }

    public function updateMachine(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Delete previous image if a new one is uploaded
        $machine = Machine::findOrFail($id);
        $path = $machine->img_url;

        if ($request->hasFile('img_url')) {
            if ($path && Storage::disk('public')->exists(path: $path)) {
                Storage::disk('public')->delete($path);
            }
            $path = $request->file('img_url')->store('uploads', 'public');
        }

        $machine = Machine::findOrFail($id);
        $machine->name = $request->name;
        $machine->category_type_id = $request->category_type_id;
        $machine->description = $request->description;
        $machine->category_id = $request->category_id;
        $machine->model_id = $request->model_id;
        $machine->video_url = $request->video_url;
        $machine->img_url = $path;
        $machine->fuel_id = $request->fuel_id;
        $machine->brand_id = $request->brand_id;
        $machine->save();

        // Update features
        if ($request->has('features') && is_array($request->features)) {
            // Remove old features
            $machine->machineFeatures()->delete();
            // Add new features
            foreach ($request->features as $feature) {
            if (!empty($feature['name'])) {
                $machine->machineFeatures()->create([
                'name' => $feature['name'],
                'value' => $feature['value'] ?? null,
                ]);
            }
            }
        }

        // Update properties
        if ($request->has('properties') && is_array($request->properties)) {
            // Remove old properties
            $machine->machineProperties()->delete();
            // Add new properties
            foreach ($request->properties as $property) {
            if (!empty($property['name'])) {
                $machine->machineProperties()->create([
                'name' => $property['name'],
                'value' => $property['value'] ?? null,
                ]);
            }
            }
        }

        // Update photos (Album - morphMany)
        if ($request->hasFile('photos')) {
            // Optionally delete old photos
            foreach ($machine->albums()->where('type', 'photo')->get() as $album) {
            if ($album->file_path && Storage::disk('public')->exists($album->file_path)) {
                Storage::disk('public')->delete($album->file_path);
            }
            $album->delete();
            }
            // Add new photos
            foreach ($request->file('photos') as $photo) {
            $photoPath = $photo->store('uploads/machine_models/albums', 'public');
            $machine->albums()->create([
                'img_url' => $photoPath,
                'type' => 'photo',
            ]);
            }
        }
        return redirect()->back()->with('success', 'Machine updated successfully.');
    }

    public function deleteMachine($id){
        $machine = Machine::findOrFail($id);
        // Delete image from storage if exists
        if ($machine->img_url && Storage::disk('public')->exists($machine->img_url)) {
            Storage::disk('public')->delete($machine->img_url);
        }
        $machine->delete();
        return redirect()->back()->with('success', 'Machine deleted successfully.');
    }


    // Brand methods

    public function addBrand(){

        return view('admin.brand.form_view');
    }

    public function storeBrand(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'img_url' => 'image|mimes:jpg,jpeg,png,gif|max:4048'
        ]);

        // store in storage/app/public/uploads/brands
        $path = $request->file('img_url')->store('uploads/brands', 'public');
        
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->img_url = $path;
        $brand->save();

        return view('admin.brand.form_view', compact('brand'))->with('success', 'Brand added successfully.');
    }

    public function showBrands(){
        $brands = Brand::all();
        return view('admin.brand.view', compact('brands'));
    }

    public function editBrand($id){
        $brand = Brand::findOrFail($id);
        return view('admin.brand.edit_form_view', compact('brand'));
    }

    public function updateBrand(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Delete previous image if a new one is uploaded
        $brand = Brand::findOrFail($id);
        $path = $brand->img_url;

        if ($request->hasFile('img_url')) {
            if ($path && Storage::disk('public')->exists(path: $path)) {
                Storage::disk('public')->delete($path);
            }
            $path = $request->file('img_url')->store('uploads/brands', 'public');
        }

        $brand = Brand::findOrFail($id);
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->img_url = $path;
        $brand->save();

        return redirect()->back()->with('success', 'Brand updated successfully.');
    }

    public function deleteBrand($id){
        $brand = Brand::findOrFail($id);
        // Delete image from storage if exists
        if ($brand->img_url && Storage::disk('public')->exists($brand->img_url)) {
            Storage::disk('public')->delete($brand->img_url);
        }
        $brand->delete();
        return redirect()->back()->with('success', 'Brand deleted successfully.');
    }

    // Fuel / Power functions below
    public function addFuel(){
        
        return view('admin.fuel.form_view');
    }

    public function storeFuel(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $fuel = new Fuel();
        $fuel->name = $request->name;
        $fuel->description = $request->description;
        $fuel->save();

        return view('admin.fuel.form_view', compact('fuel'))->with('success', 'Fuel added successfully.');
    }

    public function showFuels(){

        $fuels = Fuel::all();
        return view('admin.fuel.view', compact('fuels'));
    }

    public function editFuel($id){
        $fuel = Fuel::findOrFail($id);
        return view('admin.fuel.edit_form_view', compact('fuel'));
    }

    public function updateFuel(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $fuel = Fuel::findOrFail($id);
        $fuel->name = $request->name;
        $fuel->description = $request->description;
        $fuel->save();

        return redirect()->back()->with('success', 'Fuel updated successfully.');
    }

    public function deleteFuel($id){
        $fuel = Fuel::findOrFail($id);
        $fuel->delete();
        return redirect()->back()->with('success', 'Type deleted successfully.');
    }

    
    // MachineModel functions below
    public function addMachineModel(){
        $models = MachineModel::all();
        return view('admin.machine_model.form_view', compact('models'));
    }

    public function storeMachineModel(Request $request){
        $request->validate([
            'number' => 'required|string|max:255',
        ]);

        $model = new MachineModel();
        $model->number = $request->number;
        $model->type = $request->type;
        $model->width = (double) $request->width;
        $model->height = (double) $request->height;
        $model->raised_height = (double) $request->raised_height;
        $model->capacity = (double) $request->capacity;
        $model->lift_working = (double) $request->lift_working;
        $model->fuel_id = $request->fuel_id; 
        $model->max_container = $request->max_container;
        $model->wheel_base = $request->wheel_base; 
        $model->unit = $request->unit;
        $model->save();

        

        return view('admin.machine_model.form_view', compact('model'))->with('success', 'Machine Model added successfully.');
    }

    public function showMachineModels(){

        $models = MachineModel::all();
        return view('admin.machine_model.view', compact('models'));
    }

    public function editMachineModel($id){
        $model = MachineModel::findOrFail($id);
        return view('admin.machine_model.edit_form_view', compact('model'));
    }

    public function updateMachineModel(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $model = MachineModel::findOrFail($id);
        $model->number = $request->number;
        $model->type = $request->type;
        $model->width = (double) $request->width;
        $model->height = (double) $request->height;
        $model->raised_height = (double) $request->raised_height;
        $model->capacity = (double) $request->capacity;
        $model->lift_working = (double) $request->lift_working;
        $model->fuel_id = $request->fuel_id; 
        $model->max_container = $request->max_container;
        $model->wheel_base = $request->wheel_base; 
        $model->unit = $request->unit;
        $model->save();

        return view('admin.machine_model.edit_form_view', compact('model'))->with('success', 'Machine Model updated successfully.');
    }

    public function deleteMachineModel($id){
        /* The above PHP code is attempting to delete a machine model by first fetching the model with
        the specified ID using the `findOrFail` method. It then checks if there are any related
        machines associated with the model by calling the `machines()` method and checking if any
        exist using the `exists()` method. */
        $model = MachineModel::findOrFail($id);

        // Prevent deletion if related machines exist
        if ($model->machines()->exists()) {
            return redirect()->back()->with('error', 'Cannot delete: Machine Model is in use by one or more machines.');
        }

        $model->delete();
        return redirect()->back()->with('success', 'Machine Model deleted successfully.');
    }
}