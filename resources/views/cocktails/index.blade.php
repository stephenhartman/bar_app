@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Order Cocktails</div>
                <div class="panel-body">
                    @foreach($cocktails as $cocktail)
                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset($cocktail->image_url}}" alt="{{ $cocktail->name }}">
                            </a>
                        </div>
                    </div>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@stop
