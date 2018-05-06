<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Constracts\ProjectRepository;
use App\Constracts\TrainerRepository;
use App\Constracts\TypeRepository;
use Auth;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller
{
    protected $project, $trainer, $type;

    public function __construct(
        ProjectRepository $project,
        TrainerRepository $trainer,
        TypeRepository $type
    ) {
        $this->project = $project;
        $this->trainer = $trainer;
        $this->type = $type;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainers = $this->trainer->all();
        $types = $this->type->all();

        return view('student.request_project', compact('trainers', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        $data = $request->all();
        $data['status'] = config('custom.project.status.request');
        $project = $this->project->create($data);
        if ($project) {
            return redirect()->route('student.project_request.store')->with('success', 'Project has been successfully requested!');
        } else {
            return redirect()->route('student.project_request.store')->with('error', 'Project has been requested failed!');
        }
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
