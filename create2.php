<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="./css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="./css/create1.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>Create campaign</title>
</head>

<body>
    <div class="box">
        <div class="nav-left">
            <a href="./home.php"><img style="width: 135px" src="./pic/icon.png"></a>
        </div>
        <div class="nav-right">
            <span id="text"><a href="./view.php">Search campaign</a></span>
            <span id="text"><a href="./create.php">Create campaign</a></span>
            <span id="text"><a href="./profile.php">My profile</a></span>
            <a href="./signout.php"><button class="btn1">Sign out</button></a>
        </div>
    </div>
    <div class="contain">
        <div class="form-box">
            <form action="#" id="create2-form" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <span class="text">Campaign name</span>
                    <input type="text" name="campaignname" class="form-control" autocomplete="off" placeholder="your campaign name" required>
                </div>
                <div class="form-group">
                    <span class="text">Start date</span>
                    <input onChange="datecheck()" id="startdate" type="date" name="startdate" class="form-control" required>
                </div>
                <div class="form-group">
                    <span class="text">End date</span>
                    <input onChange="datecheck()" id="enddate" type="date" name="enddate" class="form-control" required>
                </div>
                <p style="color:red" id="ermsg_date"></p>
                <script>
                    function datecheck() {
                        var std = new Date(document.getElementById('startdate').value);
                        var end = new Date(document.getElementById('enddate').value);
                        var today = new Date();
                        var update = new Date();
                        update.setDate(today.getDate() + 30);
                        if (((std - update) / (24 * 60 * 60 * 1000)) < -1) {
                            document.getElementById('ermsg_date').innerHTML = 'Start-Date should be at least 30 days from today (' + update.toDateString() + ')';
                        } else if (std > end) {
                            document.getElementById('ermsg_date').innerHTML = 'Start-Date > End-Date!! ( Should be after on ' + std.toDateString() + ' )';
                        } else {
                            document.getElementById('ermsg_date').innerHTML = '';
                        }
                    }
                </script>
                <div class="form-group">
                    <span class="text">Choose your location</span>
                    <div class="form-control" id="map"></div>
                    <input type="text" id="lat" name="latitude" class="form-control" placeholder="latitude" value="" required hidden>
                    <input type="text" id="long" name="latitude" class="form-control" placeholder="longtitude" value="" required hidden>
                </div>
                <p style="color:red" id="ermsg_map"></p>
                <script>
                    function checkmark(){
                        if(document.getElementById('lat').value=="")
                            document.getElementById('ermsg_map').innerHTML = "Please choose location.";
                    }
                </script>
                <div class="form-group">
                    <span class="text">Activity describe</span>
                    <input type="text" name="detail" class="form-control" placeholder="campaign detail" required>
                </div>
                <div class="form-group">
                    <span class="text">Manager name</span>
                    <input type="text" name="manager" class="form-control" placeholder="manager name" required>
                </div>
                <div class="form-group">
                    <span class="text">Authen document</span>
                    <input type="file" name="authendocument" id="authendocument" class="form-control-file" required>
                </div>
                <div class="form-group">
                    <span class="text">Promote picture</span>
                    <input type="file" name="promotepicture" id="promotepicture" class="form-control-file" required>
                </div>
                <p style="color:red"><?php
                    if(isset($_SESSION['ext'])){
                        if($_SESSION['ext']==1)
                            echo "Authen file does not support.";
                        else if($_SESSION['ext']==2)
                            echo "Picture file does not support.";
                        else if($_SESSION['ext']==3)
                            echo "Authen and picture file does not support.";
                        $_SESSION['ext']=0;
                    }
                ?></p>
                <div class="form-group">
                    <span class="text">Amount of people</span>
                    <input type="number" min="10" max="1000" name="amount" class="form-control" placeholder="how many people" required>
                </div>
                <div class="form-group">
                    <span class="text">Company name</span>
                    <input type="text" name="company" class="form-control" placeholder="company name" required>
                </div>
                <input type="submit" onClick="checkmark()" name="submit" id="submit" value="Submit" class="btn">
            </form>
            <button onclick="goBack()" class="btn2">Back</button>
        </div>
    </div>

    <div class="boxdown">
        <div class="nav-left">
            <span class="text-head">ENVI</span>
        </div>
        <div class="nav-right ">
            <span>2018 All Right Reserve</span>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <script>
        var map, marker, lat, lng, pos, click = 0;

        function initMap() {
            lat = 15;
            lng = 101;
            pos = {
                lat: lat,
                lng: lng
            };
            map = new google.maps.Map(
                document.getElementById('map'), {
                    zoom: 7,
                    center: pos,
                    streetViewControl: false,
                    fullscreenControl: false,
                    data: false
                });

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    map.setCenter(pos);
                });
            }

            google.maps.event.addListener(map, 'click', function(evt) {
                if (click == 0) {
                    marker = new google.maps.Marker({
                        position: pos,
                        map: map,
                        draggable: true
                    });
                    click = 1;
                }
                document.getElementById('ermsg_map').innerHTML = "";
                lat = evt.latLng.lat();
                lng = evt.latLng.lng();
                marker.setPosition({
                    lat: lat,
                    lng: lng
                });
                document.getElementById('lat').value = lat;
                document.getElementById('long').value = lng;
                if (click == 1)
                    google.maps.event.addListener(marker, 'dragend', function(evt) {
                        lat = evt.latLng.lat();
                        lng = evt.latLng.lng();
                        marker.setPosition({
                            lat: lat,
                            lng: lng
                        });
                        document.getElementById('lat').value = lat;
                        document.getElementById('long').value = lng;
                    });
            });


        }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDB_iaHIfhLObFmtyTMO1vW0LeYWphhV5U&callback=initMap">
    </script>
</body>

</html>