<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Not Found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <style>
        * {
            font-family: 'PT Sans Caption', sans-serif, 'arial', 'Times New Roman';
        }
        
        #content {
            background-image: url("../static/images/bgimg.jpg");
            background-color: #181818
        }
        
        .button {
            font-weight: 300;
            color: white;
            font-size: 1.2em;
            text-decoration: none;
            border: 1px solid #efefef;
            padding: 1em;
            background: black;
            border-radius: 3px;
            float: left;
            margin: 6em 0 0 -155px;
            left: 50%;
            position: relative;
            transition: all .3s linear;
        }
        
        .button:hover {
            background-color: #ffbf00;
            color: black;
            box-shadow: 0px 0px 5px -2px grey;
        }
    </style>
</head>

<body id="content" style="color: white; margin-top: 250px;">
    <link href='https://fonts.googleapis.com/css?family=Anton|Passion+One|PT+Sans+Caption' rel='stylesheet' type='text/css'>
    <div class="text-center">
        <h1 style="text-shadow: 0 0 20px #fffb00; ">Sorry! Page not found. Possible reason(s):</h1>
        <ul>
            <li>Misspelled input.</li>
            <li>The movie name does not exist in the database.</li>
        </ul>
    </div>
    <a class="button" onClick="goBack()"><i class="fas fa-home"></i> Go Back to Home Page &amp; Try Again.</a>
    </div>

</body>
<script>
    function goBack() {
        window.history.back();
    }
</script>

</body>

</html>
