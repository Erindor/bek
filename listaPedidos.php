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
        <title> Pedidos </title>
    </head>
    <body>
    <h1>  Pedidos  </h1>
    <?php  include 'templates/menu.php' ?>
	<div id="conteudoFora">
            <div id="conteudoDentro">
                <a href="novoPedido.php"> <button id="bnovoPedido" onClick="novoPedido()">  <img src = "imagens/mais.png" alt="Mais Informações"> Novo Pedido  </button> </a>

            <table id="tabelaPedidos" border="1px">
                <tr class="tConteudo">
                    <td id="id" 		class="tTitulo"> 	<b>  ID 		 </b> </td>
                    <td id="dataInicio" 	class="tTitulo"> 	<b>  Data Início 	 </b> </td>
                    <td id="dataEntregue" 	class="tTitulo"> 	<b>  Data Entrega	 </b> </td>
                    <td id="cliente" 		class="tTitulo">	<b>  Cliente 		 </b> </td>
                    <td id="etapa" 		class="tTitulo"> 	<b>  Etapa		 </b> </td>
                    <td id="maisInfo" 		class="tTitulo">	<b>  Mais Inf.		 </b> </td>
                </tr>

                <tr class="tConteudo">
                    <td>   1 															 	</td>
                    <td>   15/02/2016 													 	</td>
                    <td>   30/02/2016														</td>
                    <td>   Joãozin 														 	</td>
                    <td>   Entregue														 	</td>
                    <td>   <img id="botaoMais" src="imagens/maisAzul.png"> </td>
                </tr>

                <tr class="tConteudo">
                    <td>   1 															 	</td>
                    <td>   15/02/2016 													 	</td>
                    <td>   30/02/2016														</td>
                    <td>   Joãozin 														 	</td>
                    <td>   Entregue														 	</td>
                    <td>   <img id="botaoMais2" src="imagens/maisAzul.png"> </td>
                </tr>
            </table>			
        </div>
    </div>
	
<?php  include 'templates/rodape.php' ?>

</body>
</html>
