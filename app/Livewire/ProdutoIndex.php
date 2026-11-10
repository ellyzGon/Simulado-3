<?php

namespace App\Livewire;

use Livewire\Component;

class ProdutoIndex extends Component
{
    public $nome;
    public $descricao;
    public $marca;
    public $categoria;
    public $unidade_medida;
    public $preco_custo;
    public $preco_venda;
    public $quantidade;
    public $estoque_minimo;
    public $fornecedores;

    public function render()
    {
        return view('livewire.produto-index');
    }
}
