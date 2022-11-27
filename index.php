<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/inicio.css">
    <link rel="stylesheet" type="text/css" href="Librerias/ALERTIFY/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="Librerias/ALERTIFY/themes/default.css">
    <link rel="stylesheet" type="text/css" href="Librerias/boostrap/css/bootstrap.css">
    <script src="Librerias/JQUERY/jquery-3.6.0.min.js"></script>
    <script src="Librerias/boostrap/js/bootstrap.js"></script>
    <script src="Librerias/ALERTIFY/alertify.js"></script>
    <title>Calendario della luna</title>
</head>

<body>
    <div class="container">

        <div class="abs-center">
            <form action="php/validar.php" method="get" class="p-5 form">
                <div class="form-group">
                    <!---------------------------------------->
                    <button type="button" class="btn btn-secondary btn-lg" data-toggle="modal"
                        data-target="#ventanaModal1">Admin</button>
                    <a type="button" href="php/welcome.php" class="btn btn-primary btn-lg">Entrare</a>

                     (registro del usuario comentado)
                                          <h2 class="mb-4 text-white">Calendario Lunare</h2>
                                             <h3 class="h3 text-white">Utente</h3>
                                          <input type="text" name="utente" formControlName="usuario" class="form-control text-center">
                                             <h3 class="h3 text-white">pasword</h3>
                                          <input type="password" name="pass" formControlName="pass" class="form-control text-center">
                                          <div class="row justify-content-center">
                                                <button class="btn btn-primary btn-sm" type="submit" >Entrare</button>
                                          </div>
                                          <div class="row justify-content-center">
                                          <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#ventanaModal">Registrare</button> 
                                          </div>
                     <!---------------------------------------->                     
                </div>
            </form>

        </div>

    </div>
    <!--modal registro usuario-->
                    <main class="container">
                        <div class="modal" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana"
                            arial-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 id="tituloVentaa">Registro utenti</h5>
                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">

                                        <form action="php/registrar.php" method="get">
                                            <div class="form-group">
                                                <h6 class="h3 text-black">Nome e Cognome</h6>
                                                <input type="text" name="nome" formControlName="usuario"
                                                    class="form-control text-center" require>
                                                <h6 class="h3 text-black">Utente</h6>
                                                <input type="text" name="utente" formControlName="usuario"
                                                    class="form-control text-center" require>
                                                <h6 class="h3 text-black">Pasword</h6>
                                                <input type="password" name="pass" formControlName="pass"
                                                    class="form-control text-center" require>
                                                <h6 class="h3 text-black">Ripetere pasword</h6>
                                                <input type="password" name="pass1" formControlName="pass"
                                                    class="form-control text-center" require>
                                                <h6 class="h3 text-black">Posta</h6>
                                                <input type="mail" name="mail" formControlName="pass"
                                                    class="form-control text-center" require>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-warning" type="button" data-dismiss="modal">
                                                    Chiudere
                                                </button>
                                                <button class="btn btn-success" type="submit">
                                                    Accettare
                                                </button>
                                            </div>
                                        </form>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </main>


                    <!--modal registro usuario-->


                    <!--modal registro exitoso-->

                    <main class="container">
                        <div class="modal" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana"
                            arial-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 id="tituloVentaa">Registro utenti</h5>
                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="alert alert-success">
                                            <h6>Successo</h6>
                                        </div>
                                    </div>
                                    <div class="modal-footer">

                                        <button class="btn btn-success" type="button" data-dismiss="modal">
                                            Accettare
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--modal registro exitoso-->
                    <!--modal Ingreso de admin-->
                    <main class="container">
                        <div class="modal" id="ventanaModal1" tabindex="-1" role="dialog"
                            aria-labelledby="tituloVentana" arial-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 id="tituloVentaa">Ingreso de Admin</h5>
                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">

                                        <form action="php/validar.php" method="get">

                                            <h2 class="mb-4 text-white">Calendario Lunare</h2>
                                            <h3 class="h3 text-black">Utente</h3>
                                            <input type="text" name="utente" formControlName="usuario"
                                                class="form-control text-center">
                                            <h3 class="h3 text-black">pasword</h3>
                                            <input type="password" name="pass" formControlName="pass"
                                                class="form-control text-center">
                                            <div class="row justify-content-center">
                                                <button class="btn btn-primary btn-sm" type="submit">Entrare</button>
                                            </div>
                                            <div class="row justify-content-center">

                                            </div>
                                    </div>

            </form>

        </div>


    </div>
    </div>
    </div>
    </main>
</body>
<script type="text/javascript" src="Librerias/boostrap/js/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="Librerias/boostrap/js/popper.min.js"></script>
<script type="text/javascript" src="Librerias/boostrap/js/bootstrap.min.js"></script>

</html>