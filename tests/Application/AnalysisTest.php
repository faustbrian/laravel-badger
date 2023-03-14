<?php

declare(strict_types=1);

namespace Tests\Application;

use PreemStudio\Jetpack\TestBench\AbstractAnalysisTestCase;

final class AnalysisTest extends AbstractAnalysisTestCase
{
    protected static function getIgnored(): array
    {
        return ['Spatie\Snapshots\assertMatchesSnapshot'];
    }
}
