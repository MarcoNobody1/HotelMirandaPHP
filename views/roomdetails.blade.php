@extends('layout')
@section('title')
Hotel Miranda | Room Details
@endsection
@section('content')
<section class="roomsintro">
        <div class="roomsintro__inner">
            <h6 class="roomsintro__pretitle">THE ULTIMATE LUXURY</h6>
            <h1 class="roomsintro__title">Ultimate Room</h1>
            <div class="roomsintro__pages">
                <a class="roomsintro__linkprev" href="/">Home</a>
                <span class="roomsintro__linkbar">|</span>
                <span class="roomsintro__linktext">Room Details</span> 
            </div>
        </div>
    </section>
@endsection
@section('scripts')
<script src="/scripts/RoomDetails.js"></script>
@endsection