@extends('../layouts.plantilla')
<title>Formulario de insercion</title>
@section('cabecera')
<div class="texto"><h3>Show</h3></div>
@endsection

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="contenedor-form">
                <form method="post" action="/productos">
                <input type="text" name="NombreArticulo"   placeholder="Nombre del Articulo" id="NombreArticulo" value="{{$producto->NombreArticulo}}">
                    <input type="text" name="SeccionArticulo" id="SeccionArticulo" placeholder="Seccion del Articulo" value="{{$producto->Seccion}}" >
                    <input type="number" name="PrecioArticulo" id="" placeholder="Precio del Articulo" value="{{$producto->Precio}}">
                    <input type="date" name="FechaArticulo" id="" placeholder="Fecha del Articulo" value="{{$producto->Fecha}}">
                    <input type="text"  name="PaisOrigen" id="PaisOrigen" placeholder="Paise de Origen del Articulo" value="{{$producto->PaisOrigen}}">
                    {{csrf_field()}}
                    <input type="submit" class="btn btn-primary btn-md" value="Actualizar" id="enviar">
                </form>
            </div> 
        </div>
    </div>
</div>
@endsection

@section('pie')
    
@endsection