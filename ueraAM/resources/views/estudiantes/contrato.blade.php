@extends('layouts.app')

@section('content')
@php
    $usuarioActivo = auth()->id();
@endphp
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                @if(@Auth::user()->hasRole('estudiante'))
                <nav class="nav nav-pills flex-column flex-sm-row">
                    <a class="flex-sm-fill text-sm-center nav-link" href="{{ route('home') }}">Inicio</a>
                    <a class="flex-sm-fill text-sm-center nav-link" href="{{route('estudiantes.editar', $usuarioActivo)}}">Actualizacion de datos</a>
                    <a class="flex-sm-fill text-sm-center nav-link active" href="{{route('estudiantes.editar.contrato', $usuarioActivo)}}">Contrato de Servicios Educativos</a>
                    <a class="flex-sm-fill text-sm-center nav-link disabled" href="{{route('estudiantes.editar.matricula', $usuarioActivo)}}">Legalizar Matrícula</a>
                </nav>
                @endif
                <div class="card-body">
                    @if (session('mensaje'))
                        <div class="alert alert-success" role="alert">
                            {{ session('mensaje') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('estudiantes.update.contrato',$estudiante->id) }}">
                        @method('PUT')
                        @csrf
                        <br>
                        <h5 style = "font-family:arial; text-align:center;">
                        <b>
                        CONTRATO DE SERVICIOS EDUCATIVOS DEL AÑO LECTIVO 2020-2021
                        </b>
                        </h5>
                        <h6 style = "font-family:arial; text-align:justify; ">
                            <br>
                            <b>
                            CLÁUSULA PRIMERA: COMPARECIENTES. -
                            </b> 
                            De manera libre y voluntaria comparecen a la celebración del presente contrato civil, por una parte, el/ la señor (a): {{$estudiante->nom_rep}} {{$estudiante->ape_rep}}, de nacionalidad  
                            <input type="text" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$estudiante->fe_asp}}" name="fe_asp" required>, 
                            con cédula de ciudadanía N° {{$estudiante->ced_rep}}, con domicilio en las calles 
                            <input type="text" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$estudiante->vac_asp}}" name="vac_asp" required>
                             sector 
                             <input type="text" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$estudiante->exp_asp}}" name="exp_asp" required>
                             , del cantón 
                             <input type="text" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$estudiante->dce_asp}}" name="dce_asp" required>
                             , provincia de 
                             <input type="text" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$estudiante->cerp_asp}}" name="cerp_asp" required>
                              a quien en adelante por sus propios derechos y como Madre, Padre de familia  y/o  Representante Legal del estudiante: {{$estudiante->nom_asp}} {{$estudiante->ape_asp}}, en calidad de Contratante, y, por otra, LA UNIDAD EDUCATIVA “RODRÍGUEZ ALBORNOZ” representada por la Rectora y Representante Legal, MSc. Sor LAURA VIOLETA CAICEDO RAMOS, en calidad de Contratada, ambas partes con capacidad jurídica para obligarse por sí mismos, libre y espontáneamente se comprometen al cumplimiento de las siguientes estipulaciones: 
                            <br>
                            <br>
                            <b>CLÁUSULA SEGUNDA: ANTECEDENTES. - </b> 
                            La  UNIDAD EDUCATIVA “RODRÍGUEZ ALBORNOZ”,  es una Institución de Derecho Privado, con finalidad social y pública de educación, sin fines de lucro, se organiza bajo los lineamientos doctrinarios de la Iglesia Católica, de sus Autoridades Legítimas en el Ecuador, es filial de la Federación de Establecimientos de Educación Católica de Tungurahua (FEDEC-T) y Confederación Ecuatoriana de Establecimientos de Educación Católica (CONFEDEC), está autorizada por el Ministerio de Educación con Acuerdo No 71 de 24 de octubre de 1957 con su Proyecto Educativo Institucional, Proyecto de Innovación Curricular, Proyecto Pastoral, Código de Convivencia, Plan de Seguridad y Protección Estudiantil y demás instrumentos reglamentarios que regulan sus actividades generales y específicas. Es de propiedad y regencia de la Congregación de Madres Maestras de Santa Dorotea “Hijas de los Sagrados Corazones”, con Estatutos y Reglamentos debida y legalmente aprobados por el Ministerio de Gobierno y Cultos, mediante Acuerdo Ejecutivo No. 136 de 15 de noviembre de 1944 publicado en el Registro Oficial No.136 de 15 de noviembre del mismo año, y con Acuerdo Ministerial No. 147 de 26 de julio del 2007, se aprobó la reforma de los Estatutos de la Congregación.
                            <br>
                            La oferta educativa innovadora y de calidad que brinda a la sociedad ecuatoriana por 60 años de funcionamiento, abarca los niveles:  Sub Inicial 2, Educación General  Básica y Bachillerato General Unificado en Ciencias, de acuerdo a la Ley Orgánica de Educación Intercultural y su Reglamento, en sujeción a los planes y programas establecidos por el Ministerio de Educación, disposiciones,  Resoluciones y Acuerdos emitidos en el área de la educación y su desarrollo, en concordancia con las normas estatutarias y reglamentarias de la Congregación de Madres Maestras de Santa Dorotea “Hijas de los Sagrados Corazones” y las específicas del Plantel ya señaladas. 
                            <br>
                            <br>
                            <b>
                            CLÁUSULA TERCERA: OBJETO. -
                            </b>

                            Con los antecedentes expuestos, la MADRE, PADRE DE FAMILIA  Y/O  REPRESENTANTE LEGAL contrata los servicios educativos que ofrece 
                            la UNIDAD EDUCATIVA “RODRÍGUEZ ALBORNOZ” para su representado {{$estudiante->nom_asp}} {{$estudiante->ape_asp}}; y lo matricula en la Institución  Educativa para el 
                            año lectivo 2020- 2021 ,en pleno ejercicio de su derecho constitucional y legal de “escoger para sus hijos  
                            y/o Representada/o  una educación acorde con sus principios, creencias y opciones pedagógicas” (Arts. 26 y 29, inc. 2, en concordancia 
                            con el art. 345 de la Constitución de la República del Ecuador).
                            <br>
                            <br>
                            <b>
                                CLÁUSULA CUARTA: DESCRIPCIÓN DEL SERVICIO EDUCATIVO CONTRATADO. - 
                            </b>
                            Los servicios que prestará la Unidad Educativa comprenden tanto los educativos que consten en el Programa Curricular establecido por el Ministerio de Educación y en el Proyecto Educativo Institucional, que cubren el costo de la gestión educativa, determinada en el Acuerdo Ministerial MINEDUC – 2017 – 00006-A, Resolución 000029118D01 del 25 de julio de 2018, así como también los detallados a continuación:
                            <ol type="a">
                                <li>
                                    Formación Integral guiada por el Ideario Educativo Católico, bajo la Doctrina Social de la Iglesia Católica Romana, las líneas pastorales de la Conferencia Episcopal Ecuatoriana y los lineamientos educativo-pastorales del Proyecto Educativo Pastoral Institucional. Para ello la Madre, Padre de familia y/o Representante Legal, lo asumen y autorizan la asistencia y participación de su representado a todas las prácticas religiosas y formativas que la Institución educativa contemple. De la misma manera se comprometen a asistir y participar en las jornadas formativas que la institución establezca en su programación.
                                </li>
                                <li>
                                    Aprendizajes en función del progreso de la ciencia, la pedagogía, la técnica, tecnología y requerimientos de la sociedad ecuatoriana, fundamentados en los principios, virtudes y valores de la Religión Católica, de la moral, ética y solidaridad social universal.
                                </li>
                                <li>
                                    Cuerpo Docente Profesional, acreditado con los títulos académicos en su respectiva especialidad.
                                </li>
                                <li>
                                Aulas acondicionadas y acordes con las exigencias pedagógicas y didácticas.
                                </li>
                                <li>
                            Infraestructura física con espacios para la recreación, actividades deportivas, culturales, espirituales, sociales; entre otros.
                                
                                </li>
                                <li>
                            Laboratorios de Inglés, Ciencias Naturales, Física, Computación, Biblioteca, Internet y demás servicios académicos. 
                                
                                </li>
                                <li>
                            Departamento de Consejería Estudiantil (DECE), con personal profesional para atención de necesidades psicológicas, personales y familiares de los estudiantes, solución de problemas inherentes a su desarrollo y formación integral.
                                
                                </li>
                                <li>
                            Departamento de Pastoral para prestación de los servicios de animación espiritual a los integrantes de la Comunidad Educativa.
                                
                                </li>
                                <li>
                            Departamento de enfermería para prestación de servicios específicos.
                                
                                </li>
                                <li>
                            Personal de Seguridad.
                                
                                </li>
                                <li>
                            Actividades extraescolares tales como: Cheer-dance, Banda Rítmica, Bastoneras, Patinaje, Atletismo, Fútsala, Grupo de Protocolo, Infancia Misionera, Grupo Juvenil, Danza Sacra, Club Ecológico, Grupo de Cámara, Coro, Danza, Pastoral Familiar, Grupo Misionero, Grupo de Acólitos, entre otros.
                                
                                </li>
                            </ol>
                            <b>
                            CLÁUSULA QUINTA: COSTO. -
                            </b>
                            

                            El valor de la matrícula y pensión que se compromete a pagar EL REPRESENTANTE a la Unidad Educativa, será el que conste en la Resolución de Costos emitida por la Junta Distrital Reguladora de Pensiones y Matrículas.
                            <br>
                            El valor de los servicios educativos básicos y complementarios en la parte que corresponde al estudiante matriculado mediante el presente contrato, será cubierto por su Madre, Padre de familia  y/o  Representante Legal, a través del pago completo de una colegiatura anual, para cubrir el costo de la misma, LA MADRE, PADRE DE FAMILIA  Y/O  REPRESENTANTE LEGAL, cancelará la matrícula y se compromete a pagar puntualmente el valor de las diez pensiones mensuales, materializadas en facturas electrónicas que serán emitidas en cada uno de los meses comprendidos entre Septiembre 2020 y Junio 2021.
                            <br>
                            
                            El Contratante se obliga a cancelar puntualmente los valores acordados en el Banco Internacional y en la Cooperativa de Ahorro y Crédito “El Sagrario” Ltda. dentro de los primeros días de cada mes.  El incumplimiento de esta obligación por tres meses consecutivos, faculta a la UNIDAD EDUCATIVA “RODRÍGUEZ ALBORNOZ” a poner a órdenes del Distrito Educativo Ambato 18D01 los documentos escolares del estudiante para su ubicación en una Institución Fiscal y/o ante la reincidencia negarle el cupo, a acudir a los jueces competentes para obtener, en sentencia, la suspensión inmediata del servicio educativo contratado y el pago de los valores adeudados con el recargo del interés legal vigente. En transacción de las partes, se procurará el retiro voluntario del estudiante por falta de recursos económicos de su Madre, Padre de familia y/o Representante Legal, para solventar los costos del servicio contratado. 
                            <br>
                            <br>
                            <b>
                            CLÁUSULA SEXTA: GASTOS ADICIONALES. - 
                            </b>
                            La Madre, Padre de familia y/o Representante Legal, se compromete, con conocimiento pleno y libre consentimiento, a cancelar los gastos adicionales que se requieren para el desarrollo normal del proceso educativo y formación integral de su representado. Estos valores no tienen relación alguna con el costo de matrícula y pensión, por ser actividades extra- escolares de utilidad exclusiva personal y familiar entre los que se determinan los siguientes:
                            <ol>
                                <li>
                            La Madre, Padre de familia y/o Representante Legal, se encargarán del transporte para los respectivos recorridos que necesite su hijo o representado, la Unidad Educativa no se responsabiliza por los acontecimientos o incidentes que pudieran generarse por razón del transporte.
                                
                                </li>
                                <li>
                            El lugar par la Adquisición es libre y voluntaria de:  uniformes institucionales, libros, materiales escolares, insumos impresos, reactivos de laboratorios y demás elementos necesarios para el desarrollo del proceso educativo de actividades especializadas por materias y laboratorios, así para el uso y mantenimiento de los mismos, según las exigencias de las áreas científicas y técnicas correspondientes.

                                </li>
                                <li>
                            Reposición de los daños ocasionados por el estudiante ya sea en las aulas, laboratorios, enseres, ventanales y demás componentes del edificio institucional, cumplido el debido proceso y la oportuna comunicación escrita. 

                                </li>
                                <li>
                            Los servicios adicionales extra – escolares que la Institución Educativa oferte: Cheer-dance, Banda Rítmica, Bastoneras, Ciclismo, Natación, Atletismo, Grupo de Protocolo, Infancia Misionera, Grupo Juvenil, Danza Sacra, Club Ecológico, Club de Patinaje, Grupo de Cámara, Coro, Danza, Pastoral Familiar, Grupo Misionero, Grupo de Acólitos, de solidaridad y servicio social, tareas dirigidas, entre otros.) Estos servicios son de libre elección por parte de la Madre, Padre de familia y/o Representante Legal. 
                                
                                </li>
                                <li>
                            Las demás que exija el proceso educativo, para cuya ejecución se requiera la autorización escrita de la Dirección Distrital de Educación, previa solicitud elevada por los Padres de Familia y el consenso de las Autoridades de la Unidad Educativa. 
                                
                                </li>
                            </ol>

                            <b>
                                CLÁUSULA SÉPTIMA: COMPROMISO ESPECÍFICO. -
                            </b> 
                            Por la aceptación y firma del presente Contrato de Servicios Educativos, La Madre, Padre de familia y/o Representante Legal y el estudiante, declaran conocer las obligaciones y derechos generados en este contrato, además de los establecidos en la Ley Orgánica de Educación Intercultural, Reglamento de la misma ley, Código de Convivencia, Código de Honor y Manual de Valores en los que ratifican su aceptación.  
                            <br>
                            Se sujetan al orden, disciplina, puntualidad a los horarios establecidos, al cumplimiento estricto de las normas estatutarias y reglamentarias, a las disposiciones de las Autoridades, a la asistencia personal regulada por las Convocatorias previas para el desarrollo de las actividades disciplinarias, académicas, científicas, sociales, culturales, deportivas, entre otras, de acuerdo al Proyecto Educativo Institucional.
                            <br>
                            Permitir que su hijo/a y/o representado/a sea fotografiado/a en los diversos eventos cívicos, culturales, deportivos, sociales y otros, así como la difusión de dichas fotografías en los diversos documentos, revistas y más, de la Unidad Educativa y de la ciudad 
                            <br>
                            <br>

                            <div style = "font-family:arial; text-align:center;">
                                <label class="radio-container m-r-55">Si
                                    <input type="radio" <?php if ($estudiante->cerc_asp=="Si") { echo "checked='checked'"; } ?> name="cerc_asp" value="Si" required>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" <?php if ($estudiante->cerc_asp=="No") { echo "checked='checked'"; } ?> name="cerc_asp" value="No" required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <br>
                            Se comprometen a solucionar las divergencias que puedan suscitarse en diálogo solidario y de mutuo respeto, salvaguardando el prestigio de la Institución y el interés superior de su hijo o representado.
                            <br>
                            <br>
                            <b>
                            CLÁUSULA OCTAVA: CONTROVERSIAS. - 
                            </b>
                            En caso de controversias o conflictos, las partes se someterán a los Centros de Mediación y Arbitraje o a las autoridades competentes.
                            Para constancia firman en unidad de acto el presente documento para los efectos de ley.
                            <br>
                            <br>
                            <br>
                            <div style = "font-family:arial; text-align:center;">
                                <label><input type="checkbox" name="cedula_asp" id="cedula_asp" onclick="myFunction()" <?php if ($estudiante->cedula_asp=="1") { echo "checked='checked'"; } ?>> Estoy de acuerdo con todas las cláusulas del contrato</label><br>
                            </div>
                            </br>
                        </h6>
                        <br>
                        <div style = "font-family:arial; text-align:center;" id="salvar">
                            <button class="btn btn-success" id="guardar" type="submit" disabled="true">Continuar con la Legalización de la Matrícula</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function myFunction() {
    var checkBox = document.getElementById("cedula_asp");
    var boton = document.getElementById("guardar");
        if (checkBox.checked == true){
            boton.disabled = false;
        } else {
            boton.disabled = true;
        }
    }
</script>
@endsection
