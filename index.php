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
                    <li><a href="#aprendendo">Aprendendo</a></li>
                    <li><a href="#jogo">Vamos jogar</a></li>
                    <!--                    <li><a href="#contato">Contato</a></li>-->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container topCasaFina-bannerWrapper">
        <div class="stopMat-banner">
            <h1>StopMat</h1>
            <p>Aprenda matemática brincando!</p>
            <a href="#jogo" class="btn btn-primary btn-lg">Vamos jogar</a>
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

<section id="aprendendo" class="container">
    <h2 class="text-center">Aprendendo</h2>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-4">
            <figure class="thumbnail text-center backSoma">
                <i class="fas fa-plus-square fa-7x"></i>
                <figcaption class="caption">
                    <h3>Adição</h3>
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
    </div>
</section>

<section id="jogo" class="container">
    <h2 class="text-center">Vamos jogar</h2>
    <div class="row">
        <div class="col-md-12">
			<?php
			$data        = filter_input_array( INPUT_POST, FILTER_DEFAULT );
			if ( isset( $data ) ):

//				var_dump( $data );
//                $i = 0;
				//FAZ OS CÁLCULOS
				//faz o loop com os dados enviados
				$pontuacao = 0;
				$contNum = 0;
				foreach ( $data['num'] as $numero ):

//					for ( $i = 0; $i <= 5; $i ++ ):

					//verifica a resposta da soma
					$respostaSoma       = $numero + $data['soma'];
					$respostaSub        = $numero - $data['subtracao'];
					$respostaSucessor   = $numero + 1;
					$respostaAntecessor = $numero - 1;
					$respostaMult       = $numero * $data['multiplicacao'];
					$respostaDivisao    = $numero / $data['divisao'];

					$respSoma = $data['resp'][0];
					$respSub  = $data['resp'][1];
					$respSuc  = $data['resp'][2];
					$respMult = $data['resp'][3];
					$respAnt  = $data['resp'][4];
					$respDiv  = $data['resp'][5];

//					echo $data['resp'][0] . " - " . $respostaSoma . "<br>";
//					echo $data['resp'][1] . " - " . $respostaSub . "<br>";
//					echo $data['resp'][2] . " - " . $respostaSucessor . "<br>";
//					echo $data['resp'][3] . " - " . $respostaMult . "<br>";
//					echo $data['resp'][4] . " - " . $respostaAntecessor . "<br>";
//					echo $data['resp'][5] . " - " . $respostaDivisao . "<br>";

					if ( $data['resp'][0] == $respostaSoma ) {
						$pontuacao   += 10;
						$classAdicao = 'success';
					}
					if ( $data['resp'][1] == $respostaSub ) {
						$pontuacao += 10;
						$classSub  = 'success';
					}
					if ( $data['resp'][2] == $respostaSucessor ) {
						$pontuacao += 10;
						$classSuc  = 'success';
					}
					if ( $data['resp'][3] == $respostaMult ) {
						$pontuacao += 10;
						$classMult = 'success';
					}
					if ( $data['resp'][4] == $respostaAntecessor ) {
						$pontuacao += 10;
						$classAnt  = 'success';
					}
					if ( $data['resp'][5] == $respostaDivisao ) {
						$pontuacao += 10;
						$classDiv  = 'success';
					}

					/*
					echo $data[ 'resp' . $contNum ][ $i ] . "<br>";

					if ( $data[ 'resp' . $contNum ][0] == $respostaSoma ) {
						$pontuacao += 10;
					}
					if ( $data[ 'resp' . $contNum ][1] == $respostaSub ) {
						$pontuacao += 10;
					}
					if ( $data[ 'resp' . $contNum ][2] == $respostaAntecessor ) {
						$pontuacao += 10;
					}
					if ( $data[ 'resp' . $contNum ][3] == $respostaSucessor ) {
						$pontuacao += 10;
					}
					if ( $data[ 'resp' . $contNum ][4] == $respostaMult ) {
						$pontuacao += 10;
					}
					if ( $data[ 'resp' . $contNum ][5] == $respostaDivisao ) {
						$pontuacao += 10;
					}
					*/
//					endfor;

					$contNum ++;

				endforeach;

				?>

                <table class="table">
                    <thead>
                    <tr>
                        <th colspan="3" class="text-center"><h1>Sua pontuação foi <strong><?= $pontuacao; ?></strong>
                            </h1></th>
                    </tr>
                    <tr>
                        <th>Operação</th>
                        <th>Sua Resposta</th>
                        <th>Resposta Correta</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="<?= isset( $classAdicao ) ? $classAdicao : 'danger'; ?>">
                        <td>Adição</td>
                        <td><?= $respSoma ?></td>
                        <td><?= $respostaSoma ?></td>
                    </tr>
                    <tr class="<?= isset( $classSub ) ? $classSub : 'danger'; ?>">
                        <td>Subtração</td>
                        <td><?= $respSub ?></td>
                        <td><?= $respostaSub ?></td>
                    </tr>
                    <tr class="<?= isset( $classSuc ) ? $classSuc : 'danger'; ?>">
                        <td>Sucessor</td>
                        <td><?= $respSuc ?></td>
                        <td><?= $respostaSucessor ?></td>
                    </tr>
                    <tr class="<?= isset( $classMult ) ? $classMult : 'danger'; ?>">
                        <td>Multiplicação</td>
                        <td><?= $respMult ?></td>
                        <td><?= $respostaMult ?></td>
                    </tr>
                    <tr class="<?= isset( $classAnt ) ? $classAnt : 'danger'; ?>">
                        <td>Antecessor</td>
                        <td><?= $respAnt ?></td>
                        <td><?= $respostaAntecessor ?></td>
                    </tr>
                    <tr class="<?= isset( $classDiv ) ? $classDiv : 'danger'; ?>">
                        <td>Divisão</td>
                        <td><?= $respDiv ?></td>
                        <td><?= $respostaDivisao ?></td>
                    </tr>
                    </tbody>
                </table>

                <a href="http://localhost/stopmat" class="btn btn-lg btn-success text-center">Jogar novamente</a>

			<?php

			else:

				//define os números
				$numeros = [
					rand( 1, 20 ),
					rand( 1, 20 ),
					rand( 1, 20 ),
					rand( 1, 20 )
				];
				//sorteia o número para o jogo
				$numeroJogo = rand( 2, 12 );

				//define os números das operações
				$soma          = rand( 1, 50 );
				$subtracao     = rand( 1, $numeroJogo );
				$multiplicacao = rand( 1, 5 );

				//verifica se o número sorteado é par ou ímpar para determinar a divisão
				if ( $numeroJogo % 2 == 0 ):
					if ( $numeroJogo > 2 ):
						$num     = [ '2', '4' ];
						$rand    = array_rand( $num, 1 );
						$divisao = $num[ $rand ];
					else:
						$divisao = 2;
					endif;
				else:
					$num     = [ '1', '3' ];
					$rand    = array_rand( $num, 1 );
					$divisao = $num[ $rand ];
				endif;


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

						//					for ( $i = 0; $i < 3; $i ++ ):


						?>
                        <input type="hidden" name="num[]" value="<?= $numeroJogo; ?>">
                        <tr>
                            <td><?= $numeroJogo; ?></td>
                            <td><input name="resp[]" type="text" class="form-control"></td>
                            <td><input name="resp[]" type="text" class="form-control"></td>
                            <td><input name="resp[]" type="text" class="form-control"></td>
                            <td><input name="resp[]" type="text" class="form-control"></td>
                            <td><input name="resp[]" type="text" class="form-control"></td>
                            <td><input name="resp[]" type="text" class="form-control"></td>
                        </tr>
                        <!--					--><?php //endfor;
						?>
                        </tbody>
                    </table>

                    <div class="col-md-12 text-center">
                        <button class="btn btn-success btn-lg">Stop</button>
                    </div>
                </form>

			<?php endif; ?>

        </div>
    </div>
</section>
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
