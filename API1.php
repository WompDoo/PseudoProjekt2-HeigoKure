<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <title></title>
</head>
<body>

<input type="text" id="city" placeholder="city"/>
<button onclick="get_forecast()">Submit</button>

<span id="forecast">Ilmateade</span>
<script>
    function get_forecast() {
        var city = $('#city').val();
        console.log (city);
        $.get(
            "http://api.openweathermap.org/data/2.5/weather?q="+city+"&units=metric&APPID=bc9e58d058e90dee1bc18cfa459c1664",
            function (data) {
                //console.log( data.weather [0].description );
                var weather_forecast = data.weather [0].description;
                //alert(weather_forecast);
                $('#forecast').html(weather_forecast);
            }
        );
    }
</script>

</body>
</html>