<?php

namespace SubjectivePHPTest\IO;

use SubjectivePHP\IO\Path;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \SubjectivePHP\IO\Path
 */
final class PathTest extends TestCase
{
    /**
     * @var string
     */
    private $directorySeparator = DIRECTORY_SEPARATOR;

    /**
     * @test
     * @covers ::combine
     */
    public function combineTwoPaths()
    {
        $this->assertSame("foo{$this->directorySeparator}bar", Path::combine('foo', 'bar'));
    }

    /**
     * @test
     * @covers ::combine
     */
    public function combineThreePaths()
    {
        $this->assertSame(
            "foo{$this->directorySeparator}bar{$this->directorySeparator}baz",
            Path::combine('foo', 'bar', 'baz')
        );
    }
}
