<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class Testnow extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'testnow';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Simple script for running quick tests.';

    /**
     * Get the console command arguments.
     *
     * @return array
     */
//    protected function getArguments()
//    {
//        return [[ 'parm', InputArgument::REQUIRED, 'Parameter' ]];
//    }

    /**
     * Get the console command options.
     *
     * @return array
     */
//    protected function getOptions()
//    {
//        return [[ 'flag', null, InputOption::VALUE_NONE, 'Flag', null ]];
//    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
//        $parm = $this->argument( 'parm' );
//        $flag = $this->option( 'flag' );

//        throw new \App\Exceptions\General();

        $this->info( 'Done!' );
    }
}