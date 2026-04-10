<div class="p-6 bg-gray-100 min-h-screen">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-gray-700">Gerenciar Produtos</h1>
        <button wire:click="create"
            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
            Novo Produto
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
                    <label class="block text-sm font-medium text-gray-600">Preço</label>
                    <input type="text" wire:model="preco"
                        class="w-full border-gray-300 rounded mt-1 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600">Estoque</label>
                    <input type="number" wire:model="estoque"
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
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Preço</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Estoque</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Ações</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($produtos as $produto)
                    <tr>
                        <td class="px-6 py-4">{{ $produto->nome }}</td>
                        <td class="px-6 py-4">R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                        <td class="px-6 py-4">{{ $produto->estoque }}</td>
                        <td class="px-6 py-4 text-right space-x-2">
                            <button wire:click="edit({{ $produto->id }})"
                                class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">
                                Editar
                            </button>
                            <button wire:click="delete({{ $produto->id }})"
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
