
<x-layout title='Listar os Pedidos'>
    <div>
        <header class="navbar navbar-expand-sm navbar-dark  sticky-top  "> 
        <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            Geraldo Fulgêncio
            </a>
        </div>
        </nav>
    </div>
    <div>
        <h1>Listar os Pedidos/Clientes:</h1>

        @include('components/flash-message')

        <table class="table table-striped table-responsive " style="background: #ffb43e">
            <thead>
                <tr>
                <th scope="col">Id Pedido</th>
                <th scope="col">Id Cliente</th>
                <th scope="col">Nome</th>
                <th scope="col">valor frete</th>
                <th scope="col">data de entrega</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                <tr>
                    <th>{{ $pedido -> id_pedido }}</th>
                    <td>{{ $pedido -> id_cliente }}</td>
                    <td></td>
                    <td>{{ $pedido -> valor_frete }}</td>
                    <td>{{ $pedido -> data_entrega}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>