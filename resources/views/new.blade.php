@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            	<button style="margin-top: 10px; margin-left: 10px;"><a href="{{ url('/home')}}"> Back</a></button>
				<h2 class="text-center">New Message</h2>

				<form class="form-horizontal">
					<div class="form-group text-center">
    					<label for="inputEmail3" class="col-sm-1 control-label">To:</label>
    					<div class="col-sm-8">
      						<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    					</div>
    					<button type="submit" class="btn btn-default ">Send</button>
  					</div>
					<textarea class="form-control" rows="5">Text Here</textarea>
				</form>
				
            </div>
		</div>
	</div>
</div>

@endsection('content')