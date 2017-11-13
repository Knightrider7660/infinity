@extends('include.master')
@extends('box.area')
@section('title')
    Area Entry
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Area</button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12"><br>
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Area List</h3>
                </div>
                <div class="box-body">
                    <table class="table">
                        <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Del</th>
                        </thead>
                        <tbody>
                        @foreach($table as $row)
                            <tr>
                                <td>{{$row->areaID}}</td>
                                <td>{{$row->name}}</td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div>

        </div>
    </div>
@endsection