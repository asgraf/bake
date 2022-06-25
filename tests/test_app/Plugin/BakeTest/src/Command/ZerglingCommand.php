<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     2.0.0
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace BakeTest\Command;

use Bake\Command\BakeCommand;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;

/**
 * Test stub for command discovery
 */
class ZerglingCommand extends BakeCommand
{
    public function execute(Arguments $args, ConsoleIo $io)
    {
        $io->out('Zerg generated.');
        $io->verbose('Loud noises');
    }
}
