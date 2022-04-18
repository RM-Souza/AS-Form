<?php

class Formulario
{
    private $contratante;
    private $endereco;
    private $numero;
    private $bairro;
    private $cidade;
    private $representante;
    private $cpf_cnpj;
    private $servico;
    private $preco;
    private $recebimento;

    public function __construct(argument)
    {
        // code...
    }

    public function getContratante(){
        return $this->contratante;
    }


    public function setContratante($contratante){
        $this->contratante = $contratante;
        return $this;
    }


    public function getEndereco(){
        return $this->endereco;
    }


    public function setEndereco($endereco){
        $this->endereco = $endereco;
        return $this;
    }


    public function getNumero(){
        return $this->numero;
    }


    public function setNumero($numero){
        $this->numero = $numero;
        return $this;
    }


    public function getBairro(){
        return $this->bairro;
    }


    public function setBairro($bairro){
        $this->bairro = $bairro;
        return $this;
    }


    public function getCidade(){
        return $this->cidade;
    }


    public function setCidade($cidade){
        $this->cidade = $cidade;
        return $this;
    }


    public function getRepresentante(){
        return $this->representante;
    }


    public function setRepresentante($representante){
        $this->representante = $representante;
        return $this;
    }


    public function getCpfCnpj(){
        return $this->cpf_cnpj;
    }


    public function setCpfCnpj($cpf_cnpj){
        $this->cpf_cnpj = $cpf_cnpj;
        return $this;
    }


    public function getServico(){
        return $this->servico;
    }


    public function setServico($servico){
        $this->servico = $servico;
        return $this;
    }


    public function getPreco(){
        return $this->preco;
    }


    public function setPreco($preco){
        $this->preco = $preco;
        return $this;
    }


    public function getRecebimento(){
        return $this->recebimento;
    }


    public function setRecebimento($recebimento){
        $this->recebimento = $recebimento;
        return $this;
    }

}




















?>
