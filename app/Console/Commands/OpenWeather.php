<?php

namespace App\Console\Commands;

use App\Http\Helpers\OpenWeatherHelper;
use Illuminate\Console\Command;
use PHPUnit\Exception;

class OpenWeather extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weather:data';

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
     * @return int
     */
    public function handle()
    {
        try{
            OpenWeatherHelper::get_data_and_send_to_database();
        }catch (Exception $e){
            logger($e->getMessage());
        }

        return 0;
    }
}
