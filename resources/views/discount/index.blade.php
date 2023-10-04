@extends('layouts.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Discount</h1>
            </div>
            <div class="col-sm-6">
                {{-- <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('category.index') }}">Category Data</a>
                    </li>
                    <li class="breadcrumb-item active">Category Edit</li>
                </ol> --}}
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
                        <h3 class="card-title">Discount</h3>
                    </div>
                    @foreach ($discount as $item)
                    <form action="{{ route('discount.update', $item->id) }}" method="post">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputText">Transaction Amount</label>
                                <input
                                    type="text" 
                                    name="transaction_amount"
                                    class="form-control"
                                    id="exampleInputText"
                                    value="{{$item->transaction_amount}}"
                                    placeholder="Enter transaction amount">
                                </div>
                            <div class="form-group">
                                <label for="exampleInputText">Discount</label>
                                <input
                                    type="text" 
                                    name="discount"
                                    class="form-control"
                                    id="exampleInputText"
                                    value="{{$item->discount}}"
                                    placeholder="Enter dicount">
                                </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>    
@endsection