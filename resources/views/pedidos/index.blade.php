
<x-layout title='Listar os Pedidos'>
    <div>
        <h1>Listar os Pedidos/Clientes:</h1>

        <table class="table table-striped table-dark table-responsive">
            <thead>
                <tr>
                <th scope="col">Id Pedido</th>
                <th scope="col">Id Cliente</th>
                <th scope="col">valor frete</th>
                <th scope="col">data de entrega</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                <tr>
                    <th>{{ $pedido -> id_pedido }}</th>
                    <td>{{ $pedido -> id_cliente }}</td>
                    <td>{{ $pedido -> valor_frete }}</td>
                    <td>{{ $pedido -> data_entrega}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>