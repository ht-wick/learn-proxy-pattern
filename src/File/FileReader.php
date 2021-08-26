<?php

namespace DesignPatterns\Structural\Proxy\File;

class FileReader implements ReaderInterface
{
	protected $file;

    public function __construct($path)
    {
        $this->file = file_get_contents($path);
    }

    public function countOccurancesOfWord($word)
    {
        return substr_count($this->file, $word);
    }
}
