<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    /**
     * View all categories.
     */
    public function view_category()
    {
        // Retrieve all categories
        $data = Category::all();

        // Return the category view with the data
        return view('admin.category', compact('data'));
    }

    /**
     * Add a new category.
     */
    public function add_category(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        // Create a new category instance
        $category = new Category;

        // Assign the category name
        $category->category_name = $request->category;

        // Save the category to the database
        $category->save();

        // Display success message
        toastr()->timeout(10000)->closeButton()->addSuccess('Category added successfully.');

        // Redirect back
        return redirect()->back();
    }

    /**
     * Delete a category.
     */
    public function delete_category($id)
    {
        // Find the category by ID
        $data = Category::find($id);

        // Check if the category exists
        if ($data) {
            // Delete the category
            $data->delete();

            // Display success message
            toastr()->timeout(10000)->closeButton()->addSuccess('Category deleted successfully.');
        } else {
            // Display error message if category not found
            toastr()->timeout(10000)->closeButton()->addError('Category not found.');
        }

        // Redirect back
        return redirect()->back();
    }

    /**
     * Edit a category.
     */
    public function edit_category($id)
    {
        // Find the category by ID
        $data = Category::find($id);

        // Check if the category exists
        if ($data) {
            // Return the edit category view with the data
            return view('admin.edit_category', compact('data'));
        } else {
            // Display error message if category not found
            toastr()->timeout(10000)->closeButton()->addError('Category not found.');

            // Redirect back
            return redirect()->back();
        }

    
    }

    public function update_category(Request $request,$id)
    {
        $data = Category::find($id);

        $data->category_name= $request->category;

        $data->save();

        toastr()->timeout(10000)->closeButton()->addSuccess('Category Updated Successfully.');

        return redirect('/view_category');

    }

    public function add_product()
    {
        $category = Category::all();
        return view('admin.add_product', compact('category'));
    }

    public function upload_product(Request $request)
    {
        $data= new Product;
        $data->title= $request->title;
        $data->description= $request->description;
        $data->price= $request->price;
        $data->quantity= $request->quantity;
        $data->category= $request->category;

        $image= $request->image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('products',$imagename);
            $data->image= $imagename; 
        }
        $data->save();
        toastr()->timeout(10000)->closeButton()->addSuccess('Product Added Successfully.');
        return redirect()->back();


    }

    public function view_product()
    {
        $product=Product::paginate(4);
        return view('admin.view_product',compact('product'));
    }

    public function delete_product($id)
    {
        $data=Product::find($id);
        $image_path= public_path('products/'.$data->image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        $data->delete();
        toastr()->timeout(10000)->closeButton()->addSuccess('Product Deleted Successfully.');
        
        return redirect()->back();
    }

    public function update_product($id)
    {
        $data= Product::find($id);
        $category=Category::all();
        return view('admin.update_page',compact('data','category'));
    }

    public function edit_product(Request $request, $id)
    {
        $data = Product::find($id);
        $data->title= $request->title;
        $data->description= $request->description;
        $data->price= $request->price;
        $data->quantity= $request->quantity;
        $data->category= $request->category;
        $image= $request->image;
        if($image)
        {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('products'), $imagename);
            $data->image = $imagename;

        }
        $data->save();
        toastr()->timeout(10000)->closeButton()->addSuccess('Product Updated Successfully.');
        return redirect('/view_product');

    }

    public function product_search(Request $request)
    {
        $search=$request->search;
        $product=Product::where('title','LIKE','%'.$search.'%')->orWhere('category','LIKE','%'.$search.'%')->paginate(3);
        return view('admin.view_product',compact('product'));
    }

    public function view_order()
    {
        $data=Order::all();
        return view('admin.order',compact('data'));
    }

    public function on_the_way($id)
    {
        $data=Order::find($id);
        $data->status= 'On the way';
        $data->save();
        return redirect('/view_orders');

    }

    public function delivered($id)
    {
        $data=Order::find($id);
        $data->status= 'Delivered';
        $data->save();
        return redirect('/view_orders');

    }

    public function print_pdf($id)
    {
        $data=Order::find($id);
        $pdf = Pdf::loadView('admin.invoice',compact('data'));
        return $pdf->download('invoice.pdf');
        
    }
}
