<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <select name="{{ $name }}" class="form-select @error($name) is-invalid @enderror">
        <option value="">{{ $emptyOption ?? 'Select an option' }}</option>
        @foreach ($options as $key => $option)
            <option value="{{ $key }}" {{ old($name, $selected) == $key ? 'selected' : '' }}>
                {{ $option }}
            </option>
        @endforeach
    </select>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
    