@extends('layouts.app')
@section('layouts.left_side_nav')
    @include('layouts.left_side_nav')
@endsection
@section('content')
    @include('layouts.header')
    @livewire('chat', ['receiverId' => $receiverId])
@endsection
