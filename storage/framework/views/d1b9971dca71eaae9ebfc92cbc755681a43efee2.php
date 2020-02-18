<?php $__env->startSection('admin_content'); ?>
		<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Slider</a>
				</li>
			</ul>

			
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Slider Form</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>

					<p class="alert-success"><b>
						<?php
							$message = Session::get('message');
							if($message){
								echo $message;
								Session::put('message',null);
							}

						 ?>
						</b>
					</p>



					<div class="box-content">
						<form action="<?php echo e(url('/save-slider')); ?>" method="post" enctype="multipart/form-data" class="form-horizontal" >
							<?php echo e(csrf_field()); ?>


						  <fieldset>
						  

							<div class="control-group">
							  <label class="control-label" for="date01">Slider Image</label>
							  <div class="controls">
								<input type="file" class="input-file uniform-on" name="slider_image" required="">
							  </div>
							</div>
							
 

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication Status</label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1" required="">
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Slider</button>
							  <button type="reset" class="btn btn-danger">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\elaravel1\resources\views/admin/add_slider.blade.php ENDPATH**/ ?>