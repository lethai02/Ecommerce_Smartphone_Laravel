
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vorke</title>
    <link rel="icon" href="{{asset('asset/image/logoicon.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  {{-- <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"/> --}}
 <link rel="stylesheet" href="{{asset('asset/css_frontend/index.css')}}"/>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>

<body>
    @include('front_end/layout_app/header');
    @yield('content')
    @include('front_end/layout_app/footer');
</body>
</html>
<script src="{{asset('asset/slider_price.js')}}"></script>
<script>


      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {
        $('.checkajax').on('click', function(){
           var a =  $('#start_price').val();
            $.ajax({
                            url: "{{ route('test_ajax') }}",
                            method: 'POST',
                            data: {
                                a:a
                            },
                            success: function(data) {
                            
                                $('#testgia').html(data);
                            },
                        });
        });
        // sort
        $('#sort').on('change', function() {
            var url = $(this).val();
            if(url){
                window.location.href = url;
            }
            return false;
        });


    //tim kiem
        $('#keywords').keyup(function() {
                    var query = $(this).val();
                    if(query !=''){
                        $.ajax({
                            url: "{{ route('search.jax') }}",
                            method: 'POST',
                            data: {
                                query: query,
                            },
                            success: function(data) {
                                $('#search_ajax').fadeIn();
                                $('#search_ajax').html(data)
                            },
                        });
                    }else{
                        $('#search_ajax').fadeOut();
                    }
        });

       // filter price ranges
    $('#filter-form input[type="radio"]').change(function() {
        var href = window.location.href;
        var tenthuonghieu = href.split('/')[4];
        var startPrice = 0;
        var endPrice = 0;
        var selectedPrice = $(this).val();
        var priceRange = selectedPrice.split(' AND ');
        
        
        if (priceRange.length === 2) {
            startPrice = parseInt(priceRange[0]);
            endPrice = parseInt(priceRange[1]);
        }

        
        var url = '';
        if (tenthuonghieu) {
            url = 'http://127.0.0.1:8000/dienthoai/' + tenthuonghieu;
            
            // Kiểm tra xem URL đã chứa tham số truy vấn chưa
            var hasQueryParams = url.includes('?');

            // Tạo chuỗi tham số truy vấn
            var queryParams = [];
            if (startPrice !== 0) {
            queryParams.push('start_price=' + startPrice);
            }
            if (endPrice !== 0) {
            queryParams.push('end_price=' + endPrice);
            }

            // Thay thế chuỗi tham số truy vấn trong URL
            if (queryParams.length > 0) {
            var queryString = queryParams.join('&');
            if (hasQueryParams) {
                url = url.replace(/\?.*/, '?' + queryString);
            } else {
                url += '?' + queryString;
            }
            }
        } else {
            url = 'http://127.0.0.1:8000/dienthoai';
            // Tạo chuỗi tham số truy vấn
            var queryParams = [];
            if (startPrice !== 0) {
            queryParams.push('start_price=' + startPrice);
            }
            if (endPrice !== 0) {
            queryParams.push('end_price=' + endPrice);
            }

            // Tạo đường dẫn hoàn chỉnh
            if (queryParams.length > 0) {
            var queryString = queryParams.join('&');
            url += '?' + queryString;
            }
        }

        window.location.href = url;
        });
    });

    
    
    // hiển thị giá trị minmax 
    
    // $(document).on('click','.li_search_ajax'),function(){
    //     $('#keywords').val($(this).text());
    //     $('#search_ajax').fadeOut();
    // }
  
    
 </script>
  