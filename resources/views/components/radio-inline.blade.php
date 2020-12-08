<div class="radio-inline ">
    <label class="radio">
        <input type="radio" value="{{ $value_01 }}" name="{{ $slot }}" checked {{ (old("{$slot}") == "{$value_01}") ? "checked" : "" }}/>
        <span></span>
        Siempre
    </label>
    <label class="radio">
        <input type="radio" value="{{ $value_02 }}" name="{{ $slot }}" {{ (old("{$slot}") == "{$value_02}") ? "checked" : "" }}/>
        <span></span>
        Casi siempre
    </label>
    <label class="radio">
        <input type="radio" value="{{ $value_03 }}" name="{{ $slot }}" {{ (old("{$slot}") == "{$value_03}") ? "checked" : "" }}/>
        <span></span>
        Algunas veces
    </label>
    <label class="radio">
        <input type="radio" value="{{ $value_04 }}" name="{{ $slot }}" {{ (old("{$slot}") == "{$value_04}") ? "checked" : "" }}/>
        <span></span>
        Casi nunca
    </label>
    <label class="radio">
        <input type="radio" value="{{ $value_05 }}" name="{{ $slot }}" {{ (old("{$slot}") == "{$value_05}") ? "checked" : "" }}/>
        <span></span>
        Nunca
    </label>
</div>
@error("{$slot}")
    <div class="invalid-feedback">Esta pregunta es obligatoria.</div>
@enderror
