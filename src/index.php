<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FullRandomEH</title>
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/jquery.min.js"></script>
    <script defer src="js/script.js"></script>
</head>
<body>
<div class="main_wrap">
    <form method="POST" class="main_wrap__form">
        <p class="questions">1. Выберите дополнения: <span class="select-btn"></span></p>
        <div class="questions_body active">
            <div class="questions_body__element">
                <input class="questions_body__element-input" type="checkbox" checked id="dop0" disabled name="dop0">
                <label for="dop0">
                    <img class="questions_body__element-img" src="img/dops/classick.png" alt="">
                </label>
            </div>
            <div class="questions_body__element">
                <input class="questions_body__element-input" type="checkbox" id="dop1" name="dop1">
                <label for="dop1">
                    <img class="questions_body__element-img" src="img/dops/dop_1.png" alt="">
                </label>
            </div>
            <div class="questions_body__element">
                <input class="questions_body__element-input" type="checkbox" id="dop2" name="dop2">
               <label for="dop2">
                <img class="questions_body__element-img" src="img/dops/dop_2.png" alt="">
               </label>
            </div>
            <div class="questions_body__element">
                <input class="questions_body__element-input" type="checkbox" id="dop3" name="dop3">
                <label for="dop3">
                    <img class="questions_body__element-img" src="img/dops/dop_3.png" alt="">
                </label>
            </div>
            <div class="questions_body__element">
                <input class="questions_body__element-input" type="checkbox" id="dop4" name="dop4">
                <label for="dop4">
                    <img class="questions_body__element-img" src="img/dops/dop_4.png" alt="">
                </label>
            </div>
            <div class="questions_body__element">
                <input class="questions_body__element-input" type="checkbox" id="dop5" name="dop5">
                <label for="dop5">
                    <img class="questions_body__element-img" src="img/dops/dop_5.png" alt="">
                </label>
            </div>
            <div class="questions_body__element">
                <input class="questions_body__element-input" type="checkbox" id="dop6" name="dop6">
                <label for="dop6">
                    <img class="questions_body__element-img" src="img/dops/dop_6.png" alt="">
                </label>
            </div>
            <div class="questions_body__element">
                <input class="questions_body__element-input" type="checkbox" id="dop7" name="dop7">
                <label for="dop7">
                    <img class="questions_body__element-img" src="img/dops/dop_7.png" alt="">
                </label>
            </div>
            <div class="questions_body__element">
                <input class="questions_body__element-input" type="checkbox" id="dop8" name="dop8">
                <label for="dop8">
                    <img class="questions_body__element-img" src="img/dops/dop_8.png" alt="">
                </label>
            </div>
        </div>
        <p class="questions">2. Играем с "прелюдиями"? <span class="select-btn"></span></p>
        <div class="questions_body">
            <input type="checkbox" checked id="yes" name="preludes_yes">
            <label for="yes"><p class="q2__input">да</p></label>
        </div>
        <p class="questions">3. Количество игроков <span class="select-btn"></span></p>
        <div class="questions_body">
            <input type="range" min="1" max="8" value="1" class="playersCount" id="myRange" name="playersCount">
            <output></output>
        </div>
        <input type="submit" class="submit" value="Начать">
    </form>
</div>

<div class="res_wrap">
    <span class="res_wrap__close">X</span>
    <p class="res_wrap__value">
    </p>
</div>

</body>
</html>