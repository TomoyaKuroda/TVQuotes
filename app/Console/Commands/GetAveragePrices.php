<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\State;
use App\Copi;


class GetAveragePrices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'prices';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get the average prices for each of the food items by state';

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

        $prices = State::selectRaw('ap_copi.state, avg(steak), avg(grnd_beef), avg(sausage), avg(fry_chick), avg(tuna)')
            ->join('ap_copi', 'ap_copi.state_id', '=', 'ap_states.id')
            ->groupBy('ap_copi.state')
            ->get();

        $this->info(json_encode($prices));
    }
}