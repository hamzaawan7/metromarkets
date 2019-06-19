<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PHPScript extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'commandz:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is the driver class which runs different set of commands and create the object';

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
    }
}
