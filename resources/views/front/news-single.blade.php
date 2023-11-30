@extends('front.master')
@section('content') 
<?php $Page = DB::table('page')->where('page_name','About')->get(); ?>
@foreach($Page as $page)
@foreach($Blog as $blog) 
 
        <section>
            <div class="sub-header-breadcrumbs sub-header-1-breadcrumbs sub-header-contact-breadcrumbs fake-position">
                <div class="sub-header-content-breadcrumbs">
                    <h3 class="text-cap white-text">{{$page_title}}</h3>
                    <ol class="breadcrumb breadcrumb-arc text-cap">
                        <li>
                            <a href="#">Home</a>
						</li>
						<li>
                            <a href="{{url('/news-and-blog')}}">News & Blogs</a>
                        </li>
                        <li class="active">{{$page_title}}</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Section Sub Header -->

        <section id="content" class="padding">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<main id="main" class="site-main" >
									<div class="blog-detail">
						                   	<h3>{{$blog->title}}</h3>
						                   	<div class="latest-blog-post-data text-cap">
                                               <?php
                                                    $Cate = DB::table('category')->where('id',$blog->cat)->get();
                                                ?>
						                        <span class="tags">
                                                    
                                                    @foreach($Cate as $cat)
                                                    <a href="{{url('/news/categories/')}}/{{$cat->cat}}">
                                                        {{$cat->cat}}
                                                    </a>
                                                    @endforeach
                                                   
                                                </span>
						                    </div>
						                    <div class="latest-blog-post-date-2  text-cap">
                                              
				                            	<span class="month">{{date('M', strtotime($blog->created_at))}}</span>
												<span class="day">{{date('d', strtotime($blog->created_at))}},</span>
				                                <span class="year">{{date('Y', strtotime($blog->created_at))}}</span>
				                            </div>
						                    <div class="lastest-news-detail">
						                        <img src="{{url('/')}}/uploads/blog/{{$blog->image_two}}" class="img-responsive" alt="Image">
						                        <br>

                                                   {!!html_entity_decode($blog->content)!!}<br>
						                       
						                        <br>
												<div class="row">
													<div class="col-md-6">
														@if($blog->image_three == null)

														@else
														<img src="{{url('/')}}/uploads/blog/{{$blog->image_three}}" class="img-responsive" alt="Image">
														@endif
													</div>
												

											
													<div class="col-md-6">
														@if($blog->image_four == null)

														@else
														<img src="{{url('/')}}/uploads/blog/{{$blog->image_four}}" class="img-responsive" alt="Image">
														@endif
													</div>
												</div>
												
						                        
						                    </div>
						                    <div class="footer-data text-cap">
						                        <div class="tags ">
						                            <p>Category&nbsp;: &nbsp;
                                                    @foreach($Cate as $cat)
                                                    <a href="{{url('/news/categories/')}}/{{$cat->cat}}">
                                                        {{$cat->cat}}
                                                    </a>
                                                    @endforeach
                                                    </p>
						                        </div>
						                        <div class="share">
						                            <p>SHARE&nbsp;: &nbsp;<a href="https://www.facebook.com/sharer.php?u={{url('/')}}/news/{{$blog->slug}}"> Facebook</a>,&nbsp; <a href="https://twitter.com/intent/tweet?text={{$blog->title}}&url={{url('/')}}/news/{{$blog->slug}}">Twitter</a>,&nbsp; </p>
						                        </div>
						                    </div>
						                    <div class="divider-line"></div>
						                    

					                        <div id="respond" class="comment-respond">
						                          <h3 id="reply-title" class="text-cap">Leave a Reply </h3>        
						                          <form method="post" action="{{url('/')}}/news/addComment" id="commentform" class="comment-form form-inline">
                                                      {{csrf_field()}}
                                                      <input type="hidden" name="post_id" value="{{$blog->id}}">
						                              <!-- <p class="logged-in-as"><a href="#" aria-label="You must be logged in to post a comment.">You must be logged in to post a comment.</a>. </p> -->
						                              <div class="row">
						                                <div class="form-group col-sm-12 col-md-6 padding-right-10">
						                                  <label class="sr-only" for="inputName">Your name</label>
						                                  <input type="text" name="name" class="form-control" id="inputName" placeholder="Your Name" required>
						                                </div>
						                                <div class="form-group col-sm-12 col-md-6 padding-left-10">
						                                  <label class="sr-only" for="inputEmail">Email address</label>
						                                  <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Your Email" required>
						                                </div>
						                                <div class="form-group col-xs-12">
						                                        <textarea id="textarea" name="message" class="form-control" rows="5" required placeholder="Your Comments"></textarea>
						                                </div>
						                              </div><!-- End row -->
						                              <p class="form-submit">
						                                  <button name="submit" id="commentbtn" class="ot-btn btn-submit text-cap" type="submit">Comment </button>
						                                </p>
						                            </form>
                                                    <div class="alert alert-success" id="alert-success" role="alert" style="display:none">
                                                        
                                                    </div>
						                    </div>


                                            @if($Comments->isEmpty())

                                            @else
						                    <div id="comments" class="comments-area">
						                        <h3 class="text-cap"><?php echo count($Comments) ?> Comments</h3>
					                        	<ol class="comment-list">
                                                @foreach($Comments as $comment)
						                            <li class="comment" >
						                                  <div class="comment-body">
						                                      <div class="comment-meta">
						                                          <div class="comment-author vcard">
						                                                <a href="#"><img alt="" src="{{asset('theme/images/Testimonials/1.jpg')}}" class="avatar photo avatar-default"></a>
						                                          </div>
						                                         
						                                      </div>
						                                      <div class="comment-content">
						                                             <p>{!!html_entity_decode($comment->content)!!}</p>
						                                             <cite class="fn"><a href="#" rel="external nofollow" class="url">{{$comment->author}}</a></cite>  -      
						                                              <a href="#" class="comment-date">
						                                                  <span>{{date('M', strtotime($comment->created_at))}} {{date('d', strtotime($comment->created_at))}}, {{date('Y', strtotime($comment->created_at))}}</span>     
						                                              </a>
						                                           
						                                      </div>
						                                  </div><!-- End comment body -->

						                               
						                            </li>
						                        @endforeach 
					                        	</ol>
						                    </div><!-- Comments Area -->
                                            @endif

						                   
				                    </div>
				              </main> 
									
							</div> <!-- End Col -->
							<div class="col-md-3">
								<div class="main-sidebar">
		                            
		                            <aside class="widget widget_search">
		                                <form   class="search-form" method="get" role="search">
                                           {{csrf_field()}}
		                                    <input name="s" value="" placeholder="Search …" class="search-field" type="search">   
		                                    <button class="search-submit" type="submit"><i class="fa fa-search"></i></button>
		                                </form>
		                            </aside>
		                            <aside class="widget widget_categories">
		                                <h3 class="widget-title text-cap">Categories</h3> 
		                                <div class="tiny-border"></div>   
		                                <ul>
                                            @foreach($Category as $category)
		                                    <li class="cat-item"><a href="{{url('/news/categories/')}}/{{$category->cat}}">{{$category->cat}}</a> (<?php echo $BlogCOunt = DB::table('blog')->where('cat',$category->id)->count(); ?>)</li>
                                            @endforeach
		                                </ul>
		                            </aside>

		                            <aside class="promotion clearfix">
						                <img src="{{asset('theme/images/Blog/promotion.jpg')}}" class="img-responsive" alt="Image">
						                <div class="promotionText">
						                    <p>Amazing Fitting Products Just For You!! </p>
						                    <a href="{{url('/contact-us')}}" class="ot-btn btn-border btn-border-dark text-cap"> Request Quote</a>
						                </div>
					              	</aside>
		                          
		                      
		                            <aside class="widget widget_meta">
		                                <h3 class="widget-title text-cap">Related Posts</h3> 
		                                <div class="tiny-border"></div>         
		                                <ul>
                                            @foreach($Related as $related)
                                                @if($related->id == $blog->id)

                                                @else
		                                        <li><a href="{{url('/')}}/news/{{$related->slug}}">{{$related->title}}</a></li>
                                                @endif          
		                                    @endforeach         
		                                </ul>
		                            </aside>                           
		                        </div>
							</div><!-- End Col -->
						</div>
					</div>
				</section>
				<!-- End Content -->
@endforeach                
@endforeach

@endsection