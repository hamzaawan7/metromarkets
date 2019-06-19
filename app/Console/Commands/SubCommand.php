<?php

namespace App\Console\Commands;

class SubCommand extends Root
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sub-command {filter_type} {args*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is the sub-command which runs the filtering of objects';

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
