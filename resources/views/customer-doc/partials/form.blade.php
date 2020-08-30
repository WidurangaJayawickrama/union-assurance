<div class="row">
    <div class="form-group col-md-6">
        {!! Form::label('document_one', 'Document One*', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-10">
            {!! Form::file('document_one', $document_one, ['autocomplete'=>'off','id'=>'document_one','class' => 'form-control']) !!}
            <p class="help-block"></p>
            @if($errors->has('document_one'))
                <p class="help-block">
                    {{ $errors->first('document_one') }}
                </p>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        {!! Form::label('document_two', 'Document two*', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-10">
            {!! Form::file('document_two', $document_two, ['autocomplete'=>'off','id'=>'document_two','class' => 'form-control']) !!}
            <p class="help-block"></p>
            @if($errors->has('document_two'))
                <p class="help-block">
                    {{ $errors->first('document_two') }}
                </p>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        {!! Form::label('document_three', 'Document Three*', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-10">
            {!! Form::file('document_three', $document_three, ['autocomplete'=>'off','id'=>'document_three','class' => 'form-control']) !!}
            <p class="help-block"></p>
            @if($errors->has('document_three'))
                <p class="help-block">
                    {{ $errors->first('document_three') }}
                </p>
            @endif
        </div>
    </div>
</div>


