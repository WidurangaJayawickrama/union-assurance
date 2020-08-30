@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5 text-left">
            <h2>Customer Create</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => 'customers.store', 'files' => true, 'id' => 'create-customer']) !!}
                @include('customer.partials.form',
            [
                'name'=>null,
                'nic_no'=>null,
                'email'=>null,
                'contact_no'=>null
             ])
                <div class="row">
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary float-right">Save</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
