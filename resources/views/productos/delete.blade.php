@extends('../layouts.plantilla')
<title>Formulario de eliminacion</title>
@section('cabecera')
    
@endsection

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="post">
                    <input type="text" name="NombreArticulo" id="">
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
@endsection

@section('pie')
    
@endsection