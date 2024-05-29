<?php

declare(strict_types=1);

/*
 * This file is part of cgoit\contao-onepage-bundle for Contao Open Source CMS.
 *
 * @copyright  Copyright (c) 2024, cgoIT
 * @author     cgoIT <https://cgo-it.de>
 * @author     Daniel Steuri <https://webrealisierung.ch>
 * @license    LGPL-3.0-or-later
 */

namespace Wr\OnepageBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WrOnepageBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
