<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;
use App\Models\Images;
use Auth;
use Image; //image intervention
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB; //query builder

class ProductController extends Controller
{
    /* constructor to protect all routes */
    public function __construct() {
        $this -> middleware('auth'); //check if logged in or not
    }

    /* get all products with pagination */
    public function AllProducts(Request $request) {
        $searches = $request -> search;
        $products = Products::where('name', 'LIKE', '%'.$searches.'%') -> orWhere('category', 'LIKE', '%'.$searches.'%') -> latest()->paginate(10);
        
        return view('admin.product.index', compact('products'));
    }

    /* get all images */
    // public function AllImages() {
    //     $images = Images::latest()->get();
    //     return view('admin.image.index', compact('images'));
    // }

    /* display add product page */
    public function AddProduct() {
        return view('admin.product.add_product');
    }

    /* create new product */
    public function CreateProduct(Request $request) {
        /* validation */
        $validatedData = $request->validate([
            /* field name => properties */
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required',
            'datetime' => 'required'
        ]);

        /* start insert new product */
        $products = Products::create([
            'name' => $request -> name,
            'category' => $request -> category,
            'description' => $request -> description,
            'datetime' => $request -> datetime,
            'created_at' => Carbon::now()
        ]);
        /* end insert new product */

        /* start insert new images */
        //format the uploaded image
        $image = $request -> file('image');

        foreach ($image as $multi_img) {
            //using image intervention package to set the default size of the image
            $name_gen = hexdec(uniqid()) . '.' . $multi_img -> getClientOriginalExtension(); //generated name
            Image::make($multi_img) -> resize(300,300) -> save('image/multi/' . $name_gen); //resize then save image to folder

            $last_img = 'image/multi'.$name_gen;
            Images::create([
                'image' => $last_img,
                'product_id' => $products ->id,
                'created_at' => Carbon::now()
            ]);
        }
        /* end insert new images */

        return Redirect() -> route('all.products') -> with('success', 'Product added successfully.');
    }

    /* start display edit product page */
    public function Edit($id) {
        $products = Products::find($id);

        return view('admin.product.edit', compact('products'));
    }
    /* end display edit product page */

    /* start update product method */
    public function UpdateProduct(Request $request, $id) {
        /* validation */
        $validatedData = $request->validate([
            /* field name => properties */
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required',
            'datetime' => 'required'
        ]);

        /* start update products */
        $product = Products::find($id) -> update([
            'name' => $request -> name,
            'category' => $request -> category,
            'description' => $request -> description,
            'datetime' => $request -> datetime,
        ]);
        /* end update products */

        /* get all photos associated to the product_id */
        $old_images = Images::where('product_id', 'LIKE', '%'.$id.'%');
        //dd($old_images);
        /* unlink old images */
        foreach ($old_images as $old_image) {
            unlink($old_image);
        }

        /* start insert new images */
        //format the uploaded image
        $image = $request -> file('image');

        foreach ($image as $multi_img) {
            //using image intervention package to set the default size of the image
            $name_gen = hexdec(uniqid()) . '.' . $multi_img -> getClientOriginalExtension(); //generated name
            Image::make($multi_img) -> resize(300,300) -> save('image/multi/' . $name_gen); //resize then save image to folder

            $last_img = 'image/multi'.$name_gen;
            Images::create([
                'image' => $last_img,
                'product_id' => $product ->id,
                'created_at' => Carbon::now()
            ]);
        }
        /* end insert new images */

        return Redirect() -> route('all.products') -> with('success', 'Product updated successfully.');
    }
    /* end update product method */

    /* start delete product */
    public function Delete($id) {
        /* get all photos associated to the product_id */
        $old_images = Images::where('product_id', 'LIKE', '%'.$id.'%') -> delete();

        return Redirect() -> back() -> with('success', 'Product deleted successfully.');
    }
    /* end delete product */

    /* start search method */
    public function Search(Request $request) {
        
        $searches = $request -> search;
        $products = Products::where('name', 'LIKE', '%'.$searches.'%') -> get();

        return view('admin.product.search', compact('products'));
    }
    /* end search method */

    /* start logout method */
    public function Logout() {
        Auth::logout();

        return Redirect() -> route('login') -> with('success', 'User Logged Out');
    }
    /* end logout method */
}
