<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multiplication Table</title>
  <link rel="stylesheet" href="styleForPHP.css">
</head>
<body>
   <div class="container">
            <div class="square">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="circle">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
               <h1>Multiplication table</h1>
            <div class="box">
                <table>
                    <tbody>
                       
                       <tr id="heading"> 
                            <td>Multiplicant</td>
                            <td>Multiplier</td>
                            <td>Operator</td><td>Equal</td>
                            <td>Result</td>
                       </tr>

                        <?php
                          for ($i = 1; $i < 25; $i++) {
                            "<tr>";
                            $num = 2;
                            echo "<td>$num</td>";
                            echo "<td>x</td>";
                            echo "<td>$i</td>";
                            echo "<td>=</td>";
                            $answer = $num * $i;
                            echo "<td>$answer</td>";
                            echo "</tr>";
                          }
                        ?>
                    </tbody>
                </table>
            </div>
   </div>

 
</body>
</html>
