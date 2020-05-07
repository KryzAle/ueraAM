<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Formulario de Inscripción</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Datos Académicos</h2>
                </div>
                
                <div class="card-body">
                    <form method="POST">
                        <h5><b>Cómputo de los ulimos dos años</b> (Adjuntar en un archivo PDF, los cómputos de los últimos dos años)</h5>
                        <div class="form-row">
                            <div class="value">
                                <div class="input-group">
                                    <input type="file" class="form-control-file" id="computo" name="computo">
                                </div>
                            </div>
                        </div>
                        <h5><b>Institución de Procedencia</b></h5>
                        <div class="form-row">
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="ema_rep">
                                </div>
                            </div>
                        </div>
                        <h5><b>Documento de Comportamiento</b> (Adjuntar un archivo en formato PDF, el documento de comportamiento)</h5>
                        <div class="form-row">
                            <div class="value">
                                <div class="input-group">
                                    <input type="file" class="form-control-file" id="comportamiento" name="comportamiento">
                                </div>
                            </div>
                        </div>

                        <h5><b>Copia de la Cedula</b> (Adjuntar un archivo en formato PDF, el escaneado de la cedula de ciudadania)</h5>
                        <div class="form-row">
                            <div class="value">
                                <div class="input-group">
                                    <input type="file" class="form-control-file" id="cedula" name="cedula">
                                </div>
                            </div>
                        </div>
                        <h5><b>Foto</b> (Adjuntar un archivo en formato jpg, una foto tamaño carné)</h5>
                        <div class="form-row">
                            <div class="value">
                                <div class="input-group">
                                    <input type="file" class="form-control-file" id="foto" name="foto">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Enviar Inscripción</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->