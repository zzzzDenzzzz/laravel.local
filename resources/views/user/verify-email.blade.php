@extends('layouts.main')

@section('title', 'Home page')

@section('content')
    <div class="alert alert-info" role="alert">
        Thank you for registering! A link to confirm your rigistration has been sent to your email.
    </div>
    <div>
        Didn`t receive the link?
        <form action="" method="post">
            @csrf
            <button type="submit" class="btn btn-link ps-0">Send link</button>
        </form>
    </div>
@endsection