<?php
/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/22/2018
 * Time: 11:02 AM
 */
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
            </h3>

        </div>
        <div class="col-lg-12 grid-margin stretch-card" style="padding-top: 50px">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Batches @ Vibernets Academy</h4>
                    <p class="card-description">
                    </p>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                Course Code
                            </th>
                            <th>
                                Batch No.
                            </th>
                            <th>
                                No. Students
                            </th>
                            <th>
                                Strat Date
                            </th>
                            <th>
                               End Date
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($this->batches as $row){
                            echo '<tr  class="clickable-row" data-href="editBatch/'.$row['course_ID'].','.$row['batch_No'].'"">';
                            echo '<td class="py-1">'.$row['course_ID'].'</td>';
                            echo '<td>'.$row['batch_No'].'</td>';
                            echo '<td>'.$row['student_count'].'</td>';
                            echo '<td>'.$row['start_date'].'</td>';
                            echo '<td>'.$row['end_date'].'</td>';

                            if($row['end_date']!='0000-00-00') {
                                if ($row['end_date'] < date("Y-m-d")) {
                                    echo '<td><label class="badge badge-success">Completed</label></td>';
                                } else {
                                    echo '<td><label class="badge badge-warning">In progress</label></td>';
                                }
                            }
                            else{
                                echo '<td></td>';
                            }

                            echo '</tr>';
                        }
                        ?>
                        </tbody>
                    </table>
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
