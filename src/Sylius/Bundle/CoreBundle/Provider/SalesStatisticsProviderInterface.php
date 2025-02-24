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

namespace Sylius\Bundle\CoreBundle\Provider;

use Sylius\Component\Core\Dashboard\Interval;
use Sylius\Component\Core\Model\ChannelInterface;
use Sylius\Component\Core\ValueObject\SalesStatistics;

interface SalesStatisticsProviderInterface
{
    public function provide(
        ChannelInterface $channel,
        \DateTimeInterface $startDate,
        \DateTimeInterface $endDate,
        Interval $interval,
    ): SalesStatistics;
}
