<?php
/**
 * @author    Andreas Fischer <bantu@phpbb.com>
 * @copyright 2013 Andreas Fischer
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 */

use phpseclibXD\Math\BigInteger\Engines\BCMath;

class Unit_Math_BigInteger_BCMathTest extends Unit_Math_BigInteger_TestCase
{
    public static function setUpBeforeClass()
    {
        if (!BCMath::isValidEngine()) {
            self::markTestSkipped('BCMath extension is not available.');
        }
        BCMath::setModExpEngine('DefaultEngine');
    }

    public function getInstance($x = 0, $base = 10)
    {
        return new BCMath($x, $base);
    }

    public static function getStaticClass()
    {
        return 'phpseclibXD\Math\BigInteger\Engines\BCMath';
    }
}
