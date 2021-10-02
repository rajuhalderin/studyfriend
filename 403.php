<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eLearn | 403 Error</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #131313;
            color: #c40008;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #000;
            padding: 14px 20px;
            margin: 8px 0;
            border: 2px solid #c40008;
            cursor: pointer;
            width: auto;
            color: #c40008;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
            padding: 30px;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: block; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            /*background-color: #fefefe;*/
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            /*border: 1px solid #888;*/
            width: 80%; /* Could be more or less, depending on screen size */
            border: 1px solid #c40008;
            background-color: #000;
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)}
            to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
        .head-main{
            text-align: center;
            vertical-align: center;
            font-size: 50px;
        }
    </style>
</head>
<body>

<div id="id01" class="modal">

    <div class="modal-content animate">
        <div class="imgcontainer">
            <!--<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
            <h1 class="head-main">ACCESS DENIED</h1>
            <h2>ERROR 403 FORBIDDEN</h2>
            <button class="button-home" onclick="document.location.href='/index.html'">Back to Homepage</button>
        </div>
    </div>
</div>

</body>
</html>
