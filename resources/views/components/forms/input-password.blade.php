<div class="{{ $divClass }}">
    <label for="{{ $idName }}" class="form-label">{{ $label }}</label>
    <div class="input-group @error( $name ) is-invalid @enderror" id="show_hide_password">
        <input type="password" class="form-control border-end-0 {{ $class }}" id="{{ $idName }}" name="{{ $name }}" placeholder="{{ $placeholder }}" {{ $attributes }}> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
    </div>
    @error( $name )
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <small id="{{ $idName }}Help" class="form-text text-muted">{{ $helpText }}</small>
</div>
