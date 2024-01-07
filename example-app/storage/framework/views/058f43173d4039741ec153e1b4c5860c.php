<html>
    <head>
        <meta charset="utf-8">
    </head>
    <style>
        body {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                margin: 0;
                color: #fff;
                background: linear-gradient(45deg, #333, #424242);

        }
        .box {
            height: 390px;
            overflow: auto;
            width: 760px;
            border-radius: 4%;
            border: 5px dashed white;
            background: linear-gradient(45deg,#FC3C80, #fd7b99,  #FB4570);
        }

        h1 {
            font-size: 60px; /* Increase font size for the heading */
            margin-top: 5%;
        }

        table {
            border-collapse: collapse;
            width:100%;
            margin: 20px;
            margin-left: 2%;
            z-index: 2;
            background: linear-gradient(45deg,#ed4d85, #FB4570);
        }
        #heading {
            background: #FC3C80;
        }
        table, th, td {
            border: 1px solid rgb(55, 54, 54);
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        td {
            font-size: 18px;
        }
        ul li {
            position: absolute;
            width: 30px;
            height: 30px;
            list-style: none;
            opacity: 0;
            z-index: -1;
        }
        .square li {
            top: 50vh;
            left: 45vw;
            animation: square 5s linear infinite;
        }
        .square li:nth-child(2) {
            top: 80vh;
            left: 10vw;
            animation-delay: 2s;
        }
        .square li:nth-child(3) {
            top: 80vh;
            left: 85vw;
            animation-delay: 4s;
        }
        .square li:nth-child(4) {
            top: 10vh;
            left: 70vw;
            animation-delay: 1s;
        }
        .square li:nth-child(5) {
            top: 10vh;
            left: 10vw;
            animation-delay: 1s;
        }
        @keyframes square {
            0% {
                transform: scale(0) rotateY(0deg);
                opacity: 1;
            }
            100% {
                transform: scale(5) rotateY(1000deg);
                opacity: 0;
            }
        }
        .circle li {
            bottom: 0;
            left: 15vw;
            animation: circle 5s linear infinite;
        }
        .circle li:nth-child(2){
            bottom: 0;
            left: 35vw;
            animation-delay: 2s;
        }
        .circle li:nth-child(3) {
            left: 55vw;
            animation-delay: 2s;
        }
        .circle li:nth-child(4) {
            left: 75vw;
            animation-delay: 2s;
        }
        .circle li:nth-child(5) {
            left: 90vw;
            animation-delay: 2s;
        }
        @keyframes circle {
            0% {
                transform: scale(0) rotate(0deg);
                opacity: 1;
                bottom: 0;
                border-radius: 0;
            }
            100% {
                transform: scale(5) rotate(1000deg);
                opacity: 0;
                bottom: 90vh;
                border-radius: 50%;
            }
    }
    </style>
<script src="https://kit.fontawesome.com/330f974ef1.js" crossorigin="anonymous"></script>
    <body>
        <div class="container">
            <div class="square">
                <ul>
                    <li><i class="fa-solid fa-candy-cane"></i></li>
                    <li><i class="fa-solid fa-tree"></i><li>
                    <li><i class="fa-solid fa-candy-cane"></i></li>
                     <li><i class="fa-solid fa-snowflake"></i><li>
                    <li><i class="fa-solid fa-candy-cane"></i></li>
                    <li><i class="fa-solid fa-candy-cane"></i></li>
                     <li><i class="fa-solid fa-snowflake"></i><li>
                    <li><i class="fa-solid fa-candy-cane"></i></li>
                    <li><i class="fa-solid fa-tree"></i><li>
                    <li><i class="fa-solid fa-candy-cane"></i></li>
                    <li><i class="fa-solid fa-candy-cane"></i></li>
                    <li><i class="fa-solid fa-candy-cane"></i></li>
                     <li><i class="fa-solid fa-snowflake"></i><li>
                    <li><i class="fa-solid fa-tree"></i><li>
                </ul>
            </div>
            <div class="circle">
                <ul>

                    <li><i class="fa-solid fa-candy-cane"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i><li>
                    <li><i class="fa-solid fa-snowflake"></i><li>
                    <li><i class="fa-solid fa-snowflake"></i><li>
                    <li><i class="fa-solid fa-candy-cane"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i><li>
                    <li><i class="fa-solid fa-candy-cane"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i><li>
                    <li><i class="fa-solid fa-tree"></i><li>
                    <li><i class="fa-solid fa-snowflake"></i><li>
                    <li><i class="fa-solid fa-tree"></i><li>
                    <li><i class="fa-solid fa-candy-cane"></i></li>
                    <li><i class="fa-solid fa-snowflake"></i><li>
                </ul>
            </div>
               <h1>Multiplication table of <?php echo  $number ; ?></h1>

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

                            echo "<td> $number </td>";
                            echo "<td>x</td>";
                            echo "<td>$i</td>";
                            echo "<td>=</td>";
                            $answer =  $number * $i;
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


<?php /**PATH C:\xampp\htdocs\SE_CAMP\example-app\resources\views/output.blade.php ENDPATH**/ ?>