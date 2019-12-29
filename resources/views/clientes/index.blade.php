<h3>Clientes:</h3>
<a href="{{route('clientes.create')}}">NOVO CLIENTE</a>
<ul>
    @foreach ($clientes as $cliente)
        <li>
            {{$cliente['id']}} | {{$cliente['nome']}} | 
            <a href="{{route('clientes.edit', $cliente['id'])}}">Editar</a> |
            <a href="{{route('clientes.show', $cliente['id'])}}">Informações</a> |
            <form action="{{route('clientes.destroy', $cliente['id'])}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Remover">
            </form>
        </li>    
    @endforeach 
</ul>