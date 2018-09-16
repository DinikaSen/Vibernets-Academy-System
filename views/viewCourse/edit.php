<?php
/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/16/2018
 * Time: 9:36 AM
 */ ?>


<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin" style="padding-top: 50px">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Course Details</h4>
                    <p class="card-description">
                        Update Course Details- Vibernets Academy
                    </p>
                    <form class="form-sample"  method="post" id="course_reg"
                          action="<?php echo URL; ?>viewCourse/updateCourse">

                        <?php
                        foreach($this->courseDetail as $row){
                        }
                        ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Course Code</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input name="course_code" type="text" class="form-control" placeholder="Course Code"
                                                     value="<?php echo $row['course_ID']; ?>"  aria-label="Course Code" aria-describedby="basic-addon1" required="required" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Course Name</label>
                                    <div class="col-sm-9">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input name="course_name" type="text" class="form-control" placeholder="Course Name"
                                                   value="<?php echo $row['course_name']; ?>"   aria-label="Course Name" aria-describedby="basic-addon1" required="required">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Course Fee</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">LKR</span>
                                                </div>
                                                <input name="course_fee" type="text" class="form-control"
                                                       value="<?php echo $row['coursefee']; ?>" aria-label="Amount (to the nearest LKR)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Course Deadline</label>
                                    <div class="col-sm-9">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input name="course_deadline" type="date" class="form-control" placeholder="Course Name"
                                                       value="<?php echo $row['deadline']; ?>" aria-label="Course Name" aria-describedby="basic-addon1" required="required">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <tr>
                            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </tr>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
