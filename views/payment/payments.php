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
                    <h4 class="card-title">Payment Details of <?php echo $this->studentDetails[0]['first_name']." ".$this->studentDetails[0]['last_name']?> for course : <?php echo $this->courseDetails[0]['course_ID']." - ".$this->courseDetails[0]['course_name']?></h4>
                    <form class="form-sample"  method="post" id="paymentData" action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Batch</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input name="batch" type="text" class="form-control" value=<?php echo '"'.$this->takeDetails[0]['batch_No'].'"' ?> readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Total Course Fee</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">LKR</span>
                                                </div>
                                                <input name="batch" type="text" class="form-control" value=<?php echo '"'.$this->courseDetails[0]['coursefee'].'"' ?> readonly>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Discount given</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <?php $fee_taken = $this->takeDetails[0]['fee'];
                                                $fee_actual = $this->courseDetails[0]['coursefee'];
                                                $discount = (($fee_actual-$fee_taken)*100)/$fee_actual
                                                ?>
                                                <input name="batch" type="text" class="form-control" value=<?php echo '"'.$discount.'%"' ?> readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Course Fee after discount</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">LKR</span>
                                                </div>
                                                <input name="course_fee" type="text" class="form-control" value=<?php echo '"'.$this->takeDetails[0]['fee'].'"' ?> readonly>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Registration fees</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input name="batch" type="text" class="form-control" value=<?php echo '"'.$this->studentDetails[0]['registrationPaid'].'"' ?> readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Note on registration fees payment</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input name="batch" type="text" class="form-control" value=<?php echo '"'.$this->studentDetails[0]['paymentNote'].'"' ?> readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th style="font-style: italic">
                                Date of the payment
                            </th>
                            <th style="font-style: italic">
                                Amount paid
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $total_paid = 0;
                        foreach ($this->paymentDetails as $row){
                            $total_paid = $total_paid + $row['amount'];
                            echo '<tr>';
                            echo '<td>'.$row['date_paid'].'</td>';
                            echo '<td>'.'LKR. '.$row['amount'].'.00'.'</td>';
                            echo '</tr>';
                        }
                        echo '<tr>';
                            echo '<td style="color: #6a008a">'."Total amount paid :".'</td>';
                            echo '<td><label class="badge badge-success" style="font-size: inherit">'.'LKR. '.$total_paid.'.00'.'</label></td>';
                        echo '</tr>';
                        echo '<tr>';
                        $remaining_amount = ($this->takeDetails[0]['fee'])-$total_paid;
                        echo '<td style="color: #6a008a">'."Remaining amount :".'</td>';
                        echo '<td><label class="badge badge-warning" style="font-size: inherit">'.'LKR. '.$remaining_amount.'.00'.'</label></td>';
                        echo '</tr>';
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">New Payment</h4>
                    <form class="form-sample" id="student_reg" action="<?php echo URL; ?>payment/makePayment"
                          method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Enter the amount of payment</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">LKR</span>
                                                </div>
                                                <input name="amount_paid" type="text" class="form-control"
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
                        <input type="hidden" id="courseID" name="courseID" value= <?php echo '"'.($this->courseDetails[0]['course_ID']).'"' ?> />
                        <input type="hidden" id="studentID" name="studentID" value= <?php echo '"'.($this->studentDetails[0]['std_ID']).'"' ?> />
                        <input type="hidden" id="batch_No" name="batch_No" value= <?php echo '"'.($this->takeDetails[0]['batch_No']).'"' ?> />
                        <div>
                            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                        </div>
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
