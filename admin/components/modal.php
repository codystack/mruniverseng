<!-- Live Stream Modal Start-->
<div class="modal fade" id="addNewLiveStream" tabindex="-1" aria-labelledby="addNewLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header p-4">
        <h4 class="modal-title" id="addNewLabel">Add New <?php echo $page ?> Link</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class=" p-3">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="form-group col-md-12 col-12">
                <label for="firstName" class="font-14 text-dark">Event Title<span class="text-danger">*</span></label>
                <input type="text" name="linkTitle" placeholder="Fashion Show" class="form-control" required />
              </div>
              <div class="form-group col-md-12 col-12">
                <label for="lastName" class="font-14 text-dark">Youtube Link<span class="text-danger">*</span></label>
                <input type="text" name="youtubelink" placeholder="https://www.youtube.com/embed/x57G-uQBuF0" class="form-control" 	required />
              </div>
            </div>
            <div class="text-center">
              <button name="add_admin_btn" class="btn btn-icon btn-dark text-center" type="submit">Add Admin</button>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="addNewLink_btn" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--Live Stream Modal End-->

<!-- Modal Start-->
<div class="modal fade" id="addNew" tabindex="-1" aria-labelledby="addNewLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header p-4">
        <h4 class="modal-title" id="addNewLabel">Add New <?php echo $page ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class=" p-3">
          <form class="row">
            <div class="form-group col-md-6 col-12">
              <label for="firstName" class="font-14 text-dark">First Name<span class="text-danger">*</span></label>
              <input type="text" name="firstname" id="firstName" placeholder="First Name" class="form-control" required />
            </div>
            <div class="form-group col-md-6 col-12">
              <label for="lastName" class="font-14 text-dark">Last Name<span class="text-danger">*</span></label>
              <input type="text" name="lastname" id="lastName" placeholder="Last Name" class="form-control" 	required />
            </div>
            <div class="form-group col-md-6 col-12">
              <label for="email" class="font-14 text-dark">Email<span class="text-danger">*</span></label>
              <input type="email" name="email" id="email" placeholder="Email address here" class="form-control" required />
            </div>
            <div class="form-group col-md-6 col-12">
              <label for="password" class="font-14 text-dark">Password<span class="text-danger">*</span></label>
              <input type="password" name="password" id="password" placeholder="*******" class="form-control"	required />
            </div>
            <div class="form-group col-md-6 col-12">
              <label for="role" class="font-14 text-dark">Select Role<span class="text-danger">*</span></label>
              <select class="custom-select" id="role">
                <option selected>Select Role</option>
                <option value="1">Admin</option>
                <option value="2">Developer</option>
                <option value="3">Designer</option>
              </select>
            </div>
            <div class="form-group col-md-6 col-12">
              <label for="department" class="font-14 text-dark">Department<span class="text-danger">*</span></label>
              <select class="custom-select" id="department">
                <option selected>Select Department</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
                <option value="3">Front end Developer</option>
              </select>
            </div>
            <div class="col-12 mt-3">
              <h5 class="mb-2">Allow Permission</h5>
              <div class="custom-control custom-checkbox  custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="administrator" checked />
                <label class="custom-control-label" for="administrator">Administrator</label>
              </div>
              <div class="custom-control custom-checkbox  custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="supervisor" />
                <label class="custom-control-label" for="supervisor">Supervisor</label>
              </div>
              <div class="custom-control custom-checkbox  custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="operator" />
                <label class="custom-control-label" for="operator">Operator</label>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Close
        </button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal End-->


<!-- Add Contestant Modal -->
<div class="modal fade" id="addNewContestant" tabindex="-1" aria-labelledby="addNewLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header p-4">
        <h4 class="modal-title" id="addNewLabel">Add New</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class=" p-3">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    <label for="firstName" class="font-14 text-dark">First Name<span class="text-danger">*</span></label>
                    <input type="text" name="firstName" id="firstName" placeholder="First Name" class="form-control" required/>
                </div>
                <div class="form-group col-md-6 col-12">
                    <label for="lastName" class="font-14 text-dark">Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="lastName" id="lastName" placeholder="Last Name" class="form-control" required/>
                </div>
                <div class="form-group col-md-6 col-12">
                    <label for="email" class="font-14 text-dark">State Representing<span class="text-danger">*</span></label>
                    <input type="text" name="stateRep" placeholder="Imo State" class="form-control" required/>
                </div>
                <div class="form-group col-md-6 col-12">
                    <label for="password" class="font-14 text-dark">Contestant Photo<span class="text-danger">*</span></label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="picture">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button name="add_contestant_btn" class="btn btn-icon btn-dark text-center" type="submit">Add Contestant</button>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>