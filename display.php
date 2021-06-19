<!doctype html> 
<html> 
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <title>Motor Values</title>
</head> 
    <body>
    <h1 class="text-center text-primary mb-5">Control Motors UI</h1>

        <div class="container"> 
            <table class="table table-bordered text-center"> 
                <thead> 
                    <tr> 
                        <th>Motor 1</th> 
                        <th>Motor 2</th> 
                        <th>Motor 3</th> 
                        <th>Motor 4</th> 
                        <th>Motor 5</th> 
                        <th>Motor 6</th> 
                        <th>Motor OFF/ON</th> 
                    </tr> 
                </thead> 
                <tbody> 
                    <tr> 
                        <?php include("DBConfig.php"); 
                        $sql = 'SELECT * FROM motorvalues WHERE ID=(SELECT max(ID) FROM motorvalues)';
                        $result = mysqli_query($conn, $sql); 
                        while($query = mysqli_fetch_array($result)) {
                            $switch = 'OFF';
                            if ($query['motorSwitch'] == 1) {
                                $switch = 'ON';
                            }
                            echo"<td>".$query['motorRange1']."</td>"; 
                            echo"<td>".$query['motorRange2']."</td>"; 
                            echo"<td>".$query['motorRange3']."</td>"; 
                            echo"<td>".$query['motorRange4']."</td>";
                            echo"<td>".$query['motorRange5']."</td>"; 
                            echo"<td>".$query['motorRange6']."</td>"; 
                            echo"<td>".$switch."</td>";  
                            echo "</tr>"; } 
                            mysqli_close($conn); ?> 
            </table> 
        </div> 
    </body> 
</html>