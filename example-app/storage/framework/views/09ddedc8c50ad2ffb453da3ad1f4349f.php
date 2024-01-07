<html>
    <head>
        <meta charset="utf-8">
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&display=swap');
        body {
            background: linear-gradient(45deg,#FC3C80, #fd7b99,  #FB4570);
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            font-family: 'Playfair Display', serif;
        }
        h1 {
            font-size: 50px;
            color: #fff;
            align-items: center;
            text-align: center;
            margin-top: 10%;
        }
        .container {
            width: 500px;
            height: 400px;
            background: #333;
            margin-top: 3%;
            margin-left: 35%;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .form {
            width: 1000px:
            height: 600px;
            /* background: #908888; */
            z-index: 2;
            margin-top: -45%;
            margin-left: -25%;
            position: relative;
        }
        form label {
            width: 100%;
            height: 100%;
            font-size: 40px;
            color: #fff;
            display: block;
            margin: 0 25%;
        }
        form input {
            width: 150%;
            height: 50px;
            margin-top: -2%;
            border-radius: 5px;
            position: absolute;
             text-align: center;
            justify-content: center;
        }
        form button {
            background-color: #FB4570;
            border: 2px solid #e83775;
            border-radius: 5px;
            color: white;
            padding: 17px 35px;
            display: inline-block;
            margin-top: 30%;
            margin-left: 50%;
            position: absolute;
            font-size: 18px;
            cursor: pointer;
        }
        button:hover {
            background: #e83775;
        }
        ul li {
            width: 30px;
            height: 30px;
            list-style: none;
            opacity: 0;
            position: absolute;
            color: #fff;
        }
        .halfFirst li {
            top: 50vh;
            left: 45vw;
            animation: halfFirst 5s linear infinite;
        }
        .halfFirst li:nth-child(2) {
            left: 10vw;
            animation-delay: 2s;
            top: 80vh;
        }
        .halfFirst li:nth-child(3) {
            left: 85vw;
            animation-delay: 4s;
            top: 80vh;
        }
        .halfFirst li:nth-child(4) {
            left: 70vw;
            animation-delay: 6s;
            top: 10vh;
        }
        .halfFirst li:nth-child(5) {
            left: 10vw;
            animation-delay: 8s;
            top: 10vh;
        }
        @keyframes halfFirst {
            0% {
                opacity: 1;
                transform: scale(0) rotateY(0deg);
            }
            100% {
                opacity: 0;
                transform: scale(5) rotateY(1000deg);
            }
        }
        .halfSecond li {
            left: 15vw;
            animation: halfSecond 5s linear infinite;
            bottom: 0;
        }
        .halfSecond li:nth-child(2){
            left: 35vw;
            animation-delay: 2s;
            bottom: 0;
        }
        .halfSecond li:nth-child(3) {
            animation-delay: 4s;
            left: 55vw;
        }
        .halfSecond li:nth-child(4) {
            animation-delay: 6s;
            left: 75vw;
        }
        .halfSecond li:nth-child(5) {
            animation-delay: 8s;
            left: 90vw;
        }
        @keyframes halfSecond {
            0% {
                opacity: 1;
                bottom: 0;
                border-radius: 0;
                transform: scale(0) rotate(0deg);
            }
            100% {
                opacity: 0;
                bottom: 90vh;
                transform: scale(5) rotate(1000deg);
                border-radius: 50%;
            }
    }
    </style>
    <script src="https://kit.fontawesome.com/330f974ef1.js" crossorigin="anonymous"></script>
    <body>
        <h1>Multiplication form</h1>
        <div class="halfFirst">
            <ul>
                <li><i class="fa-solid fa-0"></i></li>
                <li><i class="fa-solid fa-1"></i></li>
                <li><i class="fa-solid fa-2"></i></li>
                <li><i class="fa-solid fa-3"></i></li>
                <li><i class="fa-solid fa-4"></i></li>
            </ul>
        </div>
        <div class="halfSecond">
            <ul>
                <li><i class="fa-solid fa-5"></i></li>
                <li><i class="fa-solid fa-6"></i></li>
                <li><i class="fa-solid fa-7"></i></li>
                <li><i class="fa-solid fa-8"></i></li>
                <li><i class="fa-solid fa-9"></i></li>
            </ul>
        </div>
        <div class="container">
            <div class="form">
                <form method="post">
                    <?php echo csrf_field(); ?>
                    <label for="input">Select number</label>
                    
                    <input type="number" name="number" placeholder="select the number">
                    <br>
                    <button type="submit"class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\SE_CAMP\example-app\resources\views/myroute.blade.php ENDPATH**/ ?>