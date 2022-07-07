<div class="modal fade" id="update-record">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="" method="post" class="add-home-form" enctype="multipart/form-data" autocomplete="off">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
            <h4>Update Record</h4>
        </div>
        <div class="modal-body">
          <div class="home-modal-wrapper">
            <div class="modal-div-wrapper">
              <label class="inline-fields">Mission: </label>
              <textarea class="inline-fields home-mission" name="mission"></textarea>
            </div>
            <div class="modal-div-wrapper">
              <label class="inline-fields">Background: </label>
              <input type="file" name="photo_mission" class="inline-fields">
            </div>
          </div>
          <div class="home-modal-wrapper">
            <div class="modal-div-wrapper">
              <label class="inline-fields">Vision: </label>
              <textarea class="inline-fields home-vision" name="vision"></textarea>
            </div>
            <div class="modal-div-wrapper">
              <label class="inline-fields">Background: </label>
              <input type="file" name="photo_vision" class="inline-fields">
            </div>
          </div>
          <div class="home-modal-wrapper">
            <div class="modal-div-wrapper">
              <label class="inline-fields">About: </label>
              <textarea class="inline-fields home-about" name="about"></textarea>
            </div>
            <div class="modal-div-wrapper">
              <label class="inline-fields">Background: </label>
              <input type="file" name="photo_about" class="inline-fields">
            </div>
          </div>
          <span class="modal-message"></span>
        </div>
        <div class="modal-footer">
          <button type="submit" class="save-home-record page-btn">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
