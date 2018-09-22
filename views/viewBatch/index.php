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
                            echo '<tr>';
                            echo '<td class="py-1">'.$row['course_ID'].'</td>';
                            echo '<td>'.$row['batch_No'].'</td>';
                            echo '<td>'.$row['student_count'].'</td>';
                            echo '<td>'.$row['start_date'].'</td>';
                            echo '<td>'.$row['end_date'].'</td>';

                            if($row['end_date']!=null) {
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
