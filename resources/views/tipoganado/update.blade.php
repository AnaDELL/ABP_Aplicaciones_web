@extends("Inicio.lau")
@section("title","Modificar ganados")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("tganado")}}"><i class="fa fa-backspace"></i> Regresar</a>
        </div>
    </div>
    <h3 class="text-primary text-center">Editar Ganado</h3>

    <div class="row justify-content-md-center">

        <div class="col-8">
            <form action="{{route("tganado.update",$tganado->id_tipoganado)}}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="desc_ganado">tipo ganado</label>
                    <input type="text" id="desc_ganado" name="desc_ganado" class="form-control"  placeholder="Ingresa nuevo tipo">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Guardar</i></button>
            </form>
        </div>
    </div>
@endsection
