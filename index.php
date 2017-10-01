<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Интернет-магазин "Чайный клуб" :: Главная</title>
<link rel="stylesheet" rev="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" rev="stylesheet" href="css/style.css">
</head>

<body>

<header>
	<div class="wrap">
        <a href="index.html" class="logo"><img src="img/logo2.png"></a>
        <nav class="header-nav">
            <div class="burger"><span></span><span></span><span></span></div>
            <ul class="ul-header-nav">
                <li><a href="contacts.html">Контакты</a></li>
                <li><a href="#">Авторизация</a></li>
                <li><a href="#">Регистрация</a></li>
                <?= '<li><a href="#">Выход ('.$_GET['user'].')</a></li>';
                ?>
            </ul>
        </nav>
        <div class="clear"></div>
    </div>
</header>

<div class="wrap">
    <div class="content">
        <div class="left-sidebar">
            <div class="left-sidebar-box">
                <div class="left-sidebar-box-category-content">
                	<ul>
                        <?php
                            $link = @mysqli_connect("localhost","root","","inet-shop") or die("no connect");
                            mysqli_set_charset($link, "utf8");
                            $result = mysqli_query($link, "SELECT * FROM categories");
                            if (!$result) {
                                echo mysqli_error($link);
                            }
                            else {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo '<li><a href="#"><i class="fa fa-coffee"></i>'.$row["title"]. ' </a></li>';
                                }
                            }
                            mysqli_close($link);
                        ?>
                    </ul>
                </div>
            </div>
            <div class="left-sidebar-box">
                <div class="left-sidebar-box-banner">
                	<div class="left-sidebar-box-banner-content">
                        <span>Чай "Японика"<br>
                        всего за 500 руб.</span>
                	</div>
                </div>
            </div>
        </div>
        <div class="right-sidebar">
        	<div class="catalog">
<!--                --><?php
//                $d = fopen("tovar.csv","r");
//                while ($data = fgetcsv($d, 500, ';')) {
//                    echo '<a href="tovar.html" class="catalog-element">
//                    <div class="catalog-image">
//                    	<div class="img" style="background-image:url(img/tovar/tea/'.$data[2].');"><img src="img/tovar/tea/'.$data[2].'"></div>
//                        <div class="catalog-rounded"></div>
//                        <div class="catalog-price">'.$data[1].'руб'.'</div>
//                    </div>
//                    <div class="catalog-title">'.$data[0].'</div>
//                </a>';
//                }
//                fclose($d);
//                ?>
                <?php
                $link = @mysqli_connect("localhost","root","","inet-shop") or die("no connect");
                mysqli_set_charset($link, "utf8");
                $result = mysqli_query($link, "SELECT * FROM tovar");
                if (!$result) {
                    echo mysqli_error($link);
                }
                else {
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<a href="tovar.html" class="catalog-element">
                    <div class="catalog-image">
                    <div class="img" style="background-image:url(img/tovar/' .$row['image']. ' );"><img src="img/tovar/' .$row['image']. '"></div>
                        <div class="catalog-rounded"></div>
                        <div class="catalog-price">'.$row["price"].'руб'.'</div>
                    </div>
                    <div class="catalog-title">'.$row["title"].'</div>
                </a>';
                    }
                }
                mysqli_close($link);
                ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

<footer>
	<div class="wrap">
    	<div class="copyright"><i class="fa fa-copyright"></i> 2015 Интернет-магазин "Чайный клуб"</div>
        <div class="footer-nav">
        	<ul class="ul-footer-nav">
                <li><a href="contacts.html">Контакты</a></li>
                <li><a href="#">Авторизация</a></li>
                <li><a href="#">Регистрация</a></li>
            </ul>
        </div>
    	<div class="copyright2"><i class="fa fa-copyright"></i> 2015 Интернет-магазин "Чайный клуб"</div>
        <div class="clear"></div>
    </div>
</footer>

<script src="js/jquery-1.8.3.js"></script>
<script src="js/script.js"></script>
</body>
</html>
