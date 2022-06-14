<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class CustomerModel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:customer:model {modelName}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'creating customer model';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call("make:model  App/Modules/Customers/Models/" . $this->argument('modelName'));
    }
}
