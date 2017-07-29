<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Design the Trip</title>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <style>
        .navbar-fixed-top {
            position: relative;
        }
        .input-group .form-control {
            z-index: 0;
        }
    </style>
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyDkk7qvDekraYn_lfEMlXqLQwdjvlB2uQs",
            authDomain: "bonyoangelhack-e4639.firebaseapp.com",
            databaseURL: "https://bonyoangelhack-e4639.firebaseio.com",
            projectId: "bonyoangelhack-e4639",
            storageBucket: "bonyoangelhack-e4639.appspot.com",
            messagingSenderId: "235098358826"
        };
        firebase.initializeApp(config);
    </script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker({
                dateFormat: 'yy/mm/dd',
            });
            $('#timepicker1').timepicker({
                timeFormat: 'h:mm p',
                interval: 30,
                minTime: '12:00am',
                maxTime: '11:59pm',
                defaultTime: '08',
                startTime: '12:00am',
                dynamic: false,
                dropdown: true,
                scrollbar: true
            });
            $('#timepicker2').timepicker({
                timeFormat: 'h:mm p',
                interval: 30,
                minTime: '12:00am',
                maxTime: '11:59pm',
                defaultTime: '09',
                startTime: '12:00am',
                dynamic: false,
                dropdown: true,
                scrollbar: true
            });
        } );
    </script>
    <div>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div id="t" class="container">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="collapsed navbar-toggle" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-6" aria-expanded="false"><span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">Days</a></div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#"><span>1</span></a></li>
                            <li><a href="#"><span>2</span></a></li>
                            <li id="add_days"><a href="#"><span class="glyphicon glyphicon-plus"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Date</span>
            <input id="datepicker" class="form-control" aria-describedby="basic-addon1">
        </div>
    </div>

    <hr>

    <div>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Time</span>
            <input id="timepicker1" placeholder="start at" class="form-control" aria-describedby="basic-addon1">
            <span class="input-group-addon" id="basic-addon1">To</span>
            <input id="timepicker2" placeholder="end at" class="form-control" aria-describedby="basic-addon1">
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Active</span>
            <input id="active" placeholder="Active Name" class="form-control" aria-describedby="basic-addon1">
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Location</span>
            <input id="location" placeholder="Location" class="form-control" aria-describedby="basic-addon1">
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Content</span>
            <input id="content" placeholder="Content" class="form-control" aria-describedby="basic-addon1">
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Spending</span>
            <input id="spending" placeholder="Items" class="form-control" aria-describedby="basic-addon1">
            <span class="input-group-addon">$</span>
            <input id="dollars" placeholder="Value" class="form-control" aria-describedby="basic-addon1">
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Estimate</span>
            <span class="input-group-addon">$</span>
            <input id="estimate" placeholder="Cost" class="form-control" aria-describedby="basic-addon1">
        </div>
        <br>
        <div>
            <button type="button" class="btn btn-secondary" style="float: right; margin: 0 10px; width: 100px;">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
            </button>
        </div>
    </div>
</body>
</html>