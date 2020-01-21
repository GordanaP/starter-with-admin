<div class="row">
    <div class="col-md-3">
        <img src="{{ $doctor->getImage() }}" class="w-full" >
    </div>
    <div class="col-md-9">
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input"
                name="{{ $manage_image }}" id="{{ Str::camel($upload_image) }}"
                value="{{ $upload_image }}" checked /> {{ $upload_image_label }}
            </label>
        </div>

        <div class="form-group">
            @uploadFile(['name' => 'image']) @enduploadFile
        </div>

        @if ($doctor->hasImage())
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input"
                    name="{{ $manage_image }}" id="{{ Str::camel($remove_image) }}"
                    value="{{ $remove_image }}" /> {{ $remove_image_label }}
                </label>
            </div>
        @endif
    </div>
</div>