<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>


		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

	</head>
	<body>
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



		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

		<script type="text/javascript">

			$(function() {
				//datatables
			var table = $('#mytable').DataTable({ 
			 
			        "processing": true, //Feature control the processing indicator.
			        "serverSide": true, //Feature control DataTables' server-side processing mode.
			        "order": [], //Initial no order.
			 
			        // Load data for the table's content from an Ajax source
			        "ajax": {
			            "url": "<?php echo base_url('employeesList')?>",
			            "type": "POST",
			            "data": {
			                '<?php csrfName(); ?>' : '<?php csrfHash(); ?>'
			            }
			        },
			 
			        //Set column definition initialisation properties.
			        "columnDefs": [
			            { 
			                "targets": [ 0 ], //first column / numbering column
			                "orderable": false, //set not orderable
			            },
			        ],
			 
			    });
			});
		</script>
	
	</body>
</html>