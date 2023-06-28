
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vorke</title>
    <link rel="icon" href="{{asset('asset/image/logoicon.png') }}">
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
<script>
    // tạo thanh tìm kiếm khoảng giá
        $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 0, 500 ],
      step:10,
      slide: function( event, ui ) {
        $( "#amount" ).val( "  VND  " + ui.values[ 0 ] + " -  VND  " + ui.values[ 1 ] );
        $( "#start_price").val(ui.values[ 0 ] );
        $( "#end_price").val( ui.values[ 1 ]);
  
    }
    });
    $( "#amount" ).val(  "  VND  " + $( "#slider-range" ).slider( "values", 0 ) +
      " -  VND  " + $( "#slider-range" ).slider( "values", 1 ) );

   


    $(document).ready(function() {
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
            $('#keywords').keyup(function() {
                    var query = $(this).val();
                    if(query !=''){
                        var csrfToken = $('input[name="_token"]').val();
                        $.ajax({
                            url: "{{ route('search.jax') }}",
                            method: 'POST',
                            data: {
                                query: query,
                                _token: csrfToken
                            },
                            success: function(data) {
                                $('#search_ajax').fadeIn();
                                $('#search_ajax').html(data);
                            },
                        });
                    }else{
                        $('#search_ajax').fadeOut();
                    }
            });
        });

        
    });

    $(document).on('click','.li_search_ajax'),function(){
        $('#keywords').val($(this).text());
        $('#search_ajax').fadeOut();
    }
  
 
 </script>