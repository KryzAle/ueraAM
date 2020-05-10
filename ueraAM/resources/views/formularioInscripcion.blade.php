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
                    <h2 class="title">Formulario de Inscripción del Aspirante</h2>
                </div>
                
                <div class="card-body">
                        <div class="row justify-content-center">
                            <h3>Datos del Aspirante</h3>
                        </div>
                        <hr noshade="noshade" size="2" width="100%" />
                        <br>
                    <form method="POST" action="{{ route('aspirante.crear') }}">
                        @csrf
                        <div class="form-row">
                            <div class="name">Cédula de Identidad</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="ced_asp" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Nombres completos</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="ape_asp" required>
                                            <label class="label--desc">Apellidos</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nom_asp" required>
                                            <label class="label--desc">Nombres</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Lugar de Nacimiento</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="lug_nac_asp" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Fecha de Nacimiento</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-1">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="date" name="fec_nac_asp" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Numero de hermanos</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="her_asp">
                                            <label class="label--desc">Deje en blanco si es hijo único</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Lugar que ocupa en la familia</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="lug_asp" required>
                                            <label class="label--desc">Ponga 1 si es hijo único</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nacionalidad</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nac_asp" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Etnia</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="etn_asp" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Correo Electrónico</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="ema_asp" required>
                                </div>
                            </div>
                        </div>
                        

                        <div class="form-row">
                            <div class="name">Dirección domiciliaria</div>
                            <div class="value">
                                
                                <div class="form-row">
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="par_asp" required>
                                            <label class="label--desc">Parroquia</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="bar_asp" required>
                                            <label class="label--desc">Barrio/Ciudadela</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="cal_pri_asp" required>
                                            <label class="label--desc">Calle principal</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="cal_sec_asp" required>
                                            <label class="label--desc">Calle secundaria</label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <!-- Title Page

                        
                        <div class="form-row">
                            <div class="name">Institución de la que proviene</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="company">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Telefono</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Procedencia</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Subject 1</option>
                                            <option>Subject 2</option>
                                            <option>Subject 3</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Es usted estudiante?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Si
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        -->
                        <div class="row justify-content-center">
                            <h3>Datos de la Madre</h3>
                        </div>
                        <hr noshade="noshade" size="2" width="100%" />
                        <br>
                        <div class="form-row">
                            <div class="name">Cédula de Identidad</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="ced_mad" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Nombres completos</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="ape_mad" required>
                                            <label class="label--desc">Apellidos</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nom_mad" required>
                                            <label class="label--desc">Nombres</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Estado Civil</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="est_civ_mad" required>
                                            <option disabled="disabled" selected="selected">Escoja una opción</option>
                                            <option>Soltero/a</option>
                                            <option>Casado/a</option>
                                            <option>Viudo/a</option>
                                            <option>Divorciado/a</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Profesión</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="pro_mad" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Lugar de trabajo</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="lug_tra_mad" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Telefono convencional</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="tel_mad" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Telefono Celular</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="cel_mad" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Correo Electrónico</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="ema_mad" required>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <h3>Datos del Padre</h3>
                        </div>
                        <hr noshade="noshade" size="2" width="100%" />
                        <br>
                        <div class="form-row">
                            <div class="name">Cédula de Identidad</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="ced_pad" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Nombres completos</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="ape_pad" required>
                                            <label class="label--desc">Apellidos</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nom_pad" required>
                                            <label class="label--desc">Nombres</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Estado Civil</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="est_civ_pad" required>
                                            <option disabled="disabled" selected="selected">Escoja una opción</option>
                                            <option>Soltero/a</option>
                                            <option>Casado/a</option>
                                            <option>Viudo/a</option>
                                            <option>Divorciado/a</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Profesión</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="pro_pad" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Lugar de trabajo</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="lug_tra_pad" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Telefono convencional</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="tel_pad" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Telefono Celular</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="cel_pad" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Correo Electrónico</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="ema_pad" required>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <h3>Datos de la Representante Legal</h3>
                        </div>
                        <hr noshade="noshade" size="2" width="100%" />
                        <br>
                        <div class="form-row">
                            <div class="name">Cédula de Identidad</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="ced_rep" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Nombres completos</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="ape_rep" required>
                                            <label class="label--desc">Apellidos</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nom_rep" required>
                                            <label class="label--desc">Nombres</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Estado Civil</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="est_civ_rep" required>
                                            <option disabled="disabled" selected="selected">Escoja una opción</option>
                                            <option>Soltero/a</option>
                                            <option>Casado/a</option>
                                            <option>Viudo/a</option>
                                            <option>Divorciado/a</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Profesión</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="pro_rep" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Lugar de trabajo</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="lug_tra_rep" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Telefono convencional</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="tel_rep" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Telefono Celular</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="cel_rep" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Correo Electrónico</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="ema_rep" required>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit">Siguiente</button>
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