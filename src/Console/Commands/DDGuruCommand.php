<?php namespace Bantenprov\AngkaHarapanHidup\Console\Commands;

use Illuminate\Console\Command;

/**
 * The AngkaHarapanHidupCommand class.
 *
 * @package Bantenprov\AngkaHarapanHidup
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class AngkaHarapanHidupCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:angka-harapan-hidup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\AngkaHarapanHidup package';

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
        $this->info('Welcome to command for Bantenprov\AngkaHarapanHidup package');
    }
}
