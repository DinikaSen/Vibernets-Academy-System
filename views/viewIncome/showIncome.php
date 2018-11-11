<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 11-Nov-18
 * Time: 1:07 AM
 */
?>

<div class="main-panel" xmlns="http://www.w3.org/1999/html">
    <div class="content-wrapper">
        <div class="page-header">

        </div>
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
                    <tr>
                        <td>
                            <?php echo $this->period['from']." : ".$this->period['to'] ?>
                        </td>
                        <td >
                            Admission fees paid by students
                        </td>
                        <td >
                            <?php echo 'LKR.'.$this->admission[0][0].'.00' ?>
                        </td>
                        <td ></td>
                    </tr>
                    <?php
                    $totalIncome = $this->payment[0][0]+$this->admission[0][0];
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

        <form class="form-sample" id="student_reg" action="<?php echo URL; ?>viewIncome/printPage"
              method="post">
            <input type="hidden" id="fromDate" name="fromDate" value= <?php echo '"'.($this->period['from']).'"' ?> />
            <input type="hidden" id="toDate" name="toDate" value= <?php echo '"'.($this->period['to']).'"' ?> />
            <div>
                <button type="submit" class="btn btn-gradient-primary mr-2">Print</button>
            </div>
        </form>


    </div>

</div>




