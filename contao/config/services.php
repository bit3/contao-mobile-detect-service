<?php

/**
 * This file is part of bit3/contao-mobile-detect-service.
 *
 * (c) Tristan Lins <tristan.lins@bit3.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    bit3/contao-mobile-detect-service
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @copyright  bit3 UG <https://bit3.de>
 * @link       https://github.com/bit3/contao-mobile-detect-service
 * @license    https://github.com/bit3/contao-mobile-detect-service/blob/master/LICENSE MIT
 * @filesource
 */

/** @var \Pimple $container */

$container['mobile-detect'] = $container->share(
    function () {
        return new Mobile_Detect();
    }
);
