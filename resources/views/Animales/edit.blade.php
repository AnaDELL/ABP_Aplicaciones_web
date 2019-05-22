@extends("Inicio.lau")
@section("title","Animales")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("animales")}}"><i class="fa fa-backspace"></i> Regresar</a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{route("animales.update",$animale->id_animal)}}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="id_ganadero">Ganadero</label>
                    <select name="id_ganadero" id="id_ganadero">
                        @foreach($ganaderos as $ganadero)
                            <option value="{{$ganadero->id_ganadero}}" {{$animale->id_ganadero==$ganadero->id_ganadero?"selected":""}}>{{$ganadero->usuario}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="id_sexo">Sexo</label>
                    <select name="id_sexo" id="id_sexo">
                        @foreach($sexos as $sexo)
                            <option value="{{$sexo->id_sexo}}" {{$animale->id_sexo==$sexo->id_sexo?"selected":""}}>{{$sexo->desc_sexo}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="id_tipoganado">tipo de ganado</label>
                    <select name="id_tipoganado" id="id_tipoganado">
                        @foreach($tganados as $tganado)
                            <option value="{{$tganado->id_tipoganado}}" {{$animale->id_tipoganado==$tganado->id_tipoganado?"selected":""}}>{{$tganado->desc_ganado}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="titulo">Dispositivo</label>
                    <select name="id_dispositivo" id="id_dispositivo">
                        @foreach($dispositivos as $dispositivo)
                            <option value="{{$dispositivo->id_dispositivo}}" {{$animale->id_dispositivo==$dispositivo->id_dispositivo?"selected":""}}>{{$dispositivo->clave_dis}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="peso">Peso</label>
                    <input type="text"  value="{{$animale->peso}}"id="peso" name="peso" class="form-control"  placeholder="peso">
                </div>

                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="text" value="{{$animale->edad}}" id="edad" name="edad" class="form-control"  placeholder="edad">
                </div>


                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection
