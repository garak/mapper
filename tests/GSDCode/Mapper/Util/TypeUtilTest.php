<?php

/**
 * MIT License
 *
 * Copyright (c) 2017 Giorgio Maria Santini
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace Tests\GSDCode\Mapper\Util;

use GSDCode\Mapper\Util\TypeUtil;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PropertyInfo\Type;

/**
 * Description of TypeUtilTest
 *
 * @author <a href="mailto:gsantini@voiptech.it">Giorgio M. Santini</a>
 */
class TypeUtilTest extends TestCase
{
    
    public function testEqualsSimple()
    {
        
        $type = new Type("int", true, null, false, null, null);
        $this->assertTrue(TypeUtil::equals($type, $type));
        
    }
    
    public function testEqualsComplex()
    {
        $type = new Type("object", true, "DateTime", false, null, null);
        $this->assertTrue(TypeUtil::equals($type, $type));
    }
    
    public function testNotEquals()
    {
        $typeA = new Type("int", true, null, false, null, null);
        $typeB = new Type("object", true, "DateTime", false, null, null);
        
        $this->assertFalse(TypeUtil::equals($typeA, $typeB));
    }
    
}
