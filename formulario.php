<?php
/*@session_start();

if($_SESSION["id_empleado"] == ""){
    
        echo "
			<script type=\"text/javascript\">
			window.location=\"index.php\";
			</script>
		";
}

$empleado = $_SESSION["id_empleado"];*/

?>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Encuesta</title>

  <link href="../sisgp/V1/components/css/bootstrap.min.css" rel="stylesheet">
  <link href="../sisgp/V1/components/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="../sisgp/V1/components/css/plugins/iCheck/custom.css" rel="stylesheet">
  <link href="../sisgp/V1/components/css/animate.css" rel="stylesheet">
  <link href="../sisgp/V1/components/css/style.css" rel="stylesheet">
  <link href="../sisgp/V1/components/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
  <link href="../sisgp/V1/components/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>
<style>
  body {

    background: linear-gradient(100deg, #dcae24e8, #eee) !important
  }

  .checkbox-inline {

    font-weight: bold;
  }

  input:required {
    background: red;
  }

</style>

<body class="top-navigation">
  <div id="wrapper">
    <div id="page-wrapper" class="">
      <div class="row border-bottom white-bg">
      </div>
      <div class="wrapper wrapper-content">

        <div class="row" style="margin-top: 50px;">
          <div class="col-lg-12">

            <div class="ibox">
              <div class="ibox-title">

                <div class="ibox-tools">

                </div>
              </div>
              <div class="ibox-content" style="border-radius: 2px 2px 14px 14px;overflow-y: auto;">
                <div class="col-lg-6">
                  <div class="panel panel-info">
                    <div class="panel-heading">
                      <i class="fa fa-info-circle"></i> Instrucciones.
                    </div>
                    <div class="panel-body">
                      <p><strong></strong></p>
                      <p>
                        <li>La respuesta que elijas, es la situación con la cual te sientas más identificado.</li>
                        <li>Procure contestar todas las preguntas, de lo contrario el formulario no lo dejará avanzar.</li>
                        <li>Una vez llenado las respuesta de cada pregunta, de clic en enviar para finalizar el proceso. </li>

                      </p>
                    </div>

                  </div>
                </div>
                <div class="hr-line-dashed"></div>


                <div class="col-lg-12">


                  <form id="regis_form">

                    <!--method="POST" action="controllers/enviar_datos.php"-->
                    <input type="hidden" name="empleado" value="<?php echo $empleado; ?>">
                    <p style="padding-bottom: 16px;font-size: 14px;"><strong>Las siguientes preguntas evocan a su estado anímico y como ha sobrellevado la contingencia actualmente.</strong></p>

                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">Seleccione una palabra que describa su estado de ánimo durante la cuarentena.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="1" name="animo" required> Alegre / tranquilo </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="animo"> Triste / deprimido </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="animo"> Preocupado </label>


                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">¿Sabe qué hacer en caso de que usted o algun miembro de su familia presente síntomas de <stron>COVID 19?</stron> (seleccione la opción que considere).</label>

                      <div class="col-sm-4">
                        <select class="form-control m-b" name="account" required>
                          <option>--</option>
                          <option>Llamar al medico</option>
                          <option>Llamar a algún familiar o amigo</option>
                          <option>Llamar a emergencias</option>
                          <option>Acudir al hospital</option>
                          <option>Aislarme o aislar a la persona que presenta los síntomas</option>
                          <option>Remedios caseros</option>
                          <option>Automedicarse y reposar</option>
                          <option>No sé que hacer</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">¿Qué medidas toma para no contagiarse de COVID-19.</label>

                      <div class="col-sm-4">
                        <select class="form-control m-b" name="account2" required>
                          <option>--</option>
                          <option>No salgo a la calle</option>
                          <option>No recibo visitas</option>
                          <option>Me lavo las manos con frecuencia.</option>
                          <option>Me vacuné contra la influenza</option>
                          <option>Tomo vítaminas</option>
                          <option>Uso gel antibacterial</option>
                          <option>Uso guantes y cubrebocas</option>
                          <option>Nada</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">¿Si fuese diagnosticado con coronavirus, tendría la opción de aislarse de otros miembros del hogar?.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="1" name="animo2" required>SI</label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="animo2">NO</label>



                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">En esta cuarentena usted ha tenido la oportunidad de:.</label>

                      <div class="col-sm-4">
                        <select class="form-control m-b" name="account3" required>
                          <option>--</option>
                          <option>Convivir con mi familia y amigos</option>
                          <option>Reflexionar (pensar) sobre el rumbo de mi vida</option>
                          <option>Tomar un curso (entretemiento) en línea</option>
                          <option>Leer más</option>
                          <option>Arreglar mi casa</option>
                          <option>Trabajar</option>
                          <option>Ver la televisión y mantenerme informado</option>
                          <option>Nada</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">¿Cómo ha sido la convivencia de la familia durante esta cuarentena?.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="1" name="animo3" required>Buena</label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="animo3">Mala</label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="animo3">Igual</label>


                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">¿Usted o alguien de su casa tiene alguno de los siguientes padecimientos?.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="1" name="animo4" required>Diabetes</label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="animo4">Obesidad</label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="animo4">Hipertensión</label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="animo4">Cáncer</label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="animo4">Enfermedades respiratorias</label> 
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="animo4">Dos o mas de estas</label>

                       <label class="checkbox-inline">
                          <input type="radio" value="2" name="animo4">Ninguna de las anteriores</label>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">¿Ha estado en contacto con alguien que haya sido diagnosticado con COVID-19?.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="1" name="animo5" required>SI</label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="animo5">NO</label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="animo5">NO SE</label>
                        

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">¿Ha viajado usted o su familia durante los últimos 14 días?.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="1" name="animo6" required>SI</label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="animo6">NO</label>
                      

                      </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <p style="padding-bottom: 16px;font-size: 14px;"><strong>Para responder las preguntas siguientes considere las condiciones ambientales de su centro de trabajo.</strong></p>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">1.- El espacio donde trabajo me permite realizar mis actividades de manera segura e higiénica</label>

                      <div class="col-sm-6" id="resp1">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp1"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp1"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp1"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp1"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp1"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp2">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">2.- Mi trabajo me exige hacer mucho esfuerzo físico.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp2"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp2"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp2"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp2"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp2"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp3">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">3.- Me preocupa sufrir un accidente en mi trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp3"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp3"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp3"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp3"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp3"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp4">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">4.- Considero que en mi trabajo se aplican las normas de seguridad y salud en el trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp4"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp4"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp4"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp4"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp4"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp5">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">5.- Considero que las actividades que realizo son peligrosas.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp5"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp5"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp5"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp5"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp5"> Nunca </label>

                      </div>
                    </div>
                    <div class="hr-line-dashed" id="resp6"></div>
                    <p style="padding-bottom: 16px;font-size: 14px;"><strong>Para responder a las preguntas siguientes piense en la cantidad y ritmo de trabajo que tiene..</strong></p>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">6.- Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp6"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp6"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp6"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp6"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp6"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp7">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">7.- Por la cantidad de trabajo que tengo debo trabajar sin parar.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp7"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp7"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp7"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp7"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp7"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp8">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">8.- Considero que es necesario mantener un ritmo de trabajo acelerado.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp8"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp8"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp8"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp8"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp8"> Nunca </label>

                      </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <p style="padding-bottom: 16px;font-size: 14px;"><strong>Las preguntas siguientes están relacionadas con el esfuerzo mental que le exige su trabajo.</strong></p>
                    <div class="form-group" id="resp9">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">9.- Mi trabajo exige que esté muy concentrado.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp9"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp9"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp9"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp9"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp9"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp10">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">10.- Mi trabajo requiere que memorice mucha información.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp10"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp10"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp10"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp10"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp10"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp11">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">11.- En mi trabajo tengo que tomar decisiones difíciles muy rápido.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp11"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp11"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp11"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp11"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp11"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp12">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">12.- Mi trabajo exige que atienda varios asuntos al mismo tiempo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp12"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp12"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp12"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp12"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp12"> Nunca </label>

                      </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <p style="padding-bottom: 16px;font-size: 14px;"><strong>Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.</strong></p>

                    <div class="form-group" id="resp13">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">13.- En mi trabajo soy responsable de cosas de mucho valor.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp13"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp13"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp13"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp13"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp13"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp14">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">14.- Respondo ante mi jefe por los resultados de toda mi área de trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp14"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp14"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp14"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp14"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp14"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp15">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">15.- En el trabajo me dan órdenes contradictorias.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp15"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp15"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp15"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp15"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp15"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp16">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">16.- Considero que en mi trabajo me piden hacer cosas innecesarias.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp16"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp16"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp16"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp16"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp16"> Nunca </label>

                      </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <p style="padding-bottom: 16px;font-size: 14px;"><strong>Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.</strong></p>
                    <div class="form-group" id="resp17">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">17.- Trabajo horas extras más de tres veces a la semana.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp17"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp17"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp17"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp17"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp17"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp18">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">18.- Mi trabajo me exige laborar en días de descanso, festivos o fines de semana.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp18"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp18"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp18"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp18"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp18"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp19">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">19.- Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp19"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp19"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp19"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp19"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp19"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp20">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">20.- Debo atender asuntos de trabajo cuando estoy en casa.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp20"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp20"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp20"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp20"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp20"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp21">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">21.- Pienso en las actividades familiares o personales cuando estoy en mi trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp21"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp21"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp21"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp21"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp21"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp22">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">22.- Pienso que mis responsabilidades familiares afectan mi trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp22"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp22"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp22"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp22"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp22"> Nunca </label>

                      </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <p style="padding-bottom: 16px;font-size: 14px;"><strong>Las preguntas siguientes están relacionadas con las decisiones que puede tomar en su trabajo.</strong></p>

                    <div class="form-group" id="resp23">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">23.- Mi trabajo permite que desarrolle nuevas habilidades.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp23"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp23"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp23"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp23"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp23"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp24">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">24.- En mi trabajo puedo aspirar a un mejor puesto.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp24"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp24"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp24"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp24"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp24"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp25">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">25.- Durante mi jornada de trabajo puedo tomar pausas cuando las necesito.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp25"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp25"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp25"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp25"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp25"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp26">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">26.- Puedo decidir cuánto trabajo realizo durante la jornada laboral.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp26"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp26"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp26"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp26"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp26"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp27">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">27.- Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp27"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp27"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp27"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp27"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp27"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp28">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">28.- Puedo cambiar el orden de las actividades que realizo en mi trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp28"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp28"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp28"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp28"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp28"> Nunca </label>

                      </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <p style="padding-bottom: 16px;font-size: 14px;"><strong>Las preguntas siguientes están relacionadas con cualquier tipo de cambio que ocurra en su trabajo (considere los últimos cambios realizados).</strong></p>
                    <div class="form-group" id="resp29">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">29.- Los cambios que se presentan en mi trabajo dificultan mi labor.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp29"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp29"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp29"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp29"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp29"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp30">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">30.- Cuando se presentan cambios en mi trabajo se tienen en cuenta mis ideas o aportaciones.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp30"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp30"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp30"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp30"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp30"> Nunca </label>

                      </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <p style="padding-bottom: 16px;font-size: 14px;"><strong>Las preguntas siguientes están relacionadas con la capacitación e información que se le proporciona sobre su trabajo.</strong></p>
                    <div class="form-group" id="resp31">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">31.- Me informan con claridad cuáles son mis funciones.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp31"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp31"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp31"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp31"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp31"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp32">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">32.- Me explican claramente los resultados que debo obtener en mi trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp32"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp32"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp32"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp32"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp32"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp33">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">33.- Me explican claramente los objetivos de mi trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp33"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp33"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp33"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp33"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp33"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp34">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">34.- Me informan con quién puedo resolver problemas o asuntos de trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp34"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp34"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp34"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp34"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp34"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp35">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">35.- Me permiten asistir a capacitaciones relacionadas con mi trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp35"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp35"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp35"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp35"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp35"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp36">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">36.- Recibo capacitación útil para hacer mi trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp36"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp36"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp36"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp36"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp36"> Nunca </label>

                      </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <p style="padding-bottom: 16px;font-size: 14px;"><strong>Las preguntas siguientes están relacionadas con el o los jefes con quien tiene contacto.</strong></p>
                    <div class="form-group" id="resp37">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">37.- Mi jefe ayuda a organizar mejor el trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp37"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp37"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp37"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp37"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp37"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp38">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">38.- Mi jefe tiene en cuenta mis puntos de vista y opiniones.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp38"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp38"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp38"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp38"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp38"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp39">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">39.- Mi jefe me comunica a tiempo la información relacionada con el trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp39"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp39"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp39"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp39"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp39"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp40">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">40.- La orientación que me da mi jefe me ayuda a realizar mejor mi trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp40"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp40"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp40"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp40"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp40"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp41">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">41.- Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp41"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp41"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp41"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp41"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp41"> Nunca </label>

                      </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <p style="padding-bottom: 16px;font-size: 14px;"><strong>Las preguntas siguientes se refieren a las relaciones con sus compañeros.</strong></p>
                    <div class="form-group" id="resp42">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">42.- Puedo confiar en mis compañeros de trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp42"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp42"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp42"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp42"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp42"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp43">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">43.- Entre compañeros solucionamos los problemas de trabajo de forma respetuosa.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp43"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp43"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp43"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp43"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp43"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp44">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">44.- En mi trabajo me hacen sentir parte del grupo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp44"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp44"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp44"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp44"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp44"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp45">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">45.- Cuando tenemos que realizar trabajo de equipo los compañeros colaboran.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp45"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp45"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp45"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp45"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp45"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp46">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">46.- Mis compañeros de trabajo me ayudan cuando tengo dificultades.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp46"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp46"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp46"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp46"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp46"> Nunca </label>

                      </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <p style="padding-bottom: 16px;font-size: 14px;"><strong>Las preguntas siguientes están relacionadas con la información que recibe sobre su rendimiento en el trabajo, el reconocimiento, el sentido de pertenencia y la estabilidad que le ofrece su trabajo.</strong></p>
                    <div class="form-group" id="resp47">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">47.- Me informan sobre lo que hago bien en mi trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp47"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp47"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp47"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp47"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp47"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp48">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">48.- La forma como evalúan mi trabajo en mi centro de trabajo me ayuda a mejorar mi desempeño.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp48"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp48"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp48"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp48"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp48"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp49">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">49.- En mi centro de trabajo me pagan a tiempo mi salario.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp49"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp49"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp49"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp49"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp49"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp50">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">50.- El pago que recibo es el que merezco por el trabajo que realizo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp50"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp50"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp50"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp50"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp50"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp51">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">51.- Si obtengo los resultados esperados en mi trabajo me recompensan o reconocen.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp51"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp51"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp51"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp51"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp51"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp52">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">52.- Las personas que hacen bien el trabajo pueden crecer laboralmente.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp52"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp52"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp52"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp52"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp52"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group" id="resp53">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">53.- Considero que mi trabajo es estable.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp53"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp53"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp53"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp53"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp53"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">54.- En mi trabajo existe continua rotación de personal.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp54"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp54"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp54"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp54"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp54"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">55.- Siento orgullo de laborar en este centro de trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp55"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp55"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp55"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp55"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp55"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">56.- Me siento comprometido con mi trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp56"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp56"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp56"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp56"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp56"> Nunca </label>

                      </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <p style="padding-bottom: 16px;font-size: 14px;"><strong>Las preguntas siguientes están relacionadas con actos de violencia laboral (malos tratos, acoso, hostigamiento, acoso psicológico).</strong></p>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">57.- En mi trabajo puedo expresarme libremente sin interrupciones.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="0" name="resp57"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp57"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp57"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp57"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="4" name="resp57"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">58.- Recibo críticas constantes a mi persona y/o trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp58"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp58"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp58"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp58"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp58"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">59.- Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp59"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp59"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp59"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp59"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp59"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">60.- Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp60"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp60"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp60"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp60"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp60"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">61.- Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp61"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp61"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp61"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp61"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp61"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">62.- Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp62"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp62"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp62"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp62"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp62"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">63.- Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp63"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp63"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp63"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp63"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp63"> Nunca </label>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-6 col-form-label" style="font-size: 14px;">64.- He presenciado actos de violencia en mi centro de trabajo.</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="4" name="resp64"> Siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="3" name="resp64"> Casi siempre </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="2" name="resp64"> Algunas veces </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="1" name="resp64"> Casi nunca </label>
                        <label class="checkbox-inline">
                          <input type="radio" value="0" name="resp64"> Nunca </label>

                      </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <p style="padding-bottom: 16px;font-size: 14px;"><strong>Las preguntas siguientes están relacionadas con la atención a clientes y usuarios.</strong></p>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" style="font-size: 14px;">En mi trabajo debo brindar servicio a clientes o usuarios:</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="SI" name="resp_com" class="serv">SI</label>
                        <label class="checkbox-inline">
                          <input type="radio" value="NO" name="resp_com" class="serv"> NO </label>
                      </div>
                    </div>
                    <p style="padding-bottom: 16px;font-size: 14px;"><strong>Si su respuesta fue "SÍ", responda las preguntas siguientes. Si su respuesta fue "NO" pase a las preguntas de la sección siguiente..</strong></p>
                    <div id="serv1" style="display:none;">
                      <div class="hr-line-dashed"></div>
                      <div class="form-group">
                        <label class="col-sm-6 col-form-label" style="font-size: 14px;">65.- Atiendo clientes o usuarios muy enojados.</label>

                        <div class="col-sm-6">
                          <label class="checkbox-inline" style="">
                            <input type="radio" value="4" name="resp65"> Siempre </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="3" name="resp65"> Casi siempre </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="2" name="resp65"> Algunas veces </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="1" name="resp65"> Casi nunca </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="0" name="resp65"> Nunca </label>

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-6 col-form-label" style="font-size: 14px;">66.- Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas.</label>

                        <div class="col-sm-6">
                          <label class="checkbox-inline" style="">
                            <input type="radio" value="4" name="resp66"> Siempre </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="3" name="resp66"> Casi siempre </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="2" name="resp66"> Algunas veces </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="1" name="resp66"> Casi nunca </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="0" name="resp66"> Nunca </label>

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-6 col-form-label" style="font-size: 14px;">67.- Para hacer mi trabajo debo demostrar sentimientos distintos a los míos.</label>

                        <div class="col-sm-6">
                          <label class="checkbox-inline" style="">
                            <input type="radio" value="4" name="resp67"> Siempre </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="3" name="resp67"> Casi siempre </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="2" name="resp67"> Algunas veces </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="1" name="resp67"> Casi nunca </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="0" name="resp67"> Nunca </label>

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-6 col-form-label" style="font-size: 14px;">68.- Mi trabajo me exige atender situaciones de violencia.</label>

                        <div class="col-sm-6">
                          <label class="checkbox-inline" style="">
                            <input type="radio" value="4" name="resp68"> Siempre </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="3" name="resp68"> Casi siempre </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="2" name="resp68"> Algunas veces </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="1" name="resp68"> Casi nunca </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="0" name="resp68"> Nunca </label>

                        </div>
                      </div>


                    </div>
                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label" style="font-size: 14px;">Soy jefe de otros trabajadores:</label>

                      <div class="col-sm-6">
                        <label class="checkbox-inline" style="">
                          <input type="radio" value="SI" name="resp_jefe" class="jefe">SI</label>
                        <label class="checkbox-inline">
                          <input type="radio" value="NO" name="resp_jefe" class="jefe"> NO </label>
                      </div>
                    </div>
                    <div id="jefe" style="display:none;">
                      <p style="padding-bottom: 16px;font-size: 14px;"><strong>Si su respuesta fue "SÍ", responda las preguntas siguientes. Si su respuesta fue "NO" pase a las preguntas de la sección siguiente..</strong></p>

                      <div class="form-group">
                        <label class="col-sm-6 col-form-label" style="font-size: 14px;">69.- Comunican tarde los asuntos de trabajo.</label>

                        <div class="col-sm-6">
                          <label class="checkbox-inline" style="">
                            <input type="radio" value="4" name="resp69"> Siempre </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="3" name="resp69"> Casi siempre </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="2" name="resp69"> Algunas veces </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="1" name="resp69"> Casi nunca </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="0" name="resp69"> Nunca </label>

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-6 col-form-label" style="font-size: 14px;">70.- Dificultan el logro de los resultados del trabajo.</label>

                        <div class="col-sm-6">
                          <label class="checkbox-inline" style="">
                            <input type="radio" value="4" name="resp70"> Siempre </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="3" name="resp70"> Casi siempre </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="2" name="resp70"> Algunas veces </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="1" name="resp70"> Casi nunca </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="0" name="resp70"> Nunca </label>

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-6 col-form-label" style="font-size: 14px;">71.- Cooperan poco cuando se necesita.</label>

                        <div class="col-sm-6">
                          <label class="checkbox-inline" style="">
                            <input type="radio" value="4" name="resp71"> Siempre </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="3" name="resp71"> Casi siempre </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="2" name="resp71"> Algunas veces </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="1" name="resp71"> Casi nunca </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="0" name="resp71"> Nunca </label>

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-6 col-form-label" style="font-size: 14px;">72.- Ignoran las sugerencias para mejorar su trabajo.</label>

                        <div class="col-sm-6">
                          <label class="checkbox-inline" style="">
                            <input type="radio" value="4" name="resp72"> Siempre </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="3" name="resp72"> Casi siempre </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="2" name="resp72"> Algunas veces </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="1" name="resp72"> Casi nunca </label>
                          <label class="checkbox-inline">
                            <input type="radio" value="0" name="resp72"> Nunca </label>

                        </div>
                      </div>



                    </div>


                    <div class="hr-line-dashed"></div>
                    <div class="form-group row">
                      <div id="respuesta"></div>
                      <div class="col-sm-4 col-sm-offset-2 rigth">

                        <button class="btn btn-primary " type="submit">Enviar respuestas</button>
                      </div>
                    </div>
                  </form>

                </div>

                <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Bienvenido al cuestionario</h4>


                      </div>
                      <div class="modal-body">
                        <p><strong></strong> La respuesta del cuestionario que tienes en tus manos tiene como objetivo identificar y medir las condiciones de trabajo relacionadas con la organización del trabajo y que pueden representar un riesgo para la salud.</p>
                        <p> Los resultados, tratados de forma colectiva, nos servirán para mejorar las condiciones de trabajo. Por eso es necesario que contestes todas las preguntas. Toda la información se utilizará exclusivamente para los objetivos descritos. Ni en la respuesta, ni en la forma de distribución y de recogida, ni en el informe de resultados se podrá identificar ninguna persona de forma individualizada. </p>
                        <p>La respuesta es individual. Por eso te pedimos que respondas sinceramente a cada una de las preguntas, sin debatirlas con nadie, y siguiendo las introducciones de cada pregunta. </p>
                        <p>La mayor parte de las preguntas tienen varias opciones de respuestas y debes señalar la respuesta que consideres que describe mejor tu situación.</p>
                      </div>


                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>


        </div>

      </div>
    </div>
  </div>
  <script src="../sisgp/V1/components/js/jquery-3.1.1.min.js"></script>
  <script src="../sisgp/V1/components/js/popper.min.js"></script>
  <script src="../sisgp/V1/components/js/bootstrap.js"></script>
  <script src="../sisgp/V1/components/js/plugins/sweetalert/sweetalert.min.js"></script>
  <script src="../sisgp/V1/components/js/plugins/metisMenu/jquery.metisMenu.js"></script>
  <script src="../sisgp/V1/components/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

  <!-- Custom and plugin javascript -->
  <script src="../sisgp/V1/components/js/inspinia.js"></script>
  <script src="../sisgp/V1/components/js/plugins/pace/pace.min.js"></script>

  <!-- iCheck -->
  <script src="../sisgp/V1/components/js/plugins/iCheck/icheck.min.js"></script>
  <script>
    $(document).ready(function() {


      $('#myModal5').modal('show');


      $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
      });


      $(".serv").click(function(evento) {

        var valor = $(this).val();

        if (valor == 'SI') {
          $("#serv1").css("display", "block");

        } else {
          $("#serv1").css("display", "none");

        }
      });

      $(".jefe").click(function(evento) {

        var valor = $(this).val();

        if (valor == 'SI') {
          $("#jefe").css("display", "block");

        } else {
          $("#jefe").css("display", "none");

        }
      });


      $("#regis_form").on('submit', function(regis) {


        regis.preventDefault();

        var dato_usu = new FormData($(this)[0]);

        $.ajax({

          type: 'POST',
          url: 'controllers/enviar_datos.php',
          data: dato_usu,
          async: false,
          cache: false,
          contentType: false,
          processData: false,
          success: function(dat) {
            $("#respuesta").html(dat);
            /*	respuesta = $("#successfull").val();
            	if (respuesta == 1) {
            		swal({
            			title: '¡Agregado!',
            			text: 'El usuario fue creado correctamente.',
            			type: 'success',
            			closeOnConfirm: false
            		}, function () {
            			window.location = "";
            		});
            	}*/
          }
        });


      });


    });

  </script>
</body>

</html>
