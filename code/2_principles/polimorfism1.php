<?php

class Printer
{
	public function print()
	{

	}
}

class SomePrinter extends Printer
{

}

class OtherPrinter extends Printer
{

}

function goPrint(Printer $printer)
{
	$printer->print();
}

goPrint(new SomePrinter());
goPrint(new OtherPrinter());

// other example

class Reader
{
	public function read()
	{

	}
}

class Writer
{
	public function write($data)
	{

	}
}

function move(Reader $reader, Writer $writer)
{
	$writer->write($reader->read());
}
