
{/* // tạo thanh tìm kiếm khoảng giá */}
$(document).ready(function(){
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

    
});