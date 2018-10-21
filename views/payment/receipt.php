<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

    <title>Editable Invoice</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel='stylesheet' type='text/css' href='<?php echo URL?>public/css/receipt_style.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo URL?>public/css/print.css' media="print" />
    <script type='text/javascript' src='<?php echo URL?>public/js/jquery-1.3.2.min.js'></script>
    <script type='text/javascript' src='<?php echo URL?>public/js/example.js'></script>

</head>

<body>

<div id="page-wrap">

    <div id="header">RECEIPT</> </div>

    <div id="identity">

        <div id="address"><p style="font-size: x-large; color: #cc3700;">Vibernets Academy</p>
            <p style="font-size: large">No.457/6, Canal Road, Arangala, Malabe</br>
                Business Registration No: Pv101083</br>
                Phone: 0112171111, 0772101444</br>
                Email: info@vibernets.com</br>
                Web: www.vibernets.com | www.ccnalk.com</p></div>

        <div >
            <img id="image" src="<?php echo URL?>public/images/logo_large.png" alt="logo" />
        </div>

    </div>

    <div style="clear:both"></div>

    <div id="customer">
        <table id="meta">
            <tr>
                <td class="meta-head">Receipt No:</td>
                <td></td>
            </tr>
            <tr>
                <td class="meta-head">Date</td>
                <td><textarea id="date"></textarea></td>
            </tr>
        </table>
    </div>
<br/>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="col-md-3 control" for="">Received From :</label>
                <div class="col-md-9">
                    <input id="" name="name" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control" for="">For :</label>
                <div class="col-md-9">
                    <input id="" name="name" type="text" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="col-md-3 control" for="">Amount Received :</label>
                <div class="col-md-9">
                    <input id="" name="name" type="text" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="col-md-3 control" for="name">Cash :</label>
                <div class="col-md-3">
                    <input id="checkbox2" type="checkbox" checked="" class="form-control">
                </div>

                <label class="col-md-3 control" for="name">Cheque :</label>
                <div class="col-md-3">
                    <input id="checkbox2" type="checkbox" checked="" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="col-md-3 control" for="name">Cheque No :</label>
                <div class="col-md-9">
                    <input id="name" name="name" type="text" class="form-control">
                </div>
            </div>
        </div>
    </div>
<br/>
<div>
    <h5>Payments made by cheques are subject to realization</h5>
</div>
    <div class="row" style="margin-top:20px;">
        <div class="col-md-9">
            <label class="col-md-3 control" for="name"></label>
        </div>
        <div class="col-md-3">
            <input id="name" name="name" type="text" class="form-control">
        </div>
    </div>
    <div class="row"">
        <div class="col-md-9" style="display: inherit">
            <label class="col-md-3 control" for="name">Thank You</label>
        </div>
        <div class="col-md-3">
            <label class="col-md-2 control" for="name">    Signature</label>
        </div>
    </div>

</div>

</body>

</html>