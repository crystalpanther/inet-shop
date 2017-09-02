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
                            $categories = ['Чай', 'Кофе', 'Посуда', 'Компот', 'Мёд', 'Мате'];

                            foreach ($categories as $category) {
                                echo '<li><a href="#"><i class="fa fa-coffee"></i>'.$category.'</a></li>';
                            }
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
            	<a href="tovar.html" class="catalog-element">
                    <div class="catalog-image">
                    	<div class="img" style="background-image:url(img/tovar/tea/gaba_alishan.jpg);"><img src="img/tovar/tea/gaba_alishan.jpg"></div>
                        <div class="catalog-rounded"></div>
                        <div class="catalog-price">430 руб.</div>
                    </div>
                    <div class="catalog-title">Габа Алишань</div>
                </a>
            	<a href="tovar.html" class="catalog-element">
                    <div class="catalog-image">
                    	<div class="img" style="background-image:url(img/tovar/tea/dahunpao.jpg);"><img src="img/tovar/tea/dahunpao.jpg"></div>
                        <div class="catalog-rounded"></div>
                        <div class="catalog-price">540 руб.</div>
                    </div>
                    <div class="catalog-title">Да Хун Пао</div>
                </a>
            	<a href="tovar.html" class="catalog-element">
                    <div class="catalog-image">
                    	<div class="img" style="background-image:url(img/tovar/tea/jasminulun.jpg);"><img src="img/tovar/tea/jasminulun.jpg"></div>
                        <div class="catalog-rounded"></div>
                        <div class="catalog-price">285 руб.</div>
                    </div>
                    <div class="catalog-title">Жасминовый Улун</div>
                </a>
            	<a href="tovar.html" href="tovar.html" class="catalog-element">
                    <div class="catalog-image">
                    	<div class="img" style="background-image:url(img/tovar/tea/gaba_alishan.jpg);"><img src="img/tovar/tea/gaba_alishan.jpg"></div>
                        <div class="catalog-rounded"></div>
                        <div class="catalog-price">430 руб.</div>
                    </div>
                    <div class="catalog-title">Габа Алишань</div>
                </a>
            	<a href="tovar.html" class="catalog-element">
                    <div class="catalog-image">
                    	<div class="img" style="background-image:url(img/tovar/tea/dahunpao.jpg);"><img src="img/tovar/tea/dahunpao.jpg"></div>
                        <div class="catalog-rounded"></div>
                        <div class="catalog-price">540 руб.</div>
                    </div>
                    <div class="catalog-title">Да Хун Пао</div>
                </a>
            	<a href="tovar.html" class="catalog-element">
                    <div class="catalog-image">
                    	<div class="img" style="background-image:url(img/tovar/tea/jasminulun.jpg);"><img src="img/tovar/tea/jasminulun.jpg"></div>
                        <div class="catalog-rounded"></div>
                        <div class="catalog-price">285 руб.</div>
                    </div>
                    <div class="catalog-title">Жасминовый Улун</div>
                </a>
            	<a href="tovar.html" href="tovar.html" class="catalog-element">
                    <div class="catalog-image">
                    	<div class="img" style="background-image:url(img/tovar/tea/gaba_alishan.jpg);"><img src="img/tovar/tea/gaba_alishan.jpg"></div>
                        <div class="catalog-rounded"></div>
                        <div class="catalog-price">430 руб.</div>
                    </div>
                    <div class="catalog-title">Габа Алишань</div>
                </a>
            	<a href="tovar.html" class="catalog-element">
                    <div class="catalog-image">
                    	<div class="img" style="background-image:url(img/tovar/tea/dahunpao.jpg);"><img src="img/tovar/tea/dahunpao.jpg"></div>
                        <div class="catalog-rounded"></div>
                        <div class="catalog-price">540 руб.</div>
                    </div>
                    <div class="catalog-title">Да Хун Пао</div>
                </a>
            	<a href="tovar.html" class="catalog-element">
                    <div class="catalog-image">
                    	<div class="img" style="background-image:url(img/tovar/tea/jasminulun.jpg);"><img src="img/tovar/tea/jasminulun.jpg"></div>
                        <div class="catalog-rounded"></div>
                        <div class="catalog-price">285 руб.</div>
                    </div>
                    <div class="catalog-title">Жасминовый Улун</div>
                </a>
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
