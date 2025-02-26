<?php

declare(strict_types=1);

namespace think\swoole\rpc\server\channel;

class Buffer
{
    protected $data = '';
    protected $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function write(&$data)
    {
        $size   = strlen($this->data);
        $string = substr($data, 0, $this->length - $size);

        $this->data .= $string;

        if (strlen($data) >= $this->length - $size) {
            $data = substr($data, $this->length - $size);

            return $this->data;
        } else {
            $data = '';
        }
    }
}
