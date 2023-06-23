@extends('front_end.app')

    @section('content')
        <h1>Welcome to Le Hong Thai</h1>
                        
            <div class="container">
                <div class="content">
                    <div class="content_input-search">
                        <span class="content_input-search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" placeholder="Tìm kiếm..." id="search_product">
                    </div>
                </div>
                <hr>
                <!-- Search content -->

                <!-- Menu bar -->
                <div class="menu_arrange--wrap">
                    <div class="menu_arrange">
                        <span class="menu_arrange-icon"><i class="fa-solid fa-arrow-up-wide-short"></i></span>
                        <span class="menu_arrange-text">Sắp xếp theo</span>
                        <ul class="menu_list">
                            <li class="menu_item" cid="asc">Giá tăng dần</li>
                            <li class="menu_item" cid="desc">Giá giảm dần</li>
                        </ul>
                    </div>
                </div>

                <!-- Product wrap -->
                <div class="row">
                    <div class="col filter">
                        <!-- Filter header -->
                        <div class="filter-header">
                            <div class="filter-header-item">
                                <i class="fa-solid fa-bars filter-icon"></i>
                                <span>Lọc theo</span>
                            </div>

                            <div class="filter-header-item" id="restart">
                                <span>Đặt lại</span>
                                <i class="fa-solid fa-rotate-right reset-icon"></i>
                            </div>
                        </div>
                        <!--  Filter body-->

                        <div class="filter-body">
                            <h2 class="filter-body-title">Phân loại</h2>

                            <ul class="filter-body-list">
                                 <li class="filter-body-item  active">
                                    <span>Điện thoại</span>
                                    <i class="fa-solid fa-circle-dot"></i>
                                </li>
                                <li class="filter-body-item ">
                                    <span> Điện thoại</span>
                                    <i class="fa-solid fa-circle-dot"></i>
                                </li>
                                <li class="filter-body-item">
                                    <span>Điện thoại</span>
                                    <i class="fa-solid fa-circle-dot"></i>
                                </li> 

                            </ul>
                        </div>
                        <!-- Filter price -->

                        <div class="filter-price">
                            <h2 class="filter-price-title">Giá sản phẩm</h2>
                            <div class="filter-price-input">
                                <input type="text" placeholder="Giá thấp nhất">
                                <span><i class="fa-solid fa-filter-circle-dollar"></i></span>
                                <input type="text" placeholder="Giá cao nhất">
                            </div>
                            <div class="filter-price-select-list">
                                <div class="filter-price-select-item" id="1">
                                    <span>1-4 triệu</span>
                                </div>
                                <div class="filter-price-select-item" id="2">
                                    <span>4-7 triệu</span>
                                </div>
                                <div class="filter-price-select-item" id="3">
                                    <span>7-13 triệu</span>
                                </div>
                                <div class="filter-price-select-item" id="4">
                                    <span>13-20 triệu</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col product-list">
                        <div class="row">
                            @foreach ($data as $item)
                            <div class='col-4'>
                                <div class='product-item'>
                                    <a class='text-decoration-none' href = 'productdetail.php?id={$id}'>
                                    <div class='product-item_img'>
                                        <img src='asset/image/logoicon.png' alt=''>
                                    </div>
                                    </a>
                                    <div class='product-item-body'>
                                        <h2>{{$item->Tendt}}</h2>
                                        <p>
                                            {{$item->Motadt}}
                                        </p>
                                        <div class='product-item-body-price'>
                                            <p>product_price</p>
                                            <p>product_pric</p>
                                        </div>
                                        <div class='product-item-body_control'>
                                            <button >Đặt ngay</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
                
        </section>
    @endsection