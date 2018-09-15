<?php
/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/9/2018
 * Time: 5:58 PM
 */


?>


<div class="content-wrapper">
    <div class="row">
<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Online Registration</h4>
            <form class="form-sample" id="student_reg" action="<?php echo URL;?>addStudent/addNewStudent" method="post">
                <p class="card-description">
                    Personal information
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Student ID</label>
                            <div class="col-sm-9">
                                <input name="student_id" type="text" class="form-control" readonly required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NIC</label>
                            <div class="col-sm-9">
                                <input name="NIC" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <select name="title"class="form-control">
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
                                <input name="first_name" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Middle Name</label>
                            <div class="col-sm-9">
                                <input name="middle_name" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                                <input name="last_name" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gender</label>
                            <div class="col-sm-9">
                                <select name="gender" class="form-control">
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
                                <input name="dob" class="form-control" placeholder="dd/mm/yyyy"/>
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
                            <label class="col-sm-3 col-form-label">Mobile</label>
                            <div class="col-sm-9">
                                <input name="mobile" type="text" class="form-control" pattern="[0-9]{10}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Land phone</label>
                            <div class="col-sm-9">
                                <input name="land_phone" type="text" class="form-control" pattern="[0-9]{10}"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input name="email" type="text" class="form-control" pattern=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <input name="address" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">District</label>
                            <div class="col-sm-9">
                                <input name="district" type="text" class="form-control" />
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
                                <input name="work_place" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Designation</label>
                            <div class="col-sm-9">
                                <input name="designation" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>

</body>
<!-- plugins:js -->
<script src="<?php echo URL?>publicvendors/js/vendor.bundle.base.js"></script>
<script src="<?php echo URL?>publicvendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="<?php echo URL?>publicjs/off-canvas.js"></script>
<script src="<?php echo URL?>publicjs/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?php echo URL?>publicjs/file-upload.js"></script>
<!-- End custom js for this page-->