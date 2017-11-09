@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">

            	<form method="post" action="/threads/create" class="form-horizontal">
            		{{csrf_field()}}
            		<div class="form-group">
            			<input type="text" class="form-control" placeholder="Title" name="title"></input>	
            		</div>

            		<div class="form-group">
            			<textarea name="editor1" class="form-control"></textarea>
            		</div>
            		
            		<div class="form-group">
            			<input type="submit" value="Publish" class="btn btn-primary form-control">
            		</div>
            	</form>
                              
            </div>
            @include('sidebar.sidePanel')
        </div>
    </div>
@endsection
