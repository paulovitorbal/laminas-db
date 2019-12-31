<?php

/**
 * @see       https://github.com/laminas/laminas-db for the canonical source repository
 * @copyright https://github.com/laminas/laminas-db/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-db/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Db\Adapter\Driver\Feature;

use Laminas\Db\Adapter\Driver\DriverInterface;

/**
 * @category   Laminas
 * @package    Laminas_Db
 * @subpackage Adapter
 */
abstract class AbstractFeature
{

    /**
     * @var DriverInterface
     */
    protected $driver = null;

    /**
     * @param DriverInterface $driver
     */
    public function setDriver(DriverInterface $driver)
    {
        $this->driver = $driver;
    }

    abstract public function getName();

}
