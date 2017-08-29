@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cocktail Orders</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td>Order ID</td>
                                        <td>Cocktail</td>
                                        <td>Created at</td>
                                        <td>Customer</td>
                                        <td>Total</td>
                                        <td>Send Order</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->cocktail->name }}</td>
                                        <td>{{ \Carbon\Carbon::parse($order->created_at)->format('g:i A') }}</td>
                                        <td>{{ $order->user->name }}</td>
                                        <td>{{ money_format('%.2n', $order->total) }}</td>
                                        <td>
                                            {{ Form::open(['method' => 'DELETE', 'route' => ['orders.destroy', $order]]) }}
                                            {{ Form::button('<i class="glyphicon glyphicon-trash"></i> Send Order ', array('type' => 'submit', 'data-id' => $order, 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')")) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                    @endforeach
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
