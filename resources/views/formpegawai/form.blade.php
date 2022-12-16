<div class="form-group {{ $errors->has('Namapegawai') ? 'has-error' : ''}}">
    <label for="Namapegawai" class="control-label">{{ 'Namapegawai' }}</label>
    <input class="form-control" name="Namapegawai" type="text" id="Namapegawai" value="{{ isset($formpegawai->Namapegawai) ? $formpegawai->Namapegawai : ''}}" >
    {!! $errors->first('Namapegawai', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Usia') ? 'has-error' : ''}}">
    <label for="Usia" class="control-label">{{ 'Usia' }}</label>
    <input class="form-control" name="Usia" type="number" id="Usia" value="{{ isset($formpegawai->Usia) ? $formpegawai->Usia : ''}}" >
    {!! $errors->first('Usia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Jeniskelamin') ? 'has-error' : ''}}">
    <label for="Jeniskelamin" class="control-label">{{ 'Jeniskelamin' }}</label>
    <input class="form-control" name="Jeniskelamin" type="text" id="Jeniskelamin" value="{{ isset($formpegawai->Jeniskelamin) ? $formpegawai->Jeniskelamin : ''}}" >
    {!! $errors->first('Jeniskelamin', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
