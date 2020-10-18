@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Manage Record') }}</div>

                <div class="card-body">
                    <div>
        Toggle column:
            <a class="toggle-vis" data-column="0">Name</a>
            <a class="toggle-vis" data-column="1">PPradesh</a>
            <a class="toggle-vis" data-column="2">District</a>
            <a class="toggle-vis" data-column="3">Gender</a>
            <a class="toggle-vis" data-column="4">Type</a>
            <a class="toggle-vis" data-column="5">Education</a>
            <a class="toggle-vis" data-column="5">Business</a>
    </div>
                    <table class="table table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Pradesh</th>
                                <th>District</th>
                                <th>Gender</th>
                                <th>Type</th>
                                <th>Education</th>
                                <th>Business</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($records as $record)
                            <tr>
                                <td>{{$record->fullname}}</td>
                                <td>{{$record->province}}</td>
                                <td>{{$record->district}}</td>
                                <td>{{$record->gender}}</td>
                                <td>{{$record->type}}</td>
                                <td>{{$record->education}}</td>
                                <td>{{$record->businessoption}}</td>
                                <td><a href="">View</a> | <a href="">Edit</a> | <a href="">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
