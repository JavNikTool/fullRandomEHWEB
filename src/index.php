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
<!-- <div class="bg_wrapper">

</div> -->
<div class="main_wrap">
    
    <p class="q1">1. Выберите дополнения: <span class="select"></span></p>
    <div class="sub_wrapp active">
    <form action="server.php" method="POST" class="main_wrap__form"> 
        <div class="wrap_element">
            <input class="wrap_element__dop-input" type="checkbox" id="1">
            <label for="1">
                <img class="wrap_element__dop-img" src="img/dops/classick.png" alt="">
            </label>
        </div>
        <div class="wrap_element">
            <input class="wrap_element__dop-input" type="checkbox" id="2">
            <label for="2">
                <img class="wrap_element__dop-img" src="img/dops/dop_1.png" alt="">
            </label>
        </div>
        <div class="wrap_element">
            <input class="wrap_element__dop-input" type="checkbox" id="3">
           <label for="3">
            <img class="wrap_element__dop-img" src="img/dops/dop_2.png" alt="">
           </label>
        </div>
        <div class="wrap_element">
            <input class="wrap_element__dop-input" type="checkbox" id="4">
            <label for="4">
                <img class="wrap_element__dop-img" src="img/dops/dop_3.png" alt="">
            </label>
        </div>
        <div class="wrap_element">
            <input class="wrap_element__dop-input" type="checkbox" id="5">
            <label for="5">
                <img class="wrap_element__dop-img" src="img/dops/dop_4.png" alt="">
            </label>
        </div>
        <div class="wrap_element">
            <input class="wrap_element__dop-input" type="checkbox" id="6">
            <label for="6">
                <img class="wrap_element__dop-img" src="img/dops/dop_5.png" alt="">
            </label>
        </div>
        <div class="wrap_element">
            <input class="wrap_element__dop-input" type="checkbox" id="7">
            <label for="7">
                <img class="wrap_element__dop-img" src="img/dops/dop_6.png" alt="">
            </label>
        </div>
        <div class="wrap_element">
            <input class="wrap_element__dop-input" type="checkbox" id="8">
            <label for="8">
                <img class="wrap_element__dop-img" src="img/dops/dop_7.png" alt="">
            </label>
        </div>
        <div class="wrap_element">
            <input class="wrap_element__dop-input" type="checkbox" id="9">
            <label for="9">
                <img class="wrap_element__dop-img" src="img/dops/dop_8.png" alt="">
            </label>
        </div>
    </form>
    </div>

    <p class="q2">2. Играем с "прелюдиями"? <span class="select"></span></p>
    <div class="sub_wrapp">
        <form action="server.php" method="POST" class="main_wrap__form"> 
            <input class="wrap_element__dop-input" type="checkbox" id="yes">
            <label for="yes"><p class="q2__input">да</p></label>
            <input class="wrap_element__dop-input" type="checkbox" id="no">
            <label for="no"><p class="q2__input">нет</p></label>
        </form>
    </div>

    <p class="q3">3. Количество игроков <span class="select"></span></p>
    <div class="sub_wrapp">
        <form action="server.php" method="POST" class="main_wrap__form"> 
           
        </form>
    </div>
</div>
<script src="js/script.js"></script>
</body>
</html>