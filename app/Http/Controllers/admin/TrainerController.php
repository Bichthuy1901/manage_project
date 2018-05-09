<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Constracts\TrainerRepository;
use App\Constracts\UserRepository;

use App\Http\Requests\TrainerRequest;

class TrainerController extends Controller
{    protected $trainer, $user;

    public function __construct(TrainerRepository $trainer, UserRepository $user) {
        $this->trainer = $trainer;
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers= $this->trainer->paginate(10, []);

        return view ('admin.trainer.index' ,compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trainer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainerRequest $request)
    {
        $data = $request->all();
        $trainer= $this->trainer->create($data);
        if ($trainer)
        {   
            $data_user = [
                'name' => $trainer->trainer_code,
                'password' => $trainer->trainer_code,
                'userable_type' => 'App/Models/Trainer',
                'userable_id' => $trainer->id
            ];
            $this->user->create($data_user);
            return redirect()->route('trainer.create')->with('success', trans('the trainer has been successfully!'));

        }
        else 
        {
            return redirect()->route('trainer.create')->with('error', trans('the trainer has been create failed!'));
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
        $trainer = $this->trainer->find($id, []);
        return view('admin.trainer.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrainerRequest $request, $id)
    {
        dd(1);
         $data = $request->all();
       if ($this->trainer->update($id, $data)) {
            return redirect()->route('trainer.edit', ['id' => $id])->with('error', trans('The trainer has been successfully edited!'));
        } else {
            return redirect()->route('trainer.edit', ['id' => $id])->with('success', trans('The trainer has been edited failed!'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        if($request->ajax()){
            if ($this->trainer->delete($id)){
                $user = $this->user->model()->where('userable_type', 'App/Models/Trainer')
                ->where('userable_id', $id)->delete();    
                return response(['status'=>trans('messages.success')]);
            }
            return response(['status'=>trans('messages.failed')]);
        }
    }
    public function search(Request $request){
        if ($request->ajax()) {
            $trainers = $this->trainer->search($request->keyword);
            $view = view('admin.trainer.list_trainer', compact('trainers'))->render();
             return response(['trainers' => $view]);
        }

    }
}
