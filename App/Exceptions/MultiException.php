<?php


namespace App\Exceptions;


use App\Traits\TArrayAccess;
use App\Traits\TIterator;

class MultiException extends \Exception
    implements \ArrayAccess, \Iterator
{
    use TArrayAccess;
    use TIterator;


}