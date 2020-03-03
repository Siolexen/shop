@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="card-deck mb-3 text-center">

                                {{ $product->id}}
                                {{--@php dump($product); @endphp--}}
                                <div class="card mb-4 shadow-sm">
                                    <div class="card-header">
                                        <h4 class="my-0 font-weight-normal"> {{ $product->name}}</h4>
                                    </div>
                                    <div class="card-body">

                                        <div>
                                            {{ $product->description}}
                                        </div>
                                        <h2 class="card-title pricing-card-title">{{ $product->price/100}} </h2>
                                        {{ Form::open(array('route' => 'order.store')) }}
                                        {{ Form::hidden('id', $product->id) }}
                                        {{ Form::submit('Click Me!') }}
                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Kup</button>
                                        {{Form::close()}}

                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
