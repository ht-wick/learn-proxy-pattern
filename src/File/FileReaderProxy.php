<?php

namespace DesignPatterns\Structural\Proxy\File;

class FileReaderProxy implements ReaderInterface
{
	protected $path;

    protected $fileReader = null;

    public function __construct($path)
    {
        $this->path = $path;
    }

    // public function countOccurancesOfWord($word)
    // {
    //     // return (new FileReader($this->path))->countOccurancesOfWord($word);

    //     $this->init();

    //     return $this->fileReader->countOccurancesOfWord($word);
    // }

    // protected function init()
    public function countOccurancesOfWord($word)
    {
        if ($this->fileReader === null) {
            $this->fileReader = new FileReader($this->path);
        }

        return $this->fileReader->countOccurancesOfWord($word);
    }
}
