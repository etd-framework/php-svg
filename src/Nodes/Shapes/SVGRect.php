<?php

namespace Opnmind\SVG\Nodes\Shapes;

use Opnmind\SVG\Nodes\SVGNode;
use Opnmind\SVG\Rasterization\SVGRasterizer;

/**
 * Represents the SVG tag 'rect'.
 * Has the special attributes x, y, width, height.
 */
class SVGRect extends SVGNode
{
    const TAG_NAME = 'rect';

    /**
     * @param string|null $x      The x coordinate of the upper left corner.
     * @param string|null $y      The y coordinate of the upper left corner.
     * @param string|null $x      The rx and the ry attributes rounds the corners of the rectangle
     * @param string|null $y      The rx and the ry attributes rounds the corners of the rectangle
     * @param string|null $width  The width.
     * @param string|null $height The height.
     */
    public function __construct($x = null, $y = null, $rx = null, $ry = null, $width = null, $height = null)
    {
        parent::__construct();

        $this->setAttributeOptional('x', $x);
        $this->setAttributeOptional('y', $y);
        $this->setAttributeOptional('rx', $rx);
        $this->setAttributeOptional('ry', $ry);
        $this->setAttributeOptional('width', $width);
        $this->setAttributeOptional('height', $height);
    }



    /**
     * @return string The x coordinate of the upper left corner.
     */
    public function getX()
    {
        return $this->getAttribute('x');
    }

    /**
     * Sets the x coordinate of the upper left corner.
     *
     * @param string $x The new coordinate.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setX($x)
    {
        return $this->setAttribute('x', $x);
    }

    /**
     * @return string The x coordinate of the upper left corner.
     */
    public function getRX()
    {
        return $this->getAttribute('rx');
    }

    /**
     * Sets the x coordinate of the upper left corner.
     *
     * @param string $x The new coordinate.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setRX($rx)
    {
        return $this->setAttribute('rx', $rx);
    }

    /**
     * @return string The y coordinate of the upper left corner.
     */
    public function getY()
    {
        return $this->getAttribute('y');
    }

    /**
     * Sets the y coordinate of the upper left corner.
     *
     * @param string $y The new coordinate.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setY($y)
    {
        return $this->setAttribute('y', $y);
    }

    /**
     * @return string The y coordinate of the upper left corner.
     */
    public function getRY()
    {
        return $this->getAttribute('ry');
    }

    /**
     * Sets the y coordinate of the upper left corner.
     *
     * @param string $y The new coordinate.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setRY($y)
    {
        return $this->setAttribute('ry', $ry);
    }

    /**
     * @return string The width.
     */
    public function getWidth()
    {
        return $this->getAttribute('width');
    }

    /**
     * @param string $width The new width.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setWidth($width)
    {
        return $this->setAttribute('width', $width);
    }

    /**
     * @return string The height.
     */
    public function getHeight()
    {
        return $this->getAttribute('height');
    }

    /**
     * @param string $height The new height.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setHeight($height)
    {
        return $this->setAttribute('width', $height);
    }



    public function rasterize(SVGRasterizer $rasterizer)
    {
        $rasterizer->render('rect', array(
            'x'         => $this->getX(),
            'y'         => $this->getY(),
            'rx'         => $this->getRX(),
            'ry'         => $this->getRY(),
            'width'     => $this->getWidth(),
            'height'    => $this->getHeight(),
        ), $this);
    }
}
