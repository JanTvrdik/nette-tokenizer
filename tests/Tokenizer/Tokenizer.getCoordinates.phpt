<?php

/**
 * Test: Nette\Tokenizer\Tokenizer::getCoordinates
 */

use Nette\Tokenizer\Tokenizer;
use Tester\Assert;


require __DIR__ . '/../bootstrap.php';


Assert::same([1, 1], Tokenizer::getCoordinates("say \n123", 0));
Assert::same([1, 2], Tokenizer::getCoordinates("say \n123", 1));
Assert::same([1, 5], Tokenizer::getCoordinates("say \n123", 4));
Assert::same([2, 1], Tokenizer::getCoordinates("say \n123", 5));
