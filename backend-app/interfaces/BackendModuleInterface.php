<?php
/**
 * BackendModuleInterface.php
 * @author Revin Roman
 * @link https://rmrevin.com
 */

namespace backend\interfaces;

/**
 * Interface BackendModuleInterface
 * @package backend\interfaces
 */
interface BackendModuleInterface
{

    /**
     * @param \backend\components\Controller $Controller
     * @return array
     */
    public function menu($Controller);
}