<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pedido
 *
 * @author bruno
 */
class Pedido {
    private $idPedido;
    private $cliente;
    private $dataInicio;
    private $dataFim;
    private $situacao;
    private $produtos = [];
    
    function __construct() {
        
    }
    
    function getIdPedido() {
        return $this->idPedido;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getDataInicio() {
        return $this->dataInicio;
    }

    function getDataFim() {
        return $this->dataFim;
    }

    function getSituacao() {
        return $this->situacao;
    }

    function setIdPedido($idPedido) {
        $this->idPedido = $idPedido;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setDataInicio($dataInicio) {
        $this->dataInicio = $dataInicio;
    }

    function setDataFim($dataFim) {
        $this->dataFim = $dataFim;
    }

    function setSituacao($situacao) {
        $this->situacao = $situacao;
    }
    
    function getProdutos() {
        return $this->produtos;
    }

    function addProduto($produto){
        if (!in_array($produto, $this->produtos)){
            $produto[] = $produto;
            $produto->addPedido($this);
        }       
    }
    
    function removerProduto ($produto){
        if (in_array($produto, $this->produtos)){
            unset($this->produtos[key($this->produtos)]);
            $produto->removerPedido($this);
        }
    }


}


