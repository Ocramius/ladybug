<?php
/*
 * Ladybug: Simple and Extensible PHP Dumper
 *
 * Object/SplMaxHeap dumper
 *
 * (c) Raúl Fraile Beneyto <raulfraile@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Inspector\Object;

use Ladybug\Inspector\InspectorInterface;

class SplMaxHeap extends SplHeap
{
    public function getData($var, $type = InspectorInterface::TYPE_CLASS)
    {
        return parent::getData($var, $type);
    }

}
