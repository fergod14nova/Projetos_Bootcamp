<?php
    // Desafio:
    /*
        Tentar desenvolver um menu usando 
    */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de navegação com JQuery</title>

    <!-- CDN JQUERY UI -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <!-- Script contendo a função dos menus -->
    <script>
        $( function() { //Definindo a função que será auto executavel
            var icons = { //criando variável "ícone" que conterá as propriedades do header:
            header: "ui-icon-circle-arrow-e", //definindo o header como um ícone do jquery
            activeHeader: "ui-icon-circle-arrow-s" //quando o header mudar o ícone também mudará, a propriedade "activeHeader" quer dizer o Header que está ativo no momento
            };


            $( "#accordion" ).accordion({
            icons: icons
            });

            // Função para desativar os ícones:
            $( "#toggle" ).button().on( "click", function() {
            if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
                $( "#accordion" ).accordion( "option", "icons", null );
            } else {
                $( "#accordion" ).accordion( "option", "icons", icons );
            }
            });
        } );
    </script>

</head>
<body>
    <div id="accordion">
        <h3>Matrículas</h3>
        <div>
            <p>Favor selecione esta opção para realizar uma matrícula</p>
        </div>
        <h3>Mensalidades</h3>
        <div>
            <p>Favor selecione esta opção para realizar uma mensalidade</p>
        </div>
        <h3>Cursos</h3>
        <div>
            <p>Favor selecione esta opção para realizar um curso</p>
        </div>
        <h3>Frequência</h3>
        <div>
            <p>Favor selecione esta opção para abrir a frequencia</p>
        </div>
    </div>
    <button id="toggle">DESATIVAR ÍCONES</button>
</body>
</html>