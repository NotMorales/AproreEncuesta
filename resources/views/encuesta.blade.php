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
                                <x-wizard-nav titulo="Ambiente de trabajo" subTitulo="Ambientales">
                                    <x-slot name="extra">
                                        data-wizard-state="current"
                                    </x-slot>
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M5.07063123,16 C5.55875184,12.5781289 8.50474349,10 12,10 C15.4955057,10 18.4413027,12.5784053 18.9293689,16 L16.8999819,16 C16.4367116,13.7177597 14.4189579,12 12,12 C9.58104209,12 7.56328845,13.7177597 7.10001812,16 L5.07063123,16 Z M9.16995766,16 C9.58346456,14.8278115 10.7038257,14 12,14 C13.2962528,14 14.4165517,14.8278812 14.8300407,16 L9.16995766,16 Z" fill="#000000" opacity="0.3"/>
                                    <path d="M12,6 C17.7380426,6 22.4499282,10.3935 22.955157,16 L20.9450714,16 C20.9365194,15.9226393 20.9269871,15.8455742 20.916487,15.7688172 C20.316212,11.3807421 16.5529133,8 12,8 C7.45049154,8 3.68941712,11.3756875 3.08486502,15.7589741 C3.07382973,15.8389851 3.06384618,15.9193319 3.05492878,16 L1.04483481,16 C1.55007179,10.3935 6.26195744,6 12,6 Z" fill="#000000"/>
                                    <path d="M12,6 C17.7380426,6 22.4499282,10.3935 22.955157,16 L20.9450714,16 C20.9365194,15.9226393 20.9269871,15.8455742 20.916487,15.7688172 C20.316212,11.3807421 16.5529133,8 12,8 C7.45049154,8 3.68941712,11.3756875 3.08486502,15.7589741 C3.07382973,15.8389851 3.06384618,15.9193319 3.05492878,16 L1.04483481,16 C1.55007179,10.3935 6.26195744,6 12,6 Z" fill="#000000"/>
                                </x-wizard-nav>
                                <x-wizard-nav titulo="Cantidad y ritmo de trabajo" subTitulo="Actividades que realiza en su trabajo">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M15.9497475,3.80761184 L13.0246125,6.73274681 C12.2435639,7.51379539 12.2435639,8.78012535 13.0246125,9.56117394 L14.4388261,10.9753875 C15.2198746,11.7564361 16.4862046,11.7564361 17.2672532,10.9753875 L20.1923882,8.05025253 C20.7341101,10.0447871 20.2295941,12.2556873 18.674559,13.8107223 C16.8453326,15.6399488 14.1085592,16.0155296 11.8839934,14.9444337 L6.75735931,20.0710678 C5.97631073,20.8521164 4.70998077,20.8521164 3.92893219,20.0710678 C3.1478836,19.2900192 3.1478836,18.0236893 3.92893219,17.2426407 L9.05556629,12.1160066 C7.98447038,9.89144078 8.36005124,7.15466739 10.1892777,5.32544095 C11.7443127,3.77040588 13.9552129,3.26588995 15.9497475,3.80761184 Z" fill="#000000"/>
                                    <path d="M16.6568542,5.92893219 L18.0710678,7.34314575 C18.4615921,7.73367004 18.4615921,8.36683502 18.0710678,8.75735931 L16.6913928,10.1370344 C16.3008685,10.5275587 15.6677035,10.5275587 15.2771792,10.1370344 L13.8629656,8.7228208 C13.4724413,8.33229651 13.4724413,7.69913153 13.8629656,7.30860724 L15.2426407,5.92893219 C15.633165,5.5384079 16.26633,5.5384079 16.6568542,5.92893219 Z" fill="#000000" opacity="0.3"/>
                                </x-wizard-nav>
                                <x-wizard-nav titulo="Decisiones de Trabajo" subTitulo="Cambios en su trabajo">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <rect fill="#000000" opacity="0.3" transform="translate(13.000000, 6.000000) rotate(-450.000000) translate(-13.000000, -6.000000) " x="12" y="8.8817842e-16" width="2" height="12" rx="1"/>
                                    <path d="M9.79289322,3.79289322 C10.1834175,3.40236893 10.8165825,3.40236893 11.2071068,3.79289322 C11.5976311,4.18341751 11.5976311,4.81658249 11.2071068,5.20710678 L8.20710678,8.20710678 C7.81658249,8.59763107 7.18341751,8.59763107 6.79289322,8.20710678 L3.79289322,5.20710678 C3.40236893,4.81658249 3.40236893,4.18341751 3.79289322,3.79289322 C4.18341751,3.40236893 4.81658249,3.40236893 5.20710678,3.79289322 L7.5,6.08578644 L9.79289322,3.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(7.500000, 6.000000) rotate(-270.000000) translate(-7.500000, -6.000000) "/>
                                    <rect fill="#000000" opacity="0.3" transform="translate(11.000000, 18.000000) scale(1, -1) rotate(90.000000) translate(-11.000000, -18.000000) " x="10" y="12" width="2" height="12" rx="1"/>
                                    <path d="M18.7928932,15.7928932 C19.1834175,15.4023689 19.8165825,15.4023689 20.2071068,15.7928932 C20.5976311,16.1834175 20.5976311,16.8165825 20.2071068,17.2071068 L17.2071068,20.2071068 C16.8165825,20.5976311 16.1834175,20.5976311 15.7928932,20.2071068 L12.7928932,17.2071068 C12.4023689,16.8165825 12.4023689,16.1834175 12.7928932,15.7928932 C13.1834175,15.4023689 13.8165825,15.4023689 14.2071068,15.7928932 L16.5,18.0857864 L18.7928932,15.7928932 Z" fill="#000000" fill-rule="nonzero" transform="translate(16.500000, 18.000000) scale(1, -1) rotate(270.000000) translate(-16.500000, -18.000000) "/>
                                </x-wizard-nav>
                                <x-wizard-nav titulo="Capacitación e información de trabajo" subTitulo="Jefes de contacto">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                </x-wizard-nav>
                                <x-wizard-nav titulo="Relaciones con compañeros" subTitulo="Rendimiento en el trabajo">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M8.2928955,10.2071068 C7.90237121,9.81658249 7.90237121,9.18341751 8.2928955,8.79289322 C8.6834198,8.40236893 9.31658478,8.40236893 9.70710907,8.79289322 L15.7071091,14.7928932 C16.085688,15.1714722 16.0989336,15.7810586 15.7371564,16.1757246 L10.2371564,22.1757246 C9.86396402,22.5828436 9.23139665,22.6103465 8.82427766,22.2371541 C8.41715867,21.8639617 8.38965574,21.2313944 8.76284815,20.8242754 L13.6158645,15.5300757 L8.2928955,10.2071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 15.500003) scale(-1, 1) rotate(-90.000000) translate(-12.000003, -15.500003) "/>
                                    <path d="M6.70710678,12.2071104 C6.31658249,12.5976347 5.68341751,12.5976347 5.29289322,12.2071104 C4.90236893,11.8165861 4.90236893,11.1834211 5.29289322,10.7928968 L11.2928932,4.79289682 C11.6714722,4.41431789 12.2810586,4.40107226 12.6757246,4.76284946 L18.6757246,10.2628495 C19.0828436,10.6360419 19.1103465,11.2686092 18.7371541,11.6757282 C18.3639617,12.0828472 17.7313944,12.1103502 17.3242754,11.7371577 L12.0300757,6.88414142 L6.70710678,12.2071104 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(12.000003, 8.500003) scale(-1, 1) rotate(-360.000000) translate(-12.000003, -8.500003) "/>
                                </x-wizard-nav>
                                <x-wizard-nav titulo="Violencia laboral" subTitulo="Malos tratos, acoso">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z" fill="#000000" opacity="0.3"/>
                                    <rect fill="#000000" x="11" y="9" width="2" height="7" rx="1"/>
                                    <rect fill="#000000" x="11" y="17" width="2" height="2" rx="1"/>
                                </x-wizard-nav>
                                <x-wizard-nav titulo="Atención a clientes y usuarios" subTitulo="Servicio">
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
                                    @if ( $errors->any() )
                                        <x-errors></x-errors>
                                    @endif
                                    <form method="POST" action="{{ route('enviar') }}" class="form" id="form_035">
                                        @csrf
                                        <!--begin: Wizard Step 2-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Para responder las preguntas siguientes considere las condiciones ambientales de su centro de trabajo.
                                            </h4>
                                            <div class="form-group validated">
                                                <label>1.- El espacio donde trabajo me permite realizar mis actividades de manera segura e higiénica.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_01
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>2.- Mi trabajo me exige hacer mucho esfuerzo físico.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_02
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>3.- Me preocupa sufrir un accidente en mi trabajo.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_03
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>4.- Considero que en mi trabajo se aplican las normas de seguridad y salud en el trabajo.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_04
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>5.- Considero que las actividades que realizo son peligrosas.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_05
                                                </x-radio-inline>
                                            </div>
                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Para responder a las preguntas siguientes piense en la cantidad y ritmo de trabajo que tiene.
                                            </h4>

                                            <div class="form-group validated">
                                                <label>6.- Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_06
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>7.- Por la cantidad de trabajo que tengo debo trabajar sin parar.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_07
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>8.- Considero que es necesario mantener un ritmo de trabajo acelerado.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_08
                                                </x-radio-inline>
                                            </div>

                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con el esfuerzo mental que le exige su trabajo.
                                            </h4>

                                            <div class="form-group validated">
                                                <label>9.- Mi trabajo exige que esté muy concentrado.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_09
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>10.- Mi trabajo requiere que memorice mucha información.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_10
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>11.- En mi trabajo tengo que tomar decisiones difíciles muy rápido.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_11
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>12.- Mi trabajo exige que atienda varios asuntos al mismo tiempo.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_12
                                                </x-radio-inline>
                                            </div>

                                        </div>
                                        <!--end: Wizard Step 2-->
                                        <!--begin: Wizard Step 3-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.
                                            </h4>

                                            <div class="form-group validated">
                                                <label>13.- En mi trabajo soy responsable de cosas de mucho valor.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_13
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>14.- Respondo ante mi jefe por los resultados de toda mi área de trabajo.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_14
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>15.- En el trabajo me dan órdenes contradictorias.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_15
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>16.- Considero que en mi trabajo me piden hacer cosas innecesarias.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_16
                                                </x-radio-inline>
                                            </div>

                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.
                                            </h4>

                                            <div class="form-group validated">
                                                <label>17.- Trabajo horas extras más de tres veces a la semana.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_17
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>18.- Mi trabajo me exige laborar en días de descanso, festivos o fines de semana.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_18
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>19.- Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_19
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>20.- Debo atender asuntos de trabajo cuando estoy en casa.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_20
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>21.- Pienso en las actividades familiares o personales cuando estoy en mi trabajo.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_21
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>22.- Pienso que mis responsabilidades familiares afectan mi trabajo.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_22
                                                </x-radio-inline>
                                            </div>

                                        </div>
                                        <!--end: Wizard Step 3-->
                                        <!--begin: Wizard Step 4-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con las decisiones que puede tomar en su trabajo.
                                            </h4>

                                            <div class="form-group validated">
                                                <label>23.- Mi trabajo permite que desarrolle nuevas habilidades.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_23
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>24.- En mi trabajo puedo aspirar a un mejor puesto.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_24
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>25.- Durante mi jornada de trabajo puedo tomar pausas cuando las necesito.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_25
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>26.- Puedo decidir cuánto trabajo realizo durante la jornada laboral.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_26
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>27.- Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_27
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>28.- Puedo cambiar el orden de las actividades que realizo en mi trabajo.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_28
                                                </x-radio-inline>
                                            </div>

                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con cualquier tipo de cambio que ocurra en su trabajo (considere los últimos cambios realizados).
                                            </h4>

                                            <div class="form-group validated">
                                                <label>29.- Los cambios que se presentan en mi trabajo dificultan mi labor.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_29
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>30.- Cuando se presentan cambios en mi trabajo se tienen en cuenta mis ideas o aportaciones.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_30
                                                </x-radio-inline>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 4-->
                                        <!--begin: Wizard Step 5-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con la capacitación e información que se le proporciona sobre su trabajo.
                                            </h4>

                                            <div class="form-group validated">
                                                <label>31.- Me informan con claridad cuáles son mis funciones.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_31
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>32.- Me explican claramente los resultados que debo obtener en mi trabajo.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_32
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>33.- Me explican claramente los objetivos de mi trabajo.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_33
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>34.- Me informan con quién puedo resolver problemas o asuntos de trabajo.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_34
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>35.- Me permiten asistir a capacitaciones relacionadas con mi trabajo.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_35
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>36.- Recibo capacitación útil para hacer mi trabajo.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_36
                                                </x-radio-inline>
                                            </div>

                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con el o los jefes con quien tiene contacto.
                                            </h4>

                                            <div class="form-group validated">
                                                <label>37.- Mi jefe ayuda a organizar mejor el trabajo.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_37
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>38.- Mi jefe tiene en cuenta mis puntos de vista y opiniones.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_38
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>39.- Mi jefe me comunica a tiempo la información relacionada con el trabajo.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_39
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>40.- La orientación que me da mi jefe me ayuda a realizar mejor mi trabajo.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_40
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>41.- Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_41
                                                </x-radio-inline>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 5-->
                                        <!--begin: Wizard Step 6-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes se refieren a las relaciones con sus compañeros.
                                            </h4>

                                            <div class="form-group validated">
                                                <label>42.- Puedo confiar en mis compañeros de trabajo.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_42
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>43.- Entre compañeros solucionamos los problemas de trabajo de forma respetuosa.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_43
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>44.- En mi trabajo me hacen sentir parte del grupo.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_44
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>45.- Cuando tenemos que realizar trabajo de equipo los compañeros colaboran.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_45
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>46.- Mis compañeros de trabajo me ayudan cuando tengo dificultades.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_46
                                                </x-radio-inline>
                                            </div>

                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con la información que recibe sobre su rendimiento en el trabajo, el reconocimiento, el sentido de pertenencia y la estabilidad que le ofrece su trabajo.
                                            </h4>

                                            <div class="form-group validated">
                                                <label>47.- Me informan sobre lo que hago bien en mi trabajo.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_47
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>48.- La forma como evalúan mi trabajo en mi centro de trabajo me ayuda a mejorar mi desempeño.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_48
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>49.- En mi centro de trabajo me pagan a tiempo mi salario.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_49
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>50.- El pago que recibo es el que merezco por el trabajo que realizo.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_50
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>51.- Si obtengo los resultados esperados en mi trabajo me recompensan o reconocen.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_51
                                                </x-radio-inline>
                                            </div>
                                            <div class="form-group validated">
                                                <label>52.- Las personas que hacen bien el trabajo pueden crecer laboralmente.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_52
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>53.- Considero que mi trabajo es estable.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_53
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>54.- En mi trabajo existe continua rotación de personal.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_54
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>55.- Siento orgullo de laborar en este centro de trabajo.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_55
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>56.- Me siento comprometido con mi trabajo.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_56
                                                </x-radio-inline>
                                            </div>

                                        </div>
                                        <!--end: Wizard Step 6-->
                                        <!--begin: Wizard Step 7-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con actos de violencia laboral (malos tratos, acoso, hostigamiento, acoso psicológico).
                                            </h4>

                                            <div class="form-group validated">
                                                <label>57.- En mi trabajo puedo expresarme libremente sin interrupciones.</label>
                                                <x-radio-inline order="asc">
                                                    pregunta_57
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>58.- Recibo críticas constantes a mi persona y/o trabajo.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_58
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>59.- Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_59
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>60.- Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_60
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>61.- Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_61
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>62.- Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_62
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>63.- Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_63
                                                </x-radio-inline>
                                            </div>

                                            <div class="form-group validated">
                                                <label>64.- He presenciado actos de violencia en mi centro de trabajo.</label>
                                                <x-radio-inline order="desc">
                                                    pregunta_64
                                                </x-radio-inline>
                                            </div>

                                        </div>
                                        <!--end: Wizard Step 7-->
                                        <!--begin: Wizard Step 8-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">
                                                Las preguntas siguientes están relacionadas con la atención a clientes y usuarios.
                                            </h4>

                                            <div class="form-group validated">
                                                <label>En mi trabajo debo brindar servicio a clientes o usuarios:</label>
                                                <div class="radio-inline">
                                                    <label class="radio">
                                                        <input type="radio" value="SI" name="resp_com" class="serv" {{ (old('resp_com') == "SI") ? "checked" : "" }}/>
                                                        <span></span>
                                                        Si
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" value="NO" name="resp_com" class="serv" {{ (old('resp_com') == "NO") ? "checked" : "" }}/>
                                                        <span></span>
                                                        No
                                                    </label>
                                                </div>
                                            </div>

                                            <p style="padding-bottom: 16px;font-size: 14px;"><strong>Si su respuesta fue "SÍ", responda las preguntas siguientes. Si su respuesta fue "NO" pase a las preguntas de la sección siguiente..</strong></p>
                                            <div id="serv1" style="display:none;">
                                                <div class="form-group validated">
                                                    <label>65.- Atiendo clientes o usuarios muy enojados.</label>
                                                    <x-radio-inline order="desc">
                                                        pregunta_65
                                                </x-radio-inline>
                                                </div>

                                                <div class="form-group validated">
                                                    <label>66.- Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas.</label>
                                                    <x-radio-inline order="desc">
                                                        pregunta_66
                                                </x-radio-inline>
                                                </div>

                                                <div class="form-group validated">
                                                    <label>67.- Para hacer mi trabajo debo demostrar sentimientos distintos a los míos.</label>
                                                    <x-radio-inline order="desc">
                                                        pregunta_67
                                                </x-radio-inline>
                                                </div>

                                                <div class="form-group validated">
                                                    <label>68.- Mi trabajo me exige atender situaciones de violencia.</label>
                                                    <x-radio-inline order="desc">
                                                        pregunta_68
                                                </x-radio-inline>
                                                </div>
                                            </div>

                                            <div class="form-group validated">
                                                <label>Soy jefe de otros trabajadores:</label>
                                                <div class="radio-inline">
                                                    <label class="radio">
                                                        <input type="radio" value="SI" name="resp_com2" class="serv2" {{ (old('resp_com2') == "SI") ? "checked" : "" }}/>
                                                        <span></span>
                                                        Si
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" value="NO" name="resp_com2" class="serv2" {{ (old('resp_com2') == "NO") ? "checked" : "" }}/>
                                                        <span></span>
                                                        No
                                                    </label>
                                                </div>
                                            </div>

                                            <p style="padding-bottom: 16px;font-size: 14px;"><strong>Si su respuesta fue "SÍ", responda las preguntas siguientes. Si su respuesta fue "NO" pase a las preguntas de la sección siguiente..</strong></p>
                                            <div id="serv2" style="display:none;">
                                                <div class="form-group validated">
                                                    <label>69.- Comunican tarde los asuntos de trabajo.</label>
                                                    <x-radio-inline order="desc">
                                                        pregunta_69
                                                </x-radio-inline>
                                                </div>

                                                <div class="form-group validated">
                                                    <label>70.- Dificultan el logro de los resultados del trabajo.</label>
                                                    <x-radio-inline order="desc">
                                                        pregunta_70
                                                </x-radio-inline>
                                                </div>

                                                <div class="form-group validated">
                                                    <label>71.- Cooperan poco cuando se necesita.</label>
                                                    <x-radio-inline order="desc">
                                                        pregunta_71
                                                </x-radio-inline>
                                                </div>

                                                <div class="form-group validated">
                                                    <label>72.- Ignoran las sugerencias para mejorar su trabajo.</label>
                                                    <x-radio-inline order="desc">
                                                        pregunta_72
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

                                                <button type="submit" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Enviar</button>
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
