<?php

/**
 * Contao Composer Installer
 *
 * Copyright (C) 2013 Contao Community Alliance
 *
 * @package contao-composer
 * @author  Dominik Zogg <dominik.zogg@gmail.com>
 * @author  Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author  Tristan Lins <tristan.lins@bit3.de>
 * @link    http://c-c-a.org
 * @license LGPL-3.0+
 */

namespace Bit3\Contao\MobileDetectService\Test;

/**
 * Test if the service is registered properly.
 */
class ServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test registration of the service.
     *
     * @return void
     */
    public function testService()
    {
        $container = new \Pimple();
        require __DIR__ . '/../contao/config/services.php';

        $this->assertTrue(
            isset($container['mobile-detect']),
            'The service "mobile-detect" is not set properly.'
        );
        $this->assertInstanceOf(
            'Mobile_Detect',
            $container['mobile-detect'],
            'The service "mobile-detect" is not an instance of "Mobile_Detect".'
        );
        $this->assertEquals(
            spl_object_hash($container['mobile-detect']),
            spl_object_hash($container['mobile-detect']),
            'The service "mobile-detect" is not shared.'
        );
    }
}
