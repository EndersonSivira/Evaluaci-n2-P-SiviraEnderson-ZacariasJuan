<nav style="margin-bottom: 20px;">
    <a href="{{ route('genero.create') }}">
        + Registrar Genero
    </a>
    <a href="{{ route('albunes.create') }}" >
        + Registrar Albumes
    </a>
</nav>

<hr>
<h1>Lista de Albunes</h1>
<hr>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Año de Lanzamiento</th>
            <th>Discografia</th>
            <th>genero</th>
        </tr>
    </thead>
    <tbody>
        @foreach($album as $albunes)
        <tr>
            <td>{{ $album->nombre_album }}</td>
            <td>{{ $album->año_lanzamiento }}</td>
            <td>{{ $album->discografia }}</td>
            <td>{{ $album->genero_id }}</td>
        </tr>
        @endforeach
    </tbody>
</table>