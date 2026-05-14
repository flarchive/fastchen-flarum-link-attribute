<?php

/*
 * This file is part of fastchen/link-attribute.
 *
 * Copyright (c) 2026 FastChen.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace FastChen\LinkAttribute;

use Flarum\Extend;
use Laminas\Diactoros\Uri;

return [
    (new Extend\Frontend('forum'))
         ->css(__DIR__.'/less/forum.less'),

    (new Extend\Link)
        ->setTarget(function (Uri $uri, Uri $siteUrl, array $attributes): string {
            return $uri->getHost() === $siteUrl->getHost() ? '_self' : '_blank';
        })
];
