@extends('front_end.app')

    @section('content')
       
            <div class="container">
                <div class="content">
                    <div class="content_input-search">
                        {{-- <form action="{{URL::to('/dienthoai')}}" autocomplete="off" method="POST">
                         
                            <span class="content_input-search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                            <input type="text" name="keywords_submit" placeholder="Tìm kiếm..." id="keywords">
                        </form> --}}
                        <form action="{{URL::to('/dienthoai')}}" >
                         
                            <span class="content_input-search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                            <input type="text" name="keywords" placeholder="Tìm kiếm..." id="keywords">
                            <input type='submit' name='search' value="Search">
                        </form>
                    </div>
                    <div id="search_ajax"> </div>
                </div>
                <hr>    
                <!-- Search content -->
                
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{url('/dienthoai')}}">Home</a></li>
                      <li class="breadcrumb-item"><a href="{{url('/dienthoai/'.$category_name)}}">{{$category_name}}</a></li>
                      <li class="breadcrumb-item">data</li>
                    </ol>
                  </nav>
                <!-- Menu bar -->
                <div class="menu_arrange--wrap">
                    <div class="menu_arrange">
                        <select name="sort" id="sort" class="form_control">
                            @php
                                $output = '';
                        
                                if ($start_price == '' && $end_price == '') {
                                    $output .= '
                                        <option value="' . Request::url() . '?sorting=none" ' . ($sorting == 'none' ? 'selected' : '') . '>--Lọc--</option>
                                        <option value="' . Request::url() . '?sorting=asc" ' . ($sorting == 'asc' ? 'selected' : '') . '>--Giá tăng dần--</option>
                                        <option value="' . Request::url() . '?sorting=desc" ' . ($sorting == 'desc' ? 'selected' : '') . '>--Giá giảm dần--</option>
                                    ';
                                } else {
                                    $output .= '
                                        <option value="' . Request::url() . '?sorting=none&start_price=' . $start_price . '&end_price=' . $end_price . '" ' . (($sorting == 'none' && $start_price == '' && $end_price == '') || $sorting == 'none' ? 'selected' : '') . '>--Lọc--</option>
                                        <option value="' . Request::url() . '?sorting=asc&start_price=' . $start_price . '&end_price=' . $end_price . '" ' . (($sorting == 'asc' && $start_price !== '' && $end_price !== '') || $sorting == 'asc' ? 'selected' : '') . '>--Giá tăng dần--</option>
                                        <option value="' . Request::url() . '?sorting=desc&start_price=' . $start_price . '&end_price=' . $end_price . '" ' . (($sorting == 'desc' && $start_price !== '' && $end_price !== '') || $sorting == 'desc' ? 'selected' : '') . '>--Giá giảm dần--</option>
                                    ';
                                }
                        
                                echo $output;
                            @endphp
                        </select>
                        
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
                                <span><a href="{{ url('dienthoai/') }}">Đặt lại</a></span>
                                <i class="fa-solid fa-rotate-right reset-icon"></i>
                            </div>
                        </div>

                
                        <!--  Filter body-->

                        <div class="filter-body">
                            <h2 class="filter-body-title">Phân loại</h2>

                            <ul class="filter-body-list">
   
                                <li class="filter-body-item {{ empty($category_name) ? 'active' : '' }}" >
                                    <a href="{{ URL('dienthoai/')}}">Toàn bộ </a>
                                    <i class="fa-solid fa-circle-dot "></i>
                                </li>
                                @foreach ($data_category as $data)
                                @php
                                    $className = ($data->Tenthuonghieu == $category_name) ? 'active' : '';
                                @endphp
                                    <li class="filter-body-item {{$className}}" >
                                        <a href="{{ URL('dienthoai/'.$data->Tenthuonghieu)}}">
                                            {{ $data->Tenthuonghieu }}
                                        </a>
                                         <i class="fa-solid fa-circle-dot "></i>
                                    </li>
                                @endforeach
                                 
                            </ul>
                        </div>
                        <!-- Filter price -->

                        <div class="filter-price">
                            <h2 class="filter-price-title">Giá sản phẩm</h2>
                            {{-- <div> --}}
                                <div>
                                <label>Lọc giá theo </label>
                                <p>
                                    <label for="amount">Price range:</label>
                                  </p>
                                {{-- <form> --}}
                                {{-- <form id="locgia-form">
                                    <div id="slider-range"></div>   
                                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                <br>
                                <input type="text" id="start_price" name="start_price">
                                <br>
                                <input type="text" id="end_price" name="end_price">

                                    <input type="submit" name="filter" value="Lọc giá" class="btn btn-dark" id="locgia" >

                                </form>  --}}

                                {{-- test --}}
                                {{-- <form id="locgia-form"  action="{{Request::url()}}" >
                                    <div id="slider-range"></div>
                                    <input type="text" id="amount"  readonly style="border:0; color:#f6931f; font-weight:bold;">
                                    <br>
                                    <input type="text" id="start_price" name="start_price">
                                    <br>
                                    <input type="text" id="end_price" name="end_price">
                                    <input type="submit" name="" value="LOC" class="btn btn-dark" id="locgia">
                                    <a class="checkajax">LOC GIA </a>
                                   

                                </form> --}}

                                <div id="testgia"></div>
                            
                            </div>   
                           
                            <div class="filter-price-input">
                                <input type="text" placeholder="Giá thấp nhất">
                                <span><i class="fa-solid fa-filter-circle-dollar"></i></span>
                                <input type="text" placeholder="Giá cao nhất">
                            </div>
                            {{-- <div class="filter-price-select-list">
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
                            </div> --}}
                        </div>

                        <div id="filter-form">
                            <form>
                                <ul class="list-style-6 margin-50px-bottom text-small">
                                   <li>
                                        <label>
                                            <input type="radio" name="price" value="20 AND 50" {{$start_price == '20' && $end_price=='50' ? 'checked' : ''}}>20 tr- 50 tr
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="price" value="25 AND 150" {{$start_price == '25' && $end_price=='150' ? 'checked' : ''}}>25 - 150
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="price" value="150 AND 300" {{$start_price == '150' && $end_price=='300' ? 'checked' : ''}}>150 - 300
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="price" value=" 0 AND 50" {{$start_price == '' && $end_price=='50' ? 'checked' : ''}}> Dưới 50
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="price" value=" 300 AND 0" {{$start_price == '300' && $end_price=='' ? 'checked' : ''}}> Trên 300
                                        </label>
                                    </li>
                                </ul>
                            </form>
                        </div>
                      
                    </div>

                    <div class="col product-list">
                        <div class="row">
                            @if($data_products->isEmpty())
                                <h1>NO PRODUCTS</h1>
                            @else
                                @foreach ($data_products as $item)
                                <div class='col-4'>
                                    <div class='product-item'>
                                        <a class='text-decoration-none' '>
                                            <div class='product-item_img'>
                                            <img src="{{asset('asset/image/logoicon.png') }}" alt=''">
                                        </div>
                                        </a>
                                        <div class='product-item-body'>
                                            <h2>{{$item->Tendt}}</h2>
                                            <p> {{$item->Mota}}</p>
                                            <div class='product-item-body-price'>
                                                {{-- <p>{{$item->Gia}}</p> --}}
                                            </div>
                                            <p>{{$item->Gia}}</p>
                                            <div class='product-item-body_control'>
                                                <button >Đặt ngay</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif 
                        </div>
<!-- Render the pagination links -->
{{-- <div class="pagination">
    <ul class="pagination-list">
        <!-- Previous Page Link -->
        @if ($data_products->onFirstPage())
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span aria-hidden="true">@lang('pagination.previous')</span>
            </li>
        @else
            <li>
                <a href="{{ $data_products->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">@lang('pagination.previous')</a>
            </li>
        @endif

        <!-- Pagination Elements -->
        @foreach ($data_products->links()->elements as $element)
            <!-- "Three Dots" Separator -->
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page === $data_products->currentPage())
                        <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        <!-- Next Page Link -->
        @if ($data_products->hasMorePages())
            <li>
                <a href="{{ $data_products->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">@lang('pagination.next')</a>
            </li>
        @else
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span aria-hidden="true">@lang('pagination.next')</span>
            </li>
        @endif
    </ul>
</div> --}}
                    </div> 
                </div>
            </div>
        </section>
    @endsection
   