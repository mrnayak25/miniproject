
<?php
$dbHost = 'localhost';
$dbName = 'luckytoot';
$dbUser = 'root';
$dbPassword = '';

$mysql = mysqli_connect($dbHost,$dbUser,$dbPassword,$dbName);


    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $token = rand(1000000,10000000);
   
    if($name!=null && $phone!=null){
        $sql1 = "Insert into information(Name,Phone,Token) values('$name','$phone','$token')";
        $rea1 = mysqli_query($mysql,$sql1);
    }

    echo "<style>
    html{
        background-color:black;
    }
    h2
    {
        background-color:yellow;
        color=red;
        </style>
    <center>
       <h1> YOUR TOKEN NO. IS<h1>
                <h2 >$token</h2>
          </center>
    ";

?>


<?php
echo "<style>
{
    margin:5;
  
    box-sizing: border-box;
}
h1{
 color:yellow;
}
 table
{
    border-collapse:collapse;
    width:75%;
    color: red;
}
th,td
{
    text-align:center;
    padding:15px;
}
th{
    background-color: yellow;
    color: red;
}
tr:nth-child(odd){
    background-color:yellow;
    
}
</style>";
echo "<br><br><br><center>
<h1>Participants List<h1>";
$sql = "select * from information";
$result = mysqli_query($mysql,$sql);
echo "<table padd>";
while($res = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td><b>".$res['Name']."</b></td>";
    echo "<td><b>".$res['Phone']."</b></td>";
    echo "<td><b>".$res['Token']."</b></td>";
    echo "</tr>";
}

echo "</table>";
echo "</center>";

?>
