<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style/template.css"/>
        <link rel="stylesheet" type="text/css" href="style/tabela.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <title> Novo Produto </title>
    </head>
<body>

<h1> Novo Produto </h1>

<?php  include 'templates/menu.php' ?>
<div id="conteudoFora">
    <div id="conteudoDentro">	
        <!-- Adicionar novo Produto - Escondido!!! -->
        <div id="addNovoProduto">
            <form id="formularioNovoProduto" action="classes\salvarProduto.php" method="POST">
                <table id="tnovoProduto" border="1px" cellspacing="0px" cellpadding="10px">
                    <th colspan="2"> Novo Produto </th>	
                    
                    <tr>
                        <td id="tModelo"> <b> Modelo: </b> </td>
                        <td> <input type="radio" id="golaPolo" name="modelo" value="Gola polo"> Gola Polo
                            <input type="radio" id="golaV" name="modelo" value="Gola V"> Gola V
                            <input type="radio" id="careca" name="modelo" value="Careca"> Careca
                            <input type="radio" id="regata" name="modelo" value="Regata"> Regata
                            <input type="radio" id="outro" name="modelo" value="outro"> Outro <input type="text" name="outroModelo"> 
                        </td>
                    </tr>					

                    <tr>
                        <td id="composicao"> <b> Composição: </b> </td>
                        <td> <input type="text" id="composicao" required="required" name="composicao" size="100%"> </td>
                    </tr>						

                    <tr>
                        <td id="tEstampa"> <b> Estampa: </b> </td>
                        <td> <input type="checkbox" id="estampa1" name="estampa[]" value="silk"> Silk
                            <input type="checkbox" id="estampa2" name="estampa[]" value="sublimacao"> Sublimação
                            <input type="checkbox" id="estampa3" name="estampa[]" value="bordado"> Bordado
                        </td>
                    </tr>

                    <tr>
                        <td id="Posicao"> <b> Posição da estampa: </b> </td>
                        <td> <input type="checkbox" id="posicao1" name="posicao[]" value="frente"> Frente
                                 <input type="checkbox" id="posicao2" name="posicao[]" value="costas"> Costas
                                 <input type="checkbox" id="posicao3" name="posicao[]" value="mangas"> Manga
                        </td>
                    </tr>

                    <tr>
                        <td id="cor"> <b> Cor: </b> </td>	
                        <td> <input id="cor" type="text" required="required" name="cor"> </td>						
                    </tr>

                    <tr>
                        <td id="tamanho"> <b> Tamanho: </b> </td>
                        <td> <input type="text" required="required" name="tamanho"> </td>
                    </tr>

                    <tr>
                        <td id="quantidade"> <b> Quantidade: </b> </td>
                        <td> <input id="numero" min="0" type="number" required="required" name="quantidade"> </td>
                    </tr>

                    <tr>							
                        <td> <b> Descrição: </b> </td>
                        <td> 
                        <input id="txtDescricao" required="required" type="text" name="descricao" size="78%"> 
                        <a id="gerarDescricao"> <b> Gerar Descrição </b> </td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">
                            <input id="confirmarProduto" type="submit" name="confirmarProduto" value="Confirmar"> 
                            <input id="cancelarProduto" type="reset" name="cancelarProduto" value="Cancelar">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

<?php  include 'templates/rodape.php' ?>

</body>
</html>
