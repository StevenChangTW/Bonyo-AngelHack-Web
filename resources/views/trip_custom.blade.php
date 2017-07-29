<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Custom Trip</title>

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
        var content = {
            bonyo : "Joy",
            name : "Teresa",
            gender : "Female",
            city : "Tokyo‎",
            first_day : "2017/10/26",
            last_day : "2017/10/30",
            price_plan : "4-6 Days $8/day",
            start_point : "Bus station",
            people_total : "5",
            age_3 : "1",
            age_12 : "1",
            age_65 : "1",
            want_to_do : "Drug store-shopping‎",
            transportation : "On foot, By subway and train",
            japan : "1 person has (independent travel).",
            dietary_restriction : "No",
            needs : "No",
            ps : "No",
            status : 0
        };
    </script>

    <script>
        // Get a reference to the database service
        var database = firebase.database();

        function writeUserCustomTripData(userId, content) {
            firebase.database().ref('custom_trip/' + userId).set({
                content: content
            });
        }

        writeUserCustomTripData(1, content);
    </script>
</head>
<body>

</body>
</html>