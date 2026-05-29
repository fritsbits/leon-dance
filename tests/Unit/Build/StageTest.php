<?php

namespace Tests\Unit\Build;

use App\Support\Build\Stage;
use PHPUnit\Framework\TestCase;

class StageTest extends TestCase
{
    public function test_maps_status_emoji_to_a_stage(): void
    {
        $this->assertSame(Stage::InProgress, Stage::fromEmoji('🟠 bezig'));
        $this->assertSame(Stage::NotStarted, Stage::fromEmoji('🔴 DEPRECATED'));
        $this->assertSame(Stage::Good, Stage::fromEmoji('🟢'));
        $this->assertSame(Stage::NotApplicable, Stage::fromEmoji('⚪ n.v.t.'));
        $this->assertSame(Stage::ToDecide, Stage::fromEmoji('❓'));
        $this->assertSame(Stage::NotStarted, Stage::fromEmoji('—'));
    }

    public function test_exposes_emoji_and_label(): void
    {
        $this->assertSame('🟢', Stage::Good->emoji());
        $this->assertSame('bezig', Stage::InProgress->label());
    }
}
