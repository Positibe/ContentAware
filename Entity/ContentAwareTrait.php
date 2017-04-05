<?php
/**
 * This file is part of the PositibeLabs Projects.
 *
 * (c) Pedro Carlos Abreu <pcabreus@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Positibe\Component\ContentAware\Entity;

/**
 * Class ContentAwareTrait
 * @package Positibe\Component\ContentAware\Entity
 *
 * @author Pedro Carlos Abreu <pcabreus@gmail.com>
 */
trait ContentAwareTrait
{
    protected $content;
    use ContentClassAwareTrait;

    public function setContent($content)
    {
        $this->content = $content;
        $this->setContentClassByContent($content);
    }

    public function getContent()
    {
        return $this->content;
    }
} 