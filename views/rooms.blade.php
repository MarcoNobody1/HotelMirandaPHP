@extends('layout')
@section('title')
Hotel Miranda | Rooms
@endsection
@section('content')
<section class="roomsintro">
    <div class="roomsintro__inner">
        <h6 class="roomsintro__pretitle">THE ULTIMATE LUXURY</h6>
        <h1 class="roomsintro__title">Ultimate Room</h1>
        <div class="roomsintro__pages">
            <a class="roomsintro__linkprev" href="/">Home</a>
            <span class="roomsintro__linkbar">|</span>
            <span class="roomsintro__linktext">Rooms</span>
        </div>
    </div>
</section>
@if (($checkin) && ($checkout))
<section class="roomshow">
    <div class="roomshow__inner">
        <div class="swiper roomshow__swiper">
            <div class="swiper-wrapper roomshow__swiper-wrapper">
                @foreach($rooms as $chunk)
                <div class="swiper-slide roomshow__swiper-slide">
                    @foreach($chunk as $room)
                    <div class="roomshow__roomwrapper">
                        <img class="roomshow__photo" src="{{ $room['photo'] }}" alt="Hotel Room">
                        <div class="roomshow__icons">
                            <img src="/assets/Rooms__desc Icons/icon 1.svg" alt="" class="">
                            <img src="/assets/Rooms__desc Icons/icon 2.svg" alt="" class="">
                            <img src="/assets/Rooms__desc Icons/icon 3.svg" alt="" class="">
                            <img src="/assets/Rooms__desc Icons/icon 4.svg" alt="" class="">
                            <img src="/assets/Rooms__desc Icons/icon 5.svg" alt="" class="">
                            <img src="/assets/Rooms__desc Icons/icon 6.svg" alt="" class="">
                            <img src="/assets/Rooms__desc Icons/icon 7.svg" alt="" class="">
                        </div>
                        <div class="roomshow__desc">
                            <h3 class="roomshow__title">{{ $room['type'] }}</h3>
                            <p class="roomshow__content">{{ $room['description'] }}</p>
                            <span class="roomshow__price">${{ $room['discountedPrice'] }}/Night</span>
                            <a href="roomdetails.php?id={{ $room['id'] }}" class="roomshow__booknow">Book Now</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination roomshow__swiper-pagination"></div>
        </div>
    </div>
</section>
@else
<form name="dates-form" class="intro__form" id="checkavailability_form" action="/rooms.php" method="GET">
    <label for="arrival" class="intro__form-arrivallbl">Arrival Date</label>
    <input name="arrival" type="date" value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" max="{{date('Y-m-d', strtotime('+1 Year'))}}" id="arrival" class="intro__form-arrivalinp">
    <label for="departure" class="intro__form-departurelbl">Departure Date</label>
    <input name="departure" type="date" value="{{date('Y-m-d', strtotime('+1 day'))}}" min="{{date('Y-m-d', strtotime('+1 day'))}}" max="{{date('Y-m-d', strtotime('+1 Year'))}}" id="departure" class="intro__form-departureinp">
    <br>
    <button name="availability-btn" type="submit" class="intro__form-btn">CHECK AVAILABILITY</button>
</form>
@endif
@endsection
@section('scripts')
<script src="/scripts/Rooms.js"></script>
@endsection