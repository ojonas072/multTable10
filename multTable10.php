<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>10x10 Multiplication Table </title>
  <style>
    table {
      border-collapse: collapse;
      margin: 20px auto;
    }
    th, td {
      border: 1px solid #999;
      padding: 8px 12px;
      text-align: center;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h2 style="text-align: center;">10x10 Multiplication Table</h2>
  <table>
    <tr>
      <th></th>
      <?php
        for ($i = 1; $i <= 10; $i++) {
          echo "<th>$i</th>";
        }
      ?>
    </tr>
    <?php
      for ($row = 1; $row <= 10; $row++) {
        echo "<tr>";
        echo "<th>$row</th>";
        for ($col = 1; $col <= 10; $col++) {
          $product = $row * $col;
          echo "<td>$product</td>";
        }
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>