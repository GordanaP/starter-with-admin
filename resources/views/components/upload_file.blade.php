<input type="file" name="{{ $name }}" id="{{ $name ?? $id }}" class="file-upload-default">
<div class="input-group col-xs-12">
    <input type="text" class="form-control file-upload-info"
    disabled placeholder="Upload Image">
    <span class="input-group-append">
        <button class="file-upload-browse btn btn-gradient-primary"
        type="button">Upload</button>
    </span>
</div>
@invalid(['field' => $name]) @endinvalid

