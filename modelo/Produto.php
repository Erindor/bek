<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto
 *
 * @author bruno
 */
class Produto {
    private $pedido;
    
    private function addPedido ($pedido){
        if (!$this->pedido == $pedido){
            $this->pedido = $pedido;
            $pedido->addProduto($this);
        }          
    }
    
    private function removerPedido ($pedido){
        if ($this->pedido == $pedido){
            $this->pedido = null;
            $pedido->removerProduto($this);
        }          
    }
    
    
}
