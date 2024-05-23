<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        if ($this->request->getMethod() === 'POST') {
            $usuarioModel = model('UsuarioModel');

            $usuarioCheck = $usuarioModel->check(
                $this->request->getPost('email'),
                $this->request->getPost('senha')
            );
            if (!$usuarioCheck) {
                echo ("<script>alert('Usuário ou senha inválidos')</script>");
            } else {
                //salva os dados na sessão e redireciona para a página restrita
                echo ("<script>alert('Seja bem-vindo ao nosso site');window.location=\"admin\";</script>");
                // $session->set('nomeCompleto',  $usuarioCheck->nomeCompleto);
            }
            $acesso = session_start();
        }
        return view('login');
    }
}
