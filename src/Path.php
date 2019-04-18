<?php

namespace SubjectivePHP\IO;

final class Path
{
    /**
     * Combines strings into a path.
     *
     * @param string ...$paths The individual paths to combine.
     *
     * @return string
     */
    public static function combine(string ...$paths) : string
    {
        return implode(DIRECTORY_SEPARATOR, $paths);
    }
}
