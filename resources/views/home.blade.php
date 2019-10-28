<<<<<<< HEAD
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     NAN                                                                                                                                                                                                                                                                                                                                bbbbbbbbbbbbbb 
=======
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

>>>>>>> e0d03c5eac5d8274e56bc6852f41c88599a4922e
