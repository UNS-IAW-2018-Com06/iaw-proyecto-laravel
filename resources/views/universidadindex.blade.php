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
        <th>Latitud</th>
        <th>Longitud</th>
        <th>Carreras de Grado</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody> 
      @foreach($uni as $universidad)
        {{$universidad->nombre}}<br>
        {{$universidad->ciudad}}<br>
        {{$universidad->provincia}}<br>
        {{$universidad->dirección}}<br>
        @foreach($universidad->coordenadas as $coord)
           {{$coord}}<br>

        @endforeach

        @if(!empty($universidad->carreras_grado))
            @foreach($universidad->carreras_grado as $c)
              {{$c->nombre_carrera}}<br>

            @endforeach
        @endif
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