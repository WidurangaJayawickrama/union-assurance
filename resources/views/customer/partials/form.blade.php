<div class="row">
    <div class="form-group col-md-6">
        {!! Form::label('name', 'Full Name*', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-10">
            {!! Form::text('name', $name, ['autocomplete'=>'off','id'=>'name','class' => 'form-control']) !!}
            <p class="help-block"></p>
            @if($errors->has('name'))
                <p class="help-block">
                    {{ $errors->first('name') }}
                </p>
            @endif
        </div>
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('nic_no', 'NIC No*', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-10">
            {!! Form::text('nic_no', $nic_no, ['autocomplete'=>'off','id'=>'nic_no','class' => 'form-control']) !!}
            <p class="help-block"></p>
            @if($errors->has('nic_no'))
                <p class="help-block">
                    {{ $errors->first('nic_no') }}
                </p>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        {!! Form::label('contact_no', 'Contact No*', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-10">
            {!! Form::text('contact_no', $contact_no, ['autocomplete'=>'off','id'=>'contact_no','class' => 'form-control']) !!}
            <p class="help-block"></p>
            @if($errors->has('contact_no'))
                <p class="help-block">
                    {{ $errors->first('contact_no') }}
                </p>
            @endif
        </div>
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('email', 'Email*', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-10">
            {!! Form::text('email', $email, ['autocomplete'=>'off','id'=>'email','class' => 'form-control']) !!}
            <p class="help-block"></p>
            @if($errors->has('email'))
                <p class="help-block">
                    {{ $errors->first('email') }}
                </p>
            @endif
        </div>
    </div>
</div>
