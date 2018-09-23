<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin" style="padding-top: 50px">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Online Admission</h4>
                    <form class="form-sample" id="student_reg" action="<?php echo URL; ?>addStudent/addNewStudent"
                          method="post">
                        <p class="card-description">
                            Personal information
                        </p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">ID</label>
                                    <div class="col-sm-9">
                                        <input id="student_id" name="student_id" type="text" class="form-control"
                                               value="<?php echo $this->getStudentID; ?>" readonly required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">NIC</label>
                                    <div class="col-sm-9">
                                        <input id="NIC" name="NIC" type="text" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <select id="title" name="title" class="form-control">
                                            <option value="Mr.">Mr.</option>
                                            <option vaule="MRs.">Mrs.</option>
                                            <option value="Miss.">Miss.</option>
                                            <option value="Rev.">Rev.</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input id="first_name" name="first_name" type="text" class="form-control"
                                               required="required"
                                               data-error="Firstname is required."/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mid. Name</label>
                                    <div class="col-sm-9">
                                        <input id="middle_name" name="middle_name" type="text" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Last Name</label>
                                    <div class="col-sm-9">
                                        <input id="last_name" name="last_name" type="text" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gender</label>
                                    <div class="col-sm-9">
                                        <select id="gender" name="gender" class="form-control">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input id="dob" name="dob" type="date" class="form-control"
                                               placeholder="dd/mm/yyyy" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-description">
                            Contact Details
                        </p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mob.</label>
                                    <div class="col-sm-9">
                                        <input id="mobile" name="mobile" type="text" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Land No.</label>
                                    <div class="col-sm-9">
                                        <input id="land_phone" name="land_phone" type="text" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input id="email" name="email" type="text" class="form-control" pattern=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input id="address" name="address" type="text" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">District</label>
                                    <div class="col-sm-9">
                                        <input id="district" name="district" type="text" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-description">
                            Professional Details
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Work Place</label>
                                    <div class="col-sm-9">
                                        <input id="work_place" name="work_place" type="text" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Designation</label>
                                    <div class="col-sm-9">
                                        <input id="designation" name="designation" type="text" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Application</label>
                                    <input type="file" name="img[]" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled
                                               placeholder="Upload Document">
                                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <tr>
                            <input type="button" class="btn btn-gradient-primary mr-2" onclick="validate()"
                                   value="Submit"/>
                            <button class="btn btn-light">Cancel</button>
                        </tr>
                    </form>

                </div>
            </div>
        </div>


    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->

    <!-- partial -->
</div>
<!-- main-panel ends -->

<!-- page-body-wrapper ends -->

<!-- container-scroller -->

<!-- plugins:js -->
<script src="<?php echo URL ?>public/vendors/js/vendor.bundle.base.js"></script>
<script src="<?php echo URL ?>public/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?php echo URL ?>public/js/off-canvas.js"></script>
<script src="<?php echo URL ?>public/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?php echo URL ?>public/js/dashboard.js"></script>
<!-- End custom js for this page-->
<script src="<?php echo URL ?>public/js/sweetAlert.js"></script>
<script src="<?php echo URL ?>public/js/bootbox.min.js"></script>
<script type="text/javascript">
    function validate() {
        console.log("0");
        var firstName = (document.getElementById('first_name').value);
        var dob = document.getElementById("dob").value;
        var email = document.getElementById("email").value;
        var mobile = document.getElementById("mobile").value;
        var land = document.getElementById("land_phone").value;
        console.log(firstName);
        console.log(dob);
        console.log(email);
        console.log(mobile);
        console.log(land);
        if (firstName == ''.trim()) {
            console.log("1");
            alert("First name is require");
            location.href = '#';
            return false;

        }
        else if (dob == '') {
            console.log("2");
            alert("Date of Birth is required");
            location.href = '#';
            return false;

        }


        else if (!validateEmail(email)) {
            alert("Please enter a valid email");
            location.href = '#';
            return false;
        }


        else if (!validatePhone(mobile)) {
            alert("Please enter a valid mobile number");
            location.href = '#';
            return false;
        }


        else if (!validatePhone(land)) {
            alert("Please enter a valid land phone number");
            location.href = '#';
            return false;

        } else {
            $("#student_reg").submit();
            console.log("here");
            return true;

        }
    }
    function validateEmail(email) {
        if (email == ''.trim()) {
            return true;
        } else {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

    }
    function validatePhone(number) {
        if (number == ''.trim()) {
            return true
        }
        else {
            var re = /^([0-9]{10})$/;
            return re.test(number);
        }

    }


</script>
</body>

</html>