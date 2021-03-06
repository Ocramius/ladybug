<?php

/*
 * This file is part of the Ladybug package.
 *
 * (c) Raul Fraile <raulfraile@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Render\Twig\Extension;

use Twig_Extension;
use Twig_Environment;
use Ladybug\Type\RenderizableTypeInterface;

class TextExtension extends ConsoleExtension
{

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'ladybug.text';
    }

}
