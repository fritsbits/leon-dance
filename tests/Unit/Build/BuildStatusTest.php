<?php

namespace Tests\Unit\Build;

use App\Support\Build\BuildStatus;
use App\Support\Build\Stage;
use Tests\TestCase;

class BuildStatusTest extends TestCase
{
    private array $report;

    protected function setUp(): void
    {
        parent::setUp();
        $this->report = app(BuildStatus::class)->report();
    }

    public function test_parses_all_19_pages_with_stages_and_confidence(): void
    {
        $pages = collect($this->report['pages']);
        $this->assertCount(19, $pages);

        $home = $pages->firstWhere('id', 'P-01');
        $this->assertStringContainsString('Home', $home['name']);
        $this->assertSame('/', $home['slug']);
        $this->assertInstanceOf(Stage::class, $home['stages']['ux']);
        $this->assertSame(3, $home['confidence']);
    }

    public function test_parses_patterns_and_concerns_and_builds_id_map(): void
    {
        $this->assertContains('SP-08', collect($this->report['patterns'])->pluck('id')->all());
        $this->assertContains('Dn-03', collect($this->report['concerns'])->pluck('id')->all());
        $this->assertArrayHasKey('Dn-03', $this->report['idMap']);
        $this->assertIsString($this->report['idMap']['Dn-03']);
    }

    public function test_computes_overview_counts(): void
    {
        $this->assertSame(19, $this->report['overview']['pagesTotal']);
        $this->assertGreaterThan(0, $this->report['overview']['avgConfidence']);
    }

    public function test_linkify_wraps_id_tokens_and_escapes_other_text(): void
    {
        $html = BuildStatus::linkify('see Dn-03 & <b>x</b>', ['Dn-03' => 'GDPR consent']);
        $this->assertStringContainsString('href="#Dn-03"', $html);
        $this->assertStringContainsString('title="GDPR consent"', $html);
        $this->assertStringContainsString('&lt;b&gt;', $html); // non-token text escaped
    }

    public function test_plainify_strips_markdown_and_summarize_takes_first_sentence(): void
    {
        $this->assertSame(
            'See Glossary and bold and code.',
            BuildStatus::plainify('See [Glossary](../glossary.md) and **bold** and `code`.')
        );
        $this->assertSame(
            'Avg page content-confidence = 2.9 / 5.',
            BuildStatus::summarize('Avg page content-confidence = 2.9 / 5. Then a long second sentence that should be dropped entirely from the register row.', 140)
        );
    }

    public function test_concerns_carry_a_resolution_field(): void
    {
        $this->assertArrayHasKey('resolution', $this->report['concerns'][0]);
    }

    public function test_reports_per_source_freshness(): void
    {
        $this->assertArrayHasKey('sources', $this->report);
        $this->assertArrayHasKey('structure', $this->report['sources']);
        $this->assertArrayHasKey('file', $this->report['sources']['structure']);
        $this->assertSame('30-structure.md', $this->report['sources']['structure']['file']);
        $this->assertIsString($this->report['sources']['structure']['ago']);
    }

    public function test_structure_staleness_is_null_or_names_a_newer_page(): void
    {
        $this->assertArrayHasKey('structureStale', $this->report);
        $stale = $this->report['structureStale'];
        // Either the structure doc is current (null) or it names a page edited after it.
        if ($stale !== null) {
            $this->assertMatchesRegularExpression('/^P-\d+/', $stale['pageId']);
            $this->assertArrayHasKey('pageDate', $stale);
        } else {
            $this->assertNull($stale);
        }
    }
}
