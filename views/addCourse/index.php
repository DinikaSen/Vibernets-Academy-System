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
                    <h4 class="card-title">Add New Course</h4>
                    <p class="card-description">
                        Add new course to Vibernets Academy
                    </p>
                    <form class="form-sample"  method="post" id="course_reg"
                          action="<?php echo URL; ?>addCourse/addNewCourse">

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
                                                       aria-label="Course Code" aria-describedby="basic-addon1" required="required">
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
                                                       aria-label="Course Name" aria-describedby="basic-addon1" required="required">
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
                                                       aria-label="Amount (to the nearest LKR)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
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
