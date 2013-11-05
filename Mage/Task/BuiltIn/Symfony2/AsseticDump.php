<?php
/*
 * This file is part of the Magallanes package.
*
* (c) Andrés Montañez <andres@andresmontanez.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

class Mage_Task_BuiltIn_Symfony2_AsseticDump
    extends Mage_Task_TaskAbstract
{
    public function getName()
    {
        return 'Symfony v2 - Assetic Dump [built-in]';
    }

    public function run()
    {
    	// Options
    	$env = $this->getParameter('env', 'dev');

        $command = 'app/console assetic:dump --env=' . $env;
        $result = $this->_runLocalCommand($command);

        return $result;
    }
}