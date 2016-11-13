<?php

namespace Http\Factory\Diactoros;

use Interop\Http\Factory\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;
use Zend\Diactoros\Stream;

class StreamFactory implements StreamFactoryInterface
{
    public function createStream($content = '')
    {
        return new Stream($content, 'rb');
    }

    /**
     * Create a stream from an existing file.
     *
     * The file MUST be opened using the given mode, which may be any mode
     * supported by the `fopen` function.
     *
     * @param string $file
     * @param string $mode
     *
     * @return StreamInterface
     */
    public function createStreamFromFile($file, $mode = 'r')
    {
        $content = fopen($file, $mode);

        return new Stream($content, $mode);
    }

    /**
     * Create a new stream from an existing resource.
     *
     * The stream MUST be readable and may be writable.
     *
     * @param resource $resource
     *
     * @return StreamInterface
     */
    public function createStreamFromResource($resource)
    {
        return new Stream($resource);
    }
}
