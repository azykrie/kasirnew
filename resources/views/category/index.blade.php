@extends('layouts.master')
@section('content') 
<section class = "content-header" > 
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Category Data</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active">Category Data</li>
            </ol>
        </div>
    </div>
</div>
</section> 
<section class = "content" > 
    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                <div class="pull-right">
                <a class="btn btn-success" href="{{ route('category.create') }}"> Create</a>
                </div>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Category</th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        @foreach ($category as $item)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->category }}
                                </td>
                                <td>
                                <form action="{{ route('category.destroy', $item->id) }}" method="post">
                                <a class="btn btn-primary" href="{{ route('category.edit', $item->id) }}" >Edit</a>
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection