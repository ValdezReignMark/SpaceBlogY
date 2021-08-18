<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
    
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //     $data = User::orderBy('id','DESC')->paginate(5);
    //     return $data;
    // }
    
  
    public function showUser()
    {
        $showUser = User::all();
        return $showUser;
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $roles = Role::pluck('name','name')->all();
    //     return view('users.create',compact('roles'));
    // }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
      
    public function store(Request $request)
    {
    
        $users = new User();
        $users-> name = $request->name;
        $users-> email = $request->email;
        $users-> password = $request->password;
        $users-> save();
        return $users;
       
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $user = User::find($id);
    //     return view('users.show',compact('user'));
    // }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit ($id)
    {
        $users = User::find($id);
        return $users;
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
        
        $users = User::find($id);
        $users-> name = $request->name;
        $users-> email = $request->email;
        $users-> password = $request->password;
        $users-> save();
        return $users;
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $users = User::find($id)->delete();
       return $users;
     
    }

//     public function logout(){
//         Auth::logout();
//     return redirect('/');
//     }
// }

}