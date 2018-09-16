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
                    <h4 class="card-title">Courses @ Vibernets Academy</h4>
                    <p class="card-description">
                    </p>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                               Course Code
                            </th>
                            <th>
                               Course Name
                            </th>
                            <th>
                                Course Fee
                            </th>
                            <th>
                                DeadLine
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($this->courses as $row){
                            echo '<tr  class="clickable-row" data-href="editCourse/'.$row['course_ID'].'"">';
                            echo '<td class="py-1">'.$row['course_ID'].'</td>';
                            echo '<td>'.$row['course_name'].'</td>';
                            echo '<td>'.'LKR. '.$row['coursefee'].'.00'.'</td>';
                            echo '<td>'.$row['deadline'].'</td>';
                            if($row['deadline']<date("Y-m-d")){
                                echo '<td><label class="badge badge-success">Completed</label></td>';
                            }else{
                                echo '<td><label class="badge badge-warning">In progress</label></td>';
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