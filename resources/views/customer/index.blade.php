@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5 text-left">
            <h2>Customer List</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form>
                    <div class="row">
                        <div class="col-md-4 {{ $errors->has('name') ? ' has-error' : '' }}">
                            {!! Form::text('search','',['placeholder'=>'Search with NIC No','class'=>'form-control','autocomplete'=>'off']) !!}
                        </div>

                        <div class="col-md-4">
                            <button class="btn btn-primary" type="submit">Search</button>
                            <a class="btn btn-primary" href="{{route('customers.index')}}">Refresh</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>NIC No</th>
                        <th>Contact No</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $value)
                        <tr>
                            <td>{{$value->name}}</td>
                            <td>{{$value->nic_no}}</td>
                            <td>{{$value->contact_no}}</td>
                            <td>{{$value->email}}</td>
                            <td><a href="{{route('customers.mail-resend',$value->id)}}" class="btn btn-info">Mail
                                    Resend</a></td>
                            <td><a href="{{route('customers.show',$value->id)}}" class="btn btn-info">view</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $customers->links() }}
            </div>
        </div>
    </div>
@endsection
