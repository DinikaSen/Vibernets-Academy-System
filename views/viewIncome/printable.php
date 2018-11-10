<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 11-Nov-18
 * Time: 1:07 AM
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        @page { size: 9in 7in } /* output size */
        body.receipt .sheet { width: 9in; height: 7in } /* sheet size */
        @media print { body.receipt { width: 9in } } /* fix for Chrome */
    </style>
    <script type='text/javascript' src='<?php echo URL?>public/js/jquery-1.3.2.min.js'></script>
    <script type='text/javascript' src='<?php echo URL?>public/js/example.js'></script>

</head>
<div class="main-panel" xmlns="http://www.w3.org/1999/html">
    <div class="content-wrapper">
        <br class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Transaction Details for the period of <?php echo " ".$this->period['from']." "?> to <?php echo " ".$this->period['to']." "?></h4>

                <table class="table table-striped">
                    <tbody
                    <tr>
                        <th style="font-style: italic">
                            Date of the transaction
                        </th>
                        <th style="font-style: italic">
                            Description
                        </th>
                        <th style="font-style: italic">
                            Income
                        </th>
                        <th style="font-style: italic">
                            Expense
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $this->period['from']." : ".$this->period['to'] ?>
                        </td>
                        <td >
                            Course fees paid by students
                        </td>
                        <td >
                            <?php echo 'LKR.'.$this->payment[0][0].'.00' ?>
                        </td>
                        <td ></td>
                    </tr>
                    <?php
                    $totalIncome = $this->payment[0][0];
                    $totalExpenses = 0;
                    foreach ($this->transactions as $row){
                        echo '<tr>';
                        echo '<td>'.$row['transaction_date'].'</td>';
                        echo '<td>'.$row['description'].'</td>';
                        if($row['transaction_type']=='Income'){$totalIncome=$totalIncome+$row['amount']; echo '<td>'.'LKR. '.$row['amount'].'.00'.'</td>';}
                        else{echo '<td> </td>';}
                        if($row['transaction_type']=='Expense'){$totalExpenses=$totalExpenses+$row['amount'];echo '<td>'.'LKR. '.$row['amount'].'.00'.'</td>';}
                        else{echo '<td> </td>';}
                        echo '</tr>';
                    }
                    $profit=$totalIncome-$totalExpenses;
                    ?>
                    <tr>
                        <th style="font-style: italic">
                            Total Income
                        </th>
                        <th style="font-style: italic"></th>
                        <th style="font-style: italic"><label class="badge badge-success" style="font-size: inherit">
                                <?php echo 'LKR.'.$totalIncome.'.00' ?>
                        </th>
                        <th style="font-style: italic"></th>
                    </tr>
                    <tr>
                        <th style="font-style: italic">
                            Total Expenses
                        </th>
                        <th style="font-style: italic"></th>
                        <th style="font-style: italic">
                        </th>
                        <th style="font-style: italic" ><label class="badge badge-warning" style="font-size: inherit">
                            <?php echo 'LKR.'.$totalExpenses.'.00' ?></th>
                    </tr>
                    <tr>
                        <th style="font-style: italic">
                            Profit for the period
                        </th>
                        <th style="font-style: italic"></th>
                        <th style="font-style: italic">
                            <?php if ($profit>0){
                                echo 'LKR.'.$profit.'.00';
                            }?>
                        </th>
                        <th style="font-style: italic">
                            <?php if ($profit<0){
                                echo 'LKR.'.$profit.'.00';
                            }?></th>
                    </tr>
                    </tbody>

                </table>

            </div>
        </div>

    </div>

</div>




