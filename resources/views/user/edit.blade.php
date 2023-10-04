@extends('layouts.master')
@section('content')
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User Edit</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('user.index') }}">User Data</a>
                    </li>
                    <li class="breadcrumb-item active">User Edit</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">User Edit</h3>
                    </div>
                    <form action="{{ route('user.update' , $users->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputText">Name</label>
                                <input
                                    type="text" 
                                    name="name"
                                    value="{{ $users->name }}"
                                    class="form-control"
                                    id="exampleInputText"
                                    placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputText">Email</label>
                                <input
                                    type="email" 
                                    name="email"
                                    value="{{ $users->email }}"
                                    class="form-control"
                                    id="exampleInputText"
                                    placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputText">Password</label>
                                <input
                                    type="password" 
                                    name="password"
                                    value="{{ $users->password }}"
                                    class="form-control"
                                    id="exampleInputText"
                                    placeholder="Enter Password">
                                </div>
                            <div class="form-group">
                                    <label for="exampleSelectRounded0">Category</label>
                                    <select class="custom-select rounded-0" id="exampleSelectRounded0" name="level">
                                        <option value="">Select Role</option>
                                        <option value="admin" @if($users->level == "admin") selected @endif>Admin</option>
                                        <option value="cashier" @if($users->level == "cashier") selected @endif>Cashier</option>
                                    </select>
                                </div>
                                        <div class="card-footer">
                                            <a href="{{ route('user.index') }}" class="btn btn-dark">Return</a>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>    
@endsection