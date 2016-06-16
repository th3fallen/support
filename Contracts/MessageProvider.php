<?php

namespace Th3FalleN\Support\Contracts;

interface MessageProvider
{
    /**
     * Get the messages for the instance.
     *
     * @return \Th3FalleN\Support\Contracts\MessageBag
     */
    public function getMessageBag();
}
