<?php
require 'WordCount.php';
use PHPUnit\Framework\TestCase;

class WordCountTest extends TestCase
{
    public function testCountWords()
    {
        $Wc =  new WordCount();
        $TestSentence = "My name is Nasywa";
        $WordCount = $Wc->countWord($TestSentence);

        $this->assertEquals(4,$WordCount);
    }

}
