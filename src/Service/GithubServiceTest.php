<?php

namespace App\Service;

use PHPUnit\Framework\TestCase;

class GithubServiceTest extends TestCase
{
    public function testGetHealthReportReturnsCorrectHealthStatusForDino()
    {
        $service = new GithubService();
    }
}