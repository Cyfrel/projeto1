
<x-layout title='Cadastrar Pedidos'>
    <div>
        <h1>Cadastrar Pedidos:</h1>

        <form action="/cadastrar-pedidos" method="POST">
            @csrf
            <div class="form-group">
                <label >ID do Cliente</label>
                <input type="number" class="form-control" id="id_cliente" name="id_cliente" required>
            </div>
            <div class="form-group">
                <label >Valor do Frete</label>
                <input type="number" class="form-control" id="valor_frete" name="valor_frete" required>
            </div>
            <div class="form-group">
                <label >Data de Entrega</label>
                <input type="date" class="form-control" id="data_entrega" name="data_entrega" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</x-layout>