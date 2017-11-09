@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

            	<button style="margin-top: 10px; margin-left: 10px;"><a href="{{ url('/home')}}"> Back</a></button>

            	<div style="margin-left: 10px;">



				

				<h4><strong>From:</strong> {{ $message->sender->name }}</h4>

				<h5><strong>To:</strong> {{ $message->recipient->name }}</h5>

				<h4> <strong>{{ $message->subject }}</strong> </h4>

				<br />

				<p>{{ $message->body }}</p>








				</div>
			</div>
		</div>
	</div>
</div>

@endsection('content')
