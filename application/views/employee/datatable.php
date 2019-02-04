<script type="text/javascript">
	$(function() {
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