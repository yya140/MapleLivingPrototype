@extends('layouts.backend')

@section('content')

    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="dashboard-stie-admin.html">
                            <i class="fa fa-tachometer" aria-hidden="true"></i> 控制台首页 <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="admin-listings.html">
                            <i class="fa fa-list-ul" aria-hidden="true"></i> 所有房源 </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="user-list-owners.html">
                            <i class="fa fa-users" aria-hidden="true"></i> 租客群 </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="user-generals.html">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i> 房东群 </a>
                    </li>

                </ul>

                <form class="form-inline my-2 my-lg-0 position-relative d-none d-md-block">
                    <input class="form-control-sm" placeholder="搜索" aria-label="Search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </form>
            </div>
        </div>
    </nav>



    <!-- ====================================
    ——— LISTINGS
    ===================================== -->
    <section class="bg-light pb-8 pt-5 height100vh">
        <div class="container">
            <!-- Breadcrumb -->
            <nav class="bg-transparent breadcrumb breadcrumb-2 px-0 mb-5" aria-label="breadcrumb">
                <h2 class="font-weight-normal mb-4 mb-md-0">所有房源</h2>
                <ul class="list-unstyled d-flex p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.html">首页</a></li>
                    <li class="breadcrumb-item"><a href="dashboard-stie-admin.html">控制台</a></li>
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
