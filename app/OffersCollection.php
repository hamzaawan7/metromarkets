<?php


namespace App;

use Iterator;
use OfferCollectionInterface;
use OfferInterface;

class OffersCollection implements OfferCollectionInterface
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
        $this->i++;
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
    public function getIterator(): int
    {
        // TODO: Implement getIterator() method.
        return $this->i++;
    }
}
