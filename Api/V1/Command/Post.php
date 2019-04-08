<?php

namespace App\Demo\Api\V1\Command;

use Resta\Console\ConsoleOutputter;
use Resta\Console\ConsoleListAccessor;
use App\Demo\Api\V1\ServiceAnnotationsManager;

class Post extends ConsoleOutputter
{
    use ConsoleListAccessor,ServiceAnnotationsManager;

    /**
     * @var $type
     */
    protected $type='Post';

    /**
     * @var array
     */
     protected $runnableMethods = [
        'handle' => 'Post  handle'
     ];

    /**
     * @var $commandRule array
     */
    protected $commandRule=[];

    /**
     * @method handle
     */
    public function handle()
    {
        echo $this->info('Post');
    }
}