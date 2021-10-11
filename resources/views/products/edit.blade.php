@extends('layouts.main')
@section('contenido')
 <div class="container"><br>
     <div class="row">
         <div class="col-md-12">
             <div class="card">
                 <div class="hard-header">
                     Editar Producto
                 </div>
                 <div class="card-body">
                     <form action="{{route('products.update', $pruduct->id)}}" method="POST">
                         @method('put')
                         @csrf
                         <div class="form-group">
                             <label form="">Descripcion</label>
                             <input type="text" name="description" value="{{$product->description}}" class="form-control"  >
                         </div>
                         <div class="form-group">
                             <label form="">Precio</label>
                             <input type="number" name="price" value="{{$product->price}}" class="form-control">
                         </div>
                         <button type="submit" class="btn btn-primary">Guardar</button>
                         <a href="{{ route ('products.index') }}" class="btn btn-danger">Cancelar</a>
                     </form>        
                 </div>    
             </div>
        </div>
     </div>
</div>
@endsection