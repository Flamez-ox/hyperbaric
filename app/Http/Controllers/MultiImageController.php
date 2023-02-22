<?php

namespace App\Http\Controllers;

use App\Models\MultiImage;
use Carbon\Carbon;
use Image;
use Illuminate\Http\Request;

class MultiImageController extends Controller
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
        // $multiImages = MultiImage::all();
        $multiImages = MultiImage::latest()->paginate(6);
        return view("admin.multi_image.index", compact('multiImages'));
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
       
        $multi_img = $request->file('img_name');

        foreach ($multi_img as $item) {

            $name_gen = hexdec(uniqid()).'.'.$item->getClientOriginalExtension();
            $upload_location = "images/multi_image/";
            
            Image::make($item)->resize(800, 600)->save($upload_location.$name_gen);
            
            $image_save_location = $upload_location.$name_gen; // move the image

            MultiImage::insert([
                'img_name' => $image_save_location,
                'created_at' => Carbon::now(),
            ]);
        } // end of foreach

        return redirect()->back()->with('success', 'Multi Image created successfully');
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
        //
        $multiImage = MultiImage::findOrFail($id);
        return view("admin.multi_image.edit", compact('multiImage'));
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
        $home_portfolios = MultiImage::findOrFail($id);

        $old_image = $request->old_img;

        $home_multi_img = $request->file('img_name');

        if ($home_multi_img) {
           
            // laravel image intervention to resize image
            $name_gen = hexdec(uniqid()).'.'.$home_multi_img->getClientOriginalExtension();
            $upload_location = "images/multi_image/";
            
            Image::make($home_multi_img)->resize(800,600)->save($upload_location.$name_gen);
            
            $image_save_location = $upload_location.$name_gen; // move the image

           

            if (!empty($old_image)) {
                # code...
                unlink($old_image);
            }
        

            $home_portfolios->update([
                'img_name' => $image_save_location,
            ]);

            return redirect()->route("all.image")->with('success', 'Portfolio updated successfully');
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
    }
}
