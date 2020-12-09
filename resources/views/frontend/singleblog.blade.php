 

 @include('frontend.layout.header')
 
  <link rel="stylesheet" type="text/css" href="{{asset('public/forntend/css/blog.css')}}"/>
   <link href="{{asset('public/forntend/css/comment.css')}}" rel="stylesheet" type="text/css" class="lazyload"/>
  
  <section class="blog-area mt-4 mb-4">
            <div class="container">
                <div class="row justify-content-center">
				
				
						  
                    <div class="col-md-12 col-lg-10 col-xl-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <article>
                                    <figure>
                                        <picture>
                                            <source type="image/webp" data-srcset="{{asset('public/storage/'.$product->thumbnail)}}" />
                                            <source type="image/jpg" data-srcset="{{asset('public/storage/'.$product->thumbnail)}}" />
                                            <img data-src="{{asset('public/storage/'.$product->thumbnail)}}" class="lazyload w-100" alt="My ESA Doctor" />
                                        </picture>
                                    </figure>
                                    <div class="content-area">
                                        <ul class="tags">
                                             
                                        </ul>
                                        <h1 class="entry-title">
                                             {{$product->title}}
                                        </h1>
                                        <ul class="publish-detail mb-2">
                                            <li><a href="javascript:void(0);"><i class="ti-user"></i> Admin</a></li>
                                            <li><a href="javascript:void(0);"><i class="ti-calendar"></i> {{$product->created_at}}</a></li>
                                        </ul>
                                        <div class="entry-content pb-3">
                                            {!! ($product->description) !!}
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div> 
							 
						 
                    <div class="col-md-12 col-lg-10 col-xl-8">
                        <div class="comments-area">
                            <div class="widget-header-2 position-relative mb-3">
                                <h5 class="mb-5">Comments</h5>
                            </div>
							
							@if(\Session::has('message'))
								<div class="alert alert-success">
									{{\Session::get('message')}}
								</div>
							@endif
							
							@foreach($approvecomments as $comment)
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="{{asset('public/forntend/img/blog/comment/author-4.jpg')}}" alt=""/>
                                        </div>
                                        <div class="desc">
                                            <p class="comment">
											{!! $comment->description !!}
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        <a href="#">{{ $comment->title }}</a>
                                                    </h5>
                                                    <p class="date">{{ $comment->created_at }} </p>
                                                </div>
                                               <!-- <div class="reply-btn">
                                                    <a href="#" class="btn-reply">Reply</a>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							  @endforeach
						</div>
				  </div>
                       
                            
                   

                    <div class="col-md-12 col-lg-10 col-xl-8">
                        <div class="comment-form">
                            <div class="widget-header-2 position-relative mb-5">
                                <h5 class="mt-5 mb-3">Leave a Reply</h5>
                            </div>
                            <form class="form-contact comment_form" action="{{url('blog')}}" method="post"  id="commentForm">
							
							@csrf
							<input type="hidden" value="{{$product->id}}" name="comment_id">
							 
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100" name="description" id="description" cols="30" rows="9" placeholder="Write Comment" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="title" id="title" type="text" placeholder="title" required>
                                        </div>
                                    </div>
                                   <!-- <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                                        </div>
                                    </div>-->
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn bt_n brdtheme">Post Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
			
			 

               
        </section>

		
	 @include('frontend.layout.footer')
	 
	