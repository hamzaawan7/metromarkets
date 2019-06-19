<?php


namespace App;

use Iterator;
use OfferCollectionInterface;
use OfferInterface;

class Offers implements OfferCollectionInterface
{
    private $arr;
    private $i;

    function __construct()
    {
        $this->arr = array();
        $this->i = 0;
    }

    /**
     * Add offer to the collection
     *
     * @param OfferInterface $offer
     * @return void
     */
    public function add(OfferInterface $offer): void
    {
        // TODO: Implement add() method.
        $this->arr[$this->i] = $offer;
    }

    /**
     * Get offer at specific index
     *
     * @param int $index
     * @return OfferInterface
     */
    public function get(int $index): OfferInterface
    {
        // TODO: Implement get() method.
        return $this->arr[$index];
    }

    /**
     * @return Iterator
     */
    public function getIterator(): Iterator
    {
        // TODO: Implement getIterator() method.
        return new Iterator;
    }
}
