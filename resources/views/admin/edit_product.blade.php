@extends('admin_layout')

@section('admin_content')
		<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Product</a>
				</li>
			</ul>

			
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product Form</h2>
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
						<form action="{{url('/update-product/'.$product_info->product_id)}}" method="post" enctype="multipart/form-data" class="form-horizontal" >
							{{ csrf_field() }}

						  <fieldset>
						 
							<div class="control-group">
							  <label class="control-label" for="date01">Product Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_name" value="{{$product_info->product_name}}" required="">
							  </div>
							</div>
 
							 <div class="control-group">
								<label class="control-label" for="selectError3">Product Category</label>
								<div class="controls">
								  <select id="selectError3" name="category_id">
									 
									<?php 
										$all_published_category = DB::table('tbl_category')
														->where('publication_status',1)
														->get();
										foreach($all_published_category as $v_category){ ?> 
											<option value="{{$v_category->category_id}}" <?php if($v_category->category_id == $product_info->category_id) echo "selected";?> >{{$v_category->category_name}}</option>
									 <?php 	} ?>
								  </select>
								</div>
							  </div>

							   <div class="control-group">
								<label class="control-label" for="selectError3">Manufacture Name</label>
								<div class="controls">
								  <select id="selectError3" name="manufacture_id">
									 
									 <?php 
										$all_published_manufacture = DB::table('tbl_manufacture')
														->where('publication_status',1)
														->get();
										foreach($all_published_manufacture as $v_manufacture){ ?> 
											<option value="{{$v_manufacture->manufacture_id}}" <?php if($v_manufacture->manufacture_id == $product_info->manufacture_id) echo "selected";?>>{{$v_manufacture->manufacture_name}}</option>
									 <?php 	} ?>
								  </select>
								</div>
							  </div>

						          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Short Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="product_short_description" rows="3" required="">
									{{$product_info->product_short_description}}
								</textarea>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Long Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="product_long_description" rows="3"  required="">
									{{$product_info->product_long_description}}
								</textarea>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Product Price</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_price" value="{{$product_info->product_price}}" required="">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Product Image</label>
							  <div class="controls">
							  	New Image
								<input type="file" class="input-file uniform-on" name="product_image"  ><br>
								Old Image : <img src="{{URL::to($product_info->product_image)}}" style="height: 80px;width: 100px;">
 								<input type="hidden" name="old_img" value="{{$product_info->product_image}}">
							  </div>
							</div>
							

							<div class="control-group">
							  <label class="control-label" for="date01">Product Size</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_size" value="{{$product_info->product_size}}" required="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Product Color</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_color" value="{{$product_info->product_color}}" required="">
							  </div>
							</div>
 

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Product</button>
							  <button type="reset" class="btn btn-danger">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection