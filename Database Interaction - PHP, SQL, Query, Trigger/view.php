<?php
include_once("database.php");
//fetching data in descending order (lastest entry first)
$result = "SELECT p.matchid, p.venueid, p.matchdate
FROM players_performance p";
$result = mysqli_query($conn, $result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
     
          
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
      
    <title>Document</title>
    <style>
table, th, td{
border: 1px solid black;
border-collapse: collapse;
}
</style>
</head>
<body>
<h1>Player Information</h1>
<hr>
<table class="table"><tr>
<th>MatchId</th>
<th >VenueId</th>
<th>Date</th>
</tr>
<?php
while($res = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $res['matchid']; ?></td>
<td><?php echo $res['venueid'];?></td>
<td><?php echo $res['matchdate'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>