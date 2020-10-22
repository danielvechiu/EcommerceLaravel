@extends('errors::minimal')

@section('title', __('Not Found'))
<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <h2 style="display:inline-block !important; margin-right: 36px; ">404</h2>
    <h2 style="display:inline-block !important; margin: 0 auto;">{{ $exception->getMessage() }}</h2>
</div>