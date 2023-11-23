@extends('layout')
@section('title')
Hotel Miranda | Offers
@endsection
@section('content')
<section class="offerspageintro">
    <div class="offerspageintro__inner">
        <h6 class="offerspageintro__pretitle">THE ULTIMATE LUXURY</h6>
        <h1 class="offerspageintro__title">Our Offers</h1>
        <div class="offerspageintro__pages">
            <a class="offerspageintro__linkprev" href="/">Home</a>
            <span class="offerspageintro__linkbar">|</span>
            <span class="offerspageintro__linktext">Offers</span>
        </div>
    </div>
</section>
<section class="roomoffer">
    <div class="roomoffer__inner">
        <div class="roomoffer__offer">
            <div class="roomoffer__imgwrapper">
                <img class="roomoffer__imgwrapper-img" src="../assets/OffersPage/Room1.jpg" alt="Luxury Room">
                <div class="roomoffer__imgwrapper-prevprice">
                    <span class="roomoffer__imgwrapper-prevprice-price">$500</span>
                    <span class="roomoffer__imgwrapper-prevprice-night">/Night</span>
                </div>
                <div class="roomoffer__imgwrapper-newprice">
                    <span class="roomoffer__imgwrapper-newprice-price">$345</span>
                    <span class="roomoffer__imgwrapper-newprice-night">/Night</span>
                </div>
            </div>
            <div class="roomoffer__contentwrapper">
                <h6 class="roomoffer__pretitle">Double Bed</h6>
                <h2 class="roomoffer__title">Luxury Double Bed</h2>
                <p class="roomoffer__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="roomoffer__facilities">
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/airconditioner.svg"
                        alt="Air conditioner">
                    <span class="roomoffer__facility-desc">Air conditioner</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/restaurant.svg" alt="Breakfast">
                    <span class="roomoffer__facility-desc">Breakfast</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/cleaning.svg" alt="Cleaning">
                    <span class="roomoffer__facility-desc">Cleaning</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/grocery.svg" alt="Grocery">
                    <span class="roomoffer__facility-desc">Grocery</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/shop.svg" alt="Shop near">
                    <span class="roomoffer__facility-desc">Shop near</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/wifi.svg" alt="High speed WiFi">
                    <span class="roomoffer__facility-desc">High speed WiFi</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/kitchen.svg" alt="Kitchen">
                    <span class="roomoffer__facility-desc">Kitchen</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/shower.svg" alt="Shower">
                    <span class="roomoffer__facility-desc">Shower</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/bed.svg" alt="Single bed">
                    <span class="roomoffer__facility-desc">Single bed</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/towel.svg" alt="Towels">
                    <span class="roomoffer__facility-desc">Towels</span>
                </div>
            </div>
            <button class="roomoffer__btn" type="button">BOOK NOW</button>
        </div>
        <div class="roomoffer__offer">
            <div class="roomoffer__imgwrapper">
                <img class="roomoffer__imgwrapper-img" src="../assets/Rooms_swiper/room 1.jpg" alt="Luxury Room">
                <div class="roomoffer__imgwrapper-prevprice">
                    <span class="roomoffer__imgwrapper-prevprice-price">$500</span>
                    <span class="roomoffer__imgwrapper-prevprice-night">/Night</span>
                </div>
                <div class="roomoffer__imgwrapper-newprice">
                    <span class="roomoffer__imgwrapper-newprice-price">$345</span>
                    <span class="roomoffer__imgwrapper-newprice-night">/Night</span>
                </div>
            </div>
            <div class="roomoffer__contentwrapper">
                <h6 class="roomoffer__pretitle">Double Bed</h6>
                <h2 class="roomoffer__title">Luxury Double Bed</h2>
                <p class="roomoffer__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="roomoffer__facilities">
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/airconditioner.svg"
                        alt="Air conditioner">
                    <span class="roomoffer__facility-desc">Air conditioner</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/restaurant.svg" alt="Breakfast">
                    <span class="roomoffer__facility-desc">Breakfast</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/cleaning.svg" alt="Cleaning">
                    <span class="roomoffer__facility-desc">Cleaning</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/grocery.svg" alt="Grocery">
                    <span class="roomoffer__facility-desc">Grocery</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/shop.svg" alt="Shop near">
                    <span class="roomoffer__facility-desc">Shop near</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/wifi.svg" alt="High speed WiFi">
                    <span class="roomoffer__facility-desc">High speed WiFi</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/kitchen.svg" alt="Kitchen">
                    <span class="roomoffer__facility-desc">Kitchen</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/shower.svg" alt="Shower">
                    <span class="roomoffer__facility-desc">Shower</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/bed.svg" alt="Single bed">
                    <span class="roomoffer__facility-desc">Single bed</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/towel.svg" alt="Towels">
                    <span class="roomoffer__facility-desc">Towels</span>
                </div>
            </div>
            <button class="roomoffer__btn" type="button">BOOK NOW</button>
        </div>
        <div class="roomoffer__offer">
            <div class="roomoffer__imgwrapper">
                <img class="roomoffer__imgwrapper-img" src="../assets/Rooms_swiper/room 2.jpg" alt="Luxury Room">
                <div class="roomoffer__imgwrapper-prevprice">
                    <span class="roomoffer__imgwrapper-prevprice-price">$500</span>
                    <span class="roomoffer__imgwrapper-prevprice-night">/Night</span>
                </div>
                <div class="roomoffer__imgwrapper-newprice">
                    <span class="roomoffer__imgwrapper-newprice-price">$345</span>
                    <span class="roomoffer__imgwrapper-newprice-night">/Night</span>
                </div>
            </div>
            <div class="roomoffer__contentwrapper">
                <h6 class="roomoffer__pretitle">Double Bed</h6>
                <h2 class="roomoffer__title">Luxury Double Bed</h2>
                <p class="roomoffer__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="roomoffer__facilities">
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/airconditioner.svg"
                        alt="Air conditioner">
                    <span class="roomoffer__facility-desc">Air conditioner</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/restaurant.svg" alt="Breakfast">
                    <span class="roomoffer__facility-desc">Breakfast</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/cleaning.svg" alt="Cleaning">
                    <span class="roomoffer__facility-desc">Cleaning</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/grocery.svg" alt="Grocery">
                    <span class="roomoffer__facility-desc">Grocery</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/shop.svg" alt="Shop near">
                    <span class="roomoffer__facility-desc">Shop near</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/wifi.svg" alt="High speed WiFi">
                    <span class="roomoffer__facility-desc">High speed WiFi</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/kitchen.svg" alt="Kitchen">
                    <span class="roomoffer__facility-desc">Kitchen</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/shower.svg" alt="Shower">
                    <span class="roomoffer__facility-desc">Shower</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/bed.svg" alt="Single bed">
                    <span class="roomoffer__facility-desc">Single bed</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/towel.svg" alt="Towels">
                    <span class="roomoffer__facility-desc">Towels</span>
                </div>
            </div>
            <button class="roomoffer__btn" type="button">BOOK NOW</button>
        </div>
        <div class="roomoffer__offer">
            <div class="roomoffer__imgwrapper">
                <img class="roomoffer__imgwrapper-img" src="../assets/Rooms_swiper/room 3.jpg" alt="Luxury Room">
                <div class="roomoffer__imgwrapper-prevprice">
                    <span class="roomoffer__imgwrapper-prevprice-price">$500</span>
                    <span class="roomoffer__imgwrapper-prevprice-night">/Night</span>
                </div>
                <div class="roomoffer__imgwrapper-newprice">
                    <span class="roomoffer__imgwrapper-newprice-price">$345</span>
                    <span class="roomoffer__imgwrapper-newprice-night">/Night</span>
                </div>
            </div>
            <div class="roomoffer__contentwrapper">
                <h6 class="roomoffer__pretitle">Double Bed</h6>
                <h2 class="roomoffer__title">Luxury Double Bed</h2>
                <p class="roomoffer__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="roomoffer__facilities">
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/airconditioner.svg"
                        alt="Air conditioner">
                    <span class="roomoffer__facility-desc">Air conditioner</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/restaurant.svg" alt="Breakfast">
                    <span class="roomoffer__facility-desc">Breakfast</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/cleaning.svg" alt="Cleaning">
                    <span class="roomoffer__facility-desc">Cleaning</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/grocery.svg" alt="Grocery">
                    <span class="roomoffer__facility-desc">Grocery</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/shop.svg" alt="Shop near">
                    <span class="roomoffer__facility-desc">Shop near</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/wifi.svg" alt="High speed WiFi">
                    <span class="roomoffer__facility-desc">High speed WiFi</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/kitchen.svg" alt="Kitchen">
                    <span class="roomoffer__facility-desc">Kitchen</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/shower.svg" alt="Shower">
                    <span class="roomoffer__facility-desc">Shower</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/bed.svg" alt="Single bed">
                    <span class="roomoffer__facility-desc">Single bed</span>
                </div>
                <div class="roomoffer__facility">
                    <img class="roomoffer__facility-icon" src="../assets/OffersPage/towel.svg" alt="Towels">
                    <span class="roomoffer__facility-desc">Towels</span>
                </div>
            </div>
            <button class="roomoffer__btn" type="button">BOOK NOW</button>
        </div>
    </div>
</section>
<section class="popularlist">
    <div class="popularlist__inner">
        <h6 class="popularlist__pretitle">POPULAR LIST</h6>
        <h2 class="popularlist__title">Popular Rooms</h2>
        <div class="swiper popularlist__swiper" id="popularlist__swiper">
            <div class="swiper-wrapper popularlist__swiperwrapper">
                <div class="swiper-slide popularlist__cardslide">
                    <div class="popularlist__card">
                        <div class="popularlist__roomwrapper">
                            <img class="popularlist__photo" src="../assets/Rooms_swiper/room 1.jpg" alt="Hotel Room">
                            <div class="popularlist__icons">
                                <img src="../assets/Rooms__desc Icons/icon 1.svg" alt="" class="">
                                <img src="../assets/Rooms__desc Icons/icon 2.svg" alt="" class="">
                                <img src="../assets/Rooms__desc Icons/icon 3.svg" alt="" class="">
                                <img src="../assets/Rooms__desc Icons/icon 4.svg" alt="" class="">
                                <img src="../assets/Rooms__desc Icons/icon 5.svg" alt="" class="">
                                <img src="../assets/Rooms__desc Icons/icon 6.svg" alt="" class="">
                                <img src="../assets/Rooms__desc Icons/icon 7.svg" alt="" class="">
                            </div>
                            <div class="popularlist__desc">
                                <h3 class="popularlist__room-title">Minimal Duplex Room</h3>
                                <p class="popularlist__content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit, sed do
                                    eiusmod
                                    tempor incididunt ut labore et dolore.</p>
                                <span class="popularlist__price">$345/Night</span>
                                <span class="popularlist__booknow">Book Now</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide popularlist__cardslide">
                    <div class="popularlist__card">
                        <div class="popularlist__roomwrapper">
                            <img class="popularlist__photo" src="../assets/Rooms_swiper/room 2.jpg" alt="Hotel Room">
                            <div class="popularlist__icons">
                                <img src="../assets/Rooms__desc Icons/icon 1.svg" alt="" class="">
                                <img src="../assets/Rooms__desc Icons/icon 2.svg" alt="" class="">
                                <img src="../assets/Rooms__desc Icons/icon 3.svg" alt="" class="">
                                <img src="../assets/Rooms__desc Icons/icon 4.svg" alt="" class="">
                                <img src="../assets/Rooms__desc Icons/icon 5.svg" alt="" class="">
                                <img src="../assets/Rooms__desc Icons/icon 6.svg" alt="" class="">
                                <img src="../assets/Rooms__desc Icons/icon 7.svg" alt="" class="">
                            </div>
                            <div class="popularlist__desc">
                                <h3 class="popularlist__room-title">Minimal Duplex Room</h3>
                                <p class="popularlist__content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit, sed do
                                    eiusmod
                                    tempor incididunt ut labore et dolore.</p>
                                <span class="popularlist__price">$345/Night</span>
                                <span class="popularlist__booknow">Book Now</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide popularlist__cardslide">
                    <div class="popularlist__card">
                        <div class="popularlist__roomwrapper">
                            <img class="popularlist__photo" src="../assets/Rooms_swiper/room 3.jpg" alt="Hotel Room">
                            <div class="popularlist__icons">
                                <img src="../assets/Rooms__desc Icons/icon 1.svg" alt="" class="">
                                <img src="../assets/Rooms__desc Icons/icon 2.svg" alt="" class="">
                                <img src="../assets/Rooms__desc Icons/icon 3.svg" alt="" class="">
                                <img src="../assets/Rooms__desc Icons/icon 4.svg" alt="" class="">
                                <img src="../assets/Rooms__desc Icons/icon 5.svg" alt="" class="">
                                <img src="../assets/Rooms__desc Icons/icon 6.svg" alt="" class="">
                                <img src="../assets/Rooms__desc Icons/icon 7.svg" alt="" class="">
                            </div>
                            <div class="popularlist__desc">
                                <h3 class="popularlist__room-title">Minimal Duplex Room</h3>
                                <p class="popularlist__content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit, sed do
                                    eiusmod
                                    tempor incididunt ut labore et dolore.</p>
                                <span class="popularlist__price">$345/Night</span>
                                <span class="popularlist__booknow">Book Now</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next" id="popularlist-nextslide"></div>
            <div class="swiper-button-prev" id="popularlist-prevslide"></div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script src="/scripts/Offers.js"></script>
@endsection