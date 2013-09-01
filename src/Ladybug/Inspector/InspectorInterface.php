<?php
/*
 * Ladybug: Simple and Extensible PHP Dumper
 *
 * ProcessorInterface
 *
 * (c) Raúl Fraile Beneyto <raulfraile@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Inspector;

interface InspectorInterface
{
    const TYPE_CLASS = 0;
    const TYPE_RESOURCE = 1;

    /**
     * Returns the object data into an array/string
     *
     * @param  string $var html code
     * @return string modified html code
     */
    public function getData(InspectorDataWrapper $data);

    public function accept(InspectorDataWrapper $data);
}
