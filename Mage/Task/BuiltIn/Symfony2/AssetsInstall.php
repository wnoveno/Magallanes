<?php
/*
 * This file is part of the Magallanes package.
*
* (c) Andrés Montañez <andres@andresmontanez.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

class Mage_Task_BuiltIn_Symfony2_AssetsInstall
    extends Mage_Task_TaskAbstract
{
    public function getName()
    {
        return 'Symfony v2 - Assets Install [built-in]';
    }

    public function run()
    {
    	// Options
    	$target = $this->getParameter('target', 'web');
    	$symlink = $this->getParameter('symlink', false);
    	$relative = $this->getParameter('relative', false);
    	$env = $this->getParameter('env', 'dev');

    	if ($relative) {
    		$symlink = true;
    	}

        $command = 'app/console assets:install ' . ($symlink ? '--symlink' : '') .  ' ' . ($relative ? '--relative' : '') .  ' --env=' . $env . ' ' . $target;
        $result = $this->_runLocalCommand($command);

        return $result;
    }
}