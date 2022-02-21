<div id="footer">
    <div class="grid wide">
        <div class="footer__top">
            <div class="row">
                <div class="col l-3 m-3 c-12">
                    <div class="footer__heading">
                        <h2>About</h2>
                        <div class="footer__heading--bottom"></div>
                    </div>    
                    <p class="footer__introduce">
                        Organic chuyên cung cấp những sản phẩm được kiểm soát chặt chẽ từ khâu con giống, chế biến thức ăn, chăm sóc sức khỏe vật nuôi đến giết mổ, bao gói, bảo quản và vận chuyển một cách tốt nhất, sạch nhất cho thị trường
                    </p>
                    <ul class="footer__icon">
                        <li class="footer__icon--item facebook">
                            <a href="#" class="footer__icon--link">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="footer__icon--item twitter">
                            <a href="#" class="footer__icon--link">
                                <i class="fab fa-twitter"></i>                                    
                            </a>
                        </li>
                        <li class="footer__icon--item google">
                            <a href="#" class="footer__icon--link">
                                <i class="fab fa-google-plus-g"></i>                                    
                            </a>
                        </li>
                        <li class="footer__icon--item pinterest">
                            <a href="#" class="footer__icon--link">
                                <i class="fab fa-pinterest-p"></i>                                    
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col l-3 m-3 c-12">
                    <div class="footer__heading">
                        <h2>contact</h2>
                        <div class="footer__heading--bottom"></div>
                    </div>
                    <div class="footer__address">
                        <p>
                            <i class="fas fa-map-marker-alt"></i>
                            32 cổ nhuế 2, Bắc từ liêm, Hà Nội
                        </p>
                        <p>
                            <i class="fas fa-phone-alt"></i>
                            (+84) 399 961 768
                        </p>
                        <p>
                            <i class="fas fa-envelope"></i>
                            nguyenvankhangnd123@gmail.com
                        </p>
                    </div>
                
                </div>
                <div class="col l-3 m-3 c-12">
                    <div class="footer__heading">
                        <h2>photo in instagram</h2>
                        <div class="footer__heading--bottom"></div>
                    </div>
                    <div class="footer__instagram padding">
                        <div class="footer__instagram--post">
                            <img class="instagram__img" src="{{asset('frontend/image/footer1.jpg')}}" alt="" srcset="">
                            <div class="instagram__child">
                                <i class="fab fa-instagram"></i>
                            </div>
                        </div>
                        <div class="footer__instagram--post">
                            <img class="instagram__img" src="{{asset('frontend/image/footer2.jpg')}}" alt="" srcset="">
                             <div class="instagram__child">
                                <i class="fab fa-instagram"></i>
                            </div>
                        </div>
                        <div class="footer__instagram--post">
                            <img class="instagram__img" src="{{asset('frontend/image/footer7.jpg')}}" alt="" srcset="">
                             <div class="instagram__child">
                                <i class="fab fa-instagram"></i>
                            </div>
                        </div>
                        <div class="footer__instagram--post">
                            <img class="instagram__img" src="{{asset('frontend/image/footer4.jpg')}}" alt="" srcset="">
                             <div class="instagram__child">
                                <i class="fab fa-instagram"></i>
                            </div>
                        </div>
                        <div class="footer__instagram--post">
                            <img class="instagram__img" src="{{asset('frontend/image/footer5.jpg')}}" alt="" srcset="">
                             <div class="instagram__child">
                                <i class="fab fa-instagram"></i>
                            </div>
                        </div>
                        <div class="footer__instagram--post">
                            <img class="instagram__img" src="{{asset('frontend/image/footer6.jpg')}}" alt="" srcset="">
                             <div class="instagram__child">
                                <i class="fab fa-instagram"></i>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col l-3 m-3 c-12">
                    <div class="footer__notify">
                        <div class="header__title">
                            <p class="customer__name">
                                <span class="customer__text active">
                                    <img src="{{asset('frontend/image/footer8.png')}}" alt="" srcset="">
                                </span>
                            </p>
                            <h3>
                                Monday to friday :
                            </h3>
                            <p class="notify__time">
                                08:00am  - 08:00pm
                            </p>
                            <h3>
                                Saturday & sunday :
                            </h3>
                            <p class="notify__time">
                                10:00am  - 06:00pm
                            </p>
                        </div>
                    </div>
                </div>
            </div>    
        </div>

    </div>
    <div class="footer__bottom">
        Nguyễn văn khang
    </div>
</div>
</div>
<div id="arrow">
    <i class="fas fa-arrow-up"></i>
</div>
<div class="menu__sidebar ">

    <ul class="sidebar">
        <li>
            <a href="home.html">Trang chủ</a>
        </li>
        <li>
            <a href="product.html">Cửa hàng</a>
        </li>
        <li>
            <a href="news.html">Tin Tức</a>
        </li>
        <li>
            <a href="introduce.html">Giới thiệu</a>
        </li>
        <li>
            <a href="contact.html">liên hệ</a>
        </li>
    </ul>

</div>

<script src="{{asset('frontend/javascript/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/javascript/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/javascript/js.js')}}"></script>

<script src="{{asset('login/alertify.min.js')}}"></script>
<link rel="stylesheet" href="{{ asset('login/alertify.min.css')}}">
<link rel="stylesheet" href="{{ asset('login/bootstrap3.min.css')}}">
<link rel="stylesheet" href="{{ asset('login/default.min.css')}}">
<link rel="stylesheet" href="{{ asset('login/semantic.min.css')}}">
<script>
    function AddCart(id)
    {
        $.ajax({
            url: 'Add-cart/'+id,
            type: 'GET',
        }).done(function(response){
            RenderCart(response);
            alertify.success('Đã Thêm mới sản phẩm');
        });
    }
    function AddCartItem(id)
    {
        $.ajax({           
            url: 'http://localhost/web_TP/public/frontend/Add-cart/'+id,
            type: 'GET',
        }).done(function(response){
            RenderCart(response);
            alertify.success('Đã Thêm mới sản phẩm');
        });
    }
    $('#change-item-cart').on('click',".cart__child--icon i" ,function(){
        $.ajax({
            url: 'http://localhost/web_TP/public/frontend/Delete-cart-item/'+$(this).data("id"),
            type: 'GET',
        }).done(function(response){
            RenderCart(response);
            alertify.error('Đã xóa sản phẩm thành công');
        });
        return false;
    });

    function RenderCart(response){
        $('#change-item-cart').empty();
        $('#change-item-cart').html(response);
        $("#total_quanity").text($("#total-quanity").val());
    }
    function DeleteListItem(id)
    {
        $.ajax({
            url: 'Delete-cart-List-item/'+id,
            type: 'GET',
        }).done(function(response){
            RenderListCart(response);
            alertify.success('Đã xóa sản phẩm thành công');
        });
        return false;
    }
    function RenderListCart(response){
        $('#list_cart').empty();
        $('#list_cart').html(response);
        $("#total_quanity").text($("#total-quanity").val());
    }
    $(document).ready(function(){
        $("#product__checked").on('change',function(){
            var url = $(this).val();
            if(url){
                window.location = url;
            }
            return false;
        });
    });
    
     {{--  search  --}}
    $(document).ready(function(){
        $(".header__contact--search--post").keyup(function(){
            var _text = $(this).val();
            var _url = "{{url('storage/images/product')}}"
            $.ajax({
                url: "{{route('ajax-search-Product')}}?key=" + _text,
                type : 'GET',
                success: function(res){
                    var _html = '';
                    for(var pro of res){
                        console.log(pro.image);
                        _html +=   '<div class="media">';
                        _html +=   '<a href="#" class="media__img">';
                        _html +=   '<img src="'+ _url +'/'+ pro.image +'")>';
                        _html +=   ' </a>';
                        _html +=   '<div class="media__body">';
                        _html +=   '<h4><a href="http://localhost/web_TP/public/frontend/details_product/'+ pro.id +'">'+ pro.name +'</a></h4>   ';
                        _html +=   '<p>xuất xứ: '+ pro.origin +'</p>';
                        _html +=   '</div>';
                        _html +=   '</div>';
                    }
        
                    $(".search__child-ajax").html(_html);
                }
            });
        });
    });
    {{-- $(document).ready(function(){
        $(document).ready(function(){
            $("#tag_check").on('click',function(){
                var url = $(this).val();
                $.ajax({
                    url: $(this).val();
                });
            });
        });
    }); --}}
    $(document).ready(function(){
        $("input[name='tag_id[]']").on('click',function(){
            var stringV = [];
            $("input[name='tag_id[]']:checked").each(function(){
                //stringV +=  ',' + $(this).val() ;
                //stringV.
                stringV.push($(this).val());
            });
            
            $.ajax({
                url: "{{route('ajax-tag')}}",
                data:  {stringV:stringV},
                type: 'POST',
                success: function(result){
                    $("#ajaxCheckbox").empty()
                    $("#ajaxCheckbox").html(result)
                }
            });
        });
    });
    $(document).ready(function(){
        //$('.submitAjax').click(function(){
          //  var city = $('.city').val();
            //var province = $('.province').val();
            //var wards = $('.wards').val();
            
//        });  --}}
        $('.choose').on('change',function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name = "_token"]').val();
            var result = '';

            if(action == 'city'){
                result = 'province'
            }else{
                result = 'wards'
            }
            $.ajax({
                url: "{{route('HomeController.select_delivery')}}",
                method: 'POST',
                data: {action:action,ma_id:ma_id,_token:_token},
                success:function(data){
                    $('#'+ result).html(data);
                }
            });
        });
    });
</script>
</body>

</html>