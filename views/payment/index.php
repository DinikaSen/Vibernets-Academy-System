<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 16-Sep-18
 * Time: 8:10 PM
 */
?>

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
                    <h4 class="card-title">Student Payments</h4>
                    <p class="card-description">
                        Enter student ID and course code to view payment details
                    </p>
                    <form class="form-sample"  method="post" id="course_reg"
                          action="<?php echo URL; ?>payment/getPaymentDetails">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Student ID</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input name="studentID" type="text" class="form-control" placeholder="Student ID"
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
                                                <input name="courseID" type="text" class="form-control" placeholder="Course Code"
                                                       aria-label="Course Code" aria-describedby="basic-addon1" required="required">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <tr>
                            <button type="submit" class="btn btn-gradient-primary mr-2">View Payment Details</button>
                        </tr>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

