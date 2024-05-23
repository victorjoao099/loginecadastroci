<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

session()->start();

class Logout extends BaseController
{
    public function index()
    {
        $acesso = session();
        $itens_arrays = ['nomeCompleto', 'email'];
        $acesso->remove('$itens_arrays');
        echo ("<script>window.location=\"login\"</script>;");
        dd($acesso);
        return view('logout');
    }
}
