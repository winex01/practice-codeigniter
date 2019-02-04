<?php $this->load->view('templates/header') ?>

		<h1 class="text-center">Sample CRUD</h1>

		<br />



	<div class="container">
		<div class="row">	

			<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>
			<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
			Add</a>

			<hr />
			
	    	<table id="mytable" class="table table-hover table-striped table-bordered" style="width:100%">
	            <thead>
	                <tr>
	                    <th>No</th>
	                    <th>Name</th>
	                    <th>Age</th>
	                    <th>Position</th>
	                    <th>Action</th>
	                </tr>
	            </thead>
	            <tbody>
	            </tbody>
	        </table>
		</div>
	</div>



	<div class="modal fade" id="modal-id">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Add</h4>
				</div>
				<div class="modal-body">
					
					<form class="form-horizontal" action="">
					
					  <div class="form-group">
					    <label class="control-label col-sm-4" for="fname">First name:</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="fname" placeholder="Enter first name">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-4" for="lname">Last name:</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="lname" placeholder="Enter last name">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-4" for="age">Age:</label>
					    <div class="col-sm-8">
					      <input type="number" min="0" class="form-control" id="age" placeholder="Enter age">
					    </div>
					  </div>


					  <div class="form-group">
					    <label class="control-label col-sm-4" for="position">Position:</label>
					    <div class="col-sm-8">
					    	<select class="form-control" id="position">
							    <option>Customer Support</option>
							    <option>Customer Support</option>
							  </select>
					    </div>
					  </div>


					</form><!-- end form -->

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save</button>
				</div>
			</div>
		</div>
	</div>



<?php $this->load->view('templates/footer') ?>
