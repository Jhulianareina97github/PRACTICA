<? php
require_once ( "config.php" );

prueba {
    $ accessToken = $ manejador -> getAccessToken ();
} catch (\ Facebook \ Exceptions \ FacebookResponseException  $ e ) {
    echo  "Excepción de respuesta:" . $ e -> getMessage ();
    salida ();
} catch (\ Facebook \ Exceptions \ FacebookSDKException  $ e ) {
    echo  "SDK Exception:" . $ e -> getMessage ();
    salida ();
}

if (! $ accessToken ) {
    header ( 'Ubicación: login.php' );
    salida ();
}

$ oAuth2Client = $ FBObject -> getOAuth2Client ();
if (! $ accessToken -> isLongLived ())
    $ accessToken = $ oAuth2Client -> getLongLivedAccesToken ( $ accessToken );

    $ respuesta = $ FBObject -> get ( "/ me? fields = id, first_name, last_name, email, picture.type (large)" , $ accessToken );
    $ userData = $ respuesta -> getGraphNode () -> asArray ();
    $ _SESSION [ 'userData' ] = $ userData ;
    $ _SESSION [ 'access_token' ] = ( cadena ) $ accessToken ;
    encabezado ( 'Ubicación: index.php' );
    salida ();
?>