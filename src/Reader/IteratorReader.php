<?php

namespace Port\Reader;

use Port\Reader;

/**
 * Use an iterator as a reader
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class IteratorReader extends \IteratorIterator implements Reader
{
    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return array_keys($this->current());
    }
}
