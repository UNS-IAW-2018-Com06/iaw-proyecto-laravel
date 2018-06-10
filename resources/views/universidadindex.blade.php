<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Panel de Administracion </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>

  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif

    <table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Provincia</th>
        <th>Ciudad</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Web</th>
        <th>Latitud</th>
        <th>Longitud</th>
        <th>Carreras de Grado</th>
        <th colspan="2">Acciones</th>
      </tr>
    </thead>
    <tbody> 
      
       @foreach($uni as $universidad)
      <tr>
        <td>{{$universidad->nombre}}</td>
        <td>{{$universidad->provincia}}</td>
        <td>{{$universidad->ciudad}}</td>
        <td>{{$universidad->dirección}}</td>
        @if(!empty($universidad->telefono))
            <td>{{$universidad->telefono}}</td>
        @else
            <td>no especificado</td>
        @endif
        @if(!empty($universidad->web))
        <td>{{$universidad->web}}</td>  
        @else
            <td>no especificado</td>
        @endif       
        <td>{{$universidad->coordenadas[0]}}</td>      
        <td>{{$universidad->coordenadas[1]}}</td> 
        @if(!empty($universidad->carreras_grado))
        <td> <select> 
             @foreach($universidad->carreras_grado as $carrera)
                 <option>   {{$carrera->nombre_carrera}}    </option>
             @endforeach
           </select> 
        </td>
        @else
            <td> no especificado</td>
        @endif
        <td><a href="{{action('UniversidadController@edit', $universidad->_id)}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('UniversidadController@destroy', $universidad->_id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminar item?');" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
     
      <tr>
        <a href="{{action('UniversidadController@store')}}" class="btn btn-warning">Agregar</a>
      </tr>

    </tbody>
    </table>
   </div>
  </body>
</html>