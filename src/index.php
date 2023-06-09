<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FullRandomEH</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main_wrap">

    <p class="questions">1. Выберите дополнения: <span class="select"></span></p>
    <div class="sub_wrapp active">
    <form action="server.php" method="POST" class="main_wrap__form">
        <div class="wrap_element">
            <input class="wrap_element__dop-input" type="checkbox" checked id="checkbox1" name="checkbox1">
            <label for="checkbox1">
                <img class="wrap_element__dop-img" src="img/dops/classick.png" alt="">
            </label>
        </div>
        <div class="wrap_element">
            <input class="wrap_element__dop-input" type="checkbox" id="checkbox2" name="checkbox2">
            <label for="checkbox2">
                <img class="wrap_element__dop-img" src="img/dops/dop_1.png" alt="">
            </label>
        </div>
        <div class="wrap_element">
            <input class="wrap_element__dop-input" type="checkbox" id="checkbox3" name="checkbox3">
           <label for="checkbox3">
            <img class="wrap_element__dop-img" src="img/dops/dop_2.png" alt="">
           </label>
        </div>
        <div class="wrap_element">
            <input class="wrap_element__dop-input" type="checkbox" id="checkbox4" name="checkbox4">
            <label for="checkbox4">
                <img class="wrap_element__dop-img" src="img/dops/dop_3.png" alt="">
            </label>
        </div>
        <div class="wrap_element">
            <input class="wrap_element__dop-input" type="checkbox" id="checkbox5" name="checkbox5">
            <label for="checkbox5">
                <img class="wrap_element__dop-img" src="img/dops/dop_4.png" alt="">
            </label>
        </div>
        <div class="wrap_element">
            <input class="wrap_element__dop-input" type="checkbox" id="checkbox6" name="checkbox6">
            <label for="checkbox6">
                <img class="wrap_element__dop-img" src="img/dops/dop_5.png" alt="">
            </label>
        </div>
        <div class="wrap_element">
            <input class="wrap_element__dop-input" type="checkbox" id="checkbox7" name="checkbox7">
            <label for="checkbox7">
                <img class="wrap_element__dop-img" src="img/dops/dop_6.png" alt="">
            </label>
        </div>
        <div class="wrap_element">
            <input class="wrap_element__dop-input" type="checkbox" id="checkbox8" name="checkbox8">
            <label for="checkbox8">
                <img class="wrap_element__dop-img" src="img/dops/dop_7.png" alt="">
            </label>
        </div>
        <div class="wrap_element">
            <input class="wrap_element__dop-input" type="checkbox" id="checkbox9" name="checkbox9">
            <label for="checkbox9">
                <img class="wrap_element__dop-img" src="img/dops/dop_8.png" alt="">
            </label>
        </div>
    </form>
    </div>

    <p class="questions">2. Играем с "прелюдиями"? <span class="select"></span></p>
    <div class="sub_wrapp">
        <form action="server.php" method="POST" class="main_wrap__form">
            <input class="wrap_element__dop-input" type="checkbox" checked id="yes" name="yes">
            <label for="yes"><p class="q2__input">да</p></label>
            <input class="wrap_element__dop-input" type="checkbox" id="no" name="no">
            <label for="no"><p class="q2__input">нет</p></label>
        </form>
    </div>

    <p class="questions">3. Количество игроков <span class="select"></span></p>
    <div class="sub_wrapp">
        <form action="server.php" method="POST" class="main_wrap__form">
            <input type="range" min="1" max="8" class="slider" id="myRange" name="myRange">
            <output class="slider_value"></output>
        </form>
    </div>
<button id="subm">srgrsrg</button>
</div>
<script src="js/script.js"></script>
</body>
</html>