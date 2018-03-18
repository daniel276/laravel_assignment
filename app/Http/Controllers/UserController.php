<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Redirect;

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
        return Redirect::to('all');
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
        return view('detailForm')->with('users',$user);
    }

    public function delete($id){
//        $user = $this->user->where('id',$id)->delete();
        $user = $this->user->find($id);
        $user->delete();
        return Redirect::to('all');
    }

    public function goupdate(Request $req, $id){
        $query = $this->user->find($id);

        $name = $req->name;
        $email = $req->email;
        $password = md5($req->password);

        $query->name = $name;
        $query->email = $email;
        $query->password = $password;

        $query->save();

        return Redirect::to('all');
    }



}
