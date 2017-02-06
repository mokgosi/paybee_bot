@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8  col-md-offset-2">
            <form action="/send" class="form-signin" method="post">
                {{ csrf_field() }}
                <div class='form-group'>
                    <label for="currency">Amount:</label>
                    <input type="text"  name="message" id="message" 
                            class="form-control" placeholder="Eg. 10" required autofocus />
                </div>
                <div class='form-group'>
                    <label for="currency">Currency:</label>
                    <select name="currency" id='currency'  class="form-control" required>
                        <option>Please Select Currency</option>
                         @foreach($currencies as $currency)
                            <option value="{{$currency->currency}}">{{$currency->currency}} - {{$currency->country}}</option>
                         @endforeach
                    </select>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
            </form>
            <br />
            @if(Session::has('message'))
                <div class="alert alert-{{ Session::get('status') }} status-box">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    {{ Session::get('message') }}
                </div>
            @endif
        </div>
    </div>
@endsection