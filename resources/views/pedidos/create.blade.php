
<x-layout title='Cadastrar Pedidos' >
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
        <h1>Cadastrar Pedidos:</h1>

        <form action="/cadastrar-pedidos" method="POST" style="background: #ffb43e">
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
            <button type="submit" class="btn btn-primary" style="background:#5d1c0c" >Submit</button>
            </form>
    </div>

</x-layout>