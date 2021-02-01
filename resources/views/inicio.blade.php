@extends('layouts.plantilla')

@section('cabecera')
    
@endsection

@section('contenido')
    <div class="container">
       <div class="row">
           <div class="col-6">
               <div class="card">
               <!--<img class="card-img-top img-fluid" src="/images/Fernandrc.png" alt="" >-->
                   <div class="card-body">
                       <h4 class="card-title" style="align-content: center; text-align:center;">Agregar Nuevo Producto</h4>
                   <p class="card-text justify-content-center" style="align-content: center; text-align:center;"><button class="btn btn-outline-primary "><a href="{{url('/productos/create')}}">Agregar</a></button></p>
                   </div>
               </div>
           </div>

           <div class="col-6">
            <div class="card">
            <!--<img class="card-img-top img-fluid" src="/images/Fernandrc.png" alt="" >-->
                <div class="card-body">
                    <h4 class="card-title" style="align-content: center; text-align:center;">Ver Productos</h4>
                <p class="card-text justify-content-center" style="align-content: center; text-align:center;"><button class="btn btn-outline-primary "><a href="{{url('/productos')}}">Ver</a></button></p>
                </div>
            </div>
        </div>
       </div>
    </div>
@endsection

@section('pie')
    
@endsection