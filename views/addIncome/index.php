<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 10-Nov-18
 * Time: 9:37 PM
 */
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin" style="padding-top: 50px">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Incomes and Expenses</h4>
                    <p class="card-description">
                        Add income and expense details along with the date of the transaction
                    </p>
                    <form class="form-sample"  method="post" id="income"
                          action="<?php echo URL; ?>addIncome/addToDB">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Transaction type </label>
                                    <div class="col-sm-9">
                                        <select id="transaction" name="transaction" class="form-control">
                                            <option value="Income">Income</option>
                                            <option vaule="Expense">Expense</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Date of the transaction</label>
                                    <div class="col-sm-9">
                                        <input id="transDate" name="transDate" type="date" class="form-control"
                                               placeholder="dd/mm/yyyy" required/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Description</label>
                                    <div class="col-md-10">
                                        <input id="transDate" name="description" type=text class="form-control" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Amount</label>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">LKR</span>
                                                </div>
                                                <input name="amount" type="text" class="form-control"
                                                       aria-label="Amount (to the nearest LKR)" required/>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <tr>
                            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </tr>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

