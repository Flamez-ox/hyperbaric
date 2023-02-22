<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactForm;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contacts = Contact::all();
        return view("admin.contact.index", compact("contacts"));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.contact.create");
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
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
           
        ],[
            'email.required' => 'Please Input Email Address',

            'phone.required' => 'Please Input Phone No ',

            'address.required' => 'Please Input Address',
            
        ]);

        // start insert using eloquent

        Contact::insert([
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'created_at' => Carbon::now(),
        ]);


        return redirect()->route('admin.contact')->with('success', 'Admin Contact created successfully');
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
        $contact = Contact::findOrFail($id);
        return view("admin.contact.edit", compact('contact'));
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
        Contact::findOrFail($id)->update([
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route("admin.contact")->with('success', 'Admin Contact Updated successfully');

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
        Contact::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Admin Contact Deleted Permanently');
    }


    /**
     * HomeContactDisplay a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function HomeContact()
    {
        //
        $contact = Contact::first();
        return view("pages.contact", compact("contact"));
    }

    /**
     * ContactForm a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ContactForm(Request $request)
    {
        //

        ContactForm::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);


        return redirect()->back()->with('success', 'Your Message Send successfully');
        
    }

    /**
     * AdminMessage a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AdminMessage()
    {
        //
        $messages = ContactForm::latest()->paginate(5);
        return view("admin.contact.message", compact("messages"));
        
    }

    /**
     * AdminDeleteMessage a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AdminDeleteMessage($id)
    {
        //
        ContactForm::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Message Deleted Permanently');
        
    }


    
    public function homeService()
    {
        //
        return view("pages.service");
    }

    public function homeAbout()
    {
        //
        return view("pages.about");
    }

    public function homeTeam()
    {
        //
        return view("pages.team");
    }

    public function privacy()
    {
        //

        return view("pages.privacy");
    }
}
