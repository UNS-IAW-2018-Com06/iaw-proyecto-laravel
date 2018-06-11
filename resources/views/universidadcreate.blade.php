<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Creacion</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

  </head>

<body>
    <div class="container">
        <h2>Agregar nueva Universidad</h2><br/>
            <form method="post" id="formEdit" action="{{url('add')}}">
                {{csrf_field() }}
                <div class="form-group">
                    <label for="Nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" required autofocus>
                </div>
                <h4>Ubicación</h4>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Provincia">Provincia:</label>
                        <input type="text" class="form-control" name="provincia" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Ciudad">Ciudad:</label>
                        <input type="text" class="form-control" name="ciudad" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Direccion">Direccion:</label>
                        <input type="text" class="form-control" name="direccion" required>
                    </div>
                </div>
                <h4>Contacto</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Telefono">Telefono:</label>
                        <input type="text" class="form-control" name="telefono" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Web">Web:</label>
                        <input type="text" class="form-control" name="web" required>
                    </div>
                </div>
                <h4>Localización Geográfica</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Latitud"> Latitud:</label>
                        <input type="Number" class="form-control" name="coordenadas0" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Longitud">Longitud:</label>
                        <input  type= "Number" class="form-control" name="coordenadas1" required>
                    </div>
                </div>
                <div class="form-group ">
                    <button id="addUni" type="button" class="btn btn-success">Agregar Carrera</button>
                </div>
                <div class="form-group ">
                    <button type="submit" class="btn btn-success" >Crear Universidad</button>
                </div>
                <div>
                    <input class="btn btn-primary" type="button" value="Volver" onclick="history.back()">
                </div>
            </form>
    </div>
</body>

  <script>
        var i = 0;
        $('#addUni').click(function(){
            $('#formEdit').find('button[id="addUni"]').before('<h4>Carrera</h4>'+
                                                                '<div class="form-row">'+
                                                                    '<div class="form-group col-md-6">'+
                                                                        '<label for="nombre">Nombre:</label>'+
                                                                        '<input type="text" class="form-control" name="nombre" required>'+
                                                                    '</div>'+
                                                                    '<div class="form-group col-md-6">'+
                                                                        '<label for="duracion">Duracion:</label>'+
                                                                        '<input type="text" class="form-control" name="duracion" required>'+
                                                                    '</div>'+
                                                                '</div>');
        });
    </script>
</html>