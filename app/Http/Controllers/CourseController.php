<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Course;
use App\Models\Company;
use App\Models\Profesional;
use App\Models\Profile;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
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
        $courses = Course::all();
        return view('users.courses_index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profiles = Profile::all();
        $profesionals = Profesional::all();
        $companies = Company::all();
        return view ('users.courses_create',compact('profiles','profesionals', 'companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course();
        $course ->name = $request->name;
        $course ->term = $request->term;
        $course ->id_areas = $request->id_areas;
        $course ->details = $request->details;
        $course ->observations = $request->observations;
        $course ->startDate = $request->startDate;
        $course ->endDate = $request->endDate;
        $course ->id_profesionals = $request->id_profesionals;
        $course ->id_companies = $request->id_companies;
        $course->save();
        return redirect(route('courses.index')) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        $profesional = Profesional::find($course->id_profesionals);
        $company = Company::find($course->id_companies);
        $area = Area::find($course->id_areas);
        return view('users.courses_show', compact('course','profesional','company','area'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = Course::find($id);
        $profesional = Profesional::all();
        $areas = Area::all();
        $companies = Company::all();
        return view('users.courses_edit', compact('courses','profesional','companies','areas'));
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
        $course = Course::find($id);
        $course ->name = $request->name;
        $course ->term = $request->term;
        $course ->details = $request->details;
        $course ->observations = $request->observations;
        $course ->startDate = $request->startDate;
        $course ->endDate = $request->endDate;
        $course ->id_profesionals = $request->id_profesionals; 
        $course ->id_areas = $request->id_areas;  
        $course->save();
        return redirect(route('courses.index', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $course = Course::find($id);
            $course->destroy($id);
            return redirect(route('courses.index'));
        } catch (Exception $th) {
            $error = ['name'=>'500', 'des'=>'No se puede borrar este curso, ya que algun registro depende de este curso'];
            return view('error', compact('error'));
        }
    }
}
