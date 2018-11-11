<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
            </h3>

        </div>
        <div class="col-lg-12 grid-margin stretch-card" style="padding-top: 50px">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Student Attendance </h4>
                    <p class="card-description">
                    </p>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                Student ID
                            </th>
                            <th>
                                Student Name
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($this->students as $row) {
                            echo '<tr  class="clickable-row" data-href="markAttendance/' . $row['std_ID'] . ',' .$row['course_ID'].','. $row['batch_No'].'"">';
                            echo '<td class="py-1">' . $row['std_ID'] . '</td>';
                            echo '<td>' . $row['first_name'] . " " . $row['last_name'] . '</td>';
                            echo '<td>'."  ".'</td>';
                        }
                        ?>
                    </table>
                    </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    jQuery(document).ready(function ($) {
        $(".clickable-row").click(function () {
            window.location = $(this).data("href");
        });
    });
</script>
