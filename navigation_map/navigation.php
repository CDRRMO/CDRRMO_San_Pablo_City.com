<?php

if(isset($_GET['destination'])){
    $destination = $_GET['destination'];
}
else{
    $destination = '';
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>CDRRMO</title>
    <!-- <link href="Content/bootstrap.min.css" rel="stylesheet" /> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/ab2155e76b.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="App.css" rel="stylesheet" />
</head>
<body>

    <div class="jumbotron">
        <div class="container-fluid">
            <a href="javascript:history.back()"><i class="fas fa-arrow-left"></i> Go Back</a>
            <h2>Distance From the Evacuation Center</h2>
            <form class="form-horizontal">
                <div class="form-group">
                    <input type="text" id="from" placeholder="Origin" class="form-control">
               </div>
               <div class="form-group">
                    <input type="text" id="to" value="<?php echo $destination;?>" placeholder="Destination" class="form-control">
               </div>
            </form>

            <div class="col-xs-offset-2 col-xs-10 submit-div">
                <button class="btn btn-info btn-lg submit" onclick="calcRoute();">Calculate</button>
            </div>
        </div>
        <div class="container-fluid">
            <div id="googleMap">

            </div>
            <div id="output">

            </div>
        </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeji5o5yGuXQNLLJmuogHbbuRGXmeNXUY&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js/jquery-3.1.1.min.js"></script>
    <script src="Main.js"></script>
</body>
</html>
