<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pay Information</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                var username = snapshot.val();
                console.log(username);
                var i = 0;
                $.each(username.content, function (index, value) {
                    var obj = $('.list-group #'+i);
                    obj.append('<sapn style="color:red;">&nbsp;&nbsp;' + value + '</span>');
//                    obj.text(obj.text() + '  Answer: ' + value);
                    i++;
                    console.log(obj.text());
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
            <li id="10" class="list-group-item">The user's name</li>
            <li id="7" class="list-group-item">Gender</li>
            <li id="4" class="list-group-item">The city / cities the user are visiting</li>
            <li id="6" class="list-group-item">First day of the trip</li>
            <li id="9" class="list-group-item">Last day of the trip</li>
            <li id="13" class="list-group-item">Price plan</li>
            <li id="15" class="list-group-item">The starting point of each day</li>
            <li id="12" class="list-group-item">How many people will be attending this trip?</li>
            <li id="1" class="list-group-item">How many child under the age of 3?</li>
            <li id="0" class="list-group-item">How many child under the age of 12?</li>
            <li id="2" class="list-group-item">How many people above the age of 65?</li>
            <li id="18" class="list-group-item">Things the user would like to experience during this trip</li>
            <li id="17" class="list-group-item">Your preferred ways to explore the city</li>
            <li id="8" class="list-group-item">Have the user ever been to Japan?</li>
            <li id="5" class="list-group-item">Dietary restriction</li>
            <li id="11" class="list-group-item">Needs and preferences</li>
            <li id="14" class="list-group-item">Anything the user would like to say to the team</li>
            <li id="16" style="display: none;" class="list-group-item">Status</li>
        </ul>
    </div>
</body>
</html>