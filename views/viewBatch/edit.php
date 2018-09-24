<?php
/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/22/2018
 * Time: 7:58 AM
 */
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin" style="padding-top: 50px">
            <div class="card" id="batch_detail">
                <div class="card-body">
                    <h4 class="card-title">Batch Details</h4>
                    <form class="form-sample"  method="post" id="batch_reg"
                          action="<?php echo URL; ?>viewBatch/updateBatch">
                        <?php
                        foreach($this-> batchDetails as $row){
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
                                                       value="<?php echo $row['course_ID']; ?>" aria-label="Course Code" aria-describedby="basic-addon1" readonly/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Batch No.</label>
                                    <div class="col-sm-9">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input name="batch_No" type="text" class="form-control" placeholder="Batch Number"
                                                       value="<?php echo $row['batch_No']; ?>"  aria-label="Batch Number" aria-describedby="basic-addon1" readonly/>
                                                <input name="old_batch_No" type="hidden" class="form-control" placeholder="Old Batch Number"
                                                       value="<?php echo $row['batch_No']; ?>"  aria-label="Old Batch Number" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Start Date</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input name="start_date" type="date" class="form-control" placeholder="Start Date"
                                                       value="<?php echo $row['start_date']; ?>"  aria-label="Start Date" aria-describedby="basic-addon1" required="required">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">End Date</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input name="end_date" type="date" class="form-control" placeholder="End Date"
                                                       value="<?php echo $row['end_date']; ?>"     aria-label="End Date" aria-describedby="basic-addon1">

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

<script>
    function createBatch(){
        $("#batch_reg").submit()
    }

</script>