<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Bundle\CoreBundle\ShopFixtures\Transformer;

final class CustomerTransformer implements CustomerTransformerInterface
{
    use TransformStringToDateAttributeTrait;

    public function transform(array $attributes): array
    {
        return $this->transformStringToDateAttribute($attributes, 'birthday');
    }
}