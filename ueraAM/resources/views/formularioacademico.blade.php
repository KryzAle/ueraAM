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
                    <form method="POST" action="{{ route('academico.crear') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="ced_asp" value="{{$ced_asp}}">
                        <input type="hidden" name="ape_asp" value="{{$ape_asp}}">
                        <input type="hidden" name="nom_asp" value="{{$nom_asp}}">
                        <input type="hidden" name="lug_nac_asp" value="{{$lug_nac_asp}}">
                        <input type="hidden" name="fec_nac_asp" value="{{$fec_nac_asp}}">
                        <input type="hidden" name="her_asp" value="{{$her_asp}}">
                        <input type="hidden" name="lug_asp" value="{{$lug_asp}}">
                        <input type="hidden" name="nac_asp" value="{{$nac_asp}}">
                        <input type="hidden" name="etn_asp" value="{{$etn_asp}}">
                        <input type="hidden" name="ema_asp" value="{{$ema_asp}}">
                        <input type="hidden" name="par_asp" value="{{$par_asp}}">
                        <input type="hidden" name="bar_asp" value="{{$bar_asp}}">
                        <input type="hidden" name="cal_pri_asp" value="{{$cal_pri_asp}}">
                        <input type="hidden" name="cal_sec_asp" value="{{$cal_sec_asp}}">
                        <input type="hidden" name="ced_mad" value="{{$ced_mad}}">
                        <input type="hidden" name="ape_mad" value="{{$ape_mad}}">
                        <input type="hidden" name="nom_mad" value="{{$nom_mad}}">
                        <input type="hidden" name="est_civ_mad" value="{{$est_civ_mad}}">
                        <input type="hidden" name="pro_mad" value="{{$pro_mad}}">
                        <input type="hidden" name="lug_tra_mad" value="{{$lug_tra_mad}}">
                        <input type="hidden" name="tel_mad" value="{{$tel_mad}}">
                        <input type="hidden" name="cel_mad" value="{{$cel_mad}}">
                        <input type="hidden" name="ema_mad" value="{{$ema_mad}}">
                        <input type="hidden" name="ced_pad" value="{{$ced_pad}}">
                        <input type="hidden" name="ape_pad" value="{{$ape_pad}}">
                        <input type="hidden" name="nom_pad" value="{{$nom_pad}}">
                        <input type="hidden" name="est_civ_pad" value="{{$est_civ_pad}}">
                        <input type="hidden" name="pro_pad" value="{{$pro_pad}}">
                        <input type="hidden" name="lug_tra_pad" value="{{$lug_tra_pad}}">
                        <input type="hidden" name="tel_pad" value="{{$tel_pad}}">
                        <input type="hidden" name="cel_pad" value="{{$cel_pad}}">
                        <input type="hidden" name="ema_pad" value="{{$ema_pad}}">
                        <input type="hidden" name="ced_rep" value="{{$ced_rep}}">
                        <input type="hidden" name="ape_rep" value="{{$ape_rep}}">
                        <input type="hidden" name="nom_rep" value="{{$nom_rep}}">
                        <input type="hidden" name="est_civ_rep" value="{{$est_civ_rep}}">
                        <input type="hidden" name="pro_rep" value="{{$pro_rep}}">
                        <input type="hidden" name="lug_tra_rep" value="{{$lug_tra_rep}}">
                        <input type="hidden" name="tel_rep" value="{{$tel_rep}}">
                        <input type="hidden" name="cel_rep" value="{{$cel_rep}}">
                        <input type="hidden" name="ema_rep" value="{{$ema_rep}}">
                        <h5><b>Grado o Curso</b> (Ingrese el grado o curso al que el estudiante asistirá )</h5>
                        <br>
                        <div class="form-row">
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="grado_asp" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5><b>Cómputo de los ulimos dos años</b> (Adjuntar en un archivo PDF, los cómputos de los últimos dos años)</h5>
                        <br>
                        <div class="form-row">
                            <div class="value">
                                <div class="input-group">
                                    <input type="file" class="form-control-file" accept=".pdf" id="computo" name="computos_asp" required>
                                </div>
                            </div>
                        </div>
                        <h5><b>Institución de Procedencia</b></h5>
                        <br>
                        <div class="form-row">
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="proc_asp" required>
                                </div>
                            </div>
                        </div>
                        <h5><b>Lugar de la institución de Procedencia</b></h5>
                        <br>
                        <div class="form-row">
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="ciu_ins_proc_asp" required>
                                </div>
                            </div>
                        </div>
                        <h5><b>Documento de Comportamiento</b> (Adjuntar un archivo en formato PDF, el documento de comportamiento)</h5>
                        <br>
                        <div class="form-row">
                            <div class="value">
                                <div class="input-group">
                                    <input type="file" class="form-control-file" accept=".pdf" id="comportamiento" name="comportamiento_asp" required>
                                </div>
                            </div>
                        </div>

                        <h5><b>Copia de la Cedula</b> (Adjuntar un archivo en formato PDF, de la cedula de ciudadania)</h5>
                        <br>
                        <div class="form-row">
                            <div class="value">
                                <div class="input-group">
                                    <input type="file" class="form-control-file" accept=".pdf" id="cedula" name="copia_ced_asp" required>
                                </div>
                            </div>
                        </div>
                        <h5><b>Foto</b> (Adjuntar una foto en formato jpg tamaño carné)</h5>
                        <br>
                        <div class="form-row">
                            <div class="value">
                                <div class="input-group">
                                    <input type="file" class="form-control-file" accept=".jpg" id="foto" name="foto_asp" required>
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