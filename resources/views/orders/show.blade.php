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
                                        <td>Price</td>
                                        <td>Created at</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $order->cocktail->name }}</td>
                                        <td>{{ money_format('%.2n', $order->total) }}</td>
                                        <td>{{ \Carbon\Carbon::parse($order->created_at)->format('g:i A') }}</td>
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
