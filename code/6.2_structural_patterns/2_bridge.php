<?php


interface Formatter
{
    public function format($text) : string;
}

abstract class Service
{
    protected $formatter;

    public function __construct(Formatter $formatter)
    {
        $this->formatter = $formatter;
    }

    public function setFormatter(Formatter $formatter)
    {
        $this->formatter = $formatter;
    }

    abstract public function get();
}

class HtmlFormatter implements Formatter
{
    public function format($text): string
    {
        return '<h1>' . $text . '</h1>';
    }
}

class PlainTextFormatter implements Formatter
{
    public function format($text): string
    {
        return $text;
    }
}

class HelloWorldService extends Service
{
    public function get()
    {
        return $this->formatter->format('Hello World');
    }
}

$service = new HelloWorldService(new PlainTextFormatter());
echo $service->get() . PHP_EOL;

$service->setFormatter(new HtmlFormatter());;
echo $service->get() . PHP_EOL;
