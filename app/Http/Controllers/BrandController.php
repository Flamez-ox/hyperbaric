<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class BrandController extends Controller
{

    /**
     * For security. to check whether user login or not 
     * if not it will redirect to login page
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() 
    {
        $this->middleware('auth');
    }


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brands = Brand::latest()->paginate(4);
        return view("admin.brand.index", compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'brand_name' => 'required|unique:brands|max:50',
            'brand_image' => 'required|mimes:jpg,jpeg,png',
        ],[
            'brand_name.required' => 'Please Input Brand Name',
            'brand_name.unique' => 'Brand ' . $request->brand_name . ' Already Exist',
            'brand_name.max' => 'Maximum Number is 100 Character',

            'brand_image.required' => 'Please Choose Brand Image',
            'brand_image.mimes' => 'Brand Image type not allowed',

        ]);

        $brand_img = $request->file('brand_image');

        // $name_gen = hexdec(uniqid());

        // $img_extension = strtolower($brand_img->getClientOriginalExtension());

        // $imgname_unique =  $name_gen.'.'.$img_extension;

        // $upload_location = "images/brands_image/";

        // $image_save_location = $upload_location.$imgname_unique ;

        // $brand_img->move($upload_location,  $imgname_unique);
        
        $name_gen = hexdec(uniqid()).'.'.$brand_img->getClientOriginalExtension();
        $upload_location = "images/brands_image/";
        
        Image::make($brand_img)->resize(118, 91)->save($upload_location.$name_gen);
        
        $image_save_location = $upload_location.$name_gen; // move the image

        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_image' => $image_save_location,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('success', 'Brand created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        // start edit using eloquent
        $brand = Brand::findOrFail($id);

         return view("admin.brand.edit", compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $validatedData = $request->validate([
            'brand_name' => 'required|min:3',
        ],[
            'brand_name.required' => 'Please Input Brand Name',
            'brand_name.min' => 'Minimum Number is 3 Character',
        ]);

        $brand = Brand::findOrFail($id);

        $old_image = $request->old_image;

        $brand_img = $request->file('brand_image');

        if ($brand_img) {
            # code...
            // $name_gen = hexdec(uniqid());

            // $img_extension = strtolower($brand_img->getClientOriginalExtension());

            // $imgname_unique =  $name_gen.'.'.$img_extension;

            // $upload_location = "images/brands_image/";

            // $image_save_location = $upload_location.$imgname_unique ;

            // $brand_img->move($upload_location,  $imgname_unique);

            // laravel image intervention to resize image
            $name_gen = hexdec(uniqid()).'.'.$brand_img->getClientOriginalExtension();
            $upload_location = "images/brands_image/";
            
            Image::make($brand_img)->resize(118, 91)->save($upload_location.$name_gen);
            
            $image_save_location = $upload_location.$name_gen; // move the image

           

            if (!empty($old_image)) {
                # code...
                unlink($old_image);
            }
        

            $brand->update([
                'brand_name' => $request->brand_name,
                'brand_image' => $image_save_location,
            ]);

            return redirect()->route("all.brand")->with('success', 'Brand updated successfully');
        }else{
            $brand->update([
                'brand_name' => $request->brand_name,
            ]);

            return redirect()->route("all.brand")->with('success', 'Brand updated successfully');
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $image = Brand::findOrFail($id); // find id image
        $old_image = $image->brand_image; // assign the field  name in db
        unlink($old_image); // delete it

        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect()->back()->with('success', 'Brand deleted successfully');
    }
}
