<!DOCTYPE html>
<html>
  <head>
    <title>Transcation History</title>
    <style type ="text/css">
      table{
        border-collapse: collapse ;
        width: 100%;
        color: #d96459;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
      }
      th{
        background-color: #d96459;
        color: white;
        }
      tr:nth-child(even) {
         background-color: #f2f2f2
         }
    </style>
  </head>
<body>
    <table>
      <tr>
        <th>Order_id</th>
        <th>RegisterPhoneNumber</th>
        <th>SelectOperator</th>
        <th>SelectState</th>
        <th>SmartCardNumber</th>
        <th>EnterAmount</th>
      </tr>

      <?php
      $conn = mysqli_connect('localhost','customer_details','customer_details','customer_details');
      if($conn -> connect_error) {
        die("Connection failed:". $conn->connect_error);
      }

      $sql = "SELECT Order_id,RegisterPhoneNumber,SelectOperator,SelectState,SmartCardNumber,EnterAmount from customer_details";
      $result= $conn -> query($sql);

        if($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
          echo "<tr><td>". $row["Order_id"]."</td><td>".$row["RegisterPhoneNumber"]."</td><td>".$row["SelectOperator"]."</td><td>".$row["SelectState"]."</td><td>".$row["SmartCardNumber"]."</td><td>".$row["EnterAmount"]."</td><tr>";

        }
        echo "</table>";
      }
      else{
        echo "0 result";
      }

      $conn-> close();
      ?>

    </table>
    
</body>
</html>