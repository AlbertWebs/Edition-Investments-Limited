<?php $Team = DB::table('admins')->where('role','team')->get(); ?>
		<section class="padding bg-white padding-bottom-0">
                <div class="lastest-project-warp portfolio-grid-3-warp clearfix">
				<div class="main_b_r_title">
							<!--  -->
								<div class="portfolio-now wow fadeInUp" data-wow-delay=".25s">
									<h3 style="color:#062b31">The Edition Team</h3>
								</div>
								<p class="team-meta wow fadeInDown" data-wow-delay=".25s">Our multidisciplinary team of experts is commited to delivering effective and inovative solutions for major commercial residential, corporate, industrial and multi-dwelling projects</p>
							<!--  -->
                        </div>
                        <div class="dotted"></div>
             
                    <div class="clearfix projectContainer portfolio-grid-3-container">
					
					           <?php $Count = 1; ?>
					           @foreach($Team as $team)
							   <div class="col-lg-4 col-md-6 col-sm-12 text-center" style="">
                                <div class="element-item wow fadeInUp team_images" data-wow-delay=".25s">
	                               <img class="portfolio-img-demo" src="{{url('/')}}/uploads/admins/{{$team->image}}" class="img-responsive" alt="Image">
	                               <div class="project-info">
	                                  	<h4 class="team-name">{{$team->name}}</h4>
	                                    <h5 class="team-position">{{$team->position}}</h5>
	                                </div>
							    </div>
							   </div>
							  @endforeach
                           
                            
                    </div>  <!-- End project Container -->
    			</div> <!-- End  -->
            	
			</section>