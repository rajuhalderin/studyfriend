<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=5.0" name="viewport">
    <meta name="HandheldFriendly" content="True">
    <title>Page Not Found | 000webhost</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn.000webhost.com/000webhost/logo/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;display=swap" rel="preconnect stylesheet">
    <style>
        html, body {
            font-family: 'Roboto', sans-serif;
            font-size: 0.85vw;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            background-color: white;
            -webkit-font-smoothing: antialiased;
        }

        body {
            margin: 0;
            padding: 0;
            display: flex;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            align-items: center;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            justify-content: flex-start;
            width: auto;
        }

        p {
            -webkit-margin-after: 0px;
            -webkit-margin-before: 0px;
            font-size: 15px;
            color: #7F828B;
            line-height: 21px;
            margin-bottom: 4px;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: normal;
            margin: 0;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .container {
            padding: 0 5%;
            width: 90%;
            height: 100vh;
        }

        .flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .flex-column {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .full-width {
            width: 90%;
        }

        .align-items-center {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .justify-content-evenly {
            justify-content: space-evenly;
        }

        .justify-content-center {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .bg-black {
            background-color: #212121;
        }

        .text-bold {
            font-weight: bold;
        }

        .text-center {
            text-align: center;
        }

        .text-white {
            color: #fff;
        }

        .logo-holder {
            position: absolute;
            width: 17%;
            margin-top: 3.25vh;
            margin-bottom: 6vh;
        }

        .top-section {
            margin-bottom: 50px;
        }

        .heading-1 {
            font-size: 3rem;
            line-height: 1.25;
        }

        .mb-30 {
            margin-bottom: 30px;
        }

        .mr-30 {
            margin-right: 30px;
        }

        .image-holder {
            position: relative;
            width: 100%;
            height: 70vh;
        }

        /* ----- Corgi Background Styling Start ----- */

        .error-code-bg {
            position: absolute;
            bottom: 30px;
            font-size: 32vw;
            color: transparent;
            line-height: .8em;
            z-index: 0;
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: #b2b9bc;
            -ms-text-stroke-width: 1px;
            -ms-text-stroke-color: #b2b9bc;
        }

        .corgi {
            position: absolute;
            z-index: 2;
            bottom: 10px;
            width: 15vw;
        }

        .corgi__spotlight {
            position: absolute;
            z-index: 1;
            bottom: 0;
            width: 50vw;
        }

        .corgi--default {
            width: 100%;
        }

        .corgi--hover {
            display: none;
        }

        .corgi:hover .corgi--default {
            display: none;
        }

        .corgi:hover .corgi--hover {
            display: block;
            width: 100%;
        }

        /* ----- Corgi Background Styling End ----- */

        /* ----- Button Styling Start ----- */

        .button {
            position: relative;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 0.33rem;
            padding: 1rem 30px;
            min-width: 64px;
            min-height: 44px;
            vertical-align: middle;
            text-align: center;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            text-transform: uppercase;
            text-decoration: none;
            font-family: "Roboto", "Segoe UI", BlinkMacSystemFont, system-ui, -apple-system;
            font-size: 1.15rem;
            font-weight: bold;
            overflow: hidden;
            outline: none;
            cursor: pointer;
            -webkit-transition: -webkit-box-shadow 0.2s;
            transition: -webkit-box-shadow 0.2s;
            -o-transition: box-shadow 0.2s;
            transition: box-shadow 0.2s;
            transition: box-shadow 0.2s, -webkit-box-shadow 0.2s;
        }

        /* Overlay */
        .button:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            background-color: rgb(255, 255, 255);
            opacity: 0;
            -webkit-transition: opacity 0.2s;
            -o-transition: opacity 0.2s;
            transition: opacity 0.2s;
        }

        .button:hover:before {
            opacity: 0.08;
        }

        .button:focus:before {
            opacity: 0.24;
        }

        .button:hover:focus:before {
            opacity: 0.3;
        }

        .button:active:after {
            opacity: 0.32;
            -webkit-transform: translate(-50%, -50%) scale(0);
            -ms-transform: translate(-50%, -50%) scale(0);
            transform: translate(-50%, -50%) scale(0);
            -webkit-transition: -webkit-transform 0s;
            transition: -webkit-transform 0s;
            -o-transition: transform 0s;
            transition: transform 0s;
            transition: transform 0s, -webkit-transform 0s;
        }

        /* ----- Primary Button Start ----- */

        .button--primary {
            border: none;
            color: rgb(255, 255, 255);
            background-color: #ff5c62;
            -webkit-box-shadow: 0 2px 12px -6px #cc292f;
            box-shadow: 0 2px 12px -6px #cc292f;
        }

        /* Hover, Focus */
        .button--primary:hover, .button--primary:focus {
            color: rgb(255, 255, 255);
            -webkit-box-shadow: 0 2px 16px -6px #cc292f;
            box-shadow: 0 2px 16px -6px #cc292f;
        }

        /* Active */
        .button--primary:active {
            -webkit-box-shadow: 0 6px 20px -6px #cc292f;
            box-shadow: 0 6px 20px -6px #cc292f;
        }

        /* Ripple */
        .button--primary:after {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            border-radius: 50%;
            width: 20rem; /* Safari */
            height: 20rem; /* Safari */
            background-color: rgb(255, 255, 255);
            opacity: 0;
            -webkit-transform: translate(-50%, -50%) scale(1);
            -ms-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1);
            -webkit-transition: opacity 1s, -webkit-transform 0.5s;
            transition: opacity 1s, -webkit-transform 0.5s;
            -o-transition: opacity 1s, transform 0.5s;
            transition: opacity 1s, transform 0.5s;
            transition: opacity 1s, transform 0.5s, -webkit-transform 0.5s;
        }

        /* ----- Primary Button End ----- */

        /* ----- Button Styling End ----- */

        .main-ctas--mobile {
            display: none;
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
            margin-bottom: 30px;
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) {
            html {
                font-size: 1.3vh;
            }

            .image-holder {
                height: 60vh;
            }
        }

        @media screen and (max-width: 991px) {
            html {
                font-size: 12px;
            }

            .image-holder {
                height: 50vh;
            }
        }

        @media screen and (max-width: 768px) {
            .logo-holder {
                width: 50%;
                max-width: 155px;
            }

            .image-holder {
                height: 60vh;
            }

            .corgi {
                width: 25vw;
            }

            .corgi__spotlight {
                width: 80%;
            }

            .error-code-bg {
                font-size: 50vw;
            }
        }

        @media screen and (max-width: 480px) {
            .bottom-section--heading-mobile {
                margin: auto;
                width: 90%;
            }

            .heading-1 {

                font-size: 3.25rem;
            }

            .logo-holder {
                width: 40%;
                margin-top: 3vh;
                margin-bottom: 5vh;
            }

            .main-ctas {
                display: none;
            }

            .main-ctas__button {
                -webkit-box-flex: 1;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
            }

            .main-ctas__button--spaced {
                margin: 0 5%;
            }

            .main-ctas--mobile {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                display: -webkit-flex;
            }

            .button {
                padding: 0.5em 20px;
            }

            .image-holder {
                height: 60vh;
            }

            .corgi__spotlight {
                width: 100%;
            }

            .error-code-bg {
                font-size: 55vw;
            }

            .corgi {
                width: 35vw;
            }

            .top-section {
                -ms-flex-positive: 1;
                -webkit-flex-grow: 1;
                flex-grow: 1;
                margin: 0;
            }

            .container:hover .corgi--default {
                display: none;
            }

            .container:hover .corgi--hover {
                display: block;
            }
        }
    </style>
    <script id="omapi-script" src="https://a.optnmstr.com/app/js/api.min.js" async=""></script>
    <style type="text/css">
        @-webkit-keyframes bounce {
                               0%, 20%, 50%, 80%, to {
                                   -webkit-transform: translateY(0);
                                   transform: translateY(0)
                               }
                               40% {
                                   -webkit-transform: translateY(-30px);
                                   transform: translateY(-30px)
                               }
                               60% {
                                   -webkit-transform: translateY(-15px);
                                   transform: translateY(-15px)
                               }
                           }

        @keyframes bounce {
            0%, 20%, 50%, 80%, to {
                -webkit-transform: translateY(0);
                transform: translateY(0)
            }
            40% {
                -webkit-transform: translateY(-30px);
                transform: translateY(-30px)
            }
            60% {
                -webkit-transform: translateY(-15px);
                transform: translateY(-15px)
            }
        }

        .om-animation-bounce {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: bounce;
            animation-name: bounce
        }

        @-webkit-keyframes bounceIn {
            0% {
                opacity: 0;
                -webkit-transform: scale(.3);
                transform: scale(.3)
            }
            50% {
                opacity: 1;
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }
            70% {
                -webkit-transform: scale(.9);
                transform: scale(.9)
            }
            to {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                -webkit-transform: scale(.3);
                transform: scale(.3)
            }
            50% {
                opacity: 1;
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }
            70% {
                -webkit-transform: scale(.9);
                transform: scale(.9)
            }
            to {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        .om-animation-bounce-in {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-name: bounceIn;
            animation-name: bounceIn
        }

        @-webkit-keyframes bounceInDown {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                transform: translateY(-2000px)
            }
            60% {
                opacity: 1;
                -webkit-transform: translateY(30px);
                transform: translateY(30px)
            }
            80% {
                -webkit-transform: translateY(-10px);
                transform: translateY(-10px)
            }
            to {
                -webkit-transform: translateY(0);
                transform: translateY(0)
            }
        }

        @keyframes bounceInDown {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                transform: translateY(-2000px)
            }
            60% {
                opacity: 1;
                -webkit-transform: translateY(30px);
                transform: translateY(30px)
            }
            80% {
                -webkit-transform: translateY(-10px);
                transform: translateY(-10px)
            }
            to {
                -webkit-transform: translateY(0);
                transform: translateY(0)
            }
        }

        .om-animation-bounce-in-down {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-name: bounceInDown;
            animation-name: bounceInDown
        }

        @-webkit-keyframes bounceInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                transform: translateX(-2000px)
            }
            60% {
                opacity: 1;
                -webkit-transform: translateX(30px);
                transform: translateX(30px)
            }
            80% {
                -webkit-transform: translateX(-10px);
                transform: translateX(-10px)
            }
            to {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        @keyframes bounceInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                transform: translateX(-2000px)
            }
            60% {
                opacity: 1;
                -webkit-transform: translateX(30px);
                transform: translateX(30px)
            }
            80% {
                -webkit-transform: translateX(-10px);
                transform: translateX(-10px)
            }
            to {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        .om-animation-bounce-in-left {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-name: bounceInLeft;
            animation-name: bounceInLeft
        }

        @-webkit-keyframes bounceInRight {
            0% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                transform: translateX(2000px)
            }
            60% {
                opacity: 1;
                -webkit-transform: translateX(-30px);
                transform: translateX(-30px)
            }
            80% {
                -webkit-transform: translateX(10px);
                transform: translateX(10px)
            }
            to {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        @keyframes bounceInRight {
            0% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                transform: translateX(2000px)
            }
            60% {
                opacity: 1;
                -webkit-transform: translateX(-30px);
                transform: translateX(-30px)
            }
            80% {
                -webkit-transform: translateX(10px);
                transform: translateX(10px)
            }
            to {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        .om-animation-bounce-in-right {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-name: bounceInRight;
            animation-name: bounceInRight
        }

        @-webkit-keyframes bounceInUp {
            0% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
                transform: translateY(2000px)
            }
            60% {
                opacity: 1;
                -webkit-transform: translateY(-30px);
                transform: translateY(-30px)
            }
            80% {
                -webkit-transform: translateY(10px);
                transform: translateY(10px)
            }
            to {
                -webkit-transform: translateY(0);
                transform: translateY(0)
            }
        }

        @keyframes bounceInUp {
            0% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
                transform: translateY(2000px)
            }
            60% {
                opacity: 1;
                -webkit-transform: translateY(-30px);
                transform: translateY(-30px)
            }
            80% {
                -webkit-transform: translateY(10px);
                transform: translateY(10px)
            }
            to {
                -webkit-transform: translateY(0);
                transform: translateY(0)
            }
        }

        .om-animation-bounce-in-up {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-name: bounceInUp;
            animation-name: bounceInUp
        }

        @-webkit-keyframes flash {
            0%, 50%, to {
                opacity: 1
            }
            25%, 75% {
                opacity: 0
            }
        }

        @keyframes flash {
            0%, 50%, to {
                opacity: 1
            }
            25%, 75% {
                opacity: 0
            }
        }

        .om-animation-flash {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: flash;
            animation-name: flash
        }

        @-webkit-keyframes flip {
            0% {
                -webkit-transform: perspective(800px) translateZ(0) rotateY(0) scale(1);
                transform: perspective(800px) translateZ(0) rotateY(0) scale(1);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out
            }
            40% {
                -webkit-transform: perspective(800px) translateZ(150px) rotateY(170deg) scale(1);
                transform: perspective(800px) translateZ(150px) rotateY(170deg) scale(1);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out
            }
            50% {
                -webkit-transform: perspective(800px) translateZ(150px) rotateY(190deg) scale(1);
                transform: perspective(800px) translateZ(150px) rotateY(190deg) scale(1);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in
            }
            80% {
                -webkit-transform: perspective(800px) translateZ(0) rotateY(1turn) scale(.95);
                transform: perspective(800px) translateZ(0) rotateY(1turn) scale(.95);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in
            }
            to {
                -webkit-transform: perspective(800px) translateZ(0) rotateY(1turn) scale(1);
                transform: perspective(800px) translateZ(0) rotateY(1turn) scale(1);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in
            }
        }

        @keyframes flip {
            0% {
                -webkit-transform: perspective(800px) translateZ(0) rotateY(0) scale(1);
                transform: perspective(800px) translateZ(0) rotateY(0) scale(1);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out
            }
            40% {
                -webkit-transform: perspective(800px) translateZ(150px) rotateY(170deg) scale(1);
                transform: perspective(800px) translateZ(150px) rotateY(170deg) scale(1);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out
            }
            50% {
                -webkit-transform: perspective(800px) translateZ(150px) rotateY(190deg) scale(1);
                transform: perspective(800px) translateZ(150px) rotateY(190deg) scale(1);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in
            }
            80% {
                -webkit-transform: perspective(800px) translateZ(0) rotateY(1turn) scale(.95);
                transform: perspective(800px) translateZ(0) rotateY(1turn) scale(.95);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in
            }
            to {
                -webkit-transform: perspective(800px) translateZ(0) rotateY(1turn) scale(1);
                transform: perspective(800px) translateZ(0) rotateY(1turn) scale(1);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in
            }
        }

        .om-animation-flip {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-backface-visibility: visible;
            backface-visibility: visible;
            -webkit-animation-name: flip;
            animation-name: flip
        }

        @-webkit-keyframes flipInX {
            0% {
                -webkit-transform: perspective(800px) rotateX(90deg);
                transform: perspective(800px) rotateX(90deg);
                opacity: 0
            }
            40% {
                -webkit-transform: perspective(800px) rotateX(-10deg);
                transform: perspective(800px) rotateX(-10deg)
            }
            70% {
                -webkit-transform: perspective(800px) rotateX(10deg);
                transform: perspective(800px) rotateX(10deg)
            }
            to {
                -webkit-transform: perspective(800px) rotateX(0deg);
                transform: perspective(800px) rotateX(0deg);
                opacity: 1
            }
        }

        @keyframes flipInX {
            0% {
                -webkit-transform: perspective(800px) rotateX(90deg);
                transform: perspective(800px) rotateX(90deg);
                opacity: 0
            }
            40% {
                -webkit-transform: perspective(800px) rotateX(-10deg);
                transform: perspective(800px) rotateX(-10deg)
            }
            70% {
                -webkit-transform: perspective(800px) rotateX(10deg);
                transform: perspective(800px) rotateX(10deg)
            }
            to {
                -webkit-transform: perspective(800px) rotateX(0deg);
                transform: perspective(800px) rotateX(0deg);
                opacity: 1
            }
        }

        .om-animation-flip-down {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-backface-visibility: visible;
            backface-visibility: visible;
            -webkit-animation-name: flipInX;
            animation-name: flipInX
        }

        @-webkit-keyframes flipInY {
            0% {
                -webkit-transform: perspective(800px) rotateY(90deg);
                transform: perspective(800px) rotateY(90deg);
                opacity: 0
            }
            40% {
                -webkit-transform: perspective(800px) rotateY(-10deg);
                transform: perspective(800px) rotateY(-10deg)
            }
            70% {
                -webkit-transform: perspective(800px) rotateY(10deg);
                transform: perspective(800px) rotateY(10deg)
            }
            to {
                -webkit-transform: perspective(800px) rotateY(0deg);
                transform: perspective(800px) rotateY(0deg);
                opacity: 1
            }
        }

        @keyframes flipInY {
            0% {
                -webkit-transform: perspective(800px) rotateY(90deg);
                transform: perspective(800px) rotateY(90deg);
                opacity: 0
            }
            40% {
                -webkit-transform: perspective(800px) rotateY(-10deg);
                transform: perspective(800px) rotateY(-10deg)
            }
            70% {
                -webkit-transform: perspective(800px) rotateY(10deg);
                transform: perspective(800px) rotateY(10deg)
            }
            to {
                -webkit-transform: perspective(800px) rotateY(0deg);
                transform: perspective(800px) rotateY(0deg);
                opacity: 1
            }
        }

        .om-animation-flip-side {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-backface-visibility: visible;
            backface-visibility: visible;
            -webkit-animation-name: flipInY;
            animation-name: flipInY
        }

        @-webkit-keyframes lightSpeedIn {
            0% {
                -webkit-transform: translateX(100%) skewX(-30deg);
                transform: translateX(100%) skewX(-30deg);
                opacity: 0
            }
            60% {
                -webkit-transform: translateX(-20%) skewX(30deg);
                transform: translateX(-20%) skewX(30deg);
                opacity: 1
            }
            80% {
                -webkit-transform: translateX(0) skewX(-15deg);
                transform: translateX(0) skewX(-15deg);
                opacity: 1
            }
            to {
                -webkit-transform: translateX(0) skewX(0deg);
                transform: translateX(0) skewX(0deg);
                opacity: 1
            }
        }

        @keyframes lightSpeedIn {
            0% {
                -webkit-transform: translateX(100%) skewX(-30deg);
                transform: translateX(100%) skewX(-30deg);
                opacity: 0
            }
            60% {
                -webkit-transform: translateX(-20%) skewX(30deg);
                transform: translateX(-20%) skewX(30deg);
                opacity: 1
            }
            80% {
                -webkit-transform: translateX(0) skewX(-15deg);
                transform: translateX(0) skewX(-15deg);
                opacity: 1
            }
            to {
                -webkit-transform: translateX(0) skewX(0deg);
                transform: translateX(0) skewX(0deg);
                opacity: 1
            }
        }

        .om-animation-light-speed {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-name: lightSpeedIn;
            animation-name: lightSpeedIn;
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out
        }

        @-webkit-keyframes pulse {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            50% {
                -webkit-transform: scale(1.1);
                transform: scale(1.1)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes pulse {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            50% {
                -webkit-transform: scale(1.1);
                transform: scale(1.1)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        .om-animation-pulse {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: pulse;
            animation-name: pulse
        }

        @-webkit-keyframes rollIn {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-100%) rotate(-120deg);
                transform: translateX(-100%) rotate(-120deg)
            }
            to {
                opacity: 1;
                -webkit-transform: translateX(0) rotate(0deg);
                transform: translateX(0) rotate(0deg)
            }
        }

        @keyframes rollIn {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-100%) rotate(-120deg);
                transform: translateX(-100%) rotate(-120deg)
            }
            to {
                opacity: 1;
                -webkit-transform: translateX(0) rotate(0deg);
                transform: translateX(0) rotate(0deg)
            }
        }

        .om-animation-roll-in {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-name: rollIn;
            animation-name: rollIn
        }

        @-webkit-keyframes rotateIn {
            0% {
                -webkit-transform-origin: center center;
                transform-origin: center center;
                -webkit-transform: rotate(-200deg);
                transform: rotate(-200deg);
                opacity: 0
            }
            to {
                -webkit-transform-origin: center center;
                transform-origin: center center;
                -webkit-transform: rotate(0);
                transform: rotate(0);
                opacity: 1
            }
        }

        @keyframes rotateIn {
            0% {
                -webkit-transform-origin: center center;
                transform-origin: center center;
                -webkit-transform: rotate(-200deg);
                transform: rotate(-200deg);
                opacity: 0
            }
            to {
                -webkit-transform-origin: center center;
                transform-origin: center center;
                -webkit-transform: rotate(0);
                transform: rotate(0);
                opacity: 1
            }
        }

        .om-animation-rotate {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-name: rotateIn;
            animation-name: rotateIn
        }

        @-webkit-keyframes rotateInDownLeft {
            0% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0
            }
            to {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate(0);
                transform: rotate(0);
                opacity: 1
            }
        }

        @keyframes rotateInDownLeft {
            0% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0
            }
            to {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate(0);
                transform: rotate(0);
                opacity: 1
            }
        }

        .om-animation-rotate-down-left {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-name: rotateInDownLeft;
            animation-name: rotateInDownLeft
        }

        @-webkit-keyframes rotateInDownRight {
            0% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0
            }
            to {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate(0);
                transform: rotate(0);
                opacity: 1
            }
        }

        @keyframes rotateInDownRight {
            0% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0
            }
            to {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate(0);
                transform: rotate(0);
                opacity: 1
            }
        }

        .om-animation-rotate-down-right {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-name: rotateInDownRight;
            animation-name: rotateInDownRight
        }

        @-webkit-keyframes rotateInUpLeft {
            0% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0
            }
            to {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate(0);
                transform: rotate(0);
                opacity: 1
            }
        }

        @keyframes rotateInUpLeft {
            0% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0
            }
            to {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate(0);
                transform: rotate(0);
                opacity: 1
            }
        }

        .om-animation-rotate-up-left {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-name: rotateInUpLeft;
            animation-name: rotateInUpLeft
        }

        @-webkit-keyframes rotateInUpRight {
            0% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0
            }
            to {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate(0);
                transform: rotate(0);
                opacity: 1
            }
        }

        @keyframes rotateInUpRight {
            0% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0
            }
            to {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate(0);
                transform: rotate(0);
                opacity: 1
            }
        }

        .om-animation-rotate-up-right {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-name: rotateInUpRight;
            animation-name: rotateInUpRight
        }

        @-webkit-keyframes rubberBand {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            30% {
                -webkit-transform: scaleX(1.25) scaleY(.75);
                transform: scaleX(1.25) scaleY(.75)
            }
            40% {
                -webkit-transform: scaleX(.75) scaleY(1.25);
                transform: scaleX(.75) scaleY(1.25)
            }
            60% {
                -webkit-transform: scaleX(1.15) scaleY(.85);
                transform: scaleX(1.15) scaleY(.85)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes rubberBand {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            30% {
                -webkit-transform: scaleX(1.25) scaleY(.75);
                transform: scaleX(1.25) scaleY(.75)
            }
            40% {
                -webkit-transform: scaleX(.75) scaleY(1.25);
                transform: scaleX(.75) scaleY(1.25)
            }
            60% {
                -webkit-transform: scaleX(1.15) scaleY(.85);
                transform: scaleX(1.15) scaleY(.85)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        .om-animation-rubber-band {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: rubberBand;
            animation-name: rubberBand
        }

        @-webkit-keyframes shake {
            0%, to {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
            10%, 30%, 50%, 70%, 90% {
                -webkit-transform: translateX(-10px);
                transform: translateX(-10px)
            }
            20%, 40%, 60%, 80% {
                -webkit-transform: translateX(10px);
                transform: translateX(10px)
            }
        }

        @keyframes shake {
            0%, to {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
            10%, 30%, 50%, 70%, 90% {
                -webkit-transform: translateX(-10px);
                transform: translateX(-10px)
            }
            20%, 40%, 60%, 80% {
                -webkit-transform: translateX(10px);
                transform: translateX(10px)
            }
        }

        .om-animation-shake {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: shake;
            animation-name: shake
        }

        @-webkit-keyframes slideInDown {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                transform: translateY(-2000px)
            }
            to {
                -webkit-transform: translateY(0);
                transform: translateY(0)
            }
        }

        @keyframes slideInDown {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                transform: translateY(-2000px)
            }
            to {
                -webkit-transform: translateY(0);
                transform: translateY(0)
            }
        }

        .om-animation-slide-in-down {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-name: slideInDown;
            animation-name: slideInDown
        }

        @-webkit-keyframes slideInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                transform: translateX(-2000px)
            }
            to {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        @keyframes slideInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                transform: translateX(-2000px)
            }
            to {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        .om-animation-slide-in-left {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-name: slideInLeft;
            animation-name: slideInLeft
        }

        @-webkit-keyframes slideInRight {
            0% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                transform: translateX(2000px)
            }
            to {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        @keyframes slideInRight {
            0% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                transform: translateX(2000px)
            }
            to {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        .om-animation-slide-in-right {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-name: slideInRight;
            animation-name: slideInRight
        }

        @-webkit-keyframes swing {
            20% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg)
            }
            40% {
                -webkit-transform: rotate(-10deg);
                transform: rotate(-10deg)
            }
            60% {
                -webkit-transform: rotate(5deg);
                transform: rotate(5deg)
            }
            80% {
                -webkit-transform: rotate(-5deg);
                transform: rotate(-5deg)
            }
            to {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }
        }

        @keyframes swing {
            20% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg)
            }
            40% {
                -webkit-transform: rotate(-10deg);
                transform: rotate(-10deg)
            }
            60% {
                -webkit-transform: rotate(5deg);
                transform: rotate(5deg)
            }
            80% {
                -webkit-transform: rotate(-5deg);
                transform: rotate(-5deg)
            }
            to {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }
        }

        .om-animation-swing {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-transform-origin: top center;
            transform-origin: top center;
            -webkit-animation-name: swing;
            animation-name: swing
        }

        @-webkit-keyframes tada {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            10%, 20% {
                -webkit-transform: scale(.9) rotate(-3deg);
                transform: scale(.9) rotate(-3deg)
            }
            30%, 50%, 70%, 90% {
                -webkit-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg)
            }
            40%, 60%, 80% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg)
            }
            to {
                -webkit-transform: scale(1) rotate(0);
                transform: scale(1) rotate(0)
            }
        }

        @keyframes tada {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            10%, 20% {
                -webkit-transform: scale(.9) rotate(-3deg);
                transform: scale(.9) rotate(-3deg)
            }
            30%, 50%, 70%, 90% {
                -webkit-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg)
            }
            40%, 60%, 80% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg)
            }
            to {
                -webkit-transform: scale(1) rotate(0);
                transform: scale(1) rotate(0)
            }
        }

        .om-animation-tada {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-name: tada;
            animation-name: tada
        }

        @-webkit-keyframes wobble {
            0% {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
            15% {
                -webkit-transform: translateX(-25%) rotate(-5deg);
                transform: translateX(-25%) rotate(-5deg)
            }
            30% {
                -webkit-transform: translateX(20%) rotate(3deg);
                transform: translateX(20%) rotate(3deg)
            }
            45% {
                -webkit-transform: translateX(-15%) rotate(-3deg);
                transform: translateX(-15%) rotate(-3deg)
            }
            60% {
                -webkit-transform: translateX(10%) rotate(2deg);
                transform: translateX(10%) rotate(2deg)
            }
            75% {
                -webkit-transform: translateX(-5%) rotate(-1deg);
                transform: translateX(-5%) rotate(-1deg)
            }
            to {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        @keyframes wobble {
            0% {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
            15% {
                -webkit-transform: translateX(-25%) rotate(-5deg);
                transform: translateX(-25%) rotate(-5deg)
            }
            30% {
                -webkit-transform: translateX(20%) rotate(3deg);
                transform: translateX(20%) rotate(3deg)
            }
            45% {
                -webkit-transform: translateX(-15%) rotate(-3deg);
                transform: translateX(-15%) rotate(-3deg)
            }
            60% {
                -webkit-transform: translateX(10%) rotate(2deg);
                transform: translateX(10%) rotate(2deg)
            }
            75% {
                -webkit-transform: translateX(-5%) rotate(-1deg);
                transform: translateX(-5%) rotate(-1deg)
            }
            to {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        .om-animation-wobble {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-name: wobble;
            animation-name: wobble
        }

        .om-content-lock {
            color: transparent !important;
            text-shadow: rgba(0, 0, 0, .5) 0 0 10px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            pointer-events: none;
            filter: url("data:image/svg+xml;utf9,<svg%20version='1.1'%20xmlns='http://www.w3.org/2000/svg'><filter%20id='blur'><feGaussianBlur%20stdDeviation='10'%20/></filter></svg>#blur");
            -webkit-filter: blur(10px);
            -ms-filter: blur(10px);
            -o-filter: blur(10px);
            filter: blur(10px)
        }

        html.om-mobile-position, html.om-mobile-position body {
            position: fixed !important
        }

        html.om-ios-form, html.om-ios-form body {
            -webkit-transform: translateZ(0) !important;
            transform: translateZ(0) !important;
            -webkit-overflow-scrolling: touch !important;
            height: 100% !important;
            overflow: auto !important
        }

        html.om-position-popup body {
            overflow: hidden !important
        }

        html.om-position-floating-top {
            transition: padding-top .5s ease !important
        }

        html.om-position-floating-bottom {
            transition: padding-bottom .5s ease !important
        }

        html.om-reset-dimensions {
            height: 100% !important;
            width: 100% !important
        }

        .om-verification-confirmation {
            font-family: Lato, Arial, Helvetica, sans-serif;
            position: fixed;
            border-radius: 10px;
            bottom: 20px;
            left: 20px;
            padding: 10px 20px;
            opacity: 0;
            transition: opacity .3s ease-in;
            background: #85bf31;
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            z-index: 9999
        }</style>
</head>

<body class="bg-black">
<div class="container flex flex-column full-width align-items-center">
    <div class="top-section flex flex-column full-width align-items-center">
        <div class="logo-holder">
            <!--<h1>ChatX</h1>-->
        </div>
        <div class="image-holder flex justify-content-center">
            <img src="https://cdn.000webhost.com/000webhost/000webhost-pages/corgi-spotlight.svg"
                 class="corgi__spotlight" alt="Dog spotlight">
            <div class="corgi">
                <img src="https://cdn.000webhost.com/000webhost/000webhost-pages/corgi-lies-on-ground.svg"
                     class="corgi--default" alt="Dog lies on the ground">
                <img src="https://cdn.000webhost.com/000webhost/000webhost-pages/corgi-lies-on-ground-looking-back.svg"
                     class="corgi--hover" alt="Dog lies on the ground and looks back">
            </div>
            <span class="error-code-bg text-bold">404</span>
        </div>
    </div>
    <div class="flex flex-column">
        <div class="bottom-section--heading-mobile">
            <h1 class="heading-1 text-bold text-center text-white mb-30">Page Not Found - Error 404</h1>
        </div>
        <div class="flex justify-content-evenly main-ctas">
            <button class="button button--primary main-ctas__button main-ctas__button--spaced"
                    onclick="document.location.href='/index.php'">Go to homepage</button>
        </div>
        <div class="main-ctas--mobile full-width justify-content-center">
            <button class="button button--primary main-ctas__button main-ctas__button--spaced"
               onclick="document.location.href='/index.php'">Go to homepage</button>
        </div>
    </div>
</div>

<!-- Optin monster -->
<div id="om-xenpppbq3wh9gy8qsrbf-holder"></div>
<script>var xenpppbq3wh9gy8qsrbf, xenpppbq3wh9gy8qsrbf_poll = function () {
        var r = 0;
        return function (n, l) {
            clearInterval(r), r = setInterval(n, l)
        }
    }();
    !function (e, t, n) {
        if (e.getElementById(n)) {
            xenpppbq3wh9gy8qsrbf_poll(function () {
                if (window['om_loaded']) {
                    if (!xenpppbq3wh9gy8qsrbf) {
                        xenpppbq3wh9gy8qsrbf = new OptinMonsterApp();
                        return xenpppbq3wh9gy8qsrbf.init({"u": "13439.673828", "staging": 0, "dev": 0, "beta": 0});
                    }
                }
            }, 25);
            return;
        }
        var d = false, o = e.createElement(t);
        o.id = n, o.src = "https://a.optnmstr.com/app/js/api.min.js", o.async = true, o.onload = o.onreadystatechange = function () {
            if (!d) {
                if (!this.readyState || this.readyState === "loaded" || this.readyState === "complete") {
                    try {
                        d = om_loaded = true;
                        xenpppbq3wh9gy8qsrbf = new OptinMonsterApp();
                        xenpppbq3wh9gy8qsrbf.init({"u": "13439.673828", "staging": 0, "dev": 0, "beta": 0});
                        o.onload = o.onreadystatechange = null;
                    } catch (t) {
                    }
                }
            }
        };
        (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(o)
    }(document, "script", "omapi-script");</script>


</body>
</html>