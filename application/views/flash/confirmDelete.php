<div class="modal fade" id="modal-confirm-delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Delete Confirmation</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this?</p>
        <form id="form-delete" method="POST">
          <?php csrf(); ?>
          <?php //currentURI(); ?>
          <input type="hidden" name="id" id="id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </button>
        <button type="submit" class="btn btn-danger">Delete
          <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
        </button>
        </form>
      </div>
    </div>
  </div>
</div>