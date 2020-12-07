@extends('layouts.backend')

@section('content')

    <!-- ====================================
    ——— LISTINGS
    ===================================== -->
    <section class="bg-light pb-8 pt-5 height100vh">
        <div class="container">
            <!-- Breadcrumb -->
            <nav class="bg-transparent breadcrumb breadcrumb-2 px-0 mb-5" aria-label="breadcrumb">
                <h2 class="font-weight-normal mb-4 mb-md-0">所有房源 <a class="badge badge-warning text-white" href="{{ route('createHousing')}}">发布房源</a></h2>

                <ul class="list-unstyled d-flex p-0 m-0">
                    <li class="breadcrumb-item"><a href="/">首页</a></li>
                    <li class="breadcrumb-item"><a href="/backHome">控制台</a></li>
                    <li class="breadcrumb-item active" aria-current="page">所有房源</li>
                </ul>
            </nav>

            <table id="admin-listing" class="display nowrap table-data-default" style="width:100%">
                <thead>
                <tr class="table-row-bg-white">
                    <th>房源列表</th>
                    <th>Featured</th>
                    <th>Views</th>
                    <th>Reviews</th>
                    <th>Posted on</th>
                    <th>Status</th>
                    <th data-priority="2"></th>
                </tr>
                </thead>
                <tbody>
                <tr class="table-row-bg-white">
                    <td class="td-media">
                        <div class="media media-table">
                            <a class="media-img" href="listing-reservation.html">
                                <img class="img-fluid rounded mr-2" src="assets/img/listing/listing-4.jpg"
                                     alt="listing.jpg">
                            </a>
                            <div class="media-body">
                                <h3 class="media-title">
                                    <a href="listing-reservation.html">Think Coffee
                                        <i class="fa fa-check-circle" aria-hidden="true"></i></a>
                                </h3>
                                <p class="mb-1">215 Terry Lane, New York </p>
                                <span class="text-primary text-capitalize d-inline-block mb-1">eat & drink</span>
                                <p class="text-dark">From $50.00 /Night
                                    <span class="text-muted ml-2">
                    <i class="fa fa-heart-o text-primary" aria-hidden="true"></i>10k
                  </span>
                                </p>
                            </div>
                        </div>
                    </td>

                    <td>
                        <i class="fa fa-check text-primary" aria-hidden="true"></i>
                    </td>
                    <td>784</td>
                    <td>
                        <ul class="list-inline list-inline-rating">
                            <li class="list-inline-item"><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li class="list-inline-item text-muted">(7)</li>
                        </ul>
                    </td>
                    <td>
                        <span class="d-block">01 Aug 19</span>
                        <span class="d-block">07.00 PM</span>
                    </td>
                    <td>
                        <span class="badge badge-warning px-2 py-1 text-white">Pending</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" data-display="static">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Approve</a>
                                <a class="dropdown-item" href="#">Cancel</a>
                            </div>
                        </div>
                    </td>
                </tr>


                </tbody>
            </table>

        </div>
    </section>

@endsection
