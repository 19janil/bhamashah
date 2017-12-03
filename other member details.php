$sql1 = "SELECT `uid`, `uname`, `gender`, `dob`, `aadhar` FROM `user_member` WHERE uid='".$id."'";

<hr>
    <h4>Other Members Details : </h4><br>
                    <div class="form-group">
                         <label for="name" class="col-sm-2 control-label">Name</label>                       
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="name" name="name" value="Full Name">
                        </div>
                        <label for="gender" class="col-sm-2 control-label">Gender</label>                       
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="gender" name="gender" value="Male / Female">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="relation" class="col-sm-2 control-label">Relation</label>                       
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="relation" name="relation" value="Relation with Head">
                        </div>
                        <label for="dob" class="col-sm-2 control-label">Date of Birth</label>                       
                        <div class="col-sm-4">
                        <input type="date" class="form-control" id="dob" name="dob" value="Date of Birth">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="aadhar" class="col-sm-2 control-label">Aadhar Number</label>                       
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="aadhar" name="aadhar" value="Aadhar Number">
                        </div>
                    </div>