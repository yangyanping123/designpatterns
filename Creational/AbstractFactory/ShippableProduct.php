<?php
namespace Creational\AbstractFactory;
class ShippableProduct implements Product{

        // TODO: Implement calculatePrice() method.
        private $productPrice;
        private $shippingCosts;
        public function __construct(int $productPrice,int $shippingCosts){
            $this->productPrice = $productPrice;
            $this->shippingCosts = $shippingCosts;
        }
        public function calculatePrice(): int
        {
            return $this->productPrice + $this->shippingCosts;
        }


}