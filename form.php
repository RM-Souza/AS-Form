<?php

class Formulario
{
    private $customer;
    private $address;
    private $number;
    private $neighborhood;
    private $city;
    private $representative;
    private $doc_ID;
    private $service;
    private $price;
    private $payment_method;

    public function __construct(argument)
    {
        // code...
    }

    public function getcustomer(){
        return $this->customer;
    }


    public function setcustomer($customer){
        $this->customer = $customer;
        return $this;
    }


    public function getaddress(){
        return $this->address;
    }


    public function setaddress($address){
        $this->address = $address;
        return $this;
    }


    public function getnumber(){
        return $this->number;
    }


    public function setnumber($number){
        $this->number = $number;
        return $this;
    }


    public function getneighborhood(){
        return $this->neighborhood;
    }


    public function setneighborhood($neighborhood){
        $this->neighborhood = $neighborhood;
        return $this;
    }


    public function getcity(){
        return $this->city;
    }


    public function setcity($city){
        $this->city = $city;
        return $this;
    }


    public function getrepresentative(){
        return $this->representative;
    }


    public function setrepresentative($representative){
        $this->representative = $representative;
        return $this;
    }


    public function getCpfCnpj(){
        return $this->doc_ID;
    }


    public function setCpfCnpj($doc_ID){
        $this->doc_ID = $doc_ID;
        return $this;
    }


    public function getservice(){
        return $this->service;
    }


    public function setservice($service){
        $this->service = $service;
        return $this;
    }


    public function getprice(){
        return $this->price;
    }


    public function setprice($price){
        $this->price = $price;
        return $this;
    }


    public function getpayment_method(){
        return $this->payment_method;
    }


    public function setpayment_method($payment_method){
        $this->payment_method = $payment_method;
        return $this;
    }

}




















?>
