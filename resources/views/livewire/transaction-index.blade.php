<div>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Transaction Data</h1>
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
                                <div class="col-8">
                                    <div class="form-group">
                                        <form wire:submit.prevent='submit'>
                                        <span>Product Nmae</span>
                                        <select class="form-control @error('item_id') is-invalid @enderror" wire:model='item_id' required>
                                            <option>Select Product</option>
                                            @foreach ($items as $item)
                                            <option value="{{ $item->id }}">{{ $item->item_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('item_id')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                <button style="margin-top: 24px;" type="submit" class="btn btn-primary">Add Product</button>
                                </div>
                            </div>
                            </form>
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>


                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="25%">Product Name</th>
                                        <th width="25%">Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($transactions as $transaction)
                                <tbody>
                                    <tr>
                                        <td>{{ $transaction->item->item_name }}</td>
                                        <td>
                                            <div>
                                                @if ($transaction->quantity > 1)
                                                <span class="btn btn-danger btn-sm" wire:click="decrement({{$transaction->id}})">-</span>
                                                @endif
                                                <input type="text" class="form-control qty" value="{{ $transaction->quantity }}" readonly>
                                                <span class="btn btn-success btn-sm" wire:click="increment({{$transaction->id}})">+</span>
                                            </div>
                                        </td>
                                        <td>Rp. {{ number_format($transaction->item->price)}}</td>
                                        <td>Rp. {{ number_format($transaction->item->price*$transaction->quantity)}}</td>
                                        <td><button type="submit" wire:click="deleteTransaction({{$transaction->id}})" class="btn btn-danger">Delete</button></td>
                                    </tr>
                                </tbody>
                                @endforeach
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
                                    <label>Total Transaction</label>
                                    <input value="Rp. {{number_format ($transactions->sum('total')) }}" type="text" class="form-control" disabled>
                                    <label>Pay</label>
                                    <input type="number" wire:model.lazy="pay" class="form-control">
                                    <label>Change</label>
                                    <input value="Rp. {{number_format ($pay - $transactions->sum('total')) }}" type="text" class="form-control" disabled>
                                </div>
                                <div class="card-body">
                                    <button wire:click='save' type="submit" class="btn btn-info">Pay</button>
                                </div>
                            </table>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <style>
            .qty {
                width: 40%;
                display: inline;
            }
        </style>
</div>