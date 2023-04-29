<?php

namespace TaskinBirtan\EmitListen;

class Emitter
{
    protected $listeners = [];

    public function on($event, callable $listener)
    {
        if (!isset($this->listeners[$event])) {
            $this->listeners[$event] = [];
        }

        $this->listeners[$event][] = $listener;
    }

    public function emit($event, ...$args)
    {
        if (!isset($this->listeners[$event])) {
            return;
        }

        foreach ($this->listeners[$event] as $listener) {
            $listener(...$args);
        }
    }
}