@extends('layouts.master')
@section('content')
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Item Edit</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('item.index') }}">Item Data</a>
                    </li>
                    <li class="breadcrumb-item active">Item Edit</li>
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
                        <h3 class="card-title">Edit Item</h3>
                    </div>
                    <form action="{{ route('item.update' , $item->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputText">Name</label>
                                <input
                                    type="text" 
                                    name="item_name"
                                    value="{{ $item->item_name }}"
                                    class="form-control"
                                    id="exampleInputText"
                                    placeholder="Enter category">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectRounded0">Category</label>
                                    <select class="custom-select rounded-0" id="exampleSelectRounded0" name="category_id">
                                        <option value="{{$item->category_id}}">{{ $item->category->category }}</option>
                                        @foreach ($category as $category)
                                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputText">Stock</label>
                                <input
                                    type="number" 
                                    name="stock"
                                    value="{{ $item->stock }}"
                                    class="form-control"
                                    placeholder="Enter category">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputText">Price</label>
                                <input
                                    type="number"
                                    value="{{ $item->price}}" 
                                    name="price"
                                    class="form-control"
                                    placeholder="Enter category">
                                </div>
                                        <div class="card-footer">
                                            <a href="{{ route('item.index') }}" class="btn btn-dark">Return</a>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>    
@endsection