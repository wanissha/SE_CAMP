<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/330f974ef1.js" crossorigin="anonymous"></script>
    <style>
        body {
            text-align: center;
            /* Center all elements within the body */
            background-color: #833c63;
            /* Set background color */

        }

        .box {
            width: 500px;
            /* Set the width of the box */
            height: 90px;
            /* Set the height of the box */
            overflow: auto;
            /* Add scrollbars if content overflows */
            margin: 0 auto;
            /* Center the box horizontally */
            text-align: left;
            /* Reset text-align for the table */
            background-color: #FFF5C2;
            /* Set background color for the box */
            border-radius: 8px;
            /* Add border radius for a rounded appearance */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Add a shadow effect */
            padding: 10px;
            /* Add some padding */
            margin-top: 10px;
        }

        h2 {
            color: #FFF9CA;
            font-size: 48px;
        }

        label {
            color: #fff;
            font-size: 36px;
        }

        input {
            width: 100px;
            height: 20px;
            border-radius: 0.4px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background: #A4907C;
            color: #fff;
        }

        #head {
            background: #B0926A;
            font-size: 26px;
        }

        #x {
            color: black;
        }

        th,
        td {
            border: 1px solid white;
            padding: 8px;
            text-align: center;

        }

        input {
            text-align: center;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        #generate {
            width: 4em;
            height: 30px;
            color: white;
            background: #E0AED0;
            border: 1px solid #E0AED0;
            border-radius: 5px;
            margin-left: 5px;
            cursor: pointer;
        }

        #generate:hover {
            background: #c480ae;
        }

        ul li {
            position: absolute;
            width: 30px;
            height: 30px;
            list-style: none;
            opacity: 0;

        }

        .star li {
            top: 50vh;
            left: 75vw;
            animation: star 10s linear infinite;
        }

        .star li:nth-child(2) {
            top: 80vh;
            left: 10vw;
            animation-delay: 2s;
        }

        .star li:nth-child(3) {
            top: 80vh;
            left: 85vw;
            animation-delay: 4s;
        }

        .star li:nth-child(4) {
            top: 10vh;
            left: 70vw;
            animation-delay: 6s;
        }

        .star li:nth-child(5) {
            top: 10vh;
            left: 10vw;
            animation-delay: 8s;
        }
        .star li:nth-child(6) {
            top: 10vh;
            left: 80vw;
            animation-delay: 8s;
        }
        .star li:nth-child(7) {
            top: 50vh;
            left: 10vw;
            animation-delay: 8s;
        }
         .star li:nth-child(8) {
            top: 90vh;
            left: 70vw;
            animation-delay: 8s;
        }
         .star li:nth-child(9) {
            top: 50vh;
            left: 10vw;
            animation-delay: 8s;
        }
         .star li:nth-child(10) {
            top: 90vh;
            left: 45vw;
            animation-delay: 8s;
        }


        @keyframes star {
            0% {
                transform: scale(0) rotateY(0deg);
                opacity: 1;
            }

            100% {
                transform: scale(5) rotateY(1000deg);
                opacity: 0;
            }
        }
    </style>
</head>

<body>

    <h2>Multiplication Table</h2>
    <div class="star">
        <ul>
            <li><i class="fa-regular fa-star"></i></li>
            <li><i class="fa-regular fa-star"></i></li>
            <li><i class="fa-regular fa-star"></i></li>
            <li><i class="fa-regular fa-star"></i></li>
            <li><i class="fa-regular fa-star"></i></li>
            <li><i class="fa-regular fa-star"></i></li>
            <li><i class="fa-regular fa-star"></i></li>
            <li><i class="fa-regular fa-star"></i></li>
            <li><i class="fa-regular fa-star"></i></li>
            <li><i class="fa-regular fa-star"></i></li>
        </ul>

    </div>
    <label for="input">Enter number:</label>
    <input type="number" id="input" name="input">
    <button id="generate" onclick="upSize()">go</button>
    <div class="box">
        <table id="multiplication-table">
            <thead id="head">
                <tr>
                    <td>Number</td>
                    <td id="x">x</td>
                    <td>Multiplier</td>
                    <td>Result</td>
                </tr>
            </thead>
            <tbody id="result">
            </tbody>
        </table>
    </div>


    <script>
        $(document).ready(function() {
            $('#generate').click(function() {
                var input = parseInt($('#input').val());
                generateTable(input);
            });

            function generateTable(input) {
                var table = $('#multiplication-table tbody');
                table.empty();

                // Generate multiplication table
                let result = '';
                for (var i = 1; i <= 24; i++) {
                    result += '<tr>';
                    answer = input * i;
                    result += `<td>${input}</td><td id="x">x</td><td>${i}</td><td>${answer}</td>`;
                    result += '</tr>';
                }

                $('#result').html(result);
            }
        });
        function upSize() {
            let box = $('.box');
            box.css({
                'width': '500px', /* Set the width of the box */
                'height': '400px'
            });

        }
    </script>

</body>

</html>





{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Javascript</title>
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <h1>before</h1>
        <h1 id="myh1"> <h2>prepend</h2>Javascript <h2>append</h2></h1>
        <h1>after</h1>
        {{-- <button onclick="alert('Hello world')">Click me!</button> --}}
{{-- <input type="text" id="my_number">
        <button onclick="myFunction()">submit number</button>
        <br>
        <button onclick="myFunction2()">click</button>
        <table id="my_table">
            <thead>
                <tr>
                    <td>#</td>
                    <td>result</td>
                </tr>
            </thead>
            <tbody id="my_tbody">
                    <tr>
                        <td>2</td>
                        <td>4</td>
                    </tr>
            </tbody>
        </table>

        <script>
            $(document).ready(function(){
                // console.log("Ready");
                // console.log($('#myh1').text());
                // console.log($('#my_number').val());
                // $('#myh1').text('js');
                // $('#my_number').val('2');
            //      setInterval(() => {
            //         $('#myh1').after(`<h1 class="my_gen_number">setInterval</h1>`)
            // }, 2000)
        });

            // })

            function myFunction() {
                console.log(typeof $('#my_number').val()); // string in jquery
                let myNumber = parseInt($('#my_number').val());
                for (let i = 0; i < myNumber; i++) {
                    $('#myh1').after(`<h1 class="my_gen_number">${i}</h1>`)
                    /*
                        after != append, before != prepend
                        before แสดงค่าจากน้อยไปมาก
                        after แสดงค่าจากมากไปน้อย
                    */

                }
                // console.log(document.getElementById("my_number").value);
                // console.log($('#my_number').val());
                console.log($('.my_gen_number'), 0);
                setTimeout(() => {
                    $('.my_gen_number').each(function(index, value) {
                    console.log(value);
                    // val.remove() ใช้ไม่ได้
                    $(value).remove();
                })
                }, 2000);

                // ใช้ไม่ได
                // $('.my_gen_number').forEach(function(value, index) {
                //     console.log(value);
                //     ้
                // })
            }
            function myFunction2() {
                // add in tbody(children)
                // $($('#my_table').children()[1]).html("<tr><td>1</td><td>test</td></tr>");
                // $($('#my_tbody').html("<tr><td>1</td><td>test</td></tr>"));
                let my_number = parseInt($('#my_number').val());
                let my_code_tr = '<tr>';
                    for(let i = 0; i < my_number; i++){
                        my_code_tr += `<td>${i}</td><td>test</td>`;
                    }
                    my_code_tr += '</tr>';
                    $('#my_tbody').html(my_code_tr);

            }

            let myval;
            console.log(typeof myval);
            // console.log(typeof(myval));
            myval = '10';
            myval2 = '2';
            console.log(myval, myval2);
            // concat string
            myval3 = (myval) + parseInt(myval2);
            console.log(myval3);
            // plus
            myval3 = parseInt(myval) + parseInt(myval2);
            console.log(myval3);
            // string accept minus, multiply, divide except plus
            myval3 = myval - myval2;
            console.log(myval3);
            myval3 = myval * myval2;
            console.log(myval3);
            myval3 = myval / myval2;
            console.log(myval3);

        </script>
        <script>
             let myval4 = [1, 2, 3, 4];
            // allow in php but not in js
            //     myval4[] = 5;

            myval4[5] = 5
            console.log(myval4) //(6) [1, 2, 3, 4, empty, 5]
            for(i = 0; i< myval4.length; i++) {
                console.log(myval4[i]);
            }
            myval4.forEach((value,index) => {

            });
            myval4.forEach(function(value, index) {
                console.log(value, index);
            })
            console.log(document.getElementById("myh1").innerHTML);
            /*
                in php
                foreach($myval4 as $index => $value) {}
            */
        </script>
</body>

</html> --}}
