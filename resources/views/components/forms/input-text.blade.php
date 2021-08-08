<div class="{{ $divClass }}">
    <label for="{{ $idName }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control {{ $class }} @error( $name ) is-invalid @enderror" id="{{ $idName }}" name="{{ $name }}" value="{{ $value }}" placeholder="{{ $placeholder }}" {{ $attributes }}>
    @error( $name )
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <small id="{{ $idName }}Help" class="form-text text-muted">{{ $helpText }}</small>
</div>
