<a href="{{ route('albunes.index') }}">← Volver a la Lista</a>

<h2>Registrar Genero</h2>
<form action="{{ route('genero.store') }}" method="POST">
    @csrf
    <label>Nombre del Genero:</label>
    <input type="text" name="nombre" required>
    
    <button type="submit">Guardar Genero</button>
</form>