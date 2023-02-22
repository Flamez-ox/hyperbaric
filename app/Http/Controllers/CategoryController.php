<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
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
        // $categories = Category::->latest()->get();
        $categories = Category::latest()->paginate(4);
        $thrashCats = Category::onlyTrashed()->latest()->paginate(3);
        // $categories = DB::table('categories')->latest()->get();
        // $categories = DB::table('categories')->latest()->paginate(4);

        // usind queiry builder for onetoone relationship
        // $categories = DB::table('categories')
        //     ->join('users', 'categories.user_id', 'users.id')
        //     ->select('categories.*', 'users.name')
        //     ->latest()->paginate(4);

        return view("admin.category.index", compact('categories', 'thrashCats'));
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
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:50',
            // 'body' => 'required',
        ],[
            'category_name.required' => 'Please Input Category Name',
            'category_name.unique' => 'Category ' . $request->category_name . ' Already Exist',
            'category_name.max' => 'Maximum Number is 50 Character',
        ]);

        // start insert using eloquent

        Category::insert([
            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        // $category = new Category;

        // $category->category_name = $request->category_name;
        // $category->user_id = Auth::user()->id;
        // $category->save();


        // Category::create([
        //     'category_name' => $request->category_name,
        //     'user_id' => Auth::user()->id,

        
         // end insert using eloquent

        // start insert queiry builder

        // $data = array();

        // $data['category_name'] = $request->category_name;
        // $data['user_id'] = Auth::user()->id;
        
        // end insert queiry builder


        return redirect()->back()->with('success', 'Category created successfully');
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
        $category = Category::findOrFail($id);

        // start queryBulder using eloquent
        // $category = DB::table('categories')->where('id', $id)->first();

        return view("admin.category.edit", compact('category'));
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
        // start edit using eloquent orm
        $category = Category::findOrFail($id)->update([
            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id,
        ]);


        // start queryBulder using eloquent
        // $data = array();
        // $data['category_name'] = $request->category_name;
        // $data['user_id'] = Auth::user()->id;
        // DB::table('categories')->where('id', $id)->update($data);

        return redirect()->route("all.category")->with('success', 'Category Updated successfully');

    }



    
    /**
     * softDelete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function softDelete($id)
    {
        //
        $delete = Category::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Category Move to Trash successfully');
    }

    /**
     * restoreDelete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restoreDelete($id)
    {
        //
        $delete = Category::withTrashed()->findOrFail($id)->restore();

        return redirect()->back()->with('success', 'Category Restore successfully');
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

        $delete = Category::onlyTrashed($id)->findOrFail($id)->forceDelete();

        return redirect()->back()->with('success', 'Category Deleted Permanently');
    }
}
