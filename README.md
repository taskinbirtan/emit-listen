# EmitListen

A simple emit/listener package for PHP.

## Installation

Use composer to install the package:

```bash
composer require taskinbirtan/emit-listen


use TaskinBirtan\EmitListen\Emitter;

$emitter = new Emitter();

$emitter->on('myEvent', function ($arg1, $arg2) {
    // Do something with the arguments
});

$emitter->emit('myEvent', 'arg1Value', 'arg2Value');


use TaskinBirtan\EmitListen\Emitter;
use TaskinBirtan\EmitListen\Listener;

$emitter = new Emitter();
$listener = new Listener($emitter);

$listener->subscribe('myEvent', function ($arg1, $arg2) {
    // Do something with the arguments
});

$emitter->emit('myEvent', 'arg1Value', 'arg2Value');

