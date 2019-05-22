@extends("Inicio.lau")
@section("title","Agergar tipos de ganado")
@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("tganado")}}"><i class="fa fa-backspace">Regresar</i></a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{url("tganado")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="desc_ganado">Tipo de Ganado</label>
                    <input type="text" id="desc_ganado" name="desc_ganado" class="form-control"  placeholder="Ingresa tipo de ganado">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Guardar</i></button>
            </form>
        </div>
    </div>
@endsection
