@extends("Inicio.lau")
@section("title","Animales")

@section("content")
    <div class="row justify-content-md-center">

</div>

<div class="row justify-content-md-center">
    <div class="col-8">
        <form action="{{url("animales")}}" method="post">
            <h1 class="bg-info text-white text-center text-">Registro de animales</h1>
            @csrf

            <div class="form-group">
                <label for="Ganadero">Ganadero</label>
                <select name="id_ganadero" id="id_ganadero">
                    @foreach($ganaderos as $ganadero)
                        <option value="{{$ganadero->id_ganadero}}" >{{$ganadero->usuario}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="sexo">Sexo</label>
                <select name="id_sexo" id="id_sexo">
                    @foreach($sexos as $sexo)
                        <option value="{{$sexo->id_sexo}}" >{{$sexo->desc_sexo}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="titulo">Tipo de Ganado</label>
                <select name="id_tipoganado" id="id_tipoganado">
                    @foreach($tganados as $ganado)
                        <option value="{{$ganado->id_tipoganado}}" >{{$ganado->desc_ganado}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="titulo">Dispositivo</label>
                <select name="id_dispositivo" id="id_dispositivo">
                    @foreach($dispositivos as $dispositivo)
                        <option value="{{$dispositivo->id_dispositivo}}" >{{$dispositivo->clave_dis}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="clave">Clave de animal</label>
                <input type="text" id="clave" name="clave" class="form-control"  placeholder="Ingresa una clave para el animal">
            </div>

            <div class="form-group">
                <label for="peso">Peso</label>
                <input type="text" id="peso" name="peso" class="form-control"  placeholder="Ingresa peso de animal">
            </div>

            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" id="edad" name="edad" class="form-text"  placeholder="Años">
            </div>

            <button type="submit" class="btn-danger"><i class="fa fa-times"> Cancelar</i></button>
            <button type="submit" class="btn btn-group-sm"><i class="fa fa-save "> Guardar</i></button>
        </form>
    </div>
</div>
@endsection
