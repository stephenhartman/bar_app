@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Order #{{ $order->id }} for {{ $order->user->name }}</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td>Drink Name</td>
                                        <td>Drink Price</td>
                                        <td>Total</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->cocktails as $cocktail)
                                    <tr>
                                        <td>{{ $cocktail->name }}</td>
                                        <td>{{ $cocktail->price }}</td>
                                        {{ $total += $cocktail->price }}
                                        <td></td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>{{ money_format('%.2n', $total) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
