<<<<<<< HEAD

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
                    {{ Auth::user()->email }}
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

>>>>>>> 6a6e859a2224d5fff189748fee2fca9180321e33
