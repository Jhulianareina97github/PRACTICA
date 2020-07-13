  
<? php
require_once ( 'config.php' );

if ( isset ( $ _SESSION [ 'access_token' ])) {
  encabezado ( "Ubicación: index.php" );
  salida ();
}
$ redirectTo = "http: //localhost/loginfb/callback.php" ;
$ datos = [ 'correo electrónico' ];
$ fullURL = $ handler -> getLoginUrl ( $ redirectTo , $ data );
?>

<!DOCTYPE html >
<html  lang = " en " >
<bead>
  <meta  charset = " UTF-8 " >
  <meta  name = " viewport " content = " ancho = ancho del dispositivo, escala inicial = 1.0 " >
  <meta  http-equiv = " X-UA-Compatible " content = " ie = edge " >
  <Enlace  rel = " hoja de estilo " href =" https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css " integridad =" SHA384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS " crossorigin =" anónimo " >
  <título > Inicie sesión con Facebook </ título >
</head>
<body>
  <div  class = " container " style = " margin-top: 100px " >
    <div  class = " row justify-content-center " >
      <div  class = " col-md-6 col-md-offset-3 " align = " center " >
        <formulario >
          <div  class = " form-group " >
            <label  for = " exampleInputEmail1 " > Dirección de correo electrónico </ label >
            <input  type = " email " class = " form-control " id = " exampleInputEmail1 " aria- shownby = " emailHelp " placeholder = " Ingresar correo electrónico " >
            <small  id = " emailHelp " class = " form-text text-muted " > Nunca compartiremos su correo electrónico con nadie más. </small >
          </div >
          <div  class = " form-group " >
            <label  for = " exampleInputPassword1 " > Contraseña </ label >
            <input  type = " password " class = " form-control " id = " exampleInputPassword1 " placeholder = " Password " >
          </div >
          <div  class = " form-check " >
            <input  type = " checkbox " class = " form-check-input " id = " exampleCheck1 " >
            <label  class = " form-check-label " for = " exampleCheck1 " > Mírame </ label >
          </div >
          <input  type = " submit " value = " Enter " class = " btn btn-primary " >
          <input  type = " button " onclick = " window.location = ' <? php  echo  $ fullURL  ?> ' " value = " Iniciar sesión en Facebook " class = " btn btn-primary " >
        </form >
      </div >
    </div >
  </div >

</body >
</html >
