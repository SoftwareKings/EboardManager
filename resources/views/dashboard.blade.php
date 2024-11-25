@extends('layouts.app')

@section('content')

<div>
    This is Dashboard
    Welcome to Dashboard, {{ $user->role->role_name }}!
</div>
@endsection
