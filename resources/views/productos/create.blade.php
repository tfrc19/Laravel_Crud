@extends('../layouts.plantilla')
<title>Formulario de contacto</title>
@section('cabecera')
    
@endsection

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contenedor-form">
                    <form method="post" action="/productos">

                        <input type="text" name="NombreArticulo"   placeholder="Nombre del Articulo" id="NombreArticulo">
                        <input type="text" name="SeccionArticulo" id="SeccionArticulo" placeholder="Seccion del Articulo" >
                        <input type="number" name="PrecioArticulo" id="" placeholder="Precio del Articulo">
                        <input type="date" name="FechaArticulo" id="" placeholder="Fecha del Articulo">
                        <input type="text"  name="PaisOrigen" id="PaisOrigen" placeholder="Paise de Origen del Articulo">
                        {{csrf_field()}}
                        <input type="submit" class="btn btn-primary btn-md" value="Enviar" id="enviar">
                    </form>
                </div>
               
            </div>
        </div>
    </div>
@endsection

@section('pie')
    
@endsection