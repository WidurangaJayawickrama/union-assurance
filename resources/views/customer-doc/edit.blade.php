@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>Customer-document Upload</h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => ['customer-doc.upload',$ref_id], 'files' => true, 'id' => 'customer-doc-upload']) !!}

                @include('customer-doc.partials.form',
            [
                'document_one'=>null,
                'document_two'=>null,
                'document_three'=>null
             ])

                <button class="btn btn-primary btn-lg btn-block" type="submit">Upload Document</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
