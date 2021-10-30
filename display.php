
<html>
<head>
    
    <title>Search data by name</title>
</head>
<body>
    <center>
        <h1>Displaying data from the data base</h1>
        <div class="cointainer">
            <form action=""method="POST">
            <input type="text" name="name"placeholder="Enter your name">
            <input type="submit" name="search" value="SEARCH">
            
</form>
<div class= "cointainer ">
   <a href="index.php">UPDATE</a> 
    
</div>
<table>
    <tr>
        <th>name</th>
        <th>age</th>
        <th>gender</th>
        <th>email</th>
        <th>phone</th>
        <th>destination</th>
    </tr> <br>
    <?php
    
    $conn = mysqli_connect("localhost","root","");
    $db =mysqli_select_db($conn,'untrip');

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
     {
      $name =$_POST['name'];
      $query = "SELECT * FROM trip where name = '". $name."'";
      $query_run= $conn->query($query);
      $num = mysqli_num_rows($query_run);
echo $num;
echo " records found in the DataBase<br>";
if($num> 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // We can fetch in a better way using the while loop
      

      while ($row = mysqli_fetch_assoc($query_run)) 
      {
       ?>
       <tr>
           <td> <?php echo $row['name'];?></td>
           <td> <?php echo $row['age'];?></td>
           <td> <?php echo $row['gender'];?></td>
           <td> <?php echo $row['email'];?></td>
           <td> <?php echo $row['phone'];?></td>
           <td> <?php echo $row['destination'];?></td>
           
       </tr>
       <?php
      }
    }
}
    ?>

    
</table>
            
    
</body>
</html>