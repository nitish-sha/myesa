 

 @include('frontend.layout.header')
 
  <link rel="stylesheet" type="text/css" href="{{asset('public/forntend/css/blog.css')}}"/>
  
  
 <section class="banner">
            <div class="container">
                <div class="circle"></div><div class="circle1"></div>
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 m-auto">
                        <div class="banner-content">
                            <h1 class="h1">Blog</h1>
                            <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator as well as a random Lipsum generator.</p>                                
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="blog-area mt-4 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                        <div class="row">
						
						
						 @if($blogs->count() > 0)
                              @foreach($blogs as $product)
                            <div class="col-lg-6">
                                <article>
                                    <figure>
                                        <picture>
                                            <source type="image/webp" data-srcset=" {{asset('public/storage/'.$product->thumbnail)}}" />
                                            <source type="image/jpg" data-srcset="{{asset('public/storage/'.$product->thumbnail)}}" />
                                            <img data-src="{{asset('public/storage/'.$product->thumbnail)}}" class="lazyload w-100" alt="My ESA Doctor" />
                                        </picture>
                                    </figure>
                                    <div class="content-area">
                                        <ul class="tags">
                                            <li><a href="javascript:vois(0);">
											@if($product->categories()->count() > 0)
											  @foreach($product->categories as $children)
											  {{$children->title}},
											  @endforeach
											  @else
											  <strong>{{"product"}}</strong>
											  @endif</a></li>
                                            
                                        </ul>
                                        <h2 class="entry-title">
                                            <a href="#">
                                               {{$product->title}}
                                            </a>
                                        </h2>
                                        <ul class="publish-detail mb-2">
                                            <li><a href="javascript:void(0);">Admin</a></li>
                                            <li><a href="javascript:void(0);">{{$product->created_at}}</a></li>
                                        </ul>
                                        <div class="entry-content pb-3">
                                            <p>
                                               {!! substr($product->description,0,200) !!}
                                            </p>
                                        </div>
                                        <a href="{{route('blog.single', $product)}}" class="btn bt_n brdtheme">Read More</a>
                                    </div>
                                </article>
                            </div>
                            @endforeach
							 @endif 
								 
                        </div>
                        <div class="pagination">
                            <div class="newer">
                                {{$blogs->links()}}
                            </div>
                            <div class="older">
                               
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="side-bar">
                            <!-- Search -->
                            <div class="widget_search widget mb-4">
                                <input type="search" placeholder="Search"/>
                            </div>
                            <div class="widget kd-about mb-4">
                                <div class="widget-inner text-center">
                                    <img src="img/blog/about-me.jpg" alt="About Me">
                                    <h2>Photographer & Blogger</h2>
                                    <div class="about-info">
                                        Phasellus dignissim purus facilisis libero suscipit vulputate.Vestibulum rutrum velit in mauris ullamcorper, id posuere nisi ornare. Fusce quis purus sit amet nisi aliquet sodales.
                                    </div>
                                </div>
                            </div>

                            <!-- Recent Post -->
                            <div class="widget_recent_post widget mb-4">
                                <h3 class="widget-title mb-4">Recent Posts</h3>
                                <ul class="recent-post-list">
								
								
                                     @if($blogs->count() > 0)
                              @foreach($blogs as $product)
						  
                                    <li class="pb-4 mb-3">
                                        <a href="{{route('blog.single', $product)}}"> {{$product->title}} </a>
                                        <ul class="publish-detail mb-2">
                                            <li><a href="javascript:void(0);">Admin</a></li>
                                            <li><a href="javascript:void(0);">{{$product->created_at}}</a></li>
                                        </ul>
                                    </li>
									 @endforeach
							         @endif  
                                </ul>
                            </div>

                            <!-- Tags -->
                            <div class="widget_tag widget mb-4 pb-4">
                                <h3 class="widget-title mb-4">Categories</h3> 
                                <ul> 
							@foreach($categories as $children)
                                    <li><a href=""> {{$children->title}}</a></li>
									
									 @endforeach  
                                </ul>
                            </div>

                        </div>
                    </div>


                    <div class="clearfix"></div>
                </div>
            </div>
        </section>

		
	 @include('frontend.layout.footer')
	 
	
	
	
	