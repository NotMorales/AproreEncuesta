<div class="radio-inline ">
    <label class="radio">
        <input type="radio" value="{{ $value01 ?? '' }}" name="{{ $slot }}" {{ (old("{$slot}") == sprintf("%s",$value01 ?? '-')) ? "checked" : "" }}/>
        <span></span>
        Siempre
    </label>
    <label class="radio">
        <input type="radio" value="{{ $value02 ?? '' }}" name="{{ $slot }}" {{ (old("{$slot}") == sprintf("%s",$value02 ?? '-')) ? "checked" : "" }}/>
        <span></span>
        Casi siempre
    </label>
    <label class="radio">
        <input type="radio" value="{{ $value03 ?? '' }}" name="{{ $slot }}" {{ (old("{$slot}") == sprintf("%s",$value03 ?? '-')) ? "checked" : "" }}/>
        <span></span>
        Algunas veces
    </label>
    <label class="radio">
        <input type="radio" value="{{ $value04 ?? '' }}" name="{{ $slot }}" {{ (old("{$slot}") == sprintf("%s",$value04 ?? '-')) ? "checked" : "" }}/>
        <span></span>
        Casi nunca
    </label>
    <label class="radio">
        <input type="radio" value="{{ $value05 ?? '' }}" name="{{ $slot }}" {{ (old("{$slot}") == sprintf("%s",$value05 ?? '-')) ? "checked" : "" }}/>
        <span></span>
        Nunca
    </label>
</div>
@error("{$slot}")
<div class="invalid-feedback">Esta pregunta es obligatoria.</div>
@enderror
