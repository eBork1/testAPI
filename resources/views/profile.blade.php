@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="border-bottom">{{Auth::user()->name}}'s Profile</h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 mx-auto text-center">
                Your API Key: <div class="bg-light p-3">{{ $api_key }}</div>
            </div>
        </div>
    </div>
@endsection
