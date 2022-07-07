<div class="modal fade" id="update-brgy">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="" method="post" class="update-brgy-form" autocomplete="off">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
            <h4>Add Brgy. Details</h4>
        </div>
        <div class="modal-body">
          <div class="modal-div-wrapper">
            <label class="inline-fields">Brgy. Name: </label>
            <input class="inline-fields brgy-name" type="text" name="brgy-name" readonly="">
          </div>
          <div class="modal-div-wrapper">
            <label class="inline-fields">Brgy. Address: </label>
            <input class="inline-fields brgy-address" type="text" name="brgy-address">
          </div>
          <div class="modal-div-wrapper">
            <label class="inline-fields">Brgy. Chairman: </label>
            <input class="inline-fields brgy-chairman" type="text" name="brgy-chairman">
          </div>
          <div class="modal-div-wrapper">
            <label class="inline-fields">Brgy. Hotline: </label>
            <input class="inline-fields brgy-hotline" type="text" name="brgy-hotline">
          </div>
          <div class="modal-div-wrapper">
            <label class="inline-fields">Available slot: </label>
            <input class="inline-fields brgy-availability" type="number" name="brgy-availability">
          </div>
          <input class="inline-fields brgy-id" type="text" name="brgy-id" hidden="">
          <span class="modal-message"></span>
        </div>
        <div class="modal-footer">
          <button type="submit" class="save-brgy page-btn">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
