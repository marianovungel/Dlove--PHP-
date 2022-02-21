<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8"/>
       <title>Saiba se e amor</title>
        <style>
            body{
                background-image: url("q.jpg");
                margin: 0;
            }
            #f{
                width: 650px;
                margin: 120px auto;
                background-color: rgba(245, 74, 74, 0.5);
                border-radius: 5px;
                padding: 30px;
                text-align:center;
                color: #fff;
            }
            #a{
                text-align:center; 
                font-family:arial;
            }
            .musica{position: absolute;
            top: 500pt;
            left: -2pt;
            }
            #v{width: 40pt;}
            .c{
                position: absolute;
                top: 500pt;
                left: 950pt;
                display:flex;
                background-color: red;
                color:seashell;
                font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                border-radius: 20pt;
            }
            #fiel{
                border-radius: 10pt;
                border-color: rgba(245, 74, 74, 0.5);
            }
            #field{
                border-radius: 10pt;
                border-color: rgba(245, 74, 74, 0.5);
            }
            #vv{
                
            }
            section{
                display: block;
                float: left;
                
            }
            aside{
                display: block;
                position: absolute;
                top: auto;
                left:569pt;
            }
            footer{
                clear:both;
            }
            #num{
                border-radius: 15pt;
            }
            aside button {
            background-color: aquamarine;
            font-size: 2em;
            line-height: 50px;
        }

        </style>
    </head>
    <body>
    <div id="f">
    <a href="form.html"><div id="vv"><img src="abc.png"/></div></a>
<?php

//este codico eu comentei porque notei que estava a dar volta.

//pegar os valores do formulario.
// $nu= isset($_GET["po"])?$_GET["po"]:"nao esta definido";
// $num= isset($_GET["pi"])?$_GET["pi"]:"nao foi definido";
$nome= isset($_GET["seunome"])?$_GET["seunome"]:"nao foi definido";
$nome1= isset($_GET["nomedela"])?$_GET["nomedela"]:"nao foi definido";
/*echo "<br/> <h1>este e o numero $nu</h1><br/>";
echo " <h1>este e o numero $num</h1>";*/

//criar uma formula.
function soma ($nu, $num){
$sm= intval(($nu + $num)/20);
return $sm;
}
//formula para dar a percentagem
function percentagem ($nu, $num){
    $pc= ($nu + $num)/2;
    return $pc;
}


//esta e a forma parapoder conseguir fazer com que a variavel $s receba o valor das soma dos digitos do formularios...foi dificil mais deu certo.
$s = soma($nu= isset($_GET["po"])?$_GET["po"]:"nao esta definido", $num= isset($_GET["pi"])?$_GET["pi"]:"nao foi definido");
$u = percentagem($nu= isset($_GET["po"])?$_GET["po"]:"nao esta definido", $num= isset($_GET["pi"])?$_GET["pi"]:"nao foi definido");
//vamos mandar escrever na tela usando o comando (echo "");

$nuRand1 = rand(1, 10);
$nuRand2 = rand(5, 15);

$s = $s - $nuRand1 + $nuRand2;
$u = $u - $nuRand1 + $nuRand2;

if($u>=100){
    $u = 99.8;
}
if($u<=0){
    $u = $nuRand1 + $nuRand2;
}

/*echo "<br/> <h1>este e o numero $nu</h1><br/>";
echo " <h1>este e o numero $num</h1>";*/


echo " <h1>$nome</h1> <h2> as chances desse relacao dar certo e de $u % </h1><br/>";
//vamos tentar fazer uma estrutura swetch.
switch($s){
    case 1:
        echo " <h1>$nome1</h1> <h2>pensa que, te amo bastante</h2>";
    break;
    case 2:
        echo " <h1>$nome1</h1> <h2>pensa que, tu nao fazes o seu tipo</h2>";
    break;
    case 3:
        echo " <h1>$nome1</h1> <h2>pensa que, nao vai te decepssionar se ter uma oportunidade de te amar</h2>";
    break;
    case 4:
        echo "<h1>$nome1</h1> <h2>pensa que, Felicidade e uma palavra de dez letras mas a minha se resume em quatro voce</h2>";
    break;
    case 5:
        echo "<h1>$nome1</h1> <h2>pensa que, Nao sinte nada por ti</h2>";
    break;
    case 6:
        echo "<h1>$nome1</h1> <h2>pensa que, So  serves para  ficar e nao para ter um relacionamento serio</h2>";
    break;
    case 7:
        echo "<h1>$nome1</h1> <h2>A sua presenca lhe acalma<h2>";
    break;
    // guardar codigos kkkkk
    case 8:
        echo "<h1>$nome1</h1>Felicidade e uma palavra de dez letras, mas a minha se resume em quatro: voce!";
    break;
    case 9:
        echo "<h1>$nome1</h1>Voce e tudo o que eu sonhei para mim.";
    break;
    case 10:
        echo "<h1>$nome1</h1>O amor nao e feito de trocas de olhares, mas de olhares juntos na mesma direcao.";
    break;
    case 11:
        echo "<h1>$nome1</h1>O unico momento em que nao penso em voce e quando estou dormindo, porque ai nao estou pensando, e sim, sonhando.";
    break;
    case 12:
        echo "<h1>$nome1</h1>Voce sabe qual e o motivo do meu sorriso todos os dias? A primeira palavra dessa frase.";
    break;
    case 13:
        echo "<h1>$nome1</h1>O melhor lugar do mundo e dentro do seu abraco.";
    break;
    case 14:
        echo "<h1>$nome1</h1>Fomos feitos um para o outro.";
    break;
    case 15:
        echo "<h1>$nome1</h1>Quero estar com voce em um momento chamado: sempre!";
    break;
    case 16:
        echo "<h1>$nome1</h1>Palavras nao conseguem descrever o tamanho do meu amor por voce.";
    break;
    case 17:
        echo "<h1>$nome1</h1>Todos os dias eu me imagino ao seu lado.";
    break;
    case 19:
        echo "<h1>$nome1</h1>Meu amor por voce supera os limites vitais, quero voce por toda a eternidade!";
    break;
    case 20:
        echo "<h1>$nome1</h1>O amor nao faz sentido, o amor da sentido a tudo.";
    break;
    case 21:
        echo "<h1>$nome1</h1>Ao seu lado sou tao feliz! Sinto isso tao forte e tao verdadeiro em mim.";
    break;
    case 22:
        echo "<h1>$nome1</h1>Voce me inspira a ser melhor a cada dia.";
    break;
    case 23:
        echo "<h1>$nome1</h1>O que mais amo em voce e o mundo maravilhoso que encontro ao seu lado.";
    break;
    case 24:
        echo "<h1>$nome1</h1>O sentimento que nos une e mais forte do que qualquer obstaculo que possa surgir.";
    break;
    case 25:
        echo "<h1>$nome1</h1>Voce e a melhor coisa que aconteceu na minha vida.";
    break;
    default:
    if(!$s){
        echo "<h1>$nome</h1><h2>é obrigatório preencher todos os campos do formulário</h2>";
    }
    if($s>25){
        echo "<h1>$nome1</h1>Pensa que tu és a pessoa perfeita";
    }
}


?>



        </div>
        
<footer>
        <audio class="musica"controls="controls">
            <source src="as.mp3" type="audio/mpeg">
        </audio>
        <div class="c">
            <img id="v" src="v.jpg" alt="o tipo de que todos queriam ter">
            <h1 id="d">Casal Feliz</h1>
        </div>
    </footer>
   
    </div>
    
    </body>
</html>