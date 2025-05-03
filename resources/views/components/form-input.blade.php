<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label><br>
    <input type="{{ $type }}" name="{{ $name }}" class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}" 
        placeholder="{{ $placeholder }}" value="{{ old($name, $value) }}">
    @if ($errors->has($name))
        <div class="text-danger invalid-feedback">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>
