<?php

/**
 * This file is part of the ApiGen (http://apigen.org)
 *
 * For the full copyright and license information, please view
 * the file LICENSE that was distributed with this source code.
 */

namespace ApiGen\Contracts\Parser\Reflection\TokenReflection;

use ApiGen\Contracts\Parser\Reflection\ClassReflectionInterface;
use ApiGen\Contracts\Parser\Reflection\ConstantReflectionInterface;
use ApiGen\Contracts\Parser\Reflection\Magic\MagicMethodReflectionInterface;
use ApiGen\Contracts\Parser\Reflection\Magic\MagicParameterReflectionInterface;
use ApiGen\Contracts\Parser\Reflection\Magic\MagicPropertyReflectionInterface;
use ApiGen\Contracts\Parser\Reflection\MethodReflectionInterface;

interface ReflectionFactoryInterface
{

    /**
     * @param object $tokenReflection
     * @return ClassReflectionInterface|ConstantReflectionInterface|MethodReflectionInterface
     */
    function createFromReflection($tokenReflection);


    /**
     * @return MagicMethodReflectionInterface
     */
    function createMethodMagic(array $settings);


    /**
     * @return MagicParameterReflectionInterface
     */
    function createParameterMagic(array $settings);


    /**
     * @return MagicPropertyReflectionInterface
     */
    function createPropertyMagic(array $settings);
}
