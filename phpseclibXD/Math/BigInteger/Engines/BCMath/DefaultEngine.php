<?php

/**
 * BCMath Default Modular Exponentiation Engine
 *
 * PHP version 5 and 7
 *
 * @category  Math
 * @package   BigInteger
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://pear.php.net/package/Math_BigInteger
 */

namespace phpseclibXD\Math\BigInteger\Engines\BCMath;

use phpseclibXD\Math\BigInteger\Engines\BCMath\Reductions\Barrett;

/**
 * PHP Default Modular Exponentiation Engine
 *
 * @package PHP
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class DefaultEngine extends Barrett
{
}