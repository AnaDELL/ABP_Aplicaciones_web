@extends("Inicio.lau")
@section("title","Agergar dispositivos")
@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("dispositivos")}}"><i class="fa fa-backspace">Regresar</i></a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{url("dispositivos")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="clave_dis">Clave del dispositivo</label>
                    <input type="text" id="clave_dis" name="clave_dis" class="form-control"  placeholder="Ingresa Clave del dispositivo">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Guardar</i></button>
            </form>
        </div>
    </div>
@endsection
