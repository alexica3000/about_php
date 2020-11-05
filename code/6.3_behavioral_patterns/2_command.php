<?php

interface CommandInterface
{
    public function execute();
}

class Invoker
{
    private $command;

    public function setCommand(CommandInterface $cmd)
    {
        $this->command = $cmd;
    }

    public function run()
    {
        $this->command->execute();
    }
}

class Receiver
{
    private $enabledDate = false;
    private $output = [];

    public function write(string $str)
    {
        if ($this->enabledDate) {
            $str .= '[' . date('Y-m-d H:i:s') . ']';
        }

        $this->output[] = $str;
    }

    public function getOutput()
    {
        return join("\n", $this->output);
    }

    public function enableDate()
    {
        $this->enabledDate = true;
    }

    public function disableDate()
    {
        $this->enabledDate = false;
    }
}

class HelloCommand implements CommandInterface
{
    private $output;

    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    public function execute()
    {
        $this->output->write('Hello World');
    }
}

class AddMessageDateCommand implements CommandInterface
{
    private $output;

    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    public function execute()
    {
        $this->output->enableDate();
    }

    public function undo()
    {
        $this->output->disableDate();
    }
}

$invoker = new Invoker();
$reciever = new Receiver();

echo '<pre>';
$invoker->setCommand(new HelloCommand($reciever));
$invoker->run();

echo $reciever->getOutput() . PHP_EOL;
echo '#####################' . PHP_EOL;

$messageDateCommand = new AddMessageDateCommand($reciever);
$messageDateCommand->execute();
$invoker->run();

echo $reciever->getOutput() . PHP_EOL;
echo '#####################' . PHP_EOL;

$messageDateCommand->undo();
$invoker->run();
echo $reciever->getOutput() . PHP_EOL;
echo '<pre>';
