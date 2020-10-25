<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Recommendation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:300,500&amp;display=swap'>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <style>
        html {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        a:hover {
            cursor: pointer;
        }
        
        body {
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-size: 100%;
            background-image: url('../static/images/bgimg.jpg');
            line-height: 1.5;
            color: white;
        }
        
        .button {
            font-weight: 300;
            color: white;
            font-size: 1.2rem;
            text-decoration: none;
            border: 1px solid #efefef;
            padding: 1rem;
            background: black;
            border-radius: 5px;
            margin-top: 30px;
            margin-left: 680px;
            align-items: center;
            position: relative;
        }
        
        p {
            font-weight: 500;
            font-size: 40px;
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        
        table,
        tr,
        td,
        th {
            text-transform: uppercase;
            background-color: rgba(96, 113, 106, .6);
            border: 1px solid black;
            border-collapse: collapse;
            color: white;
            padding: 15px;
            text-align: center;
        }
        
        @media (min-width: 55em) {
            body {
                font-size: 120%;
            }
        }
        
        @media screen and (max-width:600px) {
            .movie {
                margin-top: 8vh;
                margin-bottom: 8vh;
            }
        }
    </style>
</head>

<body>
    <p>Showing Recommendation for: {{ search_name }}</p>
    <table class="movie_table" align="center">
        <tr>
            <th>Movie Title</th>
            <th>Release Date</th>
            <th>Ratings</th>
        </tr>
        <tbody class="table_body">
            <tr>
                <td>{{ movie_names[0] }}</td>
                <td>{{ movie_date[0] }}</td>
                <td>{{ movie_rating[0] }}</td>
            </tr>
            <tr>
                <td>{{ movie_names[1] }}</td>
                <td>{{ movie_date[1] }}</td>
                <td>{{ movie_rating[1] }}</td>
            </tr>
            <tr>
                <td>{{ movie_names[2] }}</td>
                <td>{{ movie_date[2] }}</td>
                <td>{{ movie_rating[2] }}</td>
            </tr>
            <tr>
                <td>{{ movie_names[3] }}</td>
                <td>{{ movie_date[3] }}</td>
                <td>{{ movie_rating[3] }}</td>
            </tr>
            <tr>
                <td>{{ movie_names[4] }}</td>
                <td>{{ movie_date[4] }}</td>
                <td>{{ movie_rating[4] }}</td>
            </tr>
            <tr>
                <td>{{ movie_names[5] }}</td>
                <td>{{ movie_date[5] }}</td>
                <td>{{ movie_rating[5] }}</td>
            </tr>
            <tr>
                <td>{{ movie_names[6] }}</td>
                <td>{{ movie_date[6] }}</td>
                <td>{{ movie_rating[6] }}</td>
            </tr>
            <tr>
                <td>{{ movie_names[7] }}</td>
                <td>{{ movie_date[7] }}</td>
                <td>{{ movie_rating[7] }}</td>
            </tr>
            <tr>
                <td>{{ movie_names[8] }}</td>
                <td>{{ movie_date[8] }}</td>
                <td>{{ movie_rating[8] }}</td>
            </tr>
            <tr>
                <td>{{ movie_names[9] }}</td>
                <td>{{ movie_date[9] }}</td>
                <td>{{ movie_rating[9] }}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <a class="button" onClick="goBack()"><i class="fas fa-home"></i> Back</a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    </div>

</body>

</html>