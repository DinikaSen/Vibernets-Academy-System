<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 30-Sep-18
 * Time: 9:59 PM
 */

?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
            </nav>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Payment Details of <?php echo "Dinika Senarath"?> for course : <?php echo "CCNA-215"?></h4>
                    <p class="card-description">
                    </p>
                    <table class="table table-striped">
                        <thead>
                        <!-- std_ID int,
                        course_ID varchar(30),
                        batch_No varchar(30),
                        amount float not null,
                        date_paid date not null*/ -->
                        <tr>
                            <th>
                                Date of the payment
                            </th>
                            <th>
                                Amount paid
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($this->paymentDetails as $row){
                            //echo '<tr  class="clickable-row" data-href="editCourse/'.$row['course_ID'].'"">';
                           // echo '<td class="py-1">'.$row['course_ID'].'</td>';
                            echo '<td>'.$row['date_paid'].'</td>';
                            echo '<td>'.'LKR. '.$row['amount'].'.00'.'</td>';
                            /*if($row['deadline']!=null) {
                                if ($row['deadline'] < date("Y-m-d")) {
                                    echo '<td><label class="badge badge-success">Completed</label></td>';
                                } else {
                                    echo '<td><label class="badge badge-warning">In progress</label></td>';
                                }
                            }
                            else{
                                echo '<td></td>';
                            }*/

                            echo '</tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-12 grid-margin">
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
</div>

<script>
    jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });
</script>
