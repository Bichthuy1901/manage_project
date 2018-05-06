<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Constracts\AdminRepository;
use App\Constracts\UserRepository;

use App\Http\Requests\AdminRequest;

class AdminController extends Controller
{    protected $admin, $user;

    public function __construct(AdminRepository $admin, UserRepository $user) {
        $this->admin = $admin;
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins= $this->admin->paginate(10, []);

        return view ('admin.admin.index' ,compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
        $data = $request->all();
        $admin= $this->admin->create($data);
        if ($admin)
        {   
            $data_user = [
                'name' => $admin->email,
                'password' => '123456',
                'userable_type' => 'App/Models/Admin',
                'userable_id' => $admin->id
            ];
            $this->user->create($data_user);
            return redirect()->route('admin.create')->with('success', trans('Admin has been successfully!'));

        }
        else 
        {
            return redirect()->route('admin.create')->with('error', trans('Admin has been create failed!'));
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
        $admin = $this->admin->find($id, []);
        return view('admin.admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest $request, $id)
    {
         $data = $request->all();
       if ($this->admin->update($id, $data)) {
            return redirect()->route('admin.edit', ['id' => $id])->with('error', trans('The trainer has been successfully edited!'));
        } else {
            return redirect()->route('admin.edit', ['id' => $id])->with('success', trans('The trainer has been edited failed!'));
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
            if ($this->admin->delete($id)){
                $user = $this->user->model()->where('userable_type', 'App/Models/Admin')
                ->where('userable_id', $id)->delete();    
                return response(['status'=>trans('messages.success')]);
            }
            return response(['status'=>trans('messages.failed')]);
        }
    }
    public function search(Request $request){
        if ($request->ajax()) {
            $admins = $this->admin->search($request->keyword);
            $view = view('admin.admin.list_admin', compact('admins'))->render();
             return response(['admins' => $view]);
        }

    }
}
