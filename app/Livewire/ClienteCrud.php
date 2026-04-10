<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cliente;
class ClienteCrud extends Component
{
    public $clientes, $nome, $email, $telefone, $cliente_id;
    public $isOpen = false;
    public $editing = false;

    public function render()
    {
        $this->clientes = Cliente::all();
        return view('livewire.cliente-crud')->layout('layouts.app');
    }

    public function create()
    {
        $this->resetFields();
        $this->isOpen = true;
    }

    public function store()
    {
        Cliente::create([
            'nome' => $this->nome,
            'email' => $this->email,
            'telefone' => $this->telefone,
        ]);

        $this->isOpen = false;
        $this->resetFields();
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        $this->cliente_id = $id;
        $this->nome = $cliente->nome;
        $this->email = $cliente->email;
        $this->telefone = $cliente->telefone;
        $this->isOpen = true;
        $this->editing = true;
    }

    public function update()
    {
        $cliente = Cliente::findOrFail($this->cliente_id);
        $cliente->update([
            'nome' => $this->nome,
            'email' => $this->email,
            'telefone' => $this->telefone,
        ]);

        $this->isOpen = false;
        $this->editing = false;
        $this->resetFields();
    }

    public function delete($id)
    {
        Cliente::find($id)->delete();
    }

    private function resetFields()
    {
        $this->cliente_id = null;
        $this->nome = '';
        $this->email = '';
        $this->telefone = '';
        $this->editing = false;
    }
}
