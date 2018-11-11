<?php
/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 11/11/2018
 * Time: 9:57 AM
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 30-Sep-18
 * Time: 9:59 PM
 */

?>

<div class="main-panel" xmlns="http://www.w3.org/1999/html">
    <div class="content-wrapper">
        <div class="page-header">

        </div>
        <br class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Attendance of <?php echo $this->studentDetails[0]['first_name']." ".$this->studentDetails[0]['last_name']
                    ?> for Course <?php $this->studentDetails[0]['course_ID']?></h4>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th style="font-style: italic">
                            Date
                        </th>
                        <th style="font-style: italic">
                            Attendance
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($this->markAttendance as $row){
                        echo '<tr>';
                        echo '<td>'.$row['class_date'].'</td>';
                        if($row['attendance'] == 0) {
                            echo '<td><label class="badge badge-warning" style="font-size: inherit">'.'NO'.'</label></td>';
                        }
                        else if($row['attendance'] == 1){
                            echo '<td><label class="badge badge-success" style="font-size: inherit">'.'YES'.'</label></td>';
                        }
                        echo '</tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

        </br>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Mark Attendance</h4>
                <form class="form-sample"  method="post" id="income"
                      action="<?php echo URL; ?>attendance/addToSheet">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Class  Date</label>
                                <div class="col-sm-9">
                                    <input id="date" name="date" type="date" class="form-control"
                                           placeholder="class date" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Attendance</label>
                                <div class="col-sm-9">
                                    <input type="radio" name="attendance" value="yes"> YES<br>
                                    <input type="radio" name="attendance" value="no"> NO<br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="course_ID" name="course_ID" value= <?php echo '"'.($this->studentDetails[0]['course_ID']).'"' ?> />
                    <input type="hidden" id="std_ID" name="std_ID" value= <?php echo '"'.($this->studentDetails[0]['std_ID']).'"' ?> />
                    <input type="hidden" id="batch_No" name="batch_No" value= <?php echo '"'.($this->studentDetails[0]['batch_No']).'"' ?> />
                    <tr>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Add to Attendance sheet</button>
                        <button class="btn btn-light">Cancel</button>
                    </tr>
                </form>
            </div>
        </div>
    </div>

</div>
</div>
</div>


