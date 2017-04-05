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
 * Class ContentClassAwareTrait
 * @package Positibe\Component\ContentAware\Entity
 *
 * @author Pedro Carlos Abreu <pcabreus@gmail.com>
 */
trait ContentClassAwareTrait {

    /**
     * @var string
     *
     * @ORM\Column(name="content_class", type="string", length=128, nullable=TRUE)
     */
    protected $contentClass;

    public function setContentClassByContent($content)
    {
        $this->contentClass = get_class($content);
    }

    /**
     * @return string
     */
    public function getContentClass()
    {
        return $this->contentClass;
    }

    /**
     * @param string $contentClass
     */
    public function setContentClass($contentClass)
    {
        $this->contentClass = $contentClass;
    }
} 