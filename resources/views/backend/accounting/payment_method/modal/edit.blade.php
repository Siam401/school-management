<form method="post" class="ajax-submit" autocomplete="off" action="{{ action('PaymentMethodController@update', $id) }}"
    enctype="multipart/form-data">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PATCH">

    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">{{ _lang('Payment Method Name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ $paymentmethod->name }}" required>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">{{ _lang('Balance') }}</label>
            <input type="text" class="form-control" name="balance" value="{{ $paymentmethod->balance }}" required>
        </div>
    </div>


    <div class="form-group">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">{{ _lang('Update') }}</button>
        </div>
    </div>
</form>
