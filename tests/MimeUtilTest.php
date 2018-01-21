<?php

declare(strict_types=1);

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\MimeUtil\Tests;

use Core23\MimeUtil\MimeUtil;
use PHPUnit\Framework\TestCase;

final class MimeUtilTest extends TestCase
{
    public function testGetTypeFromExtension(): void
    {
        $mimeUtil = new MimeUtil();
        $this->assertSame('image/png', $mimeUtil->getTypeFromExtension('PNG'));
    }

    public function testGetTypeFromExtensionUnknownType(): void
    {
        $mimeUtil = new MimeUtil();
        $this->assertNull($mimeUtil->getTypeFromExtension('foobar'));
    }

    public function testGetTypeFromFilename(): void
    {
        $mimeUtil = new MimeUtil();
        $this->assertSame('image/png', $mimeUtil->getTypeFromFilename('foo.bar.png'));
    }

    public function testGetTypeFromFilenameUnknownFilename(): void
    {
        $mimeUtil = new MimeUtil();
        $this->assertNull($mimeUtil->getTypeFromFilename('foobar'));
    }

    public function testGetExtensionsFromType(): void
    {
        $mimeUtil = new MimeUtil();
        $this->assertSame(['png'], $mimeUtil->getExtensionsFromType('image/png'));
    }

    public function testGetExtensionsFromTypeMultiple(): void
    {
        $mimeUtil = new MimeUtil();
        $this->assertSame(['jpe', 'jpeg', 'jpg'], $mimeUtil->getExtensionsFromType('image/jpeg'));
    }

    public function testGetExtensionsFromTypeUnknown(): void
    {
        $mimeUtil = new MimeUtil();
        $this->assertSame([], $mimeUtil->getExtensionsFromType('foo/bar'));
    }
}
