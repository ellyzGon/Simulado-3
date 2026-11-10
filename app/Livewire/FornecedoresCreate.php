<?php

namespace App\Livewire;

use App\Models\Fornecedores;
use Livewire\Component;

class FornecedoresCreate extends Component
{
    public $nome;
    public $CNPJ;
    public $telefone;
    public $endereco;
    public $email;

    public function create(){
        Fornecedores::create([
            'nome'=>$this->nome,
            'CNPJ'=>$this->CNPJ,
            'telefone'=>$this->telefone,
            'endereco'=>$this->endereco,
            'email'=>$this->email
        ]);
        session()->flash(
    'success',
    'Produto cadastrado com sucesso!'
);
    }

    public function render()
    {
        return view('livewire.fornecedores-create');
    }
}
