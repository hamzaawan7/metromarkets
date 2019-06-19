<?php

namespace App\Console\Commands;

use App\Offer;
use App\Parser;
use Illuminate\Console\Command;

class Root extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run {filter_type} {args*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is the root class which runs different set of commands and creates the object';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $json = '[
            {
                "id": 1,
                "price": 250.00,
                "date": "2019-06-25",
                "vendor_id": 1,
                "quantity": 10
            },
            {
                "id": 2,
                "price": 300.00,
                "date": "2019-06-28",
                "vendor_id": 1,
                "quantity": 0
            },
            {
                "id": 3,
                "price": 100.00,
                "date": "2019-07-31",
                "vendor_id": 1,
                "quantity": 34
            },
            {
                "id": 4,
                "price": 400.00,
                "date": "2019-06-15",
                "vendor_id": 2,
                "quantity": 5
            },
            {
                "id": 5,
                "price": 150.00,
                "date": "2019-06-01",
                "vendor_id": 2,
                "quantity": 8
            }
        ]';
        $parser = new Parser();
        $offers = $parser->read($json);
        $this->call('sub-command', $this->arguments());
    }
}
