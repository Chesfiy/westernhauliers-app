<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Machine;
use App\Models\Employee;
use App\Models\Quotation;


class ShopController extends Controller
{
    //


    public function index(Request $request){
    $categories = Category::with([
            'categoryType.machines',
            'machines' => function ($query) {
                $query->whereNull('category_type_id');
            }
        ])->get();
        
    
        //select all machine by category, category type, name, and date range
        $query = Machine::query();
        if ($request->filled('machine-category')) {
            $machineCategory = explode('-', $request->input('machine-category'));
            if ($machineCategory[0] == 'categoryType') {
                $query->where('category_type_id', $machineCategory[1]);
            } else if ($machineCategory[0] == 'category') {
                $query->where('category_id', $machineCategory[1]);
            }
        }
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
        if ($request->filled('date_from') && $request->filled('date_to')) {
            $query->whereBetween('created_at', [$request->input('date_from'), $request->input('date_to')]);
        }
        if ($request->filled('category_id')) {
            //
            //dd($request->input('category_id'));
            $query->where('category_id', $request->input('category_id'));
        }
        if ($request->filled('category_type')) {
            
            $query->where('category_type_id', $request->input('category_type'));
            //dd($query->get());
        }

        $machines = $query->paginate(10);

    return view('shop_view', compact(['categories', 'machines']));

    }

    public function verifyEmployee(Request $request){
        
        $query = Employee::query();
        if ($request->filled('employee_no')) {

            $parts = explode('_', $request->employee_no);
            $employee_no  = implode('/', $parts);
            //dd($employee_no);
            $query->where('employee_no', $employee_no);

        }

        $employee =  $query->first();
       //dd($employee);

        return  view('verify_employee', compact('employee'));
    }

    public function singleShop($name){
        // Find the machine by its name (assuming 'name' is unique)
        $machine = Machine::where('name', $name)->firstOrFail()->load('category', 'type', 'model', 'fuel', 'brand', 'machineFeatures', 'machineProperties', 'pictures');

        return view('single_shop', compact('machine'));
    }

    public function quotationView(){
        return view('quotation');
    }   

    public function quotationDetails(Request $request){

        // $query = $request->query('_wpcf7_unit_tag'); // or $request->input('query')
        // $page = $request->query('page');
        $payment_frequency = $request->query('payment_frequency');
        $quantity = $request->query('quantity');
        $add_to_cart = $request->query('add-to-cart');
        $machine_id = $request->query('machine_id');
        $variation_id = $request->query('variation_id');

        $machine = Machine::where('id',$machine_id)->firstOrFail();
        return view('quotation_details', compact([
            'payment_frequency',
            'quantity',
            'add_to_cart',
            'machine',
            'variation_id'
        ]));
    }

    public function storeQuotation(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'payment_type' => 'nullable|string|max:100',
            'machine_id' => 'required|integer|exists:machines,id',
            'payment_frequency' => 'nullable|string|max:100',
            'quantity' => 'nullable|integer|min:1',
            'remarks' => 'nullable|string|max:1000',
        ]);

        $quotation = Quotation::create($validated);

        

        return back()->with('success', 'Quotation request submitted successfully!');
    }

}