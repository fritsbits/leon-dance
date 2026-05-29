<?php

namespace App\Support\Build;

use Illuminate\Support\Facades\File;

class WikiParser
{
    public function read(string $relativePath): string
    {
        $full = base_path($relativePath);

        return File::exists($full) ? File::get($full) : '';
    }

    /**
     * Every markdown table row whose first cell matches $idRegex.
     * Returns rows as arrays of trimmed cell strings.
     *
     * @return array<int, array<int, string>>
     */
    public function extractRows(string $markdown, string $idRegex): array
    {
        $rows = [];

        foreach (preg_split('/\R/', $markdown) as $line) {
            $line = trim($line);
            if ($line === '' || $line[0] !== '|') {
                continue;
            }
            $cells = array_map('trim', explode('|', trim($line, '|')));
            if (isset($cells[0]) && preg_match($idRegex, $cells[0])) {
                $rows[] = $cells;
            }
        }

        return $rows;
    }

    /** First fenced ``` block after a heading line containing $afterHeading. */
    public function extractFencedBlock(string $markdown, string $afterHeading): ?string
    {
        $past = false;
        $inFence = false;
        $buf = [];

        foreach (preg_split('/\R/', $markdown) as $line) {
            $trim = trim($line);
            if (! $past) {
                if (str_starts_with($trim, '#') && str_contains($line, $afterHeading)) {
                    $past = true;
                }

                continue;
            }
            if (! $inFence && str_starts_with($trim, '```')) {
                $inFence = true;

                continue;
            }
            if ($inFence && str_starts_with($trim, '```')) {
                return implode("\n", $buf);
            }
            if ($inFence) {
                $buf[] = $line;
            }
        }

        return null;
    }
}
