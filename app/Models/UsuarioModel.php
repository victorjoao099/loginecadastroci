<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nomeCompleto', 'email', 'senha'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nomeCompleto' => 'required',
        'email' => 'required|is_unique[usuarios.email]',
        'senha' => 'required'
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['hashSenha'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function hashSenha($data){
        $data['data']['senha'] = password_hash($data['data']['senha'], PASSWORD_DEFAULT);
        return $data;
    }

    public function check ($email, $senha) {

        //  Busca o email
        $buscaEmail = $this->where('email', $email)->first() ?? [];
        // dd($buscaEmail);
        if(count($buscaEmail) == 0){
            return false;
        }
        
         //validar a senha
        if(!password_verify($senha, $buscaEmail['senha'])){
            return false;
        }
        return true;

    }
}