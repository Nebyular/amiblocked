<?php
/**
 * Created by PhpStorm.
 * User: jfq564
 * Date: 21/12/2016
 * Time: 11:04 AM
 */
?>

<html>
<head>
<title>Test</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

    <!-- Local Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="js/bootstrap.js" rel="script">

    <!-- Page CSS -->
    <link href="css/amiblocked.css" rel="stylesheet">

    <script>
        $(document).ready(function(){
            $('button').click(function(){
                $('.alert').show()
            })
        });
/*
        $(document).ready(function(){
            $('panel').click(function(){
                $('.panel').show()
            })
        });
*/

    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="row" style="vertical-align: middle; horiz-align: center;">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h1>test</h1>
        <form>
            <div class="alert alert-danger" role="alert" <!--style="display: none;"--><span glyphicon glyphicon-exclamation-sign alert-dismissable aria-hidden="true"><span class="sr-only">Error:</span>Your DNS/ISP is blocking sites</span></div>
            <div class="alert alert-info" role="alert" <!--style="display: none;"--><span glyphicon glyphicon-ok-sign alert-dismissable aria-hidden="true"><span class="sr-only">Error:</span>Your DNS/ISP is not blocking sites</span></div>
            <div class="form-group">
                <select class="form-control">
                    <option>Telstra</option>
                    <option>TPG</option>
                    <option>Optus</option>
                    <option>iiNet</option>
                    <option>iPrimus</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="DNS IP">
            </div>
            <button type="submit" class="btn btn-default btn-lg btn-block">Check</button>
        </form>
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">List of sites</div>
            <div class="panel-body" style="color: black">
                <p>See below for the list of sites currently blocked by your DNS or ISP</p>
            </div>

            <!-- Table -->
            <table class="table" style="color: black">
                <tr>
                    <th>IP</th>
                    <th>Domain</th>
                </tr>
                <tr>
                    <td>101.210.119.10</td>
                    <td>somedomain.com</td>
                </tr>
            </table>
        </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>

</body>
</html>
