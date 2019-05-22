@extends("Inicio.lau")
@section("title","Tipos Ganados")
@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("tganado/create")}}"><i class="fa fa-plus"> Agregar</i></a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Dispositivo</th>
                    <th>Eliminar</th>
                    <th>Modificar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tganados as $tganado)
                    <tr>
                        <td>{{$tganado->id_tipoganado}}</td>
                        <td>{{$tganado->desc_ganado}}</td>
                        <td>
                            <form action="{{route("tganado.destroy",$tganado->id_tipoganado)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{url("tganado",$tganado->id_tipoganado)}}/edit" class="btn btn-outline-success"><i class="far fa-edit"></i> </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
