<?php
/**
 * This file is part of the PositibeLabs Projects.
 *
 * (c) Pedro Carlos Abreu <pcabreus@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Positibe\Component\ContentAware\Model;

/**
 * Interface ContentAwareInterface
 * @package Positibe\Component\ContentAware\Model
 *
 * @author Pedro Carlos Abreu <pcabreus@gmail.com>
 */
interface ContentAwareInterface
{
    public function setContent($content);

    public function getContent();
} 