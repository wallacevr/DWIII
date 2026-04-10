<div class="p-6 bg-gray-100 min-h-screen">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-gray-700">Gerenciar Clientes</h1>
        <button wire:click="create"
            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
            Novo Cliente
        </button>
    </div>

    @if($isOpen)
        <div class="bg-white p-6 rounded shadow mb-6">
            <form  class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600">Nome</label>
                    <input type="text" wire:model="nome"
                        class="w-full border-gray-300 rounded mt-1 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" wire:model="email"
                        class="w-full border-gray-300 rounded mt-1 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600">Telefone</label>
                    <input type="text" wire:model="telefone"
                        class="w-full border-gray-300 rounded mt-1 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="flex justify-end space-x-2">
                    <button type="button" wire:click="$set('isOpen', false)"
                        class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded">
                        Cancelar
                    </button>
                    @if(!$editing)
                        <button type="button" wire:click="store"
                            class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
                            Salvar
                        </button>
                    @else
                        <button type="button" wire:click="update"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">
                            Atualizar
                        </button>
                    @endif
 
                </div>
            </form>
        </div>
    @endif

    <div class="bg-white rounded shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nome</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Telefone</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Ações</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($clientes as $cliente)
                    <tr>
                        <td class="px-6 py-4">{{ $cliente->nome }}</td>
                        <td class="px-6 py-4">{{ $cliente->email }}</td>
                        <td class="px-6 py-4">{{ $cliente->telefone }}</td>
                        <td class="px-6 py-4 text-right space-x-2">
                            <button wire:click="edit({{ $cliente->id }})"
                                class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">
                                Editar
                            </button>
                            <button wire:click="delete({{ $cliente->id }})"
                                class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">
                                Excluir
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
