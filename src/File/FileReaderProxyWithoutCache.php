<?php

namespace DesignPatterns\Structural\Proxy\File;

class FileReaderProxyWithoutCache implements ReaderInterface
{
	protected $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function countOccurancesOfWord($word)
    {
        return (new FileReader($this->path))->countOccurancesOfWord($word);
    }
}
