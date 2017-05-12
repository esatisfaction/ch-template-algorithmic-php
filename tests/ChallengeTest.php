<?php

/*
 * This file is part of the Challenge Code Template Project.
 *
 * (c) Ioannis Papikas <papikas.ioan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Challenge\tests;

use Challenge\Challenge;
use PHPUnit_Framework_TestCase;

/**
 * Class ChallengeTest
 * @package Challenge\tests
 */
class ChallengeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Challenge
     */
    protected $challenge;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        parent::setUp();

        // Create challenge
        $this->challenge = new Challenge();
    }

    /**
     * @covers \Challenge\Challenge::execute
     *
     * @throws \PHPUnit_Framework_AssertionFailedError
     */
    public function testExecute()
    {
        // TODO: Change the body of this function to test your implementation accordingly
        $this->assertTrue($this->challenge->execute());
    }
}
