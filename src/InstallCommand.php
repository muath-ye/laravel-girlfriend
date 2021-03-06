<?php

namespace Muathye\GirlFriend;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallCommand extends Command
{
    protected $signature = 'girlfriend:kissme';
    protected $description = 'Add a resource/helpers.php file to your project.';

    public function handle()
    {
        // TODO: make config file for helpers.php path
        $helpersFilePath = resource_path('helpers.php');

        if (File::exists($helpersFilePath)) {
            $this->info('Looks like we are in love, a helpers file exists at resource/helpers.php');
            return;
        }

        File::put($helpersFilePath, $this->helpersFileContents());
        $this->info('Hooray! Your Laravel girlfriend file awaits you at resource/helpers.php');
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
