@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>Customer Edit</h2>
            {{--            <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>--}}
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

                <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2017-2018 Company Name</p>
        </footer>
    </div>
@endsection
