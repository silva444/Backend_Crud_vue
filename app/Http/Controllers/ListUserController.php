<?php

namespace App\Http\Controllers;

use App\Models\ListUser;

use Illuminate\Http\Request;

class ListUserController extends Controller
{
    public function listagem(Request $request){
        $list_user = ListUser::all();
        return response()->json($list_user);

    } 
    public function Adicionar(Request $request){
      $newUser = new ListUser();
      $newUser->name = $request->name;
      $newUser->email = $request->email;
      $newUser->save();
    //----------------------------------------------------------------------
    // $newUser = ListUser::create([ // inserir no banco de dados; // retorna o model do resgitro para essa varivel;

    //           'name' => $request->name,
    //           'email' => $request->email

    //      ]);
      return response()->json($newUser);
    } 
    public function Update(ListUser $user, Request $request){
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return response()->json('sucess');
    } 
    public function Editar(ListUser $user, Request $request){
        return response()->json($user);

    } 
    public function delete(ListUser $user, Request $request){

        $user->delete();
        return response()->json('Sucess');

    } 
}
