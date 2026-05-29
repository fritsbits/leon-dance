<?php

namespace Tests\Unit\Build;

use App\Support\Build\WikiParser;
use Tests\TestCase;

class WikiParserTest extends TestCase
{
    private WikiParser $parser;

    protected function setUp(): void
    {
        parent::setUp();
        $this->parser = new WikiParser();
    }

    public function test_extracts_page_registry_rows_from_40_skeleton(): void
    {
        $md = $this->parser->read('docs/wiki/design/40-skeleton.md');
        $rows = $this->parser->extractRows($md, '/^P-\d+$/');

        $this->assertGreaterThanOrEqual(18, count($rows));
        $p01 = collect($rows)->first(fn ($r) => $r[0] === 'P-01');
        $this->assertStringContainsString('Home', $p01[1]);
        $this->assertCount(12, $p01); // ID,Name,Slug,Type,UX,Conf,Wire,Assets,UI,Back,OK,Gaps
    }

    public function test_extracts_pattern_and_concern_rows(): void
    {
        $skeleton = $this->parser->read('docs/wiki/design/40-skeleton.md');
        $patterns = $this->parser->extractRows($skeleton, '/^SP-\d+$/');
        $this->assertContains('SP-08', collect($patterns)->pluck(0)->all());

        $concernsMd = $this->parser->read('docs/wiki/design/01-concerns.md');
        $concerns = $this->parser->extractRows($concernsMd, '/^Dn-\d+$/');
        $this->assertContains('Dn-03', collect($concerns)->pluck(0)->all());
    }

    public function test_extracts_the_sitemap_fenced_block(): void
    {
        $md = $this->parser->read('docs/wiki/design/30-structure.md');
        $tree = $this->parser->extractFencedBlock($md, 'Sitemap');
        $this->assertStringContainsString('HOME', $tree);
        $this->assertStringContainsString('Samenwerken', $tree);
    }
}
