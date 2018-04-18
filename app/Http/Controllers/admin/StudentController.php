<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Constracts\ClassRepository;
use App\Constracts\StudentRepository;
use App\Constracts\CourseRepository;
use App\Constracts\BranchRepository;
use App\Http\Requests\StudentRequest;


class StudentController extends Controller
{
    protected $class, $student, $course, $branch;

    public function __construct(ClassRepository $class, StudentRepository $student, CourseRepository $course, BranchRepository $branch ) {
        $this->student = $student;
        $this->class = $class;
        $this->course = $course;
        $this->branch = $branch;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $students= $this->student->paginate(10, []);
      return view ('admin.user.index' ,compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = $this->class->all();
        $courses = $this->course->all();
        $branches = $this->branch->all();

        Return view('admin.user.create', compact('classes', 'courses', 'branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $data = $request->all();
        $student= $this->student->create($data);
        if ($student)
        {
            $data_user = [
                'name' => $student->student_code,
                'password' => $student->student_code,
                'userable_type' => 'students',
                'userable_id' => $student->id
            ];
             $this->user->create($data);
            return redirect()->route('user.create')->with('success', trans('the user has been successfully!'));

        }
        else 
        {
            return redirect()->route('user.create')->with('error', trans('the user has been create failed!'));
        }
        dd($user);
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
    {   $classes = $this->class->all();
        $courses = $this->course->all();
        $branches = $this->branch->all();

        $user = $this->student->find($id, []);
        return view('admin.user.edit',compact('user', 'classes', 'courses', 'branches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id)
    {
       $data = $request->all();
       if ($this->student->update($id, $data)) {
            return redirect()->route('user.edit', ['id' => $id])->with('error', trans('The user has been successfully edited!'));
        } else {
            return redirect()->route('user.edit', ['id' => $id])->with('success', trans('The user has been edited failed!'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request ,$id)
    {
        if($request->ajax()){
            if ($this->student->delete($id)){
                return response(['status'=>trans('messages.success')]);
            }
            return response(['status'=>trans('messages.failed')]);
        }
    }
    public function search(Request $request){
        if ($request->ajax()) {
            $students = $this->student->search($request->keyword);
            $view = view('admin.user.list_user', compact('students'))->render();
             return response(['students' => $view]);
        }

    }
}
