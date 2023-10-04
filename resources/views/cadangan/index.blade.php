@extends('layouts.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Transaction Data</h1>
            </div>
            <div class="col-sm-6">
                {{-- <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Transaction Data</li>
                </ol> --}}
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Order Product</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <span>Product Nmae</span>
                                        <select class="custom-select">
                                            <option>Select Product</option>
                                            {{-- @foreach ($item as $items)
                                            <option value="{{ $items->id }}">{{ $items->item_name }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <span>Product Name</span>
                                    <input type="text" class="form-control" disabled="disabled">
                                </div>
                                <div class="col-4">
                                    <span>Price</span>
                                    <input type="text" class="form-control" disabled="disabled">
                                </div>
                                <div class="col-4">
                                    <span>Quantity</span>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-4">
                                    <span>Total</span>
                                    <input type="text" class="form-control" disabled="disabled">
                                </div>
                                <div class="col-4">
                                    <button style="margin-top: 24px;" type="submit" class="btn btn-danger">Add
                                        Product</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="25%">Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Coklat</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td><button type="submit" class="btn btn-danger">Delete</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Payment</h3>
                        </div>

                        <div class="card-body p-0">
                            <table id="example2" class="table table-bordered table-striped">
                                <div class="card-body">
                                    <label>Pay</label>
                                    <input type="text" class="form-control">
                                    <label>Discount</label>
                                    <input type="text" class="form-control">
                                    <label>Change</label>
                                    <input type="text" class="form-control" disabled>
                                </div>
                                <div class="card-body">
                                    <button type="submit" class="btn btn-danger">Pay</button>
                                </div>
                            </table>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
    @endsection