<?php
/**
 * This file is part of the Craft package.
 *
 * Copyright Aymeric Assier <aymeric.assier@gmail.com>
 *
 * For the full copyright and license information, please view the Licence.txt
 * file that was distributed with this source code.
 */
namespace Craft\Data\Provider\Container;

use Craft\Data\Provider;

trait Swap
{

    /**
     * Change provider
     * @param Provider $provider
     */
    public static function swap(Provider $provider)
    {
        static::instance($provider);
    }

} 