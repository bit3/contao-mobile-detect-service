<?php

/**
 * This file is part of contao-community-alliance/mobile-detect-service.
 *
 * (c) 2013-2018 Contao Community Alliance.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    contao-community-alliance/mobile-detect-service
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @author     Sven Baumann <baumann.sv@gmail.com>
 * @copyright  2013-2018 Contao Community Alliance.
 * @license    https://github.com/contao-community-alliance/mobile-detect-service/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

namespace Bit3\Contao\MobileDetectService\Test;

use PHPUnit\Framework\TestCase;

/**
 * Test if the service is registered properly.
 */
class ServiceTest extends TestCase
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
