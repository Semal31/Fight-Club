

<style>
  table {
  border: 1px solid black;
  margin: 0;
  margin-bottom: 2%;
  }
  
  th {
  background-color: #E32A42;
  color: #fff;
  margin: 0;
  padding: 5px;
  }
  
  tr:nth-of-type(odd) {
  background: #e9e9e9;
  margin: 0;
  }
  
  tr:nth-of-type(even) {
  background: #fff;
  }
</style>

<br>
<br>
<br>
<br>

<table>
  <tr>
    <th class="col-head">ID</th>
    <th class="col-head">Name</th>
    <th class="col-head">Type</th>
    <th class="col-head">Price</th>
    <th class="col-head">Outstanding Orders</th>
  </tr>
  <?php 
  $sql = "select id, name, type, description, price from Items";
  $result = $conn-> query($sql);
  
  if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
      echo "<tr><td>". $row["id"] ."</td><td>". $row["name"] ."</td><td>". $row["type"] ."</td><td>". $row["price"] ."</td><td>" . $row["item"] ."</td></tr>";
    }
  }
  else {
    echo "0 result";
  }
  ?>
</table>
<table>
  <tr>
    <th class="col-head">ID</th>
    <th class="col-head">Item</th>
    <th class="col-head">Color</th>
    <th class="col-head">Quantity</th>
    <th class="col-head">Customer Name</th>
    <th class="col-head">Address</th>
    <th class="col-head">Number</th>
    <th class="col-head">Email</th>
    <th class="col-head">Shipping Type</th>
  </tr>
  <?php
  $sql = "select id, item, color, quantity, customer, address, number, email, shipping from Orders";
  $result = $conn-> query($sql);
  
  if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
      echo "<tr><td>". $row["id"] ."</td><td>". $row["item"] ."</td><td>". $row["color"] ."</td><td>". $row["quantity"] ."</td><td>". $row["customer"] ."</td><td>". $row["address"] ."</td><td>". $row["number"] ."</td><td>". $row["email"] ."</td><td>". $row["shipping"] ."</td></tr>";
    }
  }
  else {
    echo "0 result";
  }
  ?>
</table>
