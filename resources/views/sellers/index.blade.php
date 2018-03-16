@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Productos</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="columns is-multiline showproducts">
                        @foreach ($products as $product )
                            <div class="column is-4 item">
                                <div class="pricing-table  has-text-centered">
                                    <div class="pricing-plan">
                                    <div class="plan-header">{{$product->name}}</div>
                                    <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>{{$product->price}}</span> c/u</div>
                                    <div class="plan-items">
                                        <div class="plan-item">
                                            <p>{{$product->description}}</p>
                                        </div>
                                    </div>
                                    <div class="plan-footer">
                                        <button type="submit" class="button is-fullwidth" disabled="disabled">Vender</button>                      
                                    </div>
                                    </div>
                                </div>
                            </div>   
                        @endforeach    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
