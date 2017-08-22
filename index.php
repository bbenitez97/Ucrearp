
<!DOCTYPE html>
<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.js"></script>
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap/bootstrap.min.js"></script>
  <link href="bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

</head>
<body>
<center>

<div class="container">
  <h2>Universidad CREARP</h2>
  <br>
  <br>
  <button type="button" class="btn btn-default btn-lg" id="myBtn">Iniciar sesion</button>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px; background-color: #0006A3;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="background-color: #0006A3;"><span class="fa fa-unlock-alt"></span>UCREARP</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="sesion/sesion.php" method="post">
            <div class="form-group">
              <label for="usrname"><span class="fa fa-user"></span> Usuario</label>
              <input type="text" class="form-control" id="usrname" placeholder="Ingrese usuario" name="usuario" required/>
            </div>
            <div class="form-group">
              <label for="psw"><span class="fa fa-key"></span> Contraseña</label>
              <input type="password" class="form-control" id="psw" placeholder="Ingrese Contrase&ntilde;a" name="pw" required/>
            </div>
              <button type="submit" class="btn btn-success btn-block" style="background-color: #0006A3;"><span class="menu-icon icon-checkmark"></span>Ingresar</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="fa fa-times"></span> Cancelar</button>
          
        </div>
      </div>
      
    </div>
  </div> 
</div>

</center>

<br>



<center>
<div class="container">
  
  <button type="button" class="btn btn-default btn-lg" id="myBtnreg">Registrarse</button>

  <div class="modal fade" id="myModalreg" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px; background-color: #0006A3;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="background-color: #0006A3;"><span class="fa fa-unlock-alt"></span>UCREARP</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="pages/registrarUsuarios.php" method="post">

            <div class="form-group">
              <label for="usrname">Id usuario*</label>
              <input type="text" class="form-control" id="usrname" placeholder="Ingrese Id" name="usuario" required/>
            </div>

             <div class="form-group">
              <label>Nombre*</label>
              <input class="form-control" type="text" placeholder="Ingrese Nombre" name="nom" required>
            </div>

            <div class="form-group">
              <label>Apellido*</label>
              <input class="form-control" type="text" placeholder="Ingrese Apellido" name="ape" required>
            </div>

            <div class="form-group">
              <label>Email*</label>
              <input class="form-control" type="email" placeholder="Ingrese Email" name="email" required>
            </div>

            <div class="form-group">
              <label>Contraseña</label>
              <input class="form-control" type="password" placeholder="Crear Contraseña" name="pw">
            </div>

            <div class="form-group" style="display: none;">
              <label>Rol</label>
              <input class="form-control" type="number" placeholder="Crear Contraseña" name="rol" value="1">
            </div>

              <button type="submit" class="btn btn-success btn-block" style="background-color: #0006A3;"><span class="menu-icon icon-checkmark"></span>Registrar</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="fa fa-times"></span> Cancelar</button>
          
        </div>
      </div>
      
    </div>
  </div> 
  </div> 
</div>

</center>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

<script>
$(document).ready(function(){
    $("#myBtnreg").click(function(){
        $("#myModalreg").modal();
    });
});
</script>

</body>
</html>