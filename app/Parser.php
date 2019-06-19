<?php


namespace App;


use Iterator;
use OfferCollectionInterface;
use OfferInterface;
use ReaderInterface;

class Parser implements ReaderInterface
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
        $data = json_decode($input);
        $obj = new OffersCollection();
        foreach ($data as $d) {
            $offer = new Offer($d->id, $d->price, $d->date, $d->vendor_id, $d->quantity);
            $obj->add($offer);
        }
        return $obj;
    }
}
