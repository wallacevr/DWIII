<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Produto;
class ProdutoCrud extends Component
{
    public $produtos, $nome, $preco, $estoque, $produto_id;
    public $isOpen = false;
    public $editing = false;

    public function render()
    {
        $this->produtos = Produto::all();
        return view('livewire.produto-crud')->layout('layouts.app');
    }

    public function create()
    {
        $this->resetFields();
        $this->isOpen = true;
    }

    public function store()
    {
        Produto::Create([
            'nome' => $this->nome,
            'preco' => $this->preco,
            'estoque' => $this->estoque,
        ]);

        $this->isOpen = false;
        $this->resetFields();
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        $this->produto_id = $id;
        $this->nome = $produto->nome;
        $this->preco = $produto->preco;
        $this->estoque = $produto->estoque;
        $this->isOpen = true;
        $this->editing = true;
    }

    public function update()
    {
        $produto = Produto::findOrFail($this->produto_id);
        $produto->update([
            'nome' => $this->nome,
            'preco' => $this->preco,
            'estoque' => $this->estoque,
        ]);

        $this->isOpen = false;
        $this->editing = false;
        $this->resetFields();
    }

    public function delete($id)
    {
        Produto::find($id)->delete();
    }
   

    private function resetFields()
    {
        $this->produto_id = null;
        $this->nome = '';
        $this->preco = '';
        $this->estoque = '';
        $this->editing = false;
    }
}
