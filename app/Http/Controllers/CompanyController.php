<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Contact;
use Illuminate\Http\Request;

class CompanyController extends Controller
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
        $companies = Company::all();
        $contacts = Contact::all();
        return view('users.emp_index', compact('companies','contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = Company::all();
        $contact = Contact::all();
        return view('users.emp_create');
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
    public function edit($id)
    {
        $company = Company::find($id);
        $contact = Contact::find($id);
        return view('users.emp_edit', compact('company', 'contact'));
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
        $company = Company::find($id);
        $company -> name = $request -> name;
        $company -> address = $request -> address;
        $company -> RUT = $request -> RUT;
        $company -> telephone = $request -> telephone;
        $company -> email = $request -> email;
        $company -> save();
        $contact = Contact::find($id);
        $contact -> name = $request -> name;
        $contact -> telephone = $request -> telephone;
        $contact -> email = $request -> email;
        $contact -> area = $request -> area;
        $contact -> save();
        return redirect(route('companies.show', $id));
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
