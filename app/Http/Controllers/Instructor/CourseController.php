<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Level;
use App\Models\Price;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{

    //Proteger rutas de route resource con sus propios permisos de spatie,
    // requiere que el usuario tenga un rol de spatie, no solo el rol principal.
    public function __construct()
    {
        $this->middleware('can:Leer cursos')->only('index');
        $this->middleware('can:Crear cursos')->only('create', 'store');
        $this->middleware('can:Actualizar cursos')->only('edit', 'update', 'goals');
        $this->middleware('can:Eliminar cursos')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('instructor.courses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Es necesario para laravel colletive qie se le pase el id y el name para poder hacer el desplegable
        $categories = Category::pluck('name', 'id');
        $levels = Level::pluck('name', 'id');
        $prices = Price::pluck('name', 'id');

        return view('instructor.courses.create', compact('categories', 'levels', 'prices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:courses',
            'subtitle' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'level_id' => 'required',
            'price_id' => 'required',
            'file' => 'image'
        ]);

        //Metodo para guardar los archivos en la carpeta course y pasar la url a la base de datos
        $course = Course::create($request->all());

        if($request->file('file')){
           $url = Storage::put('courses', $request->file('file'));

           $course->image()->create([
               'url' => $url
           ]);
        }

        return redirect()->route('instructor.courses.index', $course)->with('info', 'Curso creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('instructor.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //Este authorize está trabajando con el policy CoursePolicy y verifica que los cursos solo puedan ser modificados 
        //por sus creadores(editados), primer parametro nombre del método del policy y segundo parametro el objeto, en este caso $course
        $this->authorize('dicatated', $course);

        // Es necesario para laravel colletive qie se le pase el id y el name para poder hacer el desplegable
        $categories = Category::pluck('name', 'id');
        $levels = Level::pluck('name', 'id');
        $prices = Price::pluck('name', 'id');

        return view('instructor.courses.edit', compact('course', 'categories', 'levels', 'prices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //Este authorize está trabajando con el policy CoursePolicy y verifica que los cursos solo puedan ser modificados 
        //por sus creadores (editados), primer parametro nombre del método del policy y segundo parametro el objeto, en este caso $course
        $this->authorize('dicatated', $course);

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:courses,slug,' . $course->id,
            'subtitle' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'level_id' => 'required',
            'price_id' => 'required',
            'file' => 'image'
        ]);

        $course->update($request->all());

        if($request->file('file')){
            $url = Storage::put('courses', $request->file('file'));

            if ($course->image) {
                Storage::delete($course->image->url);

                $course->image->update([
                    'url' => $url
                ]);
            }else{
                $course->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('instructor.courses.edit', $course);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //No funciona este método, me da error 403 acción no autorizada
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('instructor.courses.index')->with('infodestroy', 'Curso eliminado con éxito');
    }

    public function goals(Course $course){

        //Este authorize está trabajando con el policy CoursePolicy y verifica que los cursos solo puedan ser modificados 
        //por sus creadores(editados), primer parametro nombre del método del policy y segundo parametro el objeto, en este caso $course
        $this->authorize('dicatated', $course);
        
       return view('instructor.courses.goals', compact('course'));
    }

    public function status(Course $course){

        $course->status = 2;
        $course->save();
       
        return redirect()->route('instructor.courses.edit', $course);
    }

    public function statusBack(Course $course){

        $course->status = 2;
        $course->save();

        //Resetea las observaciones cuando vuelvo a solicitar la revisión del curso
        $course->observationCourse->delete();
       
        return redirect()->route('instructor.courses.edit', $course);
    }

    public function statusPaused(Course $course){

        $course->status = 4;
        $course->save();
       
        return redirect()->route('instructor.courses.edit', $course);
    }

    public function observation(Course $course){

        return view('instructor.validate.observation', compact('course'));
    }

    
}
