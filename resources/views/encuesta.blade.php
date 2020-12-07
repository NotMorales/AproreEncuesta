@extends('layouts.main')
@section('content')
    <x-subheader></x-subheader>
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom">
                <div class="card-body p-0">
                    <!--begin: Wizard-->
                    <div class="wizard wizard-2" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="false">
                        <!--begin: Wizard Nav-->
                        <div class="wizard-nav border-right py-8 px-8 py-lg-20 px-lg-10">
                            <div class="wizard-steps">
                                <x-wizard-nav titulo="Estado anímico" subTitulo="Estado anímico">
                                    <x-slot name="extra">
                                        data-wizard-state="current"
                                    </x-slot>
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <polygon fill="#000000" opacity="0.3" points="5 15 3 21.5 9.5 19.5"/>
                                    <path d="M13,2 C18.5228475,2 23,6.4771525 23,12 C23,17.5228475 18.5228475,22 13,22 C7.4771525,22 3,17.5228475 3,12 C3,6.4771525 7.4771525,2 13,2 Z M7.16794971,13.5547002 C8.67758127,15.8191475 10.6456687,17 13,17 C15.3543313,17 17.3224187,15.8191475 18.8320503,13.5547002 C19.1384028,13.0951715 19.0142289,12.4743022 18.5547002,12.1679497 C18.0951715,11.8615972 17.4743022,11.9857711 17.1679497,12.4452998 C16.0109146,14.1808525 14.6456687,15 13,15 C11.3543313,15 9.9890854,14.1808525 8.83205029,12.4452998 C8.52569784,11.9857711 7.90482849,11.8615972 7.4452998,12.1679497 C6.98577112,12.4743022 6.86159725,13.0951715 7.16794971,13.5547002 Z" fill="#000000"/>
                                </x-wizard-nav>
                                <x-wizard-nav titulo="Ambientales" subTitulo="Ambientales">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                </x-wizard-nav>
                                <x-wizard-nav titulo="Cantidad y ritmo de trabajo" subTitulo="Cantidad y ritmo de trabajo">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                </x-wizard-nav>
                                <x-wizard-nav titulo="Esfuerzo mental" subTitulo="Esfuerzo mental">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                </x-wizard-nav>
                                <x-wizard-nav titulo="Actividades de trabajo" subTitulo="Actividades de trabajo">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                </x-wizard-nav>
                                <x-wizard-nav titulo="Decisiones de trabajo" subTitulo="Decisiones de trabajo">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                </x-wizard-nav>
                                <x-wizard-nav titulo="Cambio de trabajo" subTitulo="Cambio de trabajo">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                </x-wizard-nav>
                                <x-wizard-nav titulo="Capacitación e información" subTitulo="Capacitación e información">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                </x-wizard-nav>
                            </div>
                        </div>
                        <!--end: Wizard Nav-->
                        <!--begin: Wizard Body-->
                        <div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
                            <!--begin: Wizard Form-->
                            <div class="row">
                                <div class="offset-xxl-2 col-xxl-8">
                                    <form class="form" id="kt_form">
                                        <!--begin: Wizard Step 1-->
                                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las siguientes preguntas evocan a su estado anímico y como ha sobrellevado la contingencia actualmente.
                                            </h4>
                                            <!--begin::Input-->
                                            <div class="form-group">
                                                <label>Seleccione una palabra que describa su estado de ánimo durante la cuarentena.</label>
                                                <div class="radio-inline">
                                                    <label class="radio">
                                                        <input type="radio" />
                                                        <span></span>
                                                        Alegre / tranquilo
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" />
                                                        <span></span>
                                                        Triste / deprimido
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" />
                                                        <span></span>
                                                        Preocupado
                                                    </label>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <div class="form-group">
                                                <label>¿Sabe qué hacer en caso de que usted o algun miembro de su familia presente síntomas de COVID 19?</label>
                                                <select class="form-control" id="exampleSelect1">
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
                                                <span class="form-text text-muted">(Seleccione la opción que considere)</span>
                                            </div>

                                            <div class="form-group">
                                                <label>¿Qué medidas toma para no contagiarse de COVID-19</label>
                                                <select class="form-control">
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

                                            <div class="form-group">
                                                <label>¿Si fuese diagnosticado con coronavirus, tendría la opción de aislarse de otros miembros del hogar?</label>
                                                <div class="radio-inline">
                                                    <label class="radio">
                                                        <input type="radio" />
                                                        <span></span>
                                                        Si
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" />
                                                        <span></span>
                                                        No
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>En esta cuarentena usted ha tenido la oportunidad de:</label>
                                                <select class="form-control">
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

                                            <div class="form-group">
                                                <label>¿Cómo ha sido la convivencia de la familia durante esta cuarentena?</label>
                                                <div class="radio-inline">
                                                    <label class="radio">
                                                        <input type="radio" name="pregunta1" />
                                                        <span></span>
                                                        Buena
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="pregunta1"/>
                                                        <span></span>
                                                        Mala
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="pregunta1"/>
                                                        <span></span>
                                                        Igual
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>¿Usted o alguien de su casa tiene alguno de los siguientes padecimientos?</label>
                                                <div class="radio-inline">
                                                    <label class="radio">
                                                        <input type="radio" />
                                                        <span></span>
                                                        Diabetes
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" />
                                                        <span></span>
                                                        Obesidad
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" />
                                                        <span></span>
                                                        Hipertensión
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" />
                                                        <span></span>
                                                        Cáncer
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" />
                                                        <span></span>
                                                        Enfermedades respiratorias
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" />
                                                        <span></span>
                                                        Dos o mas de estas
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" />
                                                        <span></span>
                                                        Ninguna de las anteriores
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>¿Ha estado en contacto con alguien que haya sido diagnosticado con COVID-19?</label>
                                                <div class="radio-inline">
                                                    <label class="radio">
                                                        <input type="radio" />
                                                        <span></span>
                                                        Si
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" />
                                                        <span></span>
                                                        No
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" />
                                                        <span></span>
                                                        No se
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>¿Ha viajado usted o su familia durante los últimos 14 días?</label>
                                                <div class="radio-inline">
                                                    <label class="radio">
                                                        <input type="radio" />
                                                        <span></span>
                                                        Si
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" />
                                                        <span></span>
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!--end: Wizard Step 1-->
                                        <!--begin: Wizard Step 2-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Para responder las preguntas siguientes considere las condiciones ambientales de su centro de trabajo.
                                            </h4>
                                            <div class="form-group">
                                                <label>1.- El espacio donde trabajo me permite realizar mis actividades de manera segura e higiénica.</label>
                                                <x-radio-inline>
                                                    name="pregunta_01"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>2.- Mi trabajo me exige hacer mucho esfuerzo físico.</label>
                                                <x-radio-inline>
                                                    name="pregunta_02"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>3.- Me preocupa sufrir un accidente en mi trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_03"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>4.- Considero que en mi trabajo se aplican las normas de seguridad y salud en el trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_04"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>5.- Considero que las actividades que realizo son peligrosas.</label>
                                                <x-radio-inline>
                                                    name="pregunta_05"
                                                </x-radio-inline>
                                            </div>
                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Para responder a las preguntas siguientes piense en la cantidad y ritmo de trabajo que tiene.
                                            </h4>

                                            <div class="form-group">
                                                <label>6.- Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno.</label>
                                                <x-radio-inline>
                                                    name="pregunta_06"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>7.- Por la cantidad de trabajo que tengo debo trabajar sin parar.</label>
                                                <x-radio-inline>
                                                    name="pregunta_07"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>8.- Considero que es necesario mantener un ritmo de trabajo acelerado.</label>
                                                <x-radio-inline>
                                                    name="pregunta_08"
                                                </x-radio-inline>
                                            </div>

                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con el esfuerzo mental que le exige su trabajo.
                                            </h4>

                                            <div class="form-group">
                                                <label>9.- Mi trabajo exige que esté muy concentrado.</label>
                                                <x-radio-inline>
                                                    name="pregunta_09"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>10.- Mi trabajo requiere que memorice mucha información.</label>
                                                <x-radio-inline>
                                                    name="pregunta_10"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>11.- En mi trabajo tengo que tomar decisiones difíciles muy rápido.</label>
                                                <x-radio-inline>
                                                    name="pregunta_11"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>12.- Mi trabajo exige que atienda varios asuntos al mismo tiempo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_12"
                                                </x-radio-inline>
                                            </div>

                                        </div>
                                        <!--end: Wizard Step 2-->
                                        <!--begin: Wizard Step 3-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.
                                            </h4>

                                            <div class="form-group">
                                                <label>13.- En mi trabajo soy responsable de cosas de mucho valor.</label>
                                                <x-radio-inline>
                                                    name="pregunta_13"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>14.- Respondo ante mi jefe por los resultados de toda mi área de trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_14"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>15.- En el trabajo me dan órdenes contradictorias.</label>
                                                <x-radio-inline>
                                                    name="pregunta_15"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>16.- Considero que en mi trabajo me piden hacer cosas innecesarias.</label>
                                                <x-radio-inline>
                                                    name="pregunta_16"
                                                </x-radio-inline>
                                            </div>

                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.
                                            </h4>

                                            <div class="form-group">
                                                <label>17.- Trabajo horas extras más de tres veces a la semana.</label>
                                                <x-radio-inline>
                                                    name="pregunta_17"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>18.- Mi trabajo me exige laborar en días de descanso, festivos o fines de semana.</label>
                                                <x-radio-inline>
                                                    name="pregunta_18"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>19.- Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales.</label>
                                                <x-radio-inline>
                                                    name="pregunta_19"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>20.- Debo atender asuntos de trabajo cuando estoy en casa.</label>
                                                <x-radio-inline>
                                                    name="pregunta_20"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>21.- Pienso en las actividades familiares o personales cuando estoy en mi trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_21"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>22.- Pienso que mis responsabilidades familiares afectan mi trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_22"
                                                </x-radio-inline>
                                            </div>

                                        </div>
                                        <!--end: Wizard Step 3-->
                                        <!--begin: Wizard Step 4-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con las decisiones que puede tomar en su trabajo.
                                            </h4>

                                            <div class="form-group">
                                                <label>23.- Mi trabajo permite que desarrolle nuevas habilidades.</label>
                                                <x-radio-inline>
                                                    name="pregunta_23"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>24.- En mi trabajo puedo aspirar a un mejor puesto.</label>
                                                <x-radio-inline>
                                                    name="pregunta_24"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>25.- Durante mi jornada de trabajo puedo tomar pausas cuando las necesito.</label>
                                                <x-radio-inline>
                                                    name="pregunta_25"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>26.- Puedo decidir cuánto trabajo realizo durante la jornada laboral.</label>
                                                <x-radio-inline>
                                                    name="pregunta_26"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>27.- Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_27"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>28.- Puedo cambiar el orden de las actividades que realizo en mi trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_28"
                                                </x-radio-inline>
                                            </div>

                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con cualquier tipo de cambio que ocurra en su trabajo (considere los últimos cambios realizados).
                                            </h4>

                                            <div class="form-group">
                                                <label>29.- Los cambios que se presentan en mi trabajo dificultan mi labor.</label>
                                                <x-radio-inline>
                                                    name="pregunta_29"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>30.- Cuando se presentan cambios en mi trabajo se tienen en cuenta mis ideas o aportaciones.</label>
                                                <x-radio-inline>
                                                    name="pregunta_30"
                                                </x-radio-inline>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 4-->
                                        <!--begin: Wizard Step 5-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con la capacitación e información que se le proporciona sobre su trabajo.
                                            </h4>

                                            <div class="form-group">
                                                <label>31.- Me informan con claridad cuáles son mis funciones.</label>
                                                <x-radio-inline>
                                                    name="pregunta_31"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>32.- Me explican claramente los resultados que debo obtener en mi trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_32"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>33.- Me explican claramente los objetivos de mi trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_33"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>34.- Me informan con quién puedo resolver problemas o asuntos de trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_34"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>35.- Me permiten asistir a capacitaciones relacionadas con mi trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_35"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>36.- Recibo capacitación útil para hacer mi trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_36"
                                                </x-radio-inline>
                                            </div>

                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con el o los jefes con quien tiene contacto.
                                            </h4>

                                            <div class="form-group">
                                                <label>37.- Mi jefe ayuda a organizar mejor el trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_37"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>38.- Mi jefe tiene en cuenta mis puntos de vista y opiniones.</label>
                                                <x-radio-inline>
                                                    name="pregunta_38"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>39.- Mi jefe me comunica a tiempo la información relacionada con el trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_39"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>40.- La orientación que me da mi jefe me ayuda a realizar mejor mi trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_40"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>41.- Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_41"
                                                </x-radio-inline>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 5-->
                                        <!--begin: Wizard Step 6-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes se refieren a las relaciones con sus compañeros.
                                            </h4>

                                            <div class="form-group">
                                                <label>42.- Puedo confiar en mis compañeros de trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_42"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>43.- Entre compañeros solucionamos los problemas de trabajo de forma respetuosa.</label>
                                                <x-radio-inline>
                                                    name="pregunta_43"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>44.- En mi trabajo me hacen sentir parte del grupo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_44"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>45.- Cuando tenemos que realizar trabajo de equipo los compañeros colaboran.</label>
                                                <x-radio-inline>
                                                    name="pregunta_45"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>46.- Mis compañeros de trabajo me ayudan cuando tengo dificultades.</label>
                                                <x-radio-inline>
                                                    name="pregunta_46"
                                                </x-radio-inline>
                                            </div>

                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con la información que recibe sobre su rendimiento en el trabajo, el reconocimiento, el sentido de pertenencia y la estabilidad que le ofrece su trabajo.
                                            </h4>

                                            <div class="form-group">
                                                <label>47.- Me informan sobre lo que hago bien en mi trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_47"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>48.- La forma como evalúan mi trabajo en mi centro de trabajo me ayuda a mejorar mi desempeño.</label>
                                                <x-radio-inline>
                                                    name="pregunta_48"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>49.- En mi centro de trabajo me pagan a tiempo mi salario.</label>
                                                <x-radio-inline>
                                                    name="pregunta_49"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>50.- El pago que recibo es el que merezco por el trabajo que realizo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_50"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>51.- Si obtengo los resultados esperados en mi trabajo me recompensan o reconocen.</label>
                                                <x-radio-inline>
                                                    name="pregunta_51"
                                                </x-radio-inline>
                                            </div>
                                            <div class="form-group">
                                                <label>52.- Las personas que hacen bien el trabajo pueden crecer laboralmente.</label>
                                                <x-radio-inline>
                                                    name="pregunta_52"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>53.- Considero que mi trabajo es estable.</label>
                                                <x-radio-inline>
                                                    name="pregunta_53"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>54.- En mi trabajo existe continua rotación de personal.</label>
                                                <x-radio-inline>
                                                    name="pregunta_54"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>55.- Siento orgullo de laborar en este centro de trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_55"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>56.- Me siento comprometido con mi trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_56"
                                                </x-radio-inline>
                                            </div>

                                        </div>
                                        <!--end: Wizard Step 6-->
                                        <!--begin: Wizard Step 7-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con actos de violencia laboral (malos tratos, acoso, hostigamiento, acoso psicológico).
                                            </h4>

                                            <div class="form-group">
                                                <label>57.- En mi trabajo puedo expresarme libremente sin interrupciones.</label>
                                                <x-radio-inline>
                                                    name="pregunta_57"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>58.- Recibo críticas constantes a mi persona y/o trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_58"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>59.- Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones.</label>
                                                <x-radio-inline>
                                                    name="pregunta_59"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>60.- Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones.</label>
                                                <x-radio-inline>
                                                    name="pregunta_60"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>61.- Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador.</label>
                                                <x-radio-inline>
                                                    name="pregunta_61"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>62.- Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores.</label>
                                                <x-radio-inline>
                                                    name="pregunta_62"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>63.- Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_63"
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group">
                                                <label>64.- He presenciado actos de violencia en mi centro de trabajo.</label>
                                                <x-radio-inline>
                                                    name="pregunta_64"
                                                </x-radio-inline>
                                            </div>

                                        </div>
                                        <!--end: Wizard Step 7-->
                                        <!--begin: Wizard Step 8-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con la atención a clientes y usuarios.
                                            </h4>

                                            <div class="form-group">
                                                <label>En mi trabajo debo brindar servicio a clientes o usuarios:</label>
                                                <div class="radio-inline">
                                                    <label class="radio">
                                                        <input type="radio" value="SI" name="resp_com" class="serv"/>
                                                        <span></span>
                                                        Si
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" value="NO" name="resp_com" class="serv"/>
                                                        <span></span>
                                                        No
                                                    </label>
                                                </div>
                                            </div>

                                            <p style="padding-bottom: 16px;font-size: 14px;"><strong>Si su respuesta fue "SÍ", responda las preguntas siguientes. Si su respuesta fue "NO" pase a las preguntas de la sección siguiente..</strong></p>
                                            <div id="serv1" style="display:none;">
                                                <div class="form-group">
                                                    <label>65.- Atiendo clientes o usuarios muy enojados.</label>
                                                    <x-radio-inline>
                                                        name="pregunta_65"
                                                    </x-radio-inline>
                                                </div>

                                                <div class="form-group">
                                                    <label>66.- Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas.</label>
                                                    <x-radio-inline>
                                                        name="pregunta_66"
                                                    </x-radio-inline>
                                                </div>

                                                <div class="form-group">
                                                    <label>67.- Para hacer mi trabajo debo demostrar sentimientos distintos a los míos.</label>
                                                    <x-radio-inline>
                                                        name="pregunta_67"
                                                    </x-radio-inline>
                                                </div>

                                                <div class="form-group">
                                                    <label>68.- Mi trabajo me exige atender situaciones de violencia.</label>
                                                    <x-radio-inline>
                                                        name="pregunta_68"
                                                    </x-radio-inline>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Soy jefe de otros trabajadores:</label>
                                                <div class="radio-inline">
                                                    <label class="radio">
                                                        <input type="radio" value="SI" name="resp_com2" class="serv2"/>
                                                        <span></span>
                                                        Si
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" value="NO" name="resp_com2" class="serv2"/>
                                                        <span></span>
                                                        No
                                                    </label>
                                                </div>
                                            </div>

                                            <p style="padding-bottom: 16px;font-size: 14px;"><strong>Si su respuesta fue "SÍ", responda las preguntas siguientes. Si su respuesta fue "NO" pase a las preguntas de la sección siguiente..</strong></p>
                                            <div id="serv2" style="display:none;">
                                                <div class="form-group">
                                                    <label>69.- Comunican tarde los asuntos de trabajo.</label>
                                                    <x-radio-inline>
                                                        name="pregunta_69"
                                                    </x-radio-inline>
                                                </div>

                                                <div class="form-group">
                                                    <label>70.- Dificultan el logro de los resultados del trabajo.</label>
                                                    <x-radio-inline>
                                                        name="pregunta_70"
                                                    </x-radio-inline>
                                                </div>

                                                <div class="form-group">
                                                    <label>71.- Cooperan poco cuando se necesita.</label>
                                                    <x-radio-inline>
                                                        name="pregunta_71"
                                                    </x-radio-inline>
                                                </div>

                                                <div class="form-group">
                                                    <label>72.- Ignoran las sugerencias para mejorar su trabajo.</label>
                                                    <x-radio-inline>
                                                        name="pregunta_72"
                                                    </x-radio-inline>
                                                </div>
                                            </div>

                                        </div>
                                        <!--end: Wizard Step 8-->
                                        <!--begin: Wizard Actions-->
                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                            <div class="mr-2">
                                                <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Anterior</button>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Enviar</button>
                                                <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Siguiente</button>
                                            </div>
                                        </div>
                                        <!--end: Wizard Actions-->
                                    </form>
                                </div>
                                <!--end: Wizard-->
                            </div>
                            <!--end: Wizard Form-->
                        </div>
                        <!--end: Wizard Body-->
                    </div>
                    <!--end: Wizard-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
    @include('modals.bienvenida-cuestionario')
@endsection

@section('head')
    <link href="{{ asset('assets/css/pages/wizard/wizard-2.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('script')
    <script src="{{ asset('assets/js/pages/custom/wizard/wizard-2.js') }}"></script>
    <script type="text/javascript">
        $(window).on('load',function(){
            $('#exampleModalLong').modal('show');
        });

        $(document).ready(function() {
            $(".serv").click(function(evento) {
                var valor = $(this).val();
                if (valor == 'SI') {
                    $("#serv1").css("display", "block");
                } else {
                    $("#serv1").css("display", "none");
                }
            });
            $(".serv2").click(function(evento) {
                var valor = $(this).val();
                if (valor == 'SI') {
                    $("#serv2").css("display", "block");
                } else {
                    $("#serv2").css("display", "none");
                }
            });
        });
    </script>
@endsection
