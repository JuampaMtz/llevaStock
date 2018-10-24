<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <script type="text/javascript" src="js\fontawesome-all.js"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="css/inicioSesionStyle.css">

</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html">LLEVA TU <b>STOCK</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registrar un nuevo usuario</p>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="usernameRg" name= "usernameRg" aria-describedby="basic-addon1">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Email" aria-label="emailRg" name="emailRg" aria-describedby="basic-addon1">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Password" aria-label="passwordRg" id="passwordRg" aria-describedby="basic-addon1">
                        <span class="input-group-text" id="basic-addon1"><i id="ojitoRg" class="far fa-eye-slash" onclick="cambiarVistaPwRg();"></i></span>
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Retype password" aria-label="passwordRgRt" id="passwordRgRt" aria-describedby="basic-addon1">
                        <span class="input-group-text" id="basic-addon1"><i id="ojitoRgRt" class="far fa-eye-slash" onclick="cambiarVistaPwRgRt();"></i></span>
                        
                      </div>

        <div class="row">
          <div class="col-12">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox" ><font size="2"> Acepto los <a href="#">términos</a> de uso </font></input>
              </label>
              <hr>
            </div>
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>          
          <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Registrarse</button>
            </div>
          </div>
      </form>
      <hr>

      <a href="inicioSesion" class="text-center">Ya tengo un usuario</a>
    </div>
  </div>
</div>
<footer class="footer" style="background-color: #4281E8; text-align:right;">
  <div class="row">
      <div class="container-fluid">
        <div class="col">
            <span class="text"><b>Contáctanos</b></span>
          </div>
          <div class="col">
            <span><i class="tamañoIconos fab fa-facebook"></i></span>
            <span><i class="tamañoIconos fab fa-instagram"></i></span>
            <span><i class="tamañoIconos fab fa-twitter-square"></i></span>
          </div>
        </div>
  </div>
</footer>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
 /* $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })*/


  function cambiarVistaPwRg()
  {
    if ($('#passwordRg').attr('type') == 'text') 
    {
      $('#passwordRg').attr('type','password');
      $('#ojitoRg').removeClass();
      $('#ojitoRg').addClass('far fa-eye-slash');

    }
    else
    {
      $('#passwordRg').attr('type','text');
      $('#ojitoRg').removeClass();
      $('#ojitoRg').addClass('fas fa-eye');
    }
  }
  function cambiarVistaPwRgRt()
  {
    if ($('#passwordRgRt').attr('type') == 'text') 
    {
      $('#passwordRgRt').attr('type','password');
      $('#ojitoRgRt').removeClass();
      $('#ojitoRgRt').addClass('far fa-eye-slash');
    }
    else
    {
      $('#passwordRgRt').attr('type','text');
      $('#ojitoRgRt').removeClass();
      $('#ojitoRgRt').addClass('fas fa-eye');
    }
  }
</script>
</body>
</html>
