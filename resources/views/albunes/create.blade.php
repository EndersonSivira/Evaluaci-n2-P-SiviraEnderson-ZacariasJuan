<a href="{{ route('albunes.index') }}">← Volver a la Lista</a>
<h1>Registrar Albunes</h1>
@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('albunes.store') }}" method="POST">
    @csrf <div>
        <label>Nombre del album:</label><br>
        <input type="text" name="nombre_album" value="{{ old('nombre_album') }}"> 
        @error('nombre_album') <small style="color:red">{{ $message }}</small> @enderror
    </div>

    <br>

    <div>
        <label>Año del Lanzamiento:</label><br>
        <input type="text" name="año_lanzamiento" value="{{ old('año_lanzamiento') }}">
        @error('año_lanzamiento') <small style="color:red">{{ $message }}</small> @enderror
    </div>

    <div>
        <label>Discografia:</label><br>
        <input type="int" name="discografia" value="{{ old('discografia') }}">
        @error('discografia') <small style="color:red">{{ $message }}</small> @enderror
    </div>

    <br>

    <div>
        <label>Genero:</label><br>
        <select name="genero_id">
            <option value="" selected disabled>Seleccione un genero</option>
                @foreach($genero as $item)
                    <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                @endforeach
        </select>
    </div>

    <br>

    <button type="submit">Guardar</button>
</form>