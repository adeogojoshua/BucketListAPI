<template>
<div class="row">
                <div class="col-md-8 col-md-offset-2">
    
                    <div class="contact-form">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Your Full Name</label>
                                        <input type="text" name="name" value="" placeholder="Michael Jordan" class="form-control form-control-plain">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="text" name="email" value="" placeholder="michael.j@gmail.com" class="form-control form-control-plain">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" name="subject" value="" placeholder="Say hi to you" class="form-control form-control-plain">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="content" class="form-control form-control-plain" placeholder="Here you can write your nice text" rows="8" spellcheck="false"></textarea>
                                    </div>
                                    <div>
                                        <div class="col-md-2 col-md-offset-5">
                                            <button type="button" @click="shouttt()" class="btn btn-danger btn-fill">
                                                Contact Us
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Modal -->
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

            </div>
</template>

<script>
export default {
  data() {
    return {

    }
  },

  created(){

  },

  methods: {
    shouttt() {
      alert('dfefeg');
    }
  }
}
</script>