<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class printAlgorithm extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:print-algorithm';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        for ($i = 1; $i <= 5; $i++) {
            $row = [];
            for ($j = 1; $j <= 5; $j++) {
                $row[] = $i * $j;
            }
            $this->line(implode(' ', $row));
        }
        
        return 0;
    }
}
