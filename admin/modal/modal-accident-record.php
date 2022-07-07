<div class="modal fade" id="add-accident-record">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="" method="post" class="add-acident-form" autocomplete="off">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
            <h4>Add Accident Record</h4>
        </div>
        <div class="modal-body">
          <div class="modal-div-wrapper">
            <label class="inline-fields">Date: </label>
            <input class="inline-fields accident-date" type="date" name="accident-date">
          </div>
          <div class="modal-div-wrapper">
            <label class="inline-fields">Location: </label>
            <textarea class="inline-fields accident-location" name="accident-location"></textarea>
          </div>
          <div class="modal-div-wrapper">
            <label class="inline-fields">Details: </label>
            <textarea class="inline-fields accident-details" name="accident-details"></textarea>
          </div>
          <span class="modal-message"></span>
        </div>
        <div class="modal-footer">
          <button type="submit" class="save-accident page-btn">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
