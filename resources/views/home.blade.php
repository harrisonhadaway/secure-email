@extends('layouts.app')

@section('content')


<style>
    


</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inbox</div>
                <button style="margin-top: 10px; margin-left: 10px;"><a href="{{ url('/new')}}">Compose</a></button>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                    <tr>
                        <th></th>
                        <th>From</th>
                        <th>Subject</th>
                        <th>Date</th>
                    </tr>
                    @foreach ($messages as $message)
                            <tr>  
                                <td>
                                    @if ($message->is_starred) 
                                        <strong>&#9734;</strong>
                                    @endif
                                </td>
                                <td><a href="{{ url('/msg') }}/{{$message->id}}">{{ $message->sender->name }}</a></td>
                                <td><a href="{{ url('/msg') }}/{{$message->id}}">{{ $message->subject }}</a></td>
                               <!--  <td>{{ $message->created_at }}</td> -->
                                <td>{{ date('M d, Y', strtotime($message->created_at)) }}</td>
                            </tr>
                        
                    @endforeach

                    {{ Auth::user()->name }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

