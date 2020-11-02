<?php

interface Throwable
{
    public function getMessage(); // text message
    public function getCode(); // cod error
    public function getFile(); // file where is the exception
    public function getLine(); // row in file
    public function getTrace(); // trace error
    public function getTraceAsString(); // trace error string
    public function getPrevious(); // previous exception
    public function __toString();
}
