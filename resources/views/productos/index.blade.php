@extends('../layouts.plantilla')
<title>Formulario de contacto</title>
@section('cabecera')
    <div class="texto">
        <h3>Registros</h3>
    </div>

@endsection

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contenido-table">
                    <table class="table table-striped">
                        <tr>
                            <th>Articulo</th>
                            <th>Seccion</th>
                            <th>Precio</th>
                            <th>Fecha</th>
                            <th>Pais de Origen</th>
                        </tr>
                        @if (isset($productos))
                            @if (sizeof($productos) > 0)
                                @foreach ($productos as $producto)
                                    <tr>
                                        <td>{{ $producto->NombreArticulo }} </td>
                                        <td>{{ $producto->Seccion }} </td>
                                        <td>{{ $producto->Precio }} </td>
                                        <td>{{ $producto->Fecha }} </td>
                                        <td>{{ $producto->PaisOrigen }} </td>
                                        <td><a href="{{ route('productos.edit', $producto->id) }}" class="edit"><i
                                                    class="far fa-edit"></i></a></td>
                                        <!--<td>
                                <form method="post" action="/productos/{{ $producto->id }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit"><a href="#"  class="delete"><i class="far fa-trash-alt"></i></a></button>
                                </form>
                                </td>-->
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>{{ 'No existe' }}</td>
                                </tr>
                            @endif



                        @endif

                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('pie')

@endsection
