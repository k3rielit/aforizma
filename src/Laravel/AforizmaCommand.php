<?php

namespace Ahurkatolto\Aforizma\Laravel;

use Illuminate\Console\Command;
use Ahurkatolto\Aforizma\Aforizma;

class AforizmaCommand extends Command
{
    protected $signature = 'aforizma';
    protected $description = 'Displays an aforizma.';

    public function handle(Aforizma $aforizma)
    {
        // Format the dependency injected aforizma
        $output = sprintf(
            "\n  <options=bold>“ %s ”</>\n  <fg=gray>— %s</>\n",
            trim($aforizma->quote),
            trim($aforizma->author),
        );
        // Output the formatted string to the console
        $this->comment($output);
    }
}
