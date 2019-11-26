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
            <a href="./home.php"><button class="btn1">Sign out</button></a>
        </div>
    </div>
    <div class="contain">
        <div class="form-box">
            <form action="#" id="create-form">
                <div class="form-group">
                    <span class="text">Campaign name</span>
                    <input type="text" name="campaignname" class="form-control" autocomplete="off" placeholder="your campaign name" required>
                </div>
                <div class="form-group">
                    <span class="text">Start date</span>
                    <input type="date" name="startdate" class="form-control" required>
                </div>
                <div class="form-group">
                    <span class="text">End date</span>
                    <input type="date" name="enddate" class="form-control" required>
                </div>
                <div class="form-group">
                    <span class="text">Choose your location</span>
                    <div class="form-control" id="map"></div>
                    <input type="text" id="lat" name="latitude" class="form-control" placeholder="latitude" value="" required hidden>
                    <input type="text" id="long" name="latitude" class="form-control" placeholder="longtitude" value="" required hidden>
                </div>
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
                    <input type="file" name="authendocument" class="form-control-file" required>
                </div>
                <div class="form-group">
                    <span class="text">Promote picture</span>
                    <input type="file" name="promotepicture" class="form-control-file" required>
                </div>
                <div class="form-group">
                    <span class="text">Amount of people</span>
                    <input type="number" name="amount" class="form-control" placeholder="how many people" required>
                </div>
                <div class="form-group">
                    <span class="text">Company name</span>
                    <input type="text" name="company" class="form-control" placeholder="company name" required>
                </div>
                <button onclick="goBack()" class="btn2">Back</button>
                <input type="submit" value="Submit" class="btn">
            </form>
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
        var map, marker, lat, lng, pos;

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
            marker = new google.maps.Marker({
                position: pos,
                map: map,
                draggable: true
            });

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    marker.setPosition(pos);
                    map.setCenter(pos);
                });
            }

            google.maps.event.addListener(marker, 'dragend', function(evt) {
                lat = evt.latLng.lat();
                lng = evt.latLng.lng();
                pos = {
                    lat: lat,
                    lng: lng
                };
                marker.setPosition(pos);
                document.getElementById('lat').value = lat;
                document.getElementById('long').value = lng;
            });

            google.maps.event.addListener(map, 'click', function(evt) {
                lat = evt.latLng.lat();
                lng = evt.latLng.lng();
                marker.setPosition({
                    lat: lat,
                    lng: lng
                });
                document.getElementById('lat').value = lat;
                document.getElementById('long').value = lng;
            });
        }
    </script>

    <div id='latlng'></div>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDB_iaHIfhLObFmtyTMO1vW0LeYWphhV5U&callback=initMap">
    </script>
</body>

</html>