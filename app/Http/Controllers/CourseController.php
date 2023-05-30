<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Company;
use App\Models\Profesional;
use App\Models\Profile;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
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
        $course ->nombre = $request->nombre;
        $course ->duracion = $request->duracion;
        $course ->id_areas = $request->id_areas;
        $course ->descripcion = $request->descripcion;
        $course ->observaciones = $request->observaciones;
        $course ->fecha_inicial = $request->fecha_inicial;
        $course ->fecha_final = $request->fecha_final;
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
        return view('users.courses_show', compact('course'));
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
        $companies = Company::all();
        return view('users.courses_edit', compact('courses','profesional','companies'));
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
        $course ->nombre = $request->nombre;
        $course ->fecha_inicial = $request->fecha_inicial;
        $course ->fecha_final = $request->fecha_final;
        $course ->duracion=$request->duracion;
        $course ->descripcion = $request->descripcion;
        $course ->observaciones = $request->observaciones;
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
