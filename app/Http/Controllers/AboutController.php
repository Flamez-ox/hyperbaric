<?php

namespace App\Http\Controllers;

use App\Models\HomeAbout;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
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
        $abouts = HomeAbout::latest()->paginate(4);
        return view("admin.about.index", compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.about.create");
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

        $validated = $request->validate([
            'title' => 'required|unique:home_abouts|max:50',
            'short_description' => 'required|unique:home_abouts|max:200',
            'long_description' => 'required|unique:home_abouts|max:700',
           
        ],[
            'short_description.required' => 'Please Input Title Short Description',
            'short_description.unique' => 'About ' . $request->short_description . ' Already Exist',
            'short_description.max' => 'Maximum Number is 200 Character',

            'title.required' => 'Please Input Title ',
            'title.unique' => 'Category ' . $request->title . ' Already Exist',
            'title.max' => 'Maximum Number is 50 Character',

            'long_description.required' => 'Please Input Long Description',
            'long_description.unique' => 'About ' . $request->long_description . ' Already Exist',
            'long_description.max' => 'Maximum Number is 700 Character',
        ]);

        // start insert using eloquent

        HomeAbout::insert([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'created_at' => Carbon::now(),
        ]);


        return redirect()->route('all.about')->with('success', 'Home About created successfully');
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

        $about = HomeAbout::findOrFail($id);

        // start queryBulder using eloquent
        // $category = DB::table('categories')->where('id', $id)->first();

        return view("admin.about.edit", compact('about'));
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
        $about = HomeAbout::findOrFail($id)->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
        ]);

        return redirect()->route("all.about")->with('success', 'Home About Updated successfully');
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

        $about = HomeAbout::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Home About Deleted Permanently');
    }


    
}
