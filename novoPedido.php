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
        <title> Novo Pedido</title>
    </head>
    <body>
      <div id="conteudoFora">
	<div id="conteudoDentro">
            <button id="bnovoPedido"> <a href="Pedidos.php"> <img src = "imagens/back.png"> Voltar </a> </button> 
                <div id="conteudoNovoPedido">
                    <form id="formularioNovoPedido">
                        <table>
                            <tr>
                                <td align="right" colspan="4"> <span style="color:green"> <b> Fechar Pedido -----> </b> </span>
                                <input type='submit' id="b_ConfirmarPedido" name="b_novoPedido" value="Confirmar Pedido">
                                <button id="bExcluirPedido" onClick="deletar()"> <img src="imagens/delete.png"> Deletar todos os produtos </button>
                                <hr align="center" width="100%" size="2" color='gray'> 
                                </td>
                            </tr>

                            <tr>
                                <td id="tNumero"> <b> Número: </b> 	</td>
                                <td id='numeroPedido'> 
                                <input type="text" class="naoEdite" name="numeroPedido" readonly value="<?php echo $pedido->idPedido ?>"> 
                                </td>
                            </tr>

                            <tr>
                                <td id="tCliente"> <b> Cliente: </b> 								</td>
                                <td colspan="3"> <input type="text" required="required" name="cliente" size="100%"> 	</td>
                            </tr>

                            <tr>
                                <td id="tDataInicio"> 	<b> Data Início:			</b>	</td>
                                <td> <input type="date" id="iDataInicio" required="required" name="dataInicio"> 					</td>
                                <td id="tDataPrevista"> <b> Data entrega prevista: 	</b> 	</td>
                                <td> <input type="date" id="iDataPrevista" name="dataPrevista"> 				</td>
                            </tr>

                            <tr>
                                <td colspan="4"> <hr align="center" width="100%" size="2" color='gray'> </td>
                            </tr>
                        </table>
                    </form>
                </div>

                <div id="listaProdutos">
                    <p> <a href="novoProduto.php"> <button id="addProduto" onClick="novoProduto()"> <img src="imagens\maisAzul.png"> Adcionar Produto </button> </a> </p>

                    <table id="tabelaListaProdutos" border="1px" cellspacing="0px" cellpadding="10px">
                            <tr align="center" class="tConteudo">
                                <td id="tID" class='tTitulo'> 			<b> ID 	</b> </td>
                                <td id="tDescricao" class='tTitulo'> 	<b> Descrição 	</b> </td>
                                <td id="tTamanho" class='tTitulo'> 		<b> Tamanho 	</b> </td>
                                <td id="tQuantidade" class='tTitulo'> 	<b> Quantidade 	</b> </td>
                                <td class='tTitulo'> </td>
                                <td class='tTitulo'> </td>
                            </tr>

                            <?php $pedido->recuperarProdutos();?>

                    </table>
                </div>
        </div>
    </div>

<?php  include 'templates/rodape.php' ?>

</body>
</html>
