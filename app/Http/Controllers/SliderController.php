<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Carbon\Carbon;
use Image;
use Illuminate\Http\Request;

class SliderController extends Controller
{

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

        $sliders = Slider::latest()->paginate(4);
        return view("admin.slider.index", compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.slider.create");
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
            'slider_title' => 'required|unique:sliders|max:50',
            'slider_description' => 'required|max:500',
            'slider_image' => 'required|mimes:jpg,jpeg,png',
        ],[
            'slider_title.required' => 'Please Input Slider Title',
            'slider_title.unique' => 'Slider ' . $request->slider_title . ' Already Exist',
            'slider_title.max' => 'Maximum Number is 500 Character',

            'slider_description.required' => 'Please Input Slider Title',
            'slider_description.max' => 'Maximum Number is 500 Character',

            'slider_image.required' => 'Please Choose Slider Image',
            'slider_image.mimes' => 'Slider Image type not allowed',

        ]);

        $slider_img = $request->file('slider_image');

        $name_gen = hexdec(uniqid()).'.'.$slider_img->getClientOriginalExtension();
        $upload_location = "images/sliders_image/";
        
        Image::make($slider_img)->resize(1920, 1088)->save($upload_location.$name_gen);
        
        $image_save_location = $upload_location.$name_gen; // move the image

        Slider::insert([
            'slider_title' => $request->slider_title,
            'slider_description' => $request->slider_description,
            'slider_image' => $image_save_location,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('success', 'Slider created successfully');
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
        // start edit using eloquent
        $slider = Slider::findOrFail($id);

         return view("admin.slider.edit", compact('slider'));
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
        $validatedData = $request->validate([
            'slider_title' => 'required|max:50',
            'slider_description' => 'required|max:500',
        ],[
            'slider_title.required' => 'Please Input Slider Title',
            'slider_title.max' => 'Maximum Number is 500 Character',

            'slider_description.required' => 'Please Input Slider Title',
            'slider_description.max' => 'Maximum Number is 500 Character',


        ]);

        $slider = Slider::findOrFail($id);

        $old_image = $request->old_image;

        $slider_img = $request->file('slider_image');

        if ($slider_img) {
           
            // laravel image intervention to resize image
            $name_gen = hexdec(uniqid()).'.'.$slider_img->getClientOriginalExtension();
            $upload_location = "images/sliders_image/";
            
            Image::make($slider_img)->resize(1920, 1088)->save($upload_location.$name_gen);
            
            $image_save_location = $upload_location.$name_gen; // move the image

           

            if (!empty($old_image)) {
                # code...
                unlink($old_image);
            }
        

            $slider->update([
                'slider_title' => $request->slider_title,
                'slider_description' => $request->slider_description,
                'slider_image' => $image_save_location,
            ]);

            return redirect()->route("all.slider")->with('success', 'Slider updated successfully');
        }else{
            $slider->update([
                'slider_title' => $request->slider_title,
                'slider_description' => $request->slider_description,
            ]);

            return redirect()->route("all.slider")->with('success', 'Slider updated successfully');
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
        $image = Slider::findOrFail($id); // find id image
        $old_image = $image->slider_image; // assign the field  name in db
        unlink($old_image); // delete it

        $brand = Slider::findOrFail($id);
        $brand->delete();

        return redirect()->back()->with('success', 'Slider deleted successfully');
    }
}
