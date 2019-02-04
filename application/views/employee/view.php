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

		
	<?php $this->load->view('employee/form-add') ?>


	<?php $this->load->view('templates/footer') ?>
	<?php $this->load->view('employee/datatable') ?>
	
	</body>
</html>