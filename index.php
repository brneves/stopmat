<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="bootstrap/css/estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>StopMat - Vamos aprender brincando</title>
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu"
                        aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">StopMat</a>
            </div>
            <div class="collapse navbar-collapse text-right" id="menu">
                <ul class="nav navbar-nav">
                    <li><a href="#sobre-nos">Sobre Nós</a></li>
                    <li><a href="#nossos-projetos">Aprendendo</a></li>
                    <li><a href="#depoimentos">Vamos jogar</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container topCasaFina-bannerWrapper">
        <div class="stopMat-banner">
            <h1>StopMat</h1>
            <p>Aprenda matemática brincando!</p>
            <button class="btn btn-primary btn-lg">Vamos jogar</button>
        </div>
    </div>

</header>


<section id="sobre-nos" class="container">

    <h2 class="text-center">Sobre Nós</h2>
    <div class="row">
        <img class="img-responsive col-sm-6" src="img/matematica.jpg" alt="Sobre Nós">

        <div class="panel-group col-sm-6" id="paineis-sobre">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" data-toggle="collapse" data-target="#primeiro-paragrafo"
                        data-parent="#paineis-sobre">Como surgiu</h3>
                </div>
                <div id="primeiro-paragrafo" class="collapse in">
                    <div class="panel-body">
                        <p>A ideia surgiu para facilitar o ensino de operações matemáticas para crianças do ensino
                            fundamental.</p>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" data-toggle="collapse" data-target="#segundo-paragrafo"
                        data-parent="#paineis-sobre">Formas de aprender</h3>
                </div>
                <div id="segundo-paragrafo" class="collapse">
                    <div class="panel-body">
                        <p>Aprenda de forma descontraída.</p>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" data-toggle="collapse" data-target="#terceiro-paragrafo"
                        data-parent="#paineis-sobre">Educação para Ensino Fundamental</h3>
                </div>
                <div id="terceiro-paragrafo" class="collapse">
                    <div class="panel-body">
                        <p>Consolidando de forma divertida o conhecimento da matemática</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="jumbotron">
    <div class="container">
        <h3>Aprendendo matemática de forma divertida</h3>
        <p>Desafie seus amigos e diverta-se enquanto aprende matemática.</p>
    </div>
</div>

<section id="nossos-projetos" class="container">
    <h2 class="text-center">Aprendendo</h2>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-4">
            <figure class="thumbnail text-center backSoma">
                <i class="fas fa-plus-square fa-7x"></i>
                <figcaption class="caption">
                    <h3>Soma</h3>
                </figcaption>
            </figure>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
            <figure class="thumbnail text-center backSubtracao">
                <i class="fas fa-minus fa-7x"></i>
                <figcaption class="caption">
                    <h3>Subtração</h3>
                </figcaption>
            </figure>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
            <figure class="thumbnail text-center backDivisao">
                <i class="fas fa-divide fa-7x"></i>
                <figcaption class="caption">
                    <h3>Divisão</h3>
                </figcaption>
            </figure>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
            <figure class="thumbnail text-center backMultiplicacao">
                <i class="fas fa-times fa-7x"></i>
                <figcaption class="caption">
                    <h3>Multiplicação</h3>
                </figcaption>
            </figure>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
            <figure class="thumbnail text-center backAntecessor">
                <i class="fas fa-reply fa-7x"></i>
                <figcaption class="caption">
                    <h3>Antecessor</h3>
                </figcaption>
            </figure>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
            <figure class="thumbnail text-center backSucessor">
                <i class="fas fa-share fa-7x"></i>
                <figcaption class="caption">
                    <h3>Sucessor</h3>
                </figcaption>
            </figure>
        </div>
        <!--        <div class="col-sm-6 col-md-4 col-lg-3">-->
        <!--            <figure class="thumbnail text-center">-->
        <!--                <i class="fas fa-superscript fa-7x"></i>-->
        <!--                <figcaption class="caption">-->
        <!--                    <h3>Ao quadrado</h3>-->
        <!--                </figcaption>-->
        <!--            </figure>-->
        <!--        </div>-->
        <!--        <div class="col-sm-6 col-md-4 col-lg-3">-->
        <!--            <figure class="thumbnail text-center">-->
        <!--                <i class="fas fa-percentage fa-7x"></i>-->
        <!--                <figcaption class="caption">-->
        <!--                    <h3>Porcentagem</h3>-->
        <!--                </figcaption>-->
        <!--            </figure>-->
        <!--        </div>-->

    </div>
</section>

<section id="jogo" class="container">
    <h2 class="text-center">Vamos jogar</h2>
    <div class="row">
        <div class="col-md-12">
			<?php
			$data = filter_input_array( INPUT_POST, FILTER_DEFAULT );
			if ( isset( $data ) ):

				var_dump( $data );
//                $i = 0;
				//FAZ OS CÁLCULOS
				//faz o loop com os dados enviados
                $pontuacao = 0;
				$contNum = 0;
				foreach ( $data['num'] as $numero ):

					for ( $i = 0; $i <= 5; $i ++ ):

						//verifica a resposta da soma
						$respostaSoma = $numero + $data['soma'];
                        $respostaSub = $numero - $data['subtracao'];
                        $respostaSucessor = $numero + 1;
                        $respostaAntecessor = $numero - 1;
                        $respostaMult = $numero * 2;
                        $respostaDivisao = $numero / 2;

						echo $data[ 'resp' . $contNum ][ $i ] . "<br>";

						if ( $data[ 'resp' . $contNum ][ $i ] == $respostaSoma )
							$pontuacao += 10;
						if($data['resp' . $contNum][$i] == $respostaSub)
						    $pontuacao += 10;
						if($data['resp' . $contNum][$i] == $respostaAntecessor)
                            $pontuacao += 10;
						if($data['resp' . $contNum][$i] == $respostaSucessor)
						    $pontuacao += 10;
						if($data['resp' . $contNum][$i] == $respostaMult)
						    $pontuacao += 10;
						if ($data['resp' . $contNum][$i] == $respostaDivisao)
						    $pontuacao += 10;
					endfor;

					$contNum++;

				endforeach;

				echo "<h1>{$pontuacao}</h1>";

			endif;

			//define os números
			$numeros = [
				rand( 1, 20 ),
				rand( 1, 20 ),
				rand( 1, 20 ),
				rand( 1, 20 )
			];

			//define os números das operações
			$soma          = rand( 1, 50 );
			$subtracao     = rand( 1, 10 );
			$multiplicacao = rand( 1, 5 );
			$divisao       = rand( 1, 3 );

			?>
            <form action="#jogo" method="post">
                <!-- ENVIA OS DADOS DAS SOMAS -->
                <input type="hidden" name="soma" value="<?= $soma ?>">
                <input type="hidden" name="subtracao" value="<?= $subtracao ?>">
                <input type="hidden" name="multiplicacao" value="<?= $multiplicacao ?>">
                <input type="hidden" name="divisao" value="<?= $divisao ?>">

                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th width="50px"></th>
                        <th class="text-center backSoma">+<?= $soma; ?></th>
                        <th class="text-center backSubtracao">-<?= $subtracao ?></th>
                        <th class="text-center backSucessor">Sucessor <i class="fas fa-share"></i></th>
                        <th class="text-center backMultiplicacao">x<?= $multiplicacao ?></th>
                        <th class="text-center backAntecessor"><i class="fas fa-reply"></i> Antecessor</th>
                        <th class="text-center backDivisao">&divide;<?= $divisao ?></th>
                    </tr>
                    </thead>
                    <tbody>
					<?php

					for ( $i = 0; $i < 3; $i ++ ):

						$num = rand( 1, 12 );
						?>
                        <input type="hidden" name="num[]" value="<?= $num; ?>">
                        <tr>
                            <td><?= $num; ?></td>
                            <td><input name="resp<?= $i; ?>[]" type="text" class="form-control"></td>
                            <td><input name="resp<?= $i; ?>[]" type="text" class="form-control"></td>
                            <td><input name="resp<?= $i; ?>[]" type="text" class="form-control"></td>
                            <td><input name="resp<?= $i; ?>[]" type="text" class="form-control"></td>
                            <td><input name="resp<?= $i; ?>[]" type="text" class="form-control"></td>
                            <td><input name="resp<?= $i; ?>[]" type="text" class="form-control"></td>
                        </tr>
					<?php endfor; ?>
                    </tbody>
                </table>

                <div class="col-md-12 text-center">
                    <button class="btn btn-success btn-lg">Stop</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!--<section id="depoimentos">-->
<!--<h2 class="titulo-depoimentos">Depoimentos de Clientes</h2>-->

<!--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">-->
<!--&lt;!&ndash; Indicators &ndash;&gt;-->
<!--<ol class="carousel-indicators">-->
<!--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
<!--<li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
<!--<li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
<!--</ol>-->

<!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
<!--<div class="carousel-inner" role="listbox">-->
<!--<figure class="item active">-->
<!--<img src="img/depoimentos/projetos0.png" alt="Depoimento 0">-->
<!--<figcaption class="carousel-caption">-->
<!--<h3>Yuri Padilha</h3>-->
<!--<p>Gostei muito e achei rápido o serviço.</p>-->
<!--</figcaption>-->
<!--</figure>-->
<!--<figure class="item">-->
<!--<img src="img/depoimentos/projetos1.png" alt="Depoimento 1">-->
<!--<figcaption class="carousel-caption">-->
<!--<h3>Fernando Stafaneni</h3>-->
<!--<p>Excelente trabalho.</p>-->
<!--</figcaption>-->
<!--</figure>-->
<!--<figure class="item">-->
<!--<img src="img/depoimentos/projetos2.png" alt="Depoimento 2">-->
<!--<figcaption class="carousel-caption">-->
<!--<h3>Caio Sauzas</h3>-->
<!--<p>Gostei, competência em primeiro lugar.</p>-->
<!--</figcaption>-->
<!--</figure>-->

<!--</div>-->

<!--&lt;!&ndash; Controls &ndash;&gt;-->
<!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">-->
<!--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
<!--<span class="sr-only">Previous</span>-->
<!--</a>-->
<!--<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">-->
<!--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
<!--<span class="sr-only">Next</span>-->
<!--</a>-->
<!--</div>-->
<!--</section>-->

<!--<div class="container">-->
<!--<div class="row">-->
<!--<section id="video" class="col-sm-6">-->
<!--<h2>Vídeo Institucional</h2>-->
<!--<div class="embed-responsive embed-responsive-16by9">-->
<!--<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/lN-ggWn1a5w" frameborder="0" allowfullscreen></iframe>-->
<!--</div>-->
<!--</section>-->

<!--<section id="contato" class="container col-sm-6">-->
<!--<h2>Contato</h2>-->
<!--<p>Entre em contato conosco.</p>-->

<!--<form action="">-->
<!--<div class="form-group">-->
<!--<label for="contato-name">Nome:</label>-->
<!--<input type="text" class="form-control" id="contato-name" placeholder="Seu nome">-->
<!--</div>-->
<!--<div class="form-group">-->
<!--<label for="contato-email">E-maik:</label>-->
<!--<div class="input-group">-->
<!--<div class="input-group-addon">@</div>-->
<!--<input type="email" class="form-control" id="contato-email" placeholder="Seu e-mail">-->
<!--</div>-->
<!--</div>-->
<!--<div class="grupo-radio">-->
<!--<div class="radio">-->
<!--<label>-->
<!--<input type="radio" name="tipo-pessoa" checked>Pessoa física-->
<!--</label>-->
<!--</div>-->
<!--<div class="radio">-->
<!--<label>-->
<!--<input type="radio" name="tipo-pessoa">Pessoa Jurídica-->
<!--</label>-->
<!--</div>-->
<!--</div>&lt;!&ndash;-->

<!--&ndash;&gt;<select class="contato-select form-control">-->
<!--<option disabled selected>Seleciona e solicitação</option>-->
<!--<option>Casa</option>-->
<!--<option>Apartamento</option>-->
<!--<option>Mansão</option>-->
<!--</select>-->

<!--<button class="btn btn-primary" type="submit">Enviar</button>-->

<!--</form>-->

<!--</section>-->
<!--</div>-->
<!--</div>-->
<footer>
    <address>
        <strong>StopMat</strong><br>
    </address>
    <address>
        Email: contato@stopmat.com.br
    </address>
</footer>


<script src="js/jquery.js"></script>
<script src="js/navbar-animation-fix.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
