$extends('layout')

<?php $__env->startSection('content'); ?>
			 <div class="col-sm-12 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?php echo e(URL::to($product_by_details->product_image)); ?>" alt="" />
								<h3>ZOOM</h3>
							</div> 
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="<?php echo e(asset('frontend/images/product-details/new.jpg')); ?>" class="newarrival" alt="" />
								<h2><?php echo e($product_by_details->product_name); ?></h2>
								<p>Product ID: <?php echo e($product_by_details->product_id); ?></p>
								<img src="<?php echo e(asset('frontend/images/product-details/rating.png')); ?>" alt="" /><br>	
								<span>
									<span><?php echo e($product_by_details->product_price); ?> Tk</span>
									<form action="" method="post">	
										<?php echo e(csrf_field()); ?>

											<label>Quantity:</label>
											<input type="text" name="qty" value="1" /> <br>	
											<input type="hidden" name="product_id" value="<?php echo e($product_by_details->product_id); ?>">
											<button type="submit" class="btn btn-fefault cart">
												<i class="fa fa-shopping-cart"></i>
												Add to cart
											</button>
									</form>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p> 
								<p><b>Category: </b><?php echo e($product_by_details->category_name); ?></p>
								<p><b>Brand: </b><?php echo e($product_by_details->manufacture_name); ?></p>
								<p><b>Color: </b><?php echo e($product_by_details->product_color); ?></p>
								<p><b>Size: </b><?php echo e($product_by_details->product_size); ?></p>
								<a href=""><img src="<?php echo e(asset('frontend/images/product-details/share.png')); ?>" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Details</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
								<li><a href="#tag" data-toggle="tab">Tag</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<div class="col-sm-12">
									<p> <?php echo e($product_by_details->product_long_description); ?> </p>
								</div>
							 
								 
								 
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							 
							</div>
							
							<div class="tab-pane fade" id="tag" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								 
								 
							</div>
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>Bangladesh</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i><?php echo date('h:m:i') ?></a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i><?php echo date('d-m-y') ?></a></li>
									</ul>
									<p>If you have any claim or advice then you can share with us freely. I hope we will be tried to solve next time and we always try to decorate and serve our product such as enjoying with people and all users.so please review here.</p>
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="<?php echo e(asset('frontend/images/product-details/rating.png')); ?>" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->		 
<?php $__env->stopSection(); ?>
<?php /**PATH C:\xampp\htdocs\elaravel1\resources\views/pages/product_details.blade.php ENDPATH**/ ?>