<?php

namespace App\Http\Controllers;

use App\Models\HomePortfolio;
use App\Models\HomePortfolioImage;
use Image;
use Illuminate\Http\Request;

class PortfolioController extends Controller
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
        $portfolios = HomePortfolio::latest()->paginate(4);
        // $portfolios = HomePortfolio::first()->images;
        return view("admin.portfolio.index", compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.portfolio.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|unique:home_portfolios|max:50',
            'client' => 'required|unique:home_portfolios|max:50',
            'project_url' => 'required|unique:home_portfolios|max:50',
            'description' => 'required|max:500',
            'images' => 'required|max:1024',

        ],[
            'title.required' => 'Please Input Portfolio Title',
            'title.unique' => 'Portfolio ' . $request->title . ' Already Exist',
            'title.max' => 'Maximum Number is 50 Character',

            'client.required' => 'Please Input Portfolio Client',
            'client.unique' => 'Portfolio ' . $request->client . ' Already Exist',
            'client.max' => 'Maximum Number is 50 Character',

            'project_url.required' => 'Please Input Project Url',
            'project_url.unique' => 'Portfolio ' . $request->project_url . ' Already Exist',
            'project_url.max' => 'Maximum Number is 500 Character',

            'description.required' => 'Please Input Portfolio Description',
            'description.max' => 'Maximum Number is 500 Character',

            'images.required' => 'Please Choose Portfolio Image',
            'images.mimes' => 'Portfolio Image type not allowed',
            'images.max' => 'Portfolio Image  must not be more than 3',

        ]);


        // $input = $request->all();
        // $image = array();

        $portfolio = new HomePortfolio;
        $portfolio->title = $request->title;
        $portfolio->client = $request->client;
        $portfolio->project_url = $request->project_url;
        $portfolio->description = $request->description;
        $portfolio->save();

        if ($portfolio_img = $request->file('images')) {

            foreach($portfolio_img as $item) {

                $name_gen = hexdec(uniqid()).'.'.$item->getClientOriginalExtension();
                $upload_location = "images/portfolios_image/";
                
                Image::make($item)->resize(1302, 873)->save($upload_location.$name_gen);
                
                $image_save_location = $upload_location.$name_gen; // move the image

                $form = new HomePortfolioImage;
                $form->url = $image_save_location;
                $form->portfolio_id = $portfolio->id;
                $form->save();


            } // end of foreach

        }

        // $portfolio->save();


        return redirect()->route("all.portfolio")->with('success', 'Portfolio created successfully');
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
        $portfolio = HomePortfolio::findOrFail($id);

         return view("admin.portfolio.edit", compact('portfolio'));
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
            'title' => 'required|max:50',
            'client' => 'required|max:50',
            'project_url' => 'required|max:50',
            'description' => 'required|max:500',
        ],[
            'title.required' => 'Please Input Portfolio Title',
            'title.max' => 'Maximum Number is 50 Character',

            'client.required' => 'Please Input Portfolio Client',
            'client.max' => 'Maximum Number is 50 Character',

            'project_url.required' => 'Please Input Project Url',
            'project_url.max' => 'Maximum Number is 500 Character',

            'description.required' => 'Please Input Portfolio Description',
            'description.max' => 'Maximum Number is 500 Character',

           

        ]);

        $home_portfolios = HomePortfolio::findOrFail($id);

        $old_image = $request->old_image;

        $home_portfolios_img = $request->file('slider_image');

        if ($home_portfolios_img) {
           
            // laravel image intervention to resize image
            $name_gen = hexdec(uniqid()).'.'.$home_portfolios_img->getClientOriginalExtension();
            $upload_location = "images/portfolios_image/";
            
            Image::make($home_portfolios_img)->resize(1302, 873)->save($upload_location.$name_gen);
            
            $image_save_location = $upload_location.$name_gen; // move the image

           

            if (!empty($old_image)) {
                # code...
                unlink($old_image);
            }
        

            $home_portfolios->update([
                'slider_title' => $request->slider_title,
                'slider_description' => $request->slider_description,
                'slider_image' => $image_save_location,
            ]);

            return redirect()->route("all.portfolio")->with('success', 'Portfolio updated successfully');
        }else{
            $home_portfolios->update([
                'slider_title' => $request->slider_title,
                'slider_description' => $request->slider_description,
            ]);

            return redirect()->route("all.portfolio")->with('success', 'Portfolio updated successfully');
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
        $image = HomePortfolio::findOrFail($id); // find id image
        $old_image = $image->portfolio_image; // assign the field  name in db
        unlink($old_image); // delete it

        $portfolio = HomePortfolio::findOrFail($id);
        $portfolio->delete();

        return redirect()->back()->with('success', 'Portfolio deleted successfully');
    }
}
