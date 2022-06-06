<?php

namespace Muathye\GirlFriend;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallCommand extends Command
{
    protected $signature = 'girlfriend:kissme';
    protected $description = 'Add a app/helpers.php file to your project';

    public function handle()
    {
        // TODO: make config file for helpers.php path
        $helpersFilePath = app_path('helpers.php');

        if (File::exists($helpersFilePath)) {
            $this->info('Looks like we are in love, a helpers file exists.');
            return;
        }

        File::put($helpersFilePath, $this->helpersFileContents());
        $this->info('Hooray! Your girl file awaits you at app/helpers.php');
    }

    protected function helpersFileContents()
    {
        return <<<EOT
<?php

/**
 *  Put your love into functions.
 */

use Illuminate\Support\Carbon;

if (! function_exists('carbon')) {
    function carbon(\$parseString = null, \$tz = null)
    {
        return new Carbon(\$parseString, \$tz);
    }
}

EOT;
    }
}
