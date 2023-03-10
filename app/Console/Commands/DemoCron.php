<?php

namespace App\Console\Commands;

use App\Http\Controllers\APILayer\internationalRatesController;
use Illuminate\Console\Command;

class DemoCron extends Command
{
   
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
    {   $rates=new internationalRatesController;
        $rates->get_rates();
        \Log::info("rates added");
        //
    }
}
