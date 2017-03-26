@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <form method="POST" action="/loader">
	               
	                <div class="panel-heading"> 
	                    Fetch data
	                </div>
	                <div class="panel-body"> 
	                    <input type="submit" class="btn btn-success pull-right">
	                </div>
	                 {{ csrf_field() }}
	            </form>
            </div>
        </div>
    </div>
</div>
@endsection
