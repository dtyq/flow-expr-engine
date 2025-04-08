<?php
/**
 * This file is part of Swow
 *
 * @link    https://github.com/swow/swow
 * @contact twosee <twosee@php.net>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code
 */

declare(strict_types=1);

namespace Swow\Http\Message;

use Swow\Buffer;
use Swow\WebSocket\Header;

class WebSocketFrameEntity extends Header
{
    public ?Buffer $payloadData = null;
}
