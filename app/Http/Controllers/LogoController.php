<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

use Image;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //
        
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
    public function edit()
    {
        //
        $logo = Logo::findOrFail(1);
        return view('admin.logo.logo_all', compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $logo_id = $request->id; // the id is from hidden input fielf from form

        if ($request->file('logo_image')) {
            # code...

            $image = $request->file('logo_image');

            // we wnt to generate an id wen we upload an image
            // hexdec() : to create a unique id
            $image_name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension(); // i.e 54545.jpg

            Image::make($image)->resize(154,53)->save('images/logo/'.$image_name_gen);

            $save_url = 'images/logo/'.$image_name_gen;

            Logo::findOrFail($logo_id)->update([
                'title' => $request->title,
                'logo_image' => $save_url,
                'video_url' => $request->video_url,
            ]);

            $notification = array(
                'message'=>'Logo  Updated with Image Successfully',
                'alert-type'=>'success',
            );
            return redirect()->back()->with($notification);
        }else {
            Logo::findOrFail($logo_id)->update([
                'title' => $request->title,
                'video_url' => $request->video_url,
            ]);

            $notification = array(
                'message'=>'Logo Updated without Image Successfully',
                'alert-type'=>'success',
            );
            return redirect()->back()->with($notification);
        } // End else

        
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
