<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;

class Cadastro extends BaseController
{
    public function index()
    {
        //dd($this->request->getMethod());
        helper('form');
        if ($this->request->getMethod() == 'POST') {
            $usuarioModel = model("UsuarioModel");
            $usuarioData = $this->request->getPost();
            // dd($usuarioModel->check($usuarioData['email'], $usuarioData['senha']));
            if ($usuarioModel->check($usuarioData['email'], $usuarioData['senha'])) {
                echo ("<script>alert('Não é possível utilizar esse email, por favor, inclua outro');window.location=\"cadastro\";</script>");
            } else {
                echo ("<script>alert('usuário criado com sucesso');window.location=\"login\";</script>");
            }
            try {
                // dd($usuarioData);
                if (!$usuarioModel->save($usuarioData)) {
                    echo ("<script>alert('usuario criado com sucesso');</script>");
                    exit;
                    // return redirect()->route('login.index');
                }
            } catch (Exception $e) {
                $data['msg'] = "Erro ao criar usuário";
            }
        }
        return view('cadastro');
    }
}
