<div class="wizard-step" data-wizard-type="step" {{ $extra ?? ''}}>
    <div class="wizard-wrapper">
        <div class="wizard-icon">
            <span class="svg-icon svg-icon-2x">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Compass.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        {{ $slot }}
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </div>
        <div class="wizard-label">
            <h3 class="wizard-title">{{ $titulo ?? ''}}</h3>
            <div class="wizard-desc">{{ $subTitulo ?? ''}}</div>
        </div>
    </div>
</div>

