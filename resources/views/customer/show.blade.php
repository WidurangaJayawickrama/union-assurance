@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                Name:
            </div>
            <div class="col-sm">
                {{$customerDetails->name}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                NIC No:
            </div>
            <div class="col-sm">
                {{$customerDetails->nic_no}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                Contact No:
            </div>
            <div class="col-sm">
                {{$customerDetails->contact_no}}
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                Email:
            </div>
            <div class="col-sm">
                {{$customerDetails->email}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                Document One:
            </div>
            <div class="col-sm">
                <a href="{{url('customers',$customerDetails->document_one)}}" class="btn-link">Download</a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                Document Two:
            </div>
            <div class="col-sm">
                <a href="{{url('customers',$customerDetails->document_two)}}" class="btn-link">Download</a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                Document Three:
            </div>
            <div class="col-sm">
                <a href="{{url('customers',$customerDetails->document_three)}}" class="btn-link">Download</a>
            </div>
        </div>

    </div>
@stop
@section('after-scripts-end')


    </script>
@endsection
