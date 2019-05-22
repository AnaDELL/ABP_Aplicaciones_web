@extends("Inicio.lau")
@section("title","Agergar dispositivos")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("dispositivos")}}"><i class="fa fa-backspace"></i> Regresar</a>
        </div>
    </div>
    <h3 class="text-primary text-center">Editar dispositivo</h3>

    <div class="row justify-content-md-center">

        <div class="col-8">
            <form action="{{route("dispositivos.update",$dispositivo->id_dispositivo)}}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="clave_dis">Dispositivo</label>
                    <input type="text" id="clave_dis" name="clave_dis" class="form-control"  placeholder="Ingresa nuevo dispositivo">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Guardar</i></button>
            </form>
        </div>
    </div>
@endsection
