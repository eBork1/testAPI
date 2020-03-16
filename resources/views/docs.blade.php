@extends('layouts.app')

@section('title', 'Docs')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <p class="display-2">Documentation</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h3>
                    Examples of how to call the develofill api
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="pt-3">Here is an example url for our test api:
                    <strong>http://develofill.com/api/<code>content</code>/<code>{id}</code></strong>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="pt-3">
                    Using <a
                        href="https://github.com/axios/axios"
                        target="_blank"
                        rel="noreferrer noopener"
                    >Axios</a>
                    <strong>(preferred)</strong>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-5 mx-auto text-left bg-light">
                axios({<br>
                method: 'get',<br>
                url: 'http://127.0.0.1:8000/api/employees',<br>
                responseType: 'json'<br>
                headers: {
                api_token: <code>your api token</code>
                }<br>
                })
                .then(function(response) {<br>
                console.log(response)<br>
                });<br>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="pt-3">
                    Using <strong>Ajax</strong>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-5 mx-auto text-left bg-light">
                $.ajax({<br>
                type: 'GET',<br>
                dataType: 'json'<br>
                url: 'http://127.0.0.1:8000/api/employees',<br>
                headers: {'api_token': <code>your api token</code>},<br>
                success: function (response) {<br>
                console.log(response)<br>
                }<br>
                error: function (error) {<br>
                console.log(error)<br>
                }<br>
                });<br>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-8 mx-auto">
                <h3>
                    Authentication
                </h3>
                <br>
                <p>
                    To make a call to the API, you must send your API token as a header in your request. To get
                    a token, you can <a href="{{ url('/register') }}">sign up</a> for an account and find your token in your profile. This token is a
                    personal access token meaning it does not refresh or follow a full authorization flow, so keep
                    it safe. Avoid exposing it through client sided code and do not share it.
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h3>
                    Get Employees Data
                </h3>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <p>
                    Get <strong>all</strong> employees
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-5 mx-auto bg-light">
                http://127.0.0.1:8000/api/employees
            </div>
        </div>
    </div>
@endsection
