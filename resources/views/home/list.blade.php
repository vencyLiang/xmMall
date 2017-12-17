@extends('layout.index')
@section('title','小米官网')

@section('css')
    <link rel="shortcut icon" href="/homes/common/img/favicon.ico" />
    <link href="/homes/common/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/homes/common/css/category.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/homes/common/css/base.min.css" />
    <script type="text/javascript" src="/homes/common/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/homes/common/js/jquery.json.js"></script>
    <script type="text/javascript" src="/homes/common/js/transport_jquery.js"></script>
    <script type="text/javascript" src="/homes/common/js/common.js"></script>
    <script type="text/javascript" src="/homes/common/js/global.js"></script>
    <script type="text/javascript" src="/homes/common/js/easydialog.min.js"></script>
    <script type="text/javascript" src="/homes/common/js/compare.js"></script>
    <script type="text/javascript" src="/homes/common/js/utils.js"></script>
    <script type="text/javascript" src="/homes/common/js/jquery.SuperSlide.js"></script>
    <script type="text/javascript" src="/homes/common/js/xiaomi_common.js"></script>
@endsection
@section('content')
<script type="text/javascript" src="/homes/common/js/xiaomi_category.js"></script>

<div class="breadcrumbs">
    <div class="container">
        <a href="http://mm.com/">首页</a>
        <code>&gt;</code>
        <a href="http://mm.com/category.php?id=69">购买手机</a>
    </div>
</div>


<div class="content">
    <div class="container">
        <div class="order-list-box clearfix">
            <form method="GET" name="listform">
                <ul class="order-list">
                    <li class="first active"><a title="销量" href="http://mm.com/category.php?category=69&amp;display=grid&amp;brand=0&amp;price_min=0&amp;price_max=0&amp;filter_attr=0&amp;page=1&amp;sort=sales_volume&amp;order=ASC#goods_list" class="curr" rel="nofollow"><span class="search_DESC">销量</span>&nbsp;<i class="iconfont"></i></a></li>
                    <li class=""><a title="价格" href="http://mm.com/category.php?category=69&amp;display=grid&amp;brand=0&amp;price_min=0&amp;price_max=0&amp;filter_attr=0&amp;page=1&amp;sort=shop_price&amp;order=ASC#goods_list" rel="nofollow"><span class="">价格</span></a></li>
                    <li class=""><a title="上架时间" href="http://mm.com/category.php?category=69&amp;display=grid&amp;brand=0&amp;price_min=0&amp;price_max=0&amp;filter_attr=0&amp;page=1&amp;sort=goods_id&amp;order=DESC#goods_list" rel="nofollow"><span class="">上架时间</span></a></li>
                    <input type="hidden" name="category" value="69" />
                    <input type="hidden" name="display" value="grid" id="display" />
                    <input type="hidden" name="brand" value="0" />
                    <input type="hidden" name="price_min" value="0" />
                    <input type="hidden" name="price_max" value="0" />
                    <input type="hidden" name="filter_attr" value="0" />
                    <input type="hidden" name="page" value="1" />
                    <input type="hidden" name="sort" value="sales_volume" />
                    <input type="hidden" name="order" value="DESC" />
                </ul>
            </form>

        </div>
            <div class="goods-list-box">


                {{--这里是需要遍历的单体--}}
                @foreach($goods as $good)
                    @if($good->skus()->first())
                <div class="goods-item" style="width:292px;">
                    <div class="figure figure-img">
                        <a href="/detail?id={{$good->id}}"><img src="{{$good->showImg}}" alt="红米Note2" class="goodsimg" /></a>
                    </div>
                    <p class="desc">{{$good->sub_title}}</p>
                    <h2 class="title"><a href="/detail?id={{$good->id}}" title="红米Note2">{{$good->title}}</a></h2>
                    <p class="price"> 本店价<font class="shop_s">{{$good->price}}<em>元</em></font>
                        <del>
                            专柜价
                            <font class="market_s">{{$good->price+300}}<em>元</em></font>
                        </del>
                    </p>

                    <div class="thumbs J_attrImg" >
                        <div style="width:212px;margin:0 auto;" >
                            <ul class="thumb-list clearfix J_imgList">

                                <a><img src="{{$good->skus()->first()->img}}" width="34" height="34" /></a>

                            </ul>
                        </div>
                    </div>


                </div>
                    @endif
                @endforeach
                {{--这里是需要遍历的单体 结束--}}
            </div>
    </div>
</div>
@stop



