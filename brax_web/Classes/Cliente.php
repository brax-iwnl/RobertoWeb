<?php
    class Cliente{   
        var $codigoDoCliente;
        var $email;
        var $endereco;
        var $cep;
        var $telefone;
        
        public function SetCodigo($codigo){
            $this->$codigoDoCliente = $codigo;
        }

        public function GetCodigo(){
            return $this->$codigoDoCliente;
        }

        public function SetEmail($emaill){
            $this->$email = $emaill;
        }

        public function GetEmail(){
            return $this->$email;
        }

        public function SetEndereco($enderecoc){
            $this->$endereco = $enderecoc;
        }

        public function GetEndereco(){
            return $this->$endereco;
        }

        public function SetCep($cepp){
            $this->$cep = $cepp;
        }

        public function GetCep(){
            return $this->$cep;
        }

        public function SetTelefone($telefonee){
            $this->$telefone = $telefonee;
        }

        public function GetTelefone(){
            return $this->$telefone;
        }
    }
?>