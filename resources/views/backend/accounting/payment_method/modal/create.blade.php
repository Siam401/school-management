<form method="post" class="ajax-submit" autocomplete="off" action="{{ route('payment_methods.store') }}"
    enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">{{ _lang('Payment Method Name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">{{ _lang('Balance') }}</label>
            <input type="text" class="form-control" name="balance" value="{{ old('balance') }}" required>
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group">
            <button type="reset" class="btn btn-danger">{{ _lang('Reset') }}</button>
            <button type="submit" class="btn btn-primary">{{ _lang('Save') }}</button>
        </div>
    </div>
</form>
