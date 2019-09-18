<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cms\Users\Repositories\UserRepositoryInterface;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    protected $userRepository;

    function __construct(UserRepositoryInterface $userInterface)
    {
        $this->userRepository = $userInterface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /** Obtiene todos los usuarios del modelo User */
        $users = $this->userRepository->all();
        /** Retorna a la vista todos los usuarios encontrados */
        return view('admin.users.index', compact('users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('avatar');
        $fileName = $file->getClientOriginalName();
        $path = '/files/avatars/'.$fileName;
        $file->move('files/avatars/', $fileName);
        
        $this->userRepository->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'avatar' => $path,
            'status' => $request->status
            ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->findOrFail($id);
        return view('admin.users.edit', compact('user'));
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
        $user = $this->userRepository->findOrFail($id);

        $validatedData = $request->validate([
            'password' => 'required',
            'new_password' => 'confirmed|min:8|different:password',
        ]);

        if (Hash::check($request->password, $user->password)) {

            $file = $request->file('avatar');
            $fileName = $file->getClientOriginalName();
            $path = '/files/avatars/'.$fileName;
            $file->move('files/avatars/', $fileName);
            
            // $request->user()->fill([
            $user->fill([
                'name' => $request->name,
                'email' => $request->email,
                'avatar' => $path,
                'status' => $request->status,
                'password' => Hash::make($request->newPassword)
             ])->save();

            $request->session()->flash('success', 'Password changed');
            return redirect()->route('users.index');
            
        } else {
            $request->session()->flash('error', 'Password does not match');
            return redirect()->route('users.index');
        } 

        
        // return redirect('users')->with("success", "regístro actualizado!");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->findOrFail($id);
        $user->delete();
        return redirect('users')->with('delete', 'archivo eliminado!!');
    }
}
