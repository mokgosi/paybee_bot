@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8  col-md-offset-2">
            <h2 class="form-signin-heading">Settings</h2>

            <form action="/update-config" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                <div class='form-group'>
                    <label for="currency_id">Default Currency:</label>
                    <select name="currency_id" id='currency_id'  class="form-control" required>
                        <option>Please Select</option>
                         @foreach($currencies as $currency)
                            <option value="{{$currency->id}}">{{$currency->currency}} - {{$currency->country}}</option>
                         @endforeach
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
            <br />
            @if(Session::has('message'))
                <div class="alert alert-{{ Session::get('status') }} status-box">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    {{ Session::get('message') }}
                </div>
            @endif
        </div>
    </div>
@endsection