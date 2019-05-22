@extends("Inicio.lau")
@section("title","Login")

@section("content")
    <div>
        <form action="{{url("peliculas")}}" method="post">
    </div>
    <h1 align="center" font size="5">Registro de usuarios</h1>
    <div>
        <div>
            <label>nombre</label>
            <input type="text" placeholder="nombre">

            <label>apellido paterno</label>
            <input type="text">

            <label>apellido materno</label>
            <input type="text">

            <label>correo electronico</label>
            <input type="text">

            <label>nombre de usuario</label>
            <input type="text" placeholder="ingresa nombre de usuario">

            <label>contraseña</label>
            <input type="text" placeholder="ingresa contraseña">

        </div>
        <div>
            <label></label>
        </div>
    </div>
@endsection
