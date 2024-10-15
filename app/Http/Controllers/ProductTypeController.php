<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;

class ProductTypeController extends Controller
{
    public function index(){
        $productTypes = ProductType::all();
        return view('admin.product_types.index',[
            'productTypes' => $productTypes
        ]);
    }

    public function create(){
        return view('admin.product_types.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        ProductType::create($request->only('name'));
        return redirect()->route('admin.product_types.index')->with('success','Product Type created successfully');
    }

    public function edit(ProductType $productType){
        return view('admin.product_types.edit',[
            'productType' => $productType
        ]);
    }

    public function update(Request $request, ProductType $productType){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $productType->update($request->only('name'));
        return redirect()->route('admin.product_types.index')->with('success','Product Type updated successfully');
    }

    public function destroy(ProductType $productType){
        $productType->delete();
        return redirect()->route('admin.product_types.index')->with('success','Product Type deleted successfully');
    }
}
