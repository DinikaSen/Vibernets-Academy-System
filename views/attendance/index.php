


<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin" style="padding-top: 50px">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Student Attendance</h4>
                    <p class="card-description">
                        Select Course and Batch to Mark student attendance
                    </p>
                    <form class="form-sample"  method="post" id="course_reg"
                          action="">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Course-&-Batch</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <select name="course_batch" class="form-control">

                                                    <?php
                                                    foreach ($this->course_batch as $row){
                                                        if (($row['deadline']== null or !($row['deadline'] < date("Y-m-d"))) and !($row['end_date']<  date("Y-m-d"))){
                                                            echo '<option value='.$row['course_ID'].$row['batch_No'].'>'.$row['course_ID']."---- Batch:".$row['batch_No'].'</option>';
                                                        }
                                                    }?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <tr>
                            <button type="submit" class="btn btn-gradient-primary mr-2">Towards Attendance Sheet</button>
                        </tr>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




