@extends('layout.master') 
    @section('title')
    {{$model->seo_title}}
    @endsection
    @section('head')
        <meta name="keywords" content="{{$model->meta_keywords}}" />
        <meta name="description" content="{{$model->meta_description}}">
        <script src="//widget.manychat.com/111985620932162.js" defer="defer"></script>
    <script src="https://mccdn.me/assets/js/widget.js" defer="defer"></script>

    @endsection
@section('content')
<div class="page-content bg-white">
    		<!-- inner page banner -->
            <div class="dlab-bnr-inr dlab-bnr-inr  bg-pt" style="background-image:url({{asset('public/img/banner2.jpg')}});">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white" id="titulo">Blog</h1>
                        <!-- Breadcrumb row -->

                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            		<!-- contact area -->
        <!-- inner page banner END -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- left part start -->
                    <div class="col-lg-8 col-md-7 col-sm-12">
						<!-- blog grid -->
                        <div class="blog-post blog-single blog-style-1">
							<div class="dlab-post-meta">
								{{-- <ul class="d-flex align-items-center">
									<li class="post-date">September 18, 2017</li>
									<li class="post-author">By <a href="blog-details.html">demongo</a> </li>
									<li class="post-comment"><a href="blog-details.html">5k</a> </li>
								</ul> --}}
							</div>
                            <div class="dlab-post-title">
                                <h4 class="post-title m-t0">{{$model->title}}</h4>
                            </div>
                            <div class="dlab-post-media dlab-img-effect zoom-slow m-t20"> 
								<img src="{{asset('public/storage/'.$model->image)}}" alt="">
							</div>
                            <div class="dlab-post-text">
                                @php
                                    echo $model->body;
                                @endphp
                            </div>
                            {{-- <div class="dlab-post-tags clear">
                                <div class="post-tags">
									<a href="javascript:void(0);">Child </a>
									<a href="javascript:void(0);">Eduction </a>
									<a href="javascript:void(0);">Money </a>
									<a href="javascript:void(0);">Resturent </a>
								</div>
                            </div> --}}
							<div class="dlab-divider bg-gray-dark op4"><i class="icon-dot c-square"></i></div>
							{{-- <div class="share-details-btn">
								<ul>
									<li><h5 class="m-a0">Compartir post</h5></li>
									<li><a target="_blank" href="https://www.facebook.com/" class="site-button facebook button-sm"><i class="fa fa-facebook"></i> Facebook</a></li>
									<li><a target="_blank" href="https://www.instagram.com/" class="site-button instagram button-sm"><i class="fa fa-instagram"></i> Instagram</a></li>
								</ul>
							</div> --}}
                        </div>
						<!-- Pagination END -->
                    </div>
                    <!-- left part END -->
                    <!-- Side bar start -->
                    <div class="col-lg-4 col-md-5 col-sm-12 sticky-top">
                        <aside  class="side-bar">
                            {{-- <div class="widget">
                                <h6 class="widget-title style-1">Buscador</h6>
                                <div class="search-bx style-1">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="text" class="form-control" placeholder="Escribe una palabra" type="text">
                                            <span class="input-group-btn">
												<button type="submit" class="fa fa-search text-primary"></button>
                                            </span> 
										</div>
                                    </form>
                                </div>
                            </div> --}}
                            <div class="widget recent-posts-entry">
                                <h6 class="widget-title style-1">Posts recientes</h6>
                                <div class="widget-post-bx">
                                    @foreach ($post as $item)
                                    <div class="widget-post clearfix">
                                        <div class="dlab-post-media"> <img src="{{asset('public/storage/'.$item->image)}}" width="200" height="143" alt=""> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-header">
                                                <h6 class="post-title"><a href="{{url('blog/'.$item->id)}}">{{$item->title}}</a></h6>
                                            </div>
											<div class="dlab-post-meta">
												<ul class="d-flex align-items-center">
													{{-- <li class="post-date">Sep 18, 2017</li>
													<li class="post-comment"><a href="blog-details.html">5k</a> </li> --}}
												</ul>
											</div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
							{{-- <div class="widget widget_gallery gallery-grid-3">
                                <h6 class="widget-title style-1">Our Gallery</h6>
                                <ul>
                                    <li><div class="dlab-post-thum"><a href="javascript:void(0);" class="dlab-img-overlay1 dlab-img-effect zoom-slow"><img src="images/gallery/small/pic2.jpg" alt=""></a></div></li>
                                    <li><div class="dlab-post-thum"><a href="javascript:void(0);" class="dlab-img-overlay1 dlab-img-effect zoom-slow"><img src="images/gallery/small/pic1.jpg" alt=""></a></div></li>
                                    <li><div class="dlab-post-thum"><a href="javascript:void(0);" class="dlab-img-overlay1 dlab-img-effect zoom-slow"><img src="images/gallery/small/pic5.jpg" alt=""></a></div></li>
                                    <li><div class="dlab-post-thum"><a href="javascript:void(0);" class="dlab-img-overlay1 dlab-img-effect zoom-slow"><img src="images/gallery/small/pic7.jpg" alt=""></a></div></li>
                                    <li><div class="dlab-post-thum"><a href="javascript:void(0);" class="dlab-img-overlay1 dlab-img-effect zoom-slow"><img src="images/gallery/small/pic8.jpg" alt=""></a></div></li>
                                    <li><div class="dlab-post-thum"><a href="javascript:void(0);" class="dlab-img-overlay1 dlab-img-effect zoom-slow"><img src="images/gallery/small/pic9.jpg" alt=""></a></div></li>
                                </ul>
                            </div> --}}
							{{-- <div class="widget widget_archive">
                                <h6 class="widget-title style-1">Categories List</h6>
                                <ul>
                                    <li><a href="javascript:void(0);">aciform</a></li>
                                    <li><a href="javascript:void(0);">championship</a></li>
                                    <li><a href="javascript:void(0);">chastening</a></li>
                                    <li><a href="javascript:void(0);">clerkship</a></li>
                                    <li><a href="javascript:void(0);">disinclination</a></li>
                                </ul>
                            </div> --}}
							{{-- <div class="widget widget-newslatter">
                                <h6 class="widget-title style-1">Newsletter</h6>
                                <div class="news-box">
									<p>Enter your e-mail and subscribe to our newsletter.</p>
                                    <form class="dzSubscribe" action="script/mailchamp.php" method="post">
										<div class="dzSubscribeMsg"></div>
                                        <div class="input-group">
                                            <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email"/>
											<button name="submit" value="Submit" type="submit" class="site-button btn-block radius-no">Subscribe Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                        </aside>
                    </div>
                    <!-- Side bar END -->
                </div>
            </div>
        </div>
        <!-- contact area  END -->
</div>
@endsection

@section('script')

@endsection