@extends("Inicio.lau")
@section("title","Dispositivos")
@section("content")
    <style>

    </style>
    <div class="row justify-content-md-center">
        <div class="">
            <div class="col">
                <a class="btn btn-success" href="{{url("dispositivos/create")}}"><i class="fa fa-plus" > Dispositivo</i></a>
            </div>
        </div>
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Dispositivo</th>
                    <th >Eliminar</th>
                    <th>Modificar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dispositivos as $dispositivo)
                    <tr>
                        <td>{{$dispositivo->id_dispositivo}}</td>
                        <td>{{$dispositivo->clave_dis}}</td>
                        <td>
                            <form action="{{route("dispositivos.destroy",$dispositivo->id_dispositivo)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{url("dispositivos",$dispositivo->id_dispositivo)}}/edit" class="btn btn-outline-success"><i class="far fa-edit"></i> </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
