<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="style.css" media="all" rel="stylesheet" type="text/css" />
    <link href="/bootstrap/css/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" media="all" rel="stylesheet" type="text/css" />
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <title>Страничка Бормана</title>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.datapicker').datepicker({dateFormat:'d.mm.yy'})
        });
    </script>
</head>


<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <div class="navbar-header">
<!--                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                </button>-->
            </div>

            <a class="navbar-brand" href="#">Страничка Бормана</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="activ"><a href="/">Рассчет Пифагора</a></li>
                <li><a href="game_number.php">Угадай число</a></li>
                <li><a href="multiply_game.php">Умножение чисел</a></li>
                <li><a href="teorema.php">Решение квадратных уравнений</a></li>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container">

    <div class="starter-template">
