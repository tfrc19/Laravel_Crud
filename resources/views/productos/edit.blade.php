@extends('../layouts.plantilla')
<title>Formulario de Editar</title>
@section('cabecera')
<div class="texto"><h3>Editar</h3></div>
@endsection

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="contenedor-form">
            <form method="post" action="/productos/{{$producto->id}}">
                <input type="text" name="NombreArticulo"   placeholder="Nombre del Articulo" id="NombreArticulo" value="{{$producto->NombreArticulo}}">
                    <input type="text" name="Seccion" id="SeccionArticulo" placeholder="Seccion del Articulo" value="{{$producto->Seccion}}" >
                    <input type="number" name="Precio" id="" placeholder="Precio del Articulo" value="{{$producto->Precio}}">
                    <input type="date" name="Fecha" id="" placeholder="Fecha del Articulo" value="{{$producto->Fecha}}">
                    <input type="text"  name="PaisOrigen" id="PaisOrigen" placeholder="Paise de Origen del Articulo" value="{{$producto->PaisOrigen}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                    <input type="submit" class="btn btn-primary btn-md" value="Actualizar" id="enviar">
                </form>
            <form action="/productos/{{$producto->id}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" value="DELETE" name="_method">
                <input type="submit" class="btn btn-primary-outline" value="Eliminar" style="margin-top: 0px;">
            </form>
            </div> 
        </div>
    </div>
</div>
@endsection

@section('pie')
    
@endsection