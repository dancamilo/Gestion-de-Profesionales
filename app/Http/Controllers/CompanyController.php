<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Profesional;
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
        $courses = Course::all();
        return view('users.emp_index', compact('companies','contacts','courses'));
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
        $course = Course::all();
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
        // $validatedData = $request->validate([
        //     'nameCmp' => 'required',
        //     'bussName' => 'required',
        //     'RUT' => 'required',
        //     'phoneCmp' => 'required',
        //     'emailCmp' => 'required',
        //     'nameCnt' => 'required',
        //     'phoneCnt' => 'required',
        //     'emailCnt' => 'required'
        // ]);
        $contact = new Contact();
        $contact -> nameCnt = $request -> nameCnt;
        $contact -> docIdentity = $request -> docIdentity;
        $contact -> appointment = $request -> appointment;
        $contact -> phoneCnt = $request -> phoneCnt;
        $contact -> cellular = $request -> cellular;
        $contact -> emailCnt = $request -> emailCnt;
        $contact -> save();
        $company = new Company();
        $company -> nameCmp = $request -> nameCmp;
        $company -> bussName = $request -> bussName;
        $company -> RUT = $request -> RUT;
        $company -> NIT = $request -> NIT;
        $company -> check = $request -> check;
        $company -> country = $request -> country;
        $company -> ecoActivity = $request ->ecoActivity;
        $company -> address = $request -> address;
        $company -> location = $request -> location;
        $company -> employees = $request -> employees;
        $company -> compSize = $request -> compSize;
        $company -> emailCmp = $request -> emailCmp;
        $company -> webPage = $request -> webPage;
        $company -> id_contacts = $contact->id;
        $company -> save();
        $course = new Course();
        $course -> name = $request -> name;
        $course -> id_profesional = $request -> input('name');
        $course -> id_companies = $company -> id;
        $course -> save();
        return redirect(route('companies.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        {
            $company = Company::find($id);
            $contact = Contact::find($id);
            $courses = Course::where('id_companies', $company->id)->get();
            return view('users.emp_show', compact('company', 'contact','courses'));
        }
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
        $company -> nameCmp = $request -> nameCmp;
        $company -> address = $request -> address;
        $company -> RUT = $request -> RUT;
        $company -> phoneCmp = $request -> phoneCmp;
        $company -> emailCmp = $request -> emailCmp;
        $company -> save();
        $contact = Contact::find($id);
        $contact -> nameCnt = $request -> nameCnt;
        $contact -> phoneCnt = $request -> phoneCnt;
        $contact -> emailCnt = $request -> emailCnt;
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
