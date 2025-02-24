<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Bundle\ApiBundle\Query\Admin;

use Sylius\Bundle\ApiBundle\Command\ChannelCodeAwareInterface;
use Sylius\Bundle\ApiBundle\Command\LocaleCodeAwareInterface;

/** @experimental */
class GetSalesStatistics implements ChannelCodeAwareInterface, LocaleCodeAwareInterface
{
    public ?\DateTimeInterface $startDate = null;

    public ?\DateTimeInterface $endDate = null;

    public function __construct(private ?string $localeCode = null, private ?string $channelCode = null)
    {
    }

    public function getChannelCode(): ?string
    {
        return $this->channelCode;
    }

    public function setChannelCode(?string $channelCode): void
    {
        $this->channelCode = $channelCode;
    }

    public function getLocaleCode(): ?string
    {
        return $this->localeCode;
    }

    public function setLocaleCode(?string $localeCode): void
    {
        $this->localeCode = $localeCode;
    }
}
