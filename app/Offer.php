<?php


namespace App;

use OfferInterface;

class Offer implements OfferInterface
{
    private $id;
    private $price;
    private $date;
    private $vendor_id;
    private $quantity;

    function __construct($id, $price, $date, $vendor_id, $quantity)
    {
        $this->id = $id;
        $this->price = $price;
        $this->date = $date;
        $this->vendor_id = $vendor_id;
        $this->quantity = $quantity;
    }
}
