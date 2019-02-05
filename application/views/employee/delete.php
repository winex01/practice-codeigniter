
<script type="text/javascript">
	function confirm_delete(id, url) {
		$.ajax({
			url: '<?php echo base_url()?>' + url,
			type: 'POST',
			dataType: 'json',
			data: {
				id: id,
				'<?php csrfName(); ?>' : '<?php csrfHash(); ?>'
			},
		})
		.done(function(response) {
			// console.log(response);
			if (response) {
				$('#mytable').DataTable().ajax.reload();
			}
		});
	}
</script>