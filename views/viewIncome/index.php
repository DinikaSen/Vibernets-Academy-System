<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 11-Nov-18
 * Time: 12:38 AM
 */
?>


<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin" style="padding-top: 50px">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">View income & expenses</h4>
                    <p class="card-description">
                        Add the time period in which the transactions should be viewed
                    </p>
                    <form class="form-sample"  method="post" id="income"
                          action="<?php echo URL; ?>viewIncome/getTransactions">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">From</label>
                                    <div class="col-sm-9">
                                        <input id="fromDate" name="fromDate" type="date" class="form-control"
                                               placeholder="including this day" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">To</label>
                                    <div class="col-sm-9">
                                        <input id="toDate" name="toDate" type="date" class="form-control"
                                               placeholder="including this day" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <tr>
                            <button type="submit" class="btn btn-gradient-primary mr-2">View transactions</button>
                            <button class="btn btn-light">Cancel</button>
                        </tr>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


