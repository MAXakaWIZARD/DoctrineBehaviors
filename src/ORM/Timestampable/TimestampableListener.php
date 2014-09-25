<?php

/**
 * This file is part of the KnpDoctrineBehaviors package.
 *
 * (c) KnpLabs <http://knplabs.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Knp\DoctrineBehaviors\ORM\Timestampable;

/**
 * @deprecated
 */
final class TimestampableListener extends TimestampableSubscriber
{
    public function __construct()
    {
        trigger_error('use TimestampableSubscriber instead.', E_USER_DEPRECATED);
        call_user_func_array(array('parent', '__construct'), func_get_args());
    }
}
