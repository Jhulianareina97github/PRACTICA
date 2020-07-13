<? php
session_start ();

if (! isset ( $ _SESSION [ 'access_token' ])) {
	encabezado ( "Ubicación: login.php" );
	salida ();
}
?>
<!DOCTYPE html >
<html  lang = " en " >
<head >
	<meta  charset = " UTF-8 " >
	<meta  name = " viewport " content = " ancho = ancho del dispositivo, escala inicial = 1.0 " >
	<meta  http-equiv = " X-UA-Compatible " content = " ie = edge " >
	<Enlace  rel = " hoja de estilo " href =" https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css " integridad =" SHA384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS " crossorigin =" anónimo " >
	<título > Mi perfil </ título >
</head >
<body >
	
<div  class = " container " style = " margin-top: 100px " >
	<div  class = " row justify-content-center " >
		<div  class = " col-md-3 " >
			< img  src = " <? php  echo  $ _SESSION [ 'userData' ] [ 'picture' ] [ 'url' ] ?> " >
		</div >

		<div  class = " col-md-9 " >
			<table  class = " table table-hover table-bordered " >
				</body >
					<tr >
						<td > ID </ td >
						<td > <? php  echo  $ _SESSION [ 'userData' ] [ 'id' ] ?> </ td >
					</tr >
					<tr >
						< td > Nombre </ td >
						< td > <? php  echo  $ _SESSION [ 'userData' ] [ 'first_name' ] ?> </ td >
					</tr >
					<tr >
						<td > Apellido </ td >
						<td > <? php  echo  $ _SESSION [ 'userData' ] [ 'last_name' ] ?> </ td >
					</tr >
					<tr >
						<td > Correo electrónico </ td >
						<td > <? php  echo  $ _SESSION [ 'userData' ] [ 'email' ] ?> </ td >
					</tr >
				</body >
			</table >
		</div >
	</div >
</div >


</body >
</html >