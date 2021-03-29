<?php
    class Cliente{   
        var $codigoDoPedido;
        var $data;
        var $status;
        var $formaDePagamento;
        var $codigoDosProdutos;
        
        public function SetCodigo($codigo){
            $this->$codigoDoPedido = $codigo;
        }

        public function GetCodigo(){
            return $this->$codigoDoPedido;
        }

        public function SetData($dataa){
            $this->$data = $dataa;
        }

        public function GetData(){
            return $this->$data;
        }

        public function SetStatus($statuss){
            $this->$status = $statuss;
        }

        public function GetStatus(){
            return $this->$status;
        }

        public function SetPagamento($pagamento){
            $this->$formaDePagamento = $pagamento;
        }

        public function GetPagamento(){
            return $this->$formaDePagamento;
        }

        public function SetProdutos($produtos){
            $this->$codigoDosProdutos = $produtos;
        }

        public function GetProdutos(){
            return $this->$codigoDosProdutos;
        }
    }
?>