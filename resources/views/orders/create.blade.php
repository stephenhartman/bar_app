@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Order Cocktails</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($cocktails as $cocktail)
                        {{ Form::open(['route' => 'orders.store']) }}
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="{{ asset($cocktail->image_url) }}" alt="{{ $cocktail->name }}">
                                    <div class="caption">
                                        <h3>{{ $cocktail->name }}</h3>
                                        <h4>Price: ${{ money_format('%.2n', $cocktail->price) }}</h4>
                                        <input type="submit" value="Add to order" class="btn btn-primary">
                                        <input type="hidden" name="cocktail_id" value="{{ $cocktail->id}}">
                                    </div>
                                </div>
                            </div>
                        {{ Form::close() }}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
