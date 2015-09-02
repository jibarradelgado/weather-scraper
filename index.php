<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather Scrapper</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <style>
        html, body {
            height: 100%;
        }

        .container {
            background-image: url("images/background.jpg");
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            padding-top: 150px;
        }

        .center {
            text-align: center;
        }

        .black {
            color: #FF8800;
        }

        p {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        button {
            margin-bottom: 20px;
        }

        .alert {
            margin-top: 20px;
            display: none;
        }

    </style>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 center" >
            <h1 class="center black">Weather Predictor</h1>

            <p class="lead center black">Enter your city below to get a forecast weather</p>

            <form>
                <div class="form-group">
                    <input type="text" class="form-control" name="city" id="city" placeholder="Eg. Guadalajara, Paris, Rome" />
                </div>

                <button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>
            </form>

            <div id="success" class="alert alert-success">
                Success!
            </div>

            <div id="fail" class="alert alert-danger">
                Could not find weather data for that city
            </div>

            <div id="noCity" class="alert alert-danger">
                Please enter the name of a city!
            </div>

        </div>

    </div>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
    $("#findMyPostcode").click(function(event) {

        event.preventDefault();

        $(".alert").hide();

        if($("#city").val()!="") {
            $.get("php/scraper.php?city="+$("#city").val(), function (data) {

                if(data == "") {
                    $("#fail").fadeIn();
                } else {
                    $("#success").html(data).fadeIn();
                }

            });
        } else {
            $("#noCity").fadeIn();
        }


    })
</script>

</body>
</html>