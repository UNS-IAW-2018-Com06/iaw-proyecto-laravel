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
        <h2>Laravel MongoDB CRUD Tutorial With Example</h2><br/>
        <div class="container">
        </div>
        <form method="post" id="formEdit" action="{{url('add')}}">
            @csrf
            <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            </div>
            <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Provincia">Provincia:</label>
                <input type="text" class="form-control" name="provincia">
            </div>
            </div>
            <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Ciudad">Ciudad:</label>
                <input type="text" class="form-control" name="ciudad">
            </div>
            </div>
            <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Direccion">Direccion:</label>
                <input type="text" class="form-control" name="direccion">
            </div>
            </div>
            <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Telefono">Telefono:</label>
                <input type="text" class="form-control" name="telefono">
            </div>
            </div>
            <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Web">Web:</label>
                <input type="text" class="form-control" name="web">
            </div>
            </div>
            <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success">Submit</button>
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