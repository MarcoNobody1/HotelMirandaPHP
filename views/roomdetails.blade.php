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
            <a class="roomsintro__linkprev" href="/index.html">Home</a>
            <span class="roomsintro__linkbar">|</span>
            <span class="roomsintro__linktext">Room Details</span>
        </div>
    </div>
</section>
<section class="roomsdetails">
    <div class="roomsdetails__wrapper">
        <div class="roomsdetails__data">
            <div class="roomsdetails__specs">
                <div class="roomsdetails__specs--titlegroup">
                    <h6 class="roomsdetails__specs--pretitle">DOUBLE BED</h6>
                    <p class="roomsdetails__specs--title">Luxury Double Bed</p>
                </div>
                <div class="roomsdetails__specs--pricedetails">
                    <span class="roomsdetails__specs--price">$345</span>
                </div>
            </div>
            <img class="roomsdetails__photo" src="https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room8.jpeg" alt="Room photo">
        </div>
        <form class="roomsdetails__form" id="roomsdetails__form">
            <p class="roomsdetails__form--title">Check Availability</p>
            <label for="checkin" class="roomsdetails__form--checkinlabel">Check In</label>
            <input type="date" id="checkin" name="checkin" class="roomsdetails__form--inputcheckin">
            <label for="checkout" class="roomsdetails__form--checkoutlabel">Check Out</label>
            <input type="date" id="checkout" name="checkout" class="roomsdetails__form--inputcheckout">
            <label for="fullname" class="roomsdetails__form--fullnamelabel">Full Name</label>
            <input placeholder="Enter your name" type="text" id="fullname" name="fullname" class="roomsdetails__form--inputfullname">
            <label for="availemail" class="roomsdetails__form--emaillabel">Email</label>
            <input placeholder="Enter your email" type="email" id="availemail" name="email" class="roomsdetails__form--inputemail">
            <label for="availphone" class="roomsdetails__form--phonelabel">Phone</label>
            <input placeholder="Enter your phone number" type="phone" id="availphone" name="phone" class="roomsdetails__form--inputphone">
            <label for="specialrequest" class="roomsdetails__form--specialrequestlabel">Message</label>
            <textarea placeholder="Tell us what you need" name="specialrequest" id="specialrequest" cols="30" rows="10" class="roomsdetails__form--inputspecialrequest"></textarea>
            <button type="submit" class="roomsdetails__form--button">Check Availability</button>
        </form>
    </div>
    <p class="roomsdetails__description">Unwind in the lap of luxury with our exquisite Luxury Double Bed room.
        Revel in the spacious ambiance adorned with tasteful decor, where every detail is meticulously curated to
        enhance your comfort. Immerse yourself in the plush embrace of our sumptuous double bed, dressed in the
        finest linens, promising a restorative night's sleep.
        Indulge in the modern amenities carefully selected to cater to your every need. From the state-of-the-art
        entertainment system to the well-appointed en-suite bathroom, our Luxury Double Bed room offers a seamless
        blend of style and convenience. Whether you're here for business or leisure, elevate your stay with the
        epitome of refinement and personalized service at every turn.
        Discover a haven of tranquility and sophistication, where your desire for a luxurious retreat is met with
        impeccable attention to detail. Your journey into unparalleled comfort begins here, at Hotel Miranda's
        Luxury Double Bed room: a sanctuary of opulence that leaves a lasting impression.</p>
</section>
<section class="roomsamenities">
    <h4 class="roomsamenities__title">Amenities</h4>
    <div class="roomsamenities__allamenities">
        <div class="roomsamenities__group">
            <img class="roomsamenities__group--icon" src="/assets/RoomDetails__icons/Icon 1.svg" alt="Icon 1">
            <p class="roomsamenities__group--amenity">Air Conditioner</p>
        </div>
        <div class="roomsamenities__group">
            <img class="roomsamenities__group--icon" src="/assets/RoomDetails__icons/Icon 2.svg" alt="Icon 2">
            <p class="roomsamenities__group--amenity">Breakfast</p>
        </div>
        <div class="roomsamenities__group">
            <img class="roomsamenities__group--icon" src="/assets/RoomDetails__icons/Icon 3.svg" alt="Icon 3">
            <p class="roomsamenities__group--amenity">Cleaning</p>
        </div>
        <div class="roomsamenities__group">
            <img class="roomsamenities__group--icon" src="/assets/RoomDetails__icons/Icon 4.svg" alt="Icon 4">
            <p class="roomsamenities__group--amenity">Grocery</p>
        </div>
        <div class="roomsamenities__group">
            <img class="roomsamenities__group--icon" src="/assets/RoomDetails__icons/Icon 5.svg" alt="Icon 5">
            <p class="roomsamenities__group--amenity">Shop near</p>
        </div>
        <div class="roomsamenities__group">
            <img class="roomsamenities__group--icon" src="/assets/RoomDetails__icons/Icon 6.svg" alt="Icon 6">
            <p class="roomsamenities__group--amenity">24/7 Online Support</p>
        </div>
        <div class="roomsamenities__group">
            <img class="roomsamenities__group--icon" src="/assets/RoomDetails__icons/Icon 7.svg" alt="Icon 7">
            <p class="roomsamenities__group--amenity">Smart Security</p>
        </div>
        <div class="roomsamenities__group">
            <img class="roomsamenities__group--icon" src="/assets/RoomDetails__icons/Icon 8.svg" alt="Icon 8">
            <p class="roomsamenities__group--amenity">High Speed Wi-Fi</p>
        </div>
        <div class="roomsamenities__group">
            <img class="roomsamenities__group--icon" src="/assets/RoomDetails__icons/Icon 9.svg" alt="Icon 9">
            <p class="roomsamenities__group--amenity">Kitchen</p>
        </div>
        <div class="roomsamenities__group">
            <img class="roomsamenities__group--icon" src="/assets/RoomDetails__icons/Icon 10.svg" alt="Icon 10">
            <p class="roomsamenities__group--amenity">Shower</p>
        </div>
        <div class="roomsamenities__group">
            <img class="roomsamenities__group--icon" src="/assets/RoomDetails__icons/Icon 11.svg" alt="Icon 11">
            <p class="roomsamenities__group--amenity">Single Bed</p>
        </div>
        <div class="roomsamenities__group">
            <img class="roomsamenities__group--icon" src="/assets/RoomDetails__icons/Icon 12.svg" alt="Icon 12">
            <p class="roomsamenities__group--amenity">Towels</p>
        </div>
        <div class="roomsamenities__group">
            <img class="roomsamenities__group--icon" src="/assets/RoomDetails__icons/Icon 13.svg" alt="Icon 13">
            <p class="roomsamenities__group--amenity">Strong Locker</p>
        </div>
        <div class="roomsamenities__group">
            <img class="roomsamenities__group--icon" src="/assets/RoomDetails__icons/Icon 14.svg" alt="Icon 14">
            <p class="roomsamenities__group--amenity">Expert Team</p>
        </div>
    </div>
</section>
<section class="roomsmoreinfo">
    <div class="roomsmoreinfo__usercard">
        <div class="roomsmoreinfo__photowrap">
            <div class="roomsmoreinfo__photowrap--tick"></div>
            <img class="roomsmoreinfo__photowrap--photo" src="https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Photos/SQUAREPROFILEPHOTO.png" alt="Profile Picture">
        </div>
        <div class="roomsmoreinfo__userdata">
            <h4 class="roomsmoreinfo__userdata--title">Marco A. Cámara</h4>
            <p class="roomsmoreinfo__userdata--subtitle">CEO, BOTYZILLA S.L.</p>
            <p class="roomsmoreinfo__userdata--info">I'm Marco Cámara, your CEO here at Botyzilla S.L. As a seasoned
                Full-stack Developer, I bring a passion for tech innovation. Together, let's push boundaries and
                chart new territories. Excited to lead this team into a future of cutting-edge solutions.
            </p>
        </div>
    </div>
    <div class="roomsmoreinfo__cancellation">
        <h4 class="roomsmoreinfo__cancellation--title">Cancellation</h4>
        <p class="roomsmoreinfo__cancellation--body">Cancellation Policy for Hotel Miranda:
            Cancellations made with a minimum of 48 hours' notice before the scheduled check-in date will qualify
            for a full refund. Cancellations within 48 hours of the check-in date will incur a charge equivalent to
            one night's accommodation. No-shows will be billed for the entirety of the reserved stay.
            Modification of reservation dates is contingent upon availability and may result in additional charges.
            Early departures are considered non-refundable. We appreciate your understanding and cooperation with
            our cancellation policy.</p>
    </div>
</section>
<section class="roomsrelated">
    <h4 class="roomsrelated__title">Related Rooms</h4>
    <div class="swiper roomsrelated__swiper" id="roomsrelated__swiper">
        <div class="swiper-wrapper roomsrelated__swiperwrapper">
            <div class="swiper-slide roomsrelated__cardslide">
                <div class="roomsrelated__card">
                    <div class="roomsrelated__roomwrapper">
                        <img class="roomsrelated__photo" src="../assets/Rooms_swiper/room 1.jpg" alt="Hotel Room">
                        <div class="roomsrelated__icons">
                            <img src="../assets/Rooms__desc Icons/icon 1.svg" alt="" class="">
                            <img src="../assets/Rooms__desc Icons/icon 2.svg" alt="" class="">
                            <img src="../assets/Rooms__desc Icons/icon 3.svg" alt="" class="">
                            <img src="../assets/Rooms__desc Icons/icon 4.svg" alt="" class="">
                            <img src="../assets/Rooms__desc Icons/icon 5.svg" alt="" class="">
                            <img src="../assets/Rooms__desc Icons/icon 6.svg" alt="" class="">
                            <img src="../assets/Rooms__desc Icons/icon 7.svg" alt="" class="">
                        </div>
                        <div class="roomsrelated__desc">
                            <h3 class="roomsrelated__room-title">Minimal Duplex Room</h3>
                            <p class="roomsrelated__content">Experience modern simplicity in our Minimal Duplex
                                Room. Clean lines, cozy sleeping area, and a touch of charm await you for a unique
                                stay.</p>
                            <span class="roomsrelated__price">$345/Night</span>
                            <span onclick="goToRoomDetails()" class="roomsrelated__booknow">Book Now</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide roomsrelated__cardslide">
                <div class="roomsrelated__card">
                    <div class="roomsrelated__roomwrapper">
                        <img class="roomsrelated__photo" src="../assets/Rooms_swiper/room 2.jpg" alt="Hotel Room">
                        <div class="roomsrelated__icons">
                            <img src="../assets/Rooms__desc Icons/icon 1.svg" alt="" class="">
                            <img src="../assets/Rooms__desc Icons/icon 2.svg" alt="" class="">
                            <img src="../assets/Rooms__desc Icons/icon 3.svg" alt="" class="">
                            <img src="../assets/Rooms__desc Icons/icon 4.svg" alt="" class="">
                            <img src="../assets/Rooms__desc Icons/icon 5.svg" alt="" class="">
                            <img src="../assets/Rooms__desc Icons/icon 6.svg" alt="" class="">
                            <img src="../assets/Rooms__desc Icons/icon 7.svg" alt="" class="">
                        </div>
                        <div class="roomsrelated__desc">
                            <h3 class="roomsrelated__room-title">Minimal Duplex Room</h3>
                            <p class="roomsrelated__content">Experience modern simplicity in our Minimal Duplex
                                Room. Clean lines, cozy sleeping area, and a touch of charm await you for a unique
                                stay.</p>
                            <span class="roomsrelated__price">$345/Night</span>
                            <span onclick="goToRoomDetails()" class="roomsrelated__booknow">Book Now</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide roomsrelated__cardslide">
                <div class="roomsrelated__card">
                    <div class="roomsrelated__roomwrapper">
                        <img class="roomsrelated__photo" src="../assets/Rooms_swiper/room 3.jpg" alt="Hotel Room">
                        <div class="roomsrelated__icons">
                            <img src="../assets/Rooms__desc Icons/icon 1.svg" alt="" class="">
                            <img src="../assets/Rooms__desc Icons/icon 2.svg" alt="" class="">
                            <img src="../assets/Rooms__desc Icons/icon 3.svg" alt="" class="">
                            <img src="../assets/Rooms__desc Icons/icon 4.svg" alt="" class="">
                            <img src="../assets/Rooms__desc Icons/icon 5.svg" alt="" class="">
                            <img src="../assets/Rooms__desc Icons/icon 6.svg" alt="" class="">
                            <img src="../assets/Rooms__desc Icons/icon 7.svg" alt="" class="">
                        </div>
                        <div class="roomsrelated__desc">
                            <h3 class="roomsrelated__room-title">Minimal Duplex Room</h3>
                            <p class="roomsrelated__content">Experience modern simplicity in our Minimal Duplex
                                Room. Clean lines, cozy sleeping area, and a touch of charm await you for a unique
                                stay.</p>
                            <span class="roomsrelated__price">$345/Night</span>
                            <span onclick="goToRoomDetails()" class="roomsrelated__booknow">Book Now</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next" id="roomsrelated-nextslide"></div>
        <div class="swiper-button-prev" id="roomsrelated-prevslide"></div>
    </div>
</section>
@endsection
@section('scripts')
<script src="/scripts/RoomDetails.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@endsection