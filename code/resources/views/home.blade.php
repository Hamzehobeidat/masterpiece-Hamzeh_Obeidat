@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" style="background: black; color: white">
                    Orange
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                          <h1 class="display-4">Big By Orange</h1>
                          <p class="lead">BIG by Orange targets established startups who are looking for mentorship as well as a fully-equipped space to propel the growth of their businesses. BIG will help Jordanian startups expand into new markets and reach more customer segments</p>
                        </div>
                      </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection