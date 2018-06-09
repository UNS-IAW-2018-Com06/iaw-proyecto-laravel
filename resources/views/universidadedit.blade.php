<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel MongoDB CRUD Tutorial With Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>

  <body>
    <div class="container">
        <h2>Modificacion de datos</h2><br/>
        <div class="container"> </div>
        <form method="post" id="formEdit" action="{{action('UniversidadController@update', $id)}}">
            @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                     <label for="Nombre">Nombre:</label>
                     <input type="text" class="form-control" name="nombre" value="{{$universidad->nombre}}" required>
               </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                     <label for="Provincia">Provincia:</label>
                     <input type="text" class="form-control" name="provincia" value="{{$universidad->provincia}}" required>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4"></div>
               <div class="form-group col-md-4">
                     <label for="Ciudad">Ciudad:</label>
                     <input type="text" class="form-control" name="ciudad" value="{{$universidad->ciudad}}" required>
                </div>
                </div>
            <div class="row">
                 <div class="col-md-4"></div>
                 <div class="form-group col-md-4">
                     <label for="Direccion">Direccion:</label>
                     <input type="text" class="form-control" name="direccion" value="{{$universidad->direccion}}" required>
                 </div>
            </div>
            <div class="row">
                 <div class="col-md-4"></div>
                 <div class="form-group col-md-4">
                      <label for="Telefono">Telefono:</label>
                      <input type="text" class="form-control" name="telefono" value="{{$universidad->telefono}}" required>
                 </div>
            </div>
            <div class="row">
                 <div class="col-md-4"></div>
                 <div class="form-group col-md-4">
                     <label for="Web">Web:</label>
                     <input type="text" class="form-control" name="web" value="{{$universidad->web}}" required>
                  </div>
            </div>
            <div class="row">
                 <div class="col-md-4"></div>
                 <div class="form-group col-md-4">
                     <label for="Latitud">Latitud:</label>
                     <input type="text" class="form-control" name="coordenadas[0]" value="{{$universidad->coordenadas[0]}}" required>
                  </div>
            </div>
            <div class="row">
                 <div class="col-md-4"></div>
                 <div class="form-group col-md-4">
                     <label for="Longitud">Longitud:</label>
                     <input type="text" class="form-control" name="coordenadas[1]" value="{{$universidad->coordenadas[1]}}" required>
                  </div>
            </div>
            <div class="row">
               <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>

       <div class="row">
       <div class="col-md-4"></div>
       <div class="form-group col-md-4">
           <form>
               <input type="button" value="Volver" onclick="history.back()">
            </form>
        </div>
        </div>

    </div>
  </body>
</html>