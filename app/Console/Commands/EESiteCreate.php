<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class EESiteCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'site:create {domain}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create site';

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
        $this->info("EE is supposed to CREATE a site with domain " . $this->argument('domain'));
    }
}
