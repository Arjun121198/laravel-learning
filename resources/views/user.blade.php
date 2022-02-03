@extends('layouts.master')
@section('title', 'home')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="form">Add Details</a>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Mother Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Home Address</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($cruds as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->father_name }}</td>
                <td>{{ $product->mother_name }}</td>
                <td>{{ $product->phone }}</td>
                <td>{{ $product->email }}</td>
                <td>{{ $product->home_address }}</td>
                <td>
                    <a class="btn btn-primary" href={{"edit/".$product['id']}}>Edit</a>
                    <a class="btn btn-danger" href={{"delete/".$product['id']}}>Delete</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
