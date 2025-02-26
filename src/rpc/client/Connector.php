<?php

declare(strict_types=1);

namespace think\swoole\rpc\client;

use Generator;

interface Connector
{
    /**
     * @param Generator|string $data
     * @return string
     */
    public function sendAndRecv($data);
}
