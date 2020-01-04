<div class="modal fade" id="bucketlistModal" tabindex="-1" role="dialog" aria-labelledby="bucketlistModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bucketlistModalLabel">Add Bucketlist
          <span class="float-right"><button>Add Item</button></span>

        </h5>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
              <div class="form-group">
                  <label>BucketList Name</label>
                  <input type="text" name="name" value="" placeholder="Michael Jordan" class="form-control form-control-plain">
              </div>

              <div class="form-group">
                  <label>BucketList Item</label>
                  <input type="text" name="name" value="" placeholder="Michael Jordan" class="form-control form-control-plain">
              </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" @click="shouttt()">Save changes</button>
      </div>
    </div>
  </div>
</div>
