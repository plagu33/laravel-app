@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (Auth::check())
                        <div class="alert alert-success">
                            You are logged!
                        </div>                        
                    @else
                        You are not logged!
                    @endif
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
