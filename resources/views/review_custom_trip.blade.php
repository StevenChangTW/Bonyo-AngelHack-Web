<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Review User's Requirement Of Custom Trip</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script>
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
        // Get a reference to the database service
        var database = firebase.database();

        function readUserCustomTripData(userId) {
            var userId = userId;
            return firebase.database().ref('/custom_trip/' + userId).once('value').then(function(snapshot) {
                var user = snapshot.val();
                var i = 0;
                $.each(user.content, function (index, value) {
                    var obj = $('.list-group #'+i);
                    obj.append('<sapn style="color:black;">&nbsp;&nbsp;' + value + '</span>');
                    i++;
                });
            });
        }

        readUserCustomTripData({{ $userId }});
    </script>


</head>
<body>
    <div id="trip">
        <ul id="trip_ul" class="list-group">
            <li id="3" style="display: none;" class="list-group-item">Which Bonyo's schedule would the user like to book?</li>
            <li id="10" class="list-group-item list-group-item-info">The user's name</li>
            <li id="7" class="list-group-item list-group-item-success">Gender</li>
            <li id="4" class="list-group-item list-group-item-info">The city / cities the user are visiting</li>
            <li id="6" class="list-group-item list-group-item-success">First day of the trip</li>
            <li id="9" class="list-group-item list-group-item-info">Last day of the trip</li>
            <li id="13" class="list-group-item list-group-item-success">Price plan</li>
            <li id="15" class="list-group-item list-group-item-info">The starting point of each day</li>
            <li id="12" class="list-group-item list-group-item-success">How many people will be attending this trip?</li>
            <li id="1" class="list-group-item list-group-item-info">How many child under the age of 3?</li>
            <li id="0" class="list-group-item list-group-item-success">How many child under the age of 12?</li>
            <li id="2" class="list-group-item list-group-item-info">How many people above the age of 65?</li>
            <li id="18" class="list-group-item list-group-item-success">Things the user would like to experience during this trip</li>
            <li id="17" class="list-group-item list-group-item-info">Your preferred ways to explore the city</li>
            <li id="8" class="list-group-item list-group-item-success">Have the user ever been to Japan?</li>
            <li id="5" class="list-group-item list-group-item-info">Dietary restriction</li>
            <li id="11" class="list-group-item list-group-item-success">Needs and preferences</li>
            <li id="14" class="list-group-item list-group-item-info">Anything the user would like to say to the team</li>
            <li id="16" style="display: none;" class="list-group-item">Status</li>
        </ul>
    </div>
</body>
</html>