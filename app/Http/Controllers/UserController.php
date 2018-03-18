<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller{
    protected $user;
      public function __construct(UserModel $user){
        $this->user=$user;
    }


    public function register(Request $request){
      // echo $request->name;
      // echo $request->email;
      // echo "  ";
      // echo $request->pass;
      // echo "  ";

      $user = [
          "name"    =>$request->name,
          "email"   =>$request->email,
          "password"=>md5($request->password)
      ];
      $user = $this->user->create($user);

      if($user){
        return "sucess created";
      }else
        return "failed";

    }

    public function all(){
      $users = $this->user->all();
      return view ("all")->with('users',$users);
    }

    public function find($id){
      $user = $this->user->find($id);
//      $user = $this->user->where("id","=",$id);
        return view('update')->with('users',$user);
    }

    public function detail(Request $req, $id){
        $query = $this->user->find($id);

        $name = $req->name;
        $email = $req->email;
        $password = md5($req->password);

        $query->name = $name;
        $query->email = $email;
        $query->password = $password;

        $update = $query->save();

        return redirect('/all');
    }

    public function delete($id){
        $user = $this->user->where('id',$id)->delete();
        return view('/all');
    }

}