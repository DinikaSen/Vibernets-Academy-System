<?php
/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/22/2018
 * Time: 10:54 AM
 */
?>
<div class="main-panel">
    <div class="content-wrapper">
        <?php if(!$this->isChecked){
            ?>
        <div class="col-12 grid-margin" style="padding-top: 50px">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Enrollment</h4>
                        <form class="form-sample"  method="post" id="enroll_start" name="enroll_start"
                              action="<?php echo URL?>enroll/getStudentAndCourseDetail">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Student ID</label>
                                        <div class="col-sm-9">

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input name="student_ID" type="text" class="form-control" placeholder="Student ID"
                                                           aria-label="Student ID" aria-describedby="basic-addon1" required="required">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Course Code</label>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <select name="course_ID" class="form-control">
                                                        <?php
                                                        foreach ($this->courseCodes as $row){
                                                            if ($row['deadline']== null or !($row['deadline'] < date("Y-m-d"))) {
                                                                echo '<option value='.$row['course_ID'].'>'.$row['course_ID'].'</option>';
                                                            }
                                                        }?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-gradient-primary mb-2">Continue</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }?>


        <?php
        if ($this->isChecked) { ?>

            <div class="col-12 grid-margin" style="padding-top: 50px">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Enrollment</h4>
                        <form class="form-sample" id="enroll_finish" action="<?php echo URL?>enroll/getEnrolled"
                              method="post" >
                            <?php
                            foreach($this->Studentdetails as $rowStudent){
                            }
                            foreach($this->Coursedetails as $rowCourse){
                            }
                            ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Student ID</label>
                                        <div class="col-sm-9">
                                            <input name="student_id" type="text" class="form-control" value="<?php echo $rowStudent['std_ID']; ?>" readonly required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Course ID</label>
                                        <div class="col-sm-9">
                                            <input name="course_id" type="text" class="form-control" value="<?php echo $rowCourse['course_ID']; ?>" readonly required/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Student Name</label>
                                        <div class="col-sm-9">
                                            <input name="student_name" type="text" class="form-control" value="<?php echo $rowStudent['first_name'].' '.$rowStudent['mid_name'].' '.$rowStudent['last_name']; ?>" readonly required/>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Course Name</label>
                                        <div class="col-sm-9">
                                            <input name="student_name" type="text" class="form-control" value="<?php echo $rowCourse['course_name']; ?>" readonly required/>                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Batch Number</label>
                                        <div class="col-sm-9">
                                        <select name="batch_No" class="form-control">
                                            <?php
                                            foreach($this->BatchNumbers as $rowBatch){
                                                if ($rowBatch['end_date']=='0000-00-00' or !($rowBatch['end_date'] < date("Y-m-d"))) {
                                                    echo '<option value='.$rowBatch['batch_No'].'>'.$rowBatch['batch_No'].'</option>';
                                                }
                                            }?>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Total Course Fee</label>
                                        <div class="col-sm-9">
                                            <input name="course_fee" type="text" class="form-control" value="<?php echo $rowCourse['coursefee']; ?>" readonly required/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Discount Allowed</label>
                                        <div class="col-sm-9">
                                            <input name="discount" type="text" class="form-control" />
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

            <?php
        }?>
    </div>
</div>