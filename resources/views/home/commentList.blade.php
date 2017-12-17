<div class="goods-detail-comment J_itemBox hasContent" id="goodsCommentContent">
        <div class="goods-detail-comment-groom" id="J_recommendComment">
            <div class="container">
                <ul class="main-block">
                    <li class="percent">
                        <div class="per-num">
                            <i>99.1</i>%
                        </div>
                        <div class="per-title">
购买后满意
                        </div>
                        <div class="per-amount">
                            <i>3097</i>名用户投票
                        </div>
                    </li>

                    <li class="item-rainbow-3 groom-content">
                        <dl>
                            <dt>
                                <div class="groom-content-userImage">
                                    <img src="/homes/common/image/u6bPscBa4MZjpi_90.jpg" alt="" />
                                </div>
                                <div class="groom-content-userName">
王欢
                                </div>
                                <div class="groom-content-commentNum">
53人有相似评价
</div>
                            </dt>
                            <dd>
                                <i class="iconfont"></i> 手感很好 大小合适 开窗很大
</dd>
                        </dl>
                    </li>

                    <li class="item-rainbow-2 groom-content">
                        <dl>
                            <dt>
                                <div class="groom-content-userImage">
                                    <img src="/homes/common/image/head_3.png" alt="" />
                                </div>
                                <div class="groom-content-userName">
海涛
                                </div>
                                <div class="groom-content-commentNum">
7人有相似评价
</div>
                            </dt>
                            <dd>
                                <i class="iconfont"></i> 非常不错！很贴合，手感也好！
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>

        <div class="goods-detail-comment-content" id="J_commentDetailBlock">
            <div class="container">
                <div class="row">
                    <div class="span14 goods-detail-comment-list">
                        <div class="comment-order-title">
                            <div class="left-title">
                                <h3 class="comment-name">最有帮助的评价</h3>
                            </div>
                        </div>
                        <ul class="comment-box-list" id="J_supComment">

@foreach($comments as $k=>$comment)
    <!--******评价********-->
    <li class="item-rainbow-1" data-id="134117576">
        <div class="user-image">
            <img src="{{$comment->user->pic}}" alt="" />
        </div>
        <div class="user-emoj">
            喜欢
            <i class="iconfont"></i>
        </div>
        <div class="user-name-info">
            <span class="user-time">{{$comment->created_at}}</span>
        </div>

        <dl class="user-comment">
            <dt class="user-comment-content J_commentContent">
                <p class="content-detail"> <a href="http://order.mi.com/comment/commentDetail/comment_id/134117576" target="_blank"> {{$comment->content}} </a> </p>
            </dt>
        </dl>
    </li>
    <!--******评价结束********-->
    @endforeach
    </ul>
    </div>
    <div class="span6 goods-detail-comment-timeline">
        <h3 class="comment-name" id="comment" name="comment">最新评价</h3>
        <ul class="comment-timeline-list" id="J_timelineComment">
        @foreach($good->comments()->orderBy('created_at','desc')->take(2)->get() as $k=>$comment)
            <!--******最新回复********-->
                <li class="purple timelineunit J_commentContent" data-id="135575831"> <p class="line-content"> <a href="http://order.mi.com/comment/commentDetail/comment_id/135575831" target="_blank">{{$comment->content}}</a> </p>
                    <div class="line-foot">
                        <div class="line-left">
                            来自于 {{$comment->user->username}}
                        </div>

                    </div>
                    <div class="line-dot item-rainbow-4"></div>
                </li>
                <!--******最新回复结束********-->
            @endforeach
        </ul>
    </div>
    </div>
    </div>
    </div>
    </div>