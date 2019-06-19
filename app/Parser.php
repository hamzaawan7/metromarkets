<?php


namespace App;


use Iterator;
use OfferCollectionInterface;
use OfferInterface;
use ReaderInterface;

class Parser implements ReaderInterface, OfferInterface, OfferCollectionInterface
{
    /**
     * Read in incoming data and parse to objects
     *
     * @param string $input
     * @return OfferCollectionInterface
     */
    public function read(string $input): OfferCollectionInterface
    {
        // TODO: Implement read() method.
        die;
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
    }

    /**
     * @return Iterator
     */
    public function getIterator(): Iterator
    {
        // TODO: Implement getIterator() method.
    }
}
