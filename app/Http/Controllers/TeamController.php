<?php

namespace App\Http\Controllers;

use App\Models\HomeAbout;
use App\Models\HomeTeam;
use Carbon\Carbon;
use Image;
use Illuminate\Http\Request;

class TeamController extends Controller
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
        $teams = HomeTeam::latest()->paginate(4);
        return view("admin.team.index", compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.team.create");
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:home_teams|max:30',
            'name' => 'required|unique:home_teams|max:30',

            'facebook_url' => 'required|unique:home_teams',
            'twitter_url' => 'required|unique:home_teams',
            'instagram_url' => 'required|unique:home_teams',
            'linkind_url' => 'required|unique:home_teams',
            
            'team_image' => 'required|mimes:jpg,jpeg,png',
        ],[
            

            'title.required' => 'Please Input Title ',
            'title.unique' => 'Service ' . $request->title . ' Already Exist',
            'title.max' => 'Maximum Number is 50 Character',

            'name.required' => 'Please Input Name ',
            'name.unique' => 'Team ' . $request->name . ' Already Exist',
            'name.max' => 'Maximum Number is 30 Character',

            'facebook_url.required' => 'Please Input Facebook Url ',
            'facebook_url.unique' => 'Team ' . $request->facebook_url . ' Already Exist',

            'twitter_url.required' => 'Please Input Twitter Url ',
            'twitter_url.unique' => 'Team ' . $request->twitter_url . ' Already Exist',

            'instagram_url.required' => 'Please Input Instagram Url ',
            'instagram_url.unique' => 'Team ' . $request->instagram_url . ' Already Exist',

            'linkind_url.required' => 'Please Input Linkindin Url ',
            'linkind_url.unique' => 'Team ' . $request->linkind_url . ' Already Exist',


            'team_image.required' => 'Please Choose Team Image',
            'team_image.mimes' => 'Team Image type not allowed',
        ]);


        $team_img = $request->file('team_image');

        $name_gen = hexdec(uniqid()).'.'.$team_img->getClientOriginalExtension();
        $upload_location = "images/team_images/";
        
        Image::make($team_img)->resize(550, 500)->save($upload_location.$name_gen);
        
        $image_save_location = $upload_location.$name_gen; // move the image

        HomeTeam::insert([
            'title' => $request->title,
            'name' => $request->name,
            'facebook_url' => $request->facebook_url,
            'twitter_url' => $request->twitter_url,
            'instagram_url' => $request->instagram_url,
            'linkind_url' => $request->linkind_url,
            'team_image' => $image_save_location,
            'created_at' => Carbon::now(),
        ]);



        return redirect()->route('all.team')->with('success', 'Home Team created successfully');
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
        $team = HomeTeam::findOrFail($id);

        // start queryBulder using eloquent
        // $category = DB::table('categories')->where('id', $id)->first();

        return view("admin.team.edit", compact('team'));
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

        $validated = $request->validate([
            'title' => 'required|max:30',
            'name' => 'required|max:30',

            'facebook_url' => 'required',
            'twitter_url' => 'required',
            'instagram_url' => 'required',
            'linkind_url' => 'required',
            
        ],[
            

            'title.required' => 'Please Input Title ',
            'title.max' => 'Maximum Number is 50 Character',

            'name.required' => 'Please Input Name ',
            'name.max' => 'Maximum Number is 30 Character',

            'facebook_url.required' => 'Please Input Facebook Url ',

            'twitter_url.required' => 'Please Input Twitter Url ',

            'instagram_url.required' => 'Please Input Instagram Url ',

            'linkind_url.required' => 'Please Input Linkindin Url ',

        ]);

        $team = HomeTeam::findOrFail($id);

        $old_image = $request->old_image;

        $team_img = $request->file('team_image');

        if ($team_img) {
           
            // laravel image intervention to resize image
            $name_gen = hexdec(uniqid()).'.'.$team_img->getClientOriginalExtension();
            $upload_location = "images/team_images/";
            
            Image::make($team_img)->resize(550, 500)->save($upload_location.$name_gen);
            
            $image_save_location = $upload_location.$name_gen; // move the image

           

            if (!empty($old_image)) {
                # code...
                unlink($old_image);
            }
        

            $team->update([
                'title' => $request->title,
                'name' => $request->name,
                'facebook_url' => $request->facebook_url,
                'twitter_url' => $request->twitter_url,
                'instagram_url' => $request->instagram_url,
                'linkind_url' => $request->linkind_url,
                'team_image' => $image_save_location,
            ]);

            return redirect()->route("all.team")->with('success', 'Home Team updated successfully');
        }else{
            $team->update([
                'title' => $request->title,
                'name' => $request->name,
                'facebook_url' => $request->facebook_url,
                'twitter_url' => $request->twitter_url,
                'instagram_url' => $request->instagram_url,
                'linkind_url' => $request->linkind_url,
            ]);


            return redirect()->route("all.team")->with('success', 'Home Team Updated successfully');
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
        $image = HomeTeam::findOrFail($id); // find id image
        $old_image = $image->team_image; // assign the field  name in db
        unlink($old_image); // delete it

        $service = HomeTeam::findOrFail($id);
        $service->delete();

        return redirect()->back()->with('success', 'Home Team Deleted Permanently');
    }


    // public function exchangeCurrency(Request $request) {
         
    //     $amount = ($request->amount)?($request->amount):(1);
   
    //     $apikey = 'd1ded944220ca6b0c442';
   
    //     $from_Currency = urlencode($request->from_currency);
    //     $to_Currency = urlencode($request->to_currency);
    //     $query =  "{$from_Currency}_{$to_Currency}";
   
    //     // change to the free URL if you're using the free version
    //     $json = file_get_contents("https://www.google.com/finance/markets/currencies");
   
    //     $obj = json_decode($json, true);
         
    //     $val = $obj["$query"];
   
    //     $total = $val['val'] * 1;
   
    //     $formatValue = number_format($total, 2, '.', '');
         
    //     $data = "$amount $from_Currency = $to_Currency $formatValue";
   
    //     echo $data; die;
   
        // return view("admin.team.index", compact("$data"));
       
     }

