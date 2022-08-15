<?php

namespace app\Modules\Larabu\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use app\Modules\Larabu\Http\Models\PluginConnector;

class LarabuPluginInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larabu:plugin-install {plugin_name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Larabu install plugin';

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
        $this->info('Start install auth');
        
        PluginConnector::request();


        // $this->info('Larabu plugin list ');
        // $this->info(' - auth ');

        // $name = '';

        // $headers = ['Plugin name', 'Author', 'Version', 'Price'];
        // $data[] = ['Auth', 'BestUniverse', '1.3.1', 'Free!'];
        // $data[] = ['Blog', 'BestUniverse', '1.0.0', 'Free!'];

        // // $name = $this->choice(
        // //     'What plugin want install?',
        // //     ['Auth', 'Blog']
        // // );

        // // $this->info(json_encode($name));

        // // Write a single blank line...
        // $this->info('Info something!');
        // $this->comment('Commeting something!');
        // $this->error('Something went wrong!');
        // $this->line('Display this on the screen');
        // $this->newLine();

        // $this->table($headers, $data);
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['plugin_name', InputArgument::REQUIRED, 'Desired plugin to install.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }
}
