<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animaciones</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <style>
        :root{
            --color-orange : #fab44b;
            --color-white: #fff;
            --font-main: "Open Sans", sans-serif;
            --size-pulse-rounded: 10px;
        }
        .btn{
            padding: 7px 15px;
            font-size: 12px;
            text-transform: uppercase;
            color: var(--color-white);
            border: 0;
            border-radius: 5px;
            line-height: 1;
            font-weight: 700;
            font-family: var(--font-main);
            outline: 0 none;
            cursor: pointer;
        }
        .btn.btn--large{
            padding: 22px 25px;
            font-size: 13px;
            border-radius: 7px;
        }
        .btn.btn--orange{
            background-color: var(--color-orange);
        }

        .animation-contain-pulse{
            display: inline-flex;
            width: 48px;
            height: 48px;
            justify-content: center;
            align-items: center;
            background-color: var(--color-orange);
        }
        .animation-contain-pulse.animation-contain-pulse--large{
            width: 240px;
            height: 240px;
        }
        /*animation normal-pulste*/
        .animation-pulsate{
            background-color: var(--color-white);
            width: 10px;
            height: 10px;
            z-index: 1;
            display: block;
            position: relative;
            border-radius: 50%;
            line-height: 1;
        }
        .animation-pulsate-round{
            width: 10px;
            height: 10px;
            display: block;
            position: relative;
            border-radius: 50%;
            background-color: var(--color-white);
            z-index: 1;
            animation: pulsate 1s linear infinite;
        }
        .animation-pulsate-round:before,
        .animation-pulsate-round:after{
            content:"";
            display: block;
            border-radius: 50%;
            position: absolute;
            width: 20px;
            height: 20px;
            left: 50%;
            top: 50%;
            margin-left: -10px;
            margin-top: -10px;
            background-color: #fff;
        }
        .animation-pulsate-round:before{
            animation: pulsate-before 1s linear infinite;
            z-index: 2;
        }
        .animation-pulsate-round:after{
            animation: pulsate-after 1s linear infinite;
            z-index: 1;
        }
        /*animation -pulsate large*/
        .animation-pulsate.animation-pulsate--large{
            width: 50px;
            height: 50px;
        }
        .animation-pulsate.animation-pulsate--large .animation-pulsate-round{
            width: 50px;
            height: 50px;
        }
        .animation-pulsate.animation-pulsate--large .animation-pulsate-round:before,
        .animation-pulsate.animation-pulsate--large .animation-pulsate-round:after{
            width: 100px;
            height: 100px;
            margin-left: -50px;
            margin-top: -50px;
        }
        @keyframes pulsate {
            0%{
                transform:scale(0.8);
                opacity:0.5;
            }
            10%{
                transform:scale(1.1);
                opacity:1;
            }
            20%{
                transform:scale(0.9);
                opacity:1;
            }
            100%{
                transform:scale(0.8);
                opacity: 0.5;
            }
        }
        @keyframes pulsate-before {
            0%{
                transform:scale(1);
                opacity:0.5;
            }
            30%{
                transform:scale(1);
                opacity:0.5;
            }
            100%{
                transform:scale(2.3);
                opacity:0;
            }
        }
        @keyframes pulsate-after {
            0%{
                transform:scale(1);
                opacity:0.5;
            }
            80%{
                transform:scale(2.9);
                opacity:0;
            }
            100%{
                transform:scale(2.9);
                opacity:0;
            }
        }
    </style>
</head>
<body>
    <!--animation button-->
    <button class="btn btn--large btn--orange btn--credit-vmc btn--animate-bg-large">Hacer una recarga crédito vmc</button>

    <!--animation pulse-->
    <div class="animation-contain-pulse">
        <span class="animation-pulsate animation-pulsate--sm">
            <span class="animation-pulsate-round"></span>
        </span>
    </div>

    <div class="animation-contain-pulse animation-contain-pulse&#45;&#45;large">
        <span class="animation-pulsate animation-pulsate&#45;&#45;large">
            <span class="animation-pulsate-round"></span>
        </span>
    </div>
</body>
</html>