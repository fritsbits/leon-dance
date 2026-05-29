<?php

namespace Tests\Unit\Build;

use App\Support\Build\DriftChecker;
use App\Support\Build\Stage;
use Tests\TestCase;

class DriftCheckerTest extends TestCase
{
    private DriftChecker $checker;

    protected function setUp(): void
    {
        parent::setUp();
        $this->checker = new DriftChecker(stubLineThreshold: 25, stubMarkers: ['[placeholder']);
    }

    public function test_flags_page_whose_ux_is_declared_but_brief_file_missing(): void
    {
        $pages = [[
            'id' => 'P-99',
            'slug' => '/',
            'stages' => ['ux' => Stage::Good, 'wireframe' => Stage::NotStarted],
            'briefPath' => 'docs/wiki/design/42-briefs/99-nope.md', // absent
            'viewPath' => null,
        ]];

        $findings = $this->checker->check($pages, []);

        $this->assertCount(1, $findings);
        $this->assertSame('P-99', $findings[0]['id']);
        $this->assertStringContainsString('UX', $findings[0]['message']);
    }

    public function test_no_findings_for_fully_not_started_page(): void
    {
        $pages = [[
            'id' => 'P-98', 'slug' => '/',
            'stages' => ['ux' => Stage::NotStarted, 'wireframe' => Stage::NotStarted],
            'briefPath' => 'x.md', 'viewPath' => null,
        ]];

        $this->assertSame([], $this->checker->check($pages, []));
    }

    public function test_flags_pattern_claiming_missing_partial(): void
    {
        $patterns = [['id' => 'SP-99', 'partialPath' => 'resources/views/partials/nope.blade.php']];

        $findings = $this->checker->check([], $patterns);

        $this->assertCount(1, $findings);
        $this->assertSame('SP-99', $findings[0]['id']);
    }
}
