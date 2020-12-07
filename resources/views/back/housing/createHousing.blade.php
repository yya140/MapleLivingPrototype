@extends('layouts.backend')

@section('content')

    <!-- ====================================
———	Add Listing
===================================== -->
    <section class="bg-light py-5 height100vh">
        <div class="container">
            <nav class="bg-transparent breadcrumb breadcrumb-2 px-0 mb-5" aria-label="breadcrumb">
                <h2 class="font-weight-normal mb-4 mb-md-0">发布房源</h2>
                <ul class="list-unstyled d-flex p-0 m-0">
                    <li class="breadcrumb-item"><a href="/">首页</a></li>
                    <li class="breadcrumb-item"><a href="/backHome">控制台</a></li>
                    <li class="breadcrumb-item active" aria-current="page">所有房源</li>
                </ul>
            </nav>

            <form method="POST" action="{{ route('saveHousing') }}" enctype="multipart/form-data">
            @csrf
            <!-- Address -->
                <div class="card">
                    <div class="card-body px-6 pt-6 pb-1">
                        <h3 class="h4 mb-4">地址信息</h3>
                        <p class="mb-5">请完善房源地址信息</p>

                        <div class="row">
                            <div class="form-group col-md-6 mb-6">
                                <label for="address">地址 / Address*</label>
                                <input type="text" class="form-control" placeholder="123 Example St." name="address"
                                       required>
                            </div>

                            <div class="form-group col-md-6 mb-6">
                                <label for="unit">房门号 / Unit Number</label>
                                <input type="text" class="form-control" placeholder="1234" name="unit">
                            </div>

                            <div class="form-group col-md-6 mb-6">
                                <label for="city">所在城市 / City*</label>
                                <input type="text" class="form-control" placeholder="e.g. Vancouver" name="city"
                                       required>
                            </div>

                            <div class="form-group col-md-6 mb-6">
                                <label for="category">房源类型 / Category*</label>
                                <div class="select-default bg-white">
                                    <select class="select-location" name="category">
                                        <option>...</option>
                                        <option>公寓 / Apartment</option>
                                        <option>酒店 / Hotel</option>
                                        <option>民宿 / Airbnb</option>
                                        <option>学生公寓 / Student Apartment</option>
                                        <option>寄宿家庭 / Home Stay</option>
                                        <option>联排别墅 / Town House</option>
                                        <option>独立别墅 / House</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-12 mb-6">
                                <label for="description">房源简介 / Description*</label>
                                <textarea class="form-control" rows="6" placeholder="请提供房源简介" name="description"
                                          required></textarea>
                            </div>

                        </div>


                    </div>
                </div>

                <!-- Info -->
                <div class="card">
                    <div class="card-body p-6">
                        <h3 class="h4 mb-4">房源具体信息</h3>
                        <p class="mb-5">请选择填写下列房间信息</p>


                        <div class="row">
                            <div class="form-group col-md-6 mb-6">
                                <label for="size">居住面积 / Room Size*</label>
                                <input type="number" class="form-control" placeholder="1234" name="size"
                                       required>
                            </div>

                            <div class="form-group col-md-6 mb-6">
                                <label for="numberOfBedroom">卧室数量 / Number of Bedroom*</label>
                                <input type="number" class="form-control" placeholder="123" name="numberOfBedroom"
                                       required>
                            </div>

                            <div class="form-group col-md-6 mb-6">
                                <label for="numberOfPrivateBathroom">独立卫生间数量 / Number of Private Bathroom*</label>
                                <input type="number" class="form-control" placeholder="123"
                                       name="numberOfPrivateBathroom"
                                       required>
                            </div>

                            <div class="form-group col-md-6 mb-6">
                                <label for="numberOfSharedBathroom">共用卫生间数量 / Number of Shared Bathroom*</label>
                                <input type="number" class="form-control" placeholder="123"
                                       name="numberOfSharedBathroom"
                                       required>
                            </div>

                            <div class="form-group col-md-6 mb-6">
                                <label for="numberOfLocker">储藏室数量 / Number of Locker</label>
                                <input type="number" class="form-control" placeholder="123" name="numberOfLocker"
                                       >
                            </div>

                            <div class="form-group col-md-6 mb-6">
                                <label for="maxOccupancy">最多可居住人数 / Max. Occupancy*</label>
                                <input type="number" class="form-control" placeholder="123" name="maxOccupancy"
                                       required>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group form-check mb-3 ">
                                    <div class="row align-items-center form-check-readonly">
                                        <div class="col-12">
                                            <input type="checkbox" class="form-check-input" id="pet" name="pet">
                                            <label class="form-check-label" for="pet">可养宠物 / Pets are Allowed</label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group form-check mb-3 ">
                                    <div class="row align-items-center form-check-readonly">
                                        <div class="col-12">
                                            <input type="checkbox" class="form-check-input" id="furnished"
                                                   name="furnished">
                                            <label class="form-check-label" for="furnished">自带家具 / Furnished</label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group form-check mb-3 ">
                                    <div class="row align-items-center form-check-readonly">
                                        <div class="col-12">
                                            <input type="checkbox" class="form-check-input" id="smoking" name="smoking">
                                            <label class="form-check-label" for="smoking">允许吸烟 / Smoking are
                                                Allowed</label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group form-check mb-3 ">
                                    <div class="row align-items-center form-check-readonly">
                                        <div class="col-12">
                                            <input type="checkbox" class="form-check-input" id="sublease"
                                                   name="sublease">
                                            <label class="form-check-label" for="sublease">允许分租 / Sub-Lease are
                                                Allowed</label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Price -->
                <div class="card">
                    <div class="card-body p-6">
                        <h3 class="h4 mb-4">价格信息</h3>
                        <p class="mb-5">请选择填写房间价格信息</p>


                        <div class="row">
                            <div class="form-group col-md-6 mb-6">
                                <label for="price">每月价格 / Rental Price*</label>
                                <input type="number" class="form-control" placeholder="1234" name="price"
                                       required>
                            </div>

                            <div class="form-group col-md-6 mb-6">
                                <label for="paymentFrequency">付款频率 / Payment Frequency*</label>
                                <div class="select-default bg-white">
                                    <select class="select-location" name="paymentFrequency">
                                        <option>...</option>
                                        <option>每周 / Weekly</option>
                                        <option>每两周 / Bi-Weekly</option>
                                        <option>每月 / Monthly</option>
                                        <option>每年 / Yearly</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-6 mb-6">
                                <label for="duration">起租时长(月) / Mini. Lease Duration (Month)*</label>
                                <input type="number" class="form-control" placeholder="123"
                                       name="duration"
                                       required>
                            </div>

                            <div class="form-group col-md-6 mb-6">
                                <label for="availableDate">最早起租时间 / Available Date*</label>
                                <input type="text" class="form-control" placeholder="DD/MM/YYYY"
                                       name="availableDate"
                                       required>
                            </div>


                        </div>

                    </div>
                </div>

                <!-- Gallery -->
                <div class="card">
                    <div class="card-body p-6">
                        <h3 class="h4 mb-4">房源照片</h3>
                        <p class="mb-5">上传房源照片(最多上传10张)</p>

                        <div class="form-group position-relative mb-6 form-group-dragable">
                            <input type="file" class="custom-file-input" name="images[]">
                            <label class="custom-file-label" for="customFile">
                                Click or Drag images here
                            </label>
                        </div>

                    </div>
                </div>


                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <div class="mb-6">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">submit</button>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </section>


@endsection
