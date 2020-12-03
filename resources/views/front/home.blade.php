@extends('layouts.frontend')


@section('content')
<!-- MAP SECTION -->
<div class="clearfix p-0">
    <div id="map-canvas"></div>
</div>


<!-- ====================================
———	LOCATION SEARCH ONE
===================================== -->
<div class="py-7 py-md-0 bg-light">
    <div class="container position-relative px-md-0">
        <div class="search-box">
            <form method="GET" action="listings-half-screen-map-list.html">
                <div class="form-group mb-md-0">
                    <input type="text" class="form-control" placeholder="Enter your keywords">
                </div>
                <div class="select-default">
                    <select class="select-location">
                        <option>All Location</option>
                        <option>U.S.A</option>
                        <option>U.K</option>
                        <option>ASIA</option>
                    </select>
                </div>
                <div class="select-default">
                    <select class="select-location">
                        <option>All Categories</option>
                        <option>Restaurants</option>
                        <option>Hotels</option>
                        <option>Nightclubs</option>
                        <option>Automotive</option>
                        <option>Museums</option>
                        <option>Movie Theaters</option>
                        <option>Shopping</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">
                    Search
                </button>
            </form>
        </div>
    </div>
</div>

<!-- ====================================
———	LISTING
===================================== -->
<section class="pt-7 pt-md-10">
    <div class="container">
        <div class="section-title">
            <h2>Popular Things Near You</h2>
            <p>This are some of most popular listing</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card rounded-0 card-hover-overlay">
                    <div class="position-relative">
                        <img class="card-img rounded-0" src="assets/img/listing/listing-4.jpg" alt="Card image cap">
                        <div class="card-img-overlay">
                            <ul class="list-inline list-inline-rating">
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </li>
                            </ul>
                            <h3>
                                <a href="listing-reservation.html">
                                    Think Coffee <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </a>
                            </h3>
                            <p class="text-white">215 Terry Lane, New York</p>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent">
                        <ul class="list-unstyled d-flex mb-0 py-2">
                            <li>
                                <button class="btn-like px-2" data-toggle="tooltip" data-placement="top" title="Favourite this listing">
                                    <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>
                                    <span>8 k</span>
                                </button>
                            </li>
                            <li class="ml-auto">
                                <a class="px-2" href="listings-half-screen-map-list.html">Eat & Drink</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card rounded-0 card-hover-overlay">
                    <div class="position-relative">
                        <img class="card-img rounded-0" src="assets/img/listing/listing-5.jpg" alt="Card image cap">
                        <div class="card-img-overlay">
                            <ul class="list-inline list-inline-rating">
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                            </ul>
                            <h3>
                                <a href="listing-reservation.html">
                                    Burger House<i class="fa fa-check-circle" aria-hidden="true"></i>
                                </a>
                            </h3>
                            <p class="text-white">2726 Shinn Street, New York</p>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent">
                        <ul class="list-unstyled d-flex mb-0 py-2">
                            <li>
                                <button class="btn-like px-2" data-toggle="tooltip" data-placement="top" title="Favourite this listing">
                                    <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>
                                    <span>9.2 k</span>
                                </button>
                            </li>
                            <li class="ml-auto">
                                <a class="px-2" href="listings-half-screen-map-list.html">Eat & Drink</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card rounded-0 card-hover-overlay">
                    <div class="position-relative">
                        <img class="card-img rounded-0" src="assets/img/listing/listing-10.jpg" alt="Card image cap">
                        <div class="card-img-overlay">
                            <ul class="list-inline list-inline-rating">
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </li>
                            </ul>
                            <h3>
                                <a href="listing-reservation.html">
                                    Tom's Restaurant<i class="fa fa-check-circle" aria-hidden="true"></i>
                                </a>
                            </h3>
                            <p class="text-white">964 School Street, New York</p>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent">
                        <ul class="list-unstyled d-flex mb-0 py-2">
                            <li>
                                <button class="btn-like px-2" data-toggle="tooltip" data-placement="top" title="Favourite this listing">
                                    <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>
                                    <span>9.5 k</span>
                                </button>
                            </li>
                            <li class="ml-auto">
                                <a class="px-2" href="listings-half-screen-map-list.html">Eat & Drink</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card rounded-0 card-hover-overlay">
                    <div class="position-relative">
                        <img class="card-img rounded-0" src="assets/img/listing/listing-1.jpg" alt="Card image cap">
                        <div class="card-img-overlay">
                            <ul class="list-inline list-inline-rating">
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                            </ul>
                            <h3>
                                <a href="listing-event.html">
                                    The City Theater
                                </a>
                            </h3>
                            <p class="text-white">155 1st Avenue, New York</p>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent">
                        <ul class="list-unstyled d-flex mb-0 py-2">
                            <li>
                                <button class="btn-like px-2" data-toggle="tooltip" data-placement="top" title="Favourite this listing">
                                    <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>
                                    <span>9.5 k</span>
                                </button>
                            </li>
                            <li class="ml-auto">
                                <a class="px-2" href="listings-half-screen-map-list.html">Movie Theaters</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card rounded-0 card-hover-overlay">
                    <div class="position-relative">
                        <img class="card-img rounded-0" src="assets/img/listing/listing-7.jpg" alt="Card image cap">
                        <div class="card-img-overlay">
                            <ul class="list-inline list-inline-rating">
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </li>
                            </ul>
                            <h3>
                                <a href="listing-event.html">
                                    Sticky Band<i class="fa fa-check-circle" aria-hidden="true"></i>
                                </a>
                            </h3>
                            <p class="text-white">Bishop Avenue, New York</p>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent">
                        <ul class="list-unstyled d-flex mb-0 py-2">
                            <li>
                                <button class="btn-like px-2" data-toggle="tooltip" data-placement="top" title="Favourite this listing">
                                    <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>
                                    <span>5.9 k</span>
                                </button>
                            </li>
                            <li class="ml-auto">
                                <a class="px-2" href="listings-half-screen-map-list.html">Nightclubs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card rounded-0 card-hover-overlay">
                    <div class="position-relative">
                        <img class="card-img rounded-0" src="assets/img/listing/listing-8.jpg" alt="Card image cap">
                        <div class="card-img-overlay">
                            <ul class="list-inline list-inline-rating">
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                            </ul>
                            <h3>
                                <a href="listing-rental.html">
                                    Hotel Govendor
                                </a>
                            </h3>
                            <p class="text-white">78 Country Street, New York</p>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent">
                        <ul class="list-unstyled d-flex mb-0 py-2">
                            <li>
                                <button class="btn-like px-2" data-toggle="tooltip" data-placement="top" title="Favourite this listing">
                                    <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>
                                    <span>5 k</span>
                                </button>
                            </li>
                            <li class="ml-auto">
                                <a class="px-2" href="listings-half-screen-map-list.html">Hotels</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card rounded-0 card-hover-overlay">
                    <div class="position-relative">
                        <img class="card-img rounded-0" src="assets/img/listing/listing-9.jpg" alt="Card image cap">
                        <div class="card-img-overlay">
                            <ul class="list-inline list-inline-rating">
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                            </ul>
                            <h3>
                                <a href="listing-rental.html">
                                    The Mayfair Hotel<i class="fa fa-check-circle" aria-hidden="true"></i>
                                </a>
                            </h3>
                            <p class="text-white">242 W 49th St, New York</p>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent">
                        <ul class="list-unstyled d-flex mb-0 py-2">
                            <li>
                                <button class="btn-like px-2" data-toggle="tooltip" data-placement="top" title="Favourite this listing">
                                    <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>
                                    <span>3 k</span>
                                </button>
                            </li>
                            <li class="ml-auto">
                                <a class="px-2" href="listings-half-screen-map-list.html">Hotels</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card rounded-0 card-hover-overlay">
                    <div class="position-relative">
                        <img class="card-img rounded-0" src="assets/img/listing/listing-10.jpg" alt="Card image cap">
                        <div class="card-img-overlay">
                            <ul class="list-inline list-inline-rating">
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                            </ul>
                            <h3>
                                <a href="listing-reservation.html">
                                    Water Grill
                                </a>
                            </h3>
                            <p class="text-white">31 Union Square, New York</p>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent">
                        <ul class="list-unstyled d-flex mb-0 py-2">
                            <li>
                                <button class="btn-like px-2" data-toggle="tooltip" data-placement="top" title="Favourite this listing">
                                    <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>
                                    <span>10 k</span>
                                </button>
                            </li>
                            <li class="ml-auto">
                                <a class="px-2" href="listings-half-screen-map-list.html">Eat & Drink</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card rounded-0 card-hover-overlay">
                    <div class="position-relative">
                        <img class="card-img rounded-0" src="assets/img/listing/listing-11.jpg" alt="Card image cap">
                        <div class="card-img-overlay">
                            <ul class="list-inline list-inline-rating">
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </li>
                            </ul>
                            <h3>
                                <a href="listing-store.html">Shoe Parlor</a>
                            </h3>
                            <p class="text-white">851 7th Ave, new York</p>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent">
                        <ul class="list-unstyled d-flex mb-0 py-2">
                            <li>
                                <button class="btn-like px-2" data-toggle="tooltip" data-placement="top" title="Favourite this listing">
                                    <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>
                                    <span>15 k</span>
                                </button>
                            </li>
                            <li class="ml-auto">
                                <a class="px-2" href="listings-half-screen-map-list.html">Shopping</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="text-center pt-5">
            <a href="listing-grid-right-sidebar.html" class="btn btn-primary">Explore More</a>
        </div>
    </div>
</section>

<!-- ====================================
———	SERVICES SECTION
===================================== -->
<section class="py-7 py-md-10">
    <div class="container">
        <div class="border rounded pt-7">
            <div class="row">

                <div class="col-sm-4 col-xs-12">
                    <div class="card border-0 text-center">
                        <div class="icon-lg m-auto rounded-circle">
                            <i class="icon-listy icon-key text-primary"></i>
                        </div>
                        <div class="card-body">
                            <h2 class="h4 font-weight-normal mb-3">Secure Trading</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <div class="card border-0 text-center">
                        <div class="icon-lg m-auto rounded-circle">
                            <i class="icon-listy icon-wreath text-primary"></i>
                        </div>
                        <div class="card-body">
                            <h2 class="h4 font-weight-normal mb-3">24/7 Hours Support</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <div class="card border-0 text-center">
                        <div class="icon-lg m-auto rounded-circle">
                            <i class="icon-listy icon-tag3 text-primary"></i>
                        </div>
                        <div class="card-body">
                            <h2 class="h4 font-weight-normal mb-3">Easy Trading</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ====================================
———	APP DOWNLOAD SECTION
===================================== -->
<div class="dzsparallaxer auto-init use-loading app-store-paralax">
    <div class="divimage dzsparallaxer--target" data-src="assets/img/background/bg-download.jpg"></div>

    <div class="container paralax-container">
        <div class="section-title">
            <h2 class="text-white">Download on app store</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 col-xs-12">
                <a href="#" class="btn btn-app-store w-100">
                    <i class="icon-listy icon-playstore"></i>
                    <span>available on <br><strong> Google Play </strong></span>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <a href="#" class="btn btn-app-store w-100">
                    <i class="icon-listy icon-apple"></i>
                    <span>available on <br><strong> App Store </strong></span>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <a href="#" class="btn btn-app-store w-100">
                    <i class="icon-listy icon-microsoft"></i>
                    <span>available on <br><strong>Microsoft Store</strong></span>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

