<?php

namespace App\Console\Commands;

use App\Http\Services\SendMoneyService;
use Illuminate\Console\Command;

class SetRandomPrizeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:prize';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return (new SendMoneyService())->sendPrize();
    }
}
