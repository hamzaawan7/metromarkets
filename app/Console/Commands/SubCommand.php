<?php

namespace App\Console\Commands;

class DateFilter extends Root
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'date_filter {--args=*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is the subclass which runs different set of commands and creates the object';

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
        echo "Dying in Subcommand" . "\n";
        die;
    }
}
