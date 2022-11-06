<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this -> userModel = new UserModel();
    }
    public function index()
    {
        return view('users', ['users' =>  $this -> userModel -> findAll()] );
    }

    public function delete($id) {
        if ($this -> userModel -> delete($id)){
            echo view('messages', ['message' => 'Usuário Excluído com Sucesso!']);
        }else{
            echo view('messages', ['message' => 'Erro Na Exclusão.']);
        }


    }
}
