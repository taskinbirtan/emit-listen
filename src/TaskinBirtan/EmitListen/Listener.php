<?php

namespace TaskinBirtan\EmitListen;

class Listener
{
    protected $emitter;

    public function __construct(Emitter $emitter)
    {
        $this->emitter = $emitter;
    }

    public function subscribe($event, callable $callback)
    {
        $this->emitter->on($event, $callback);
    }
}