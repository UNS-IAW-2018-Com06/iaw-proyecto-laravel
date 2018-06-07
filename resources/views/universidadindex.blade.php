<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
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
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody> 
      @foreach($universidades as $universidad)
      <tr>
        <td>{{$universidad->nombre}}</td>
        <td>{{$universidad->provincia}}</td>
        <td>{{$universidad->ciudad}}</td>
        <td>{{$universidad->direccion}}</td>
        <td>{{$universidad->telefono}}</td>
        <td>{{$universidad->web}}</td>        
        <td><a href="{{action('UniversidadController@edit', $universidad->id)}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('UniversidadController@destroy', $universidad->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
      </tbody>
    </table>
      <tr>
        <a href="{{action('UniversidadController@store')}}" class="btn btn-warning">Agregar</a>
      </tr>
    </tbody>
    </table>
   </div>
  </body>
</html>