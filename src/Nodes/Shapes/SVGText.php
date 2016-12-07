<?php

namespace Opnmind\SVG\Nodes\Shapes;

use Opnmind\SVG\Nodes\SVGNodeContent;
use Opnmind\SVG\Rasterization\SVGRasterizer;

/**
 * Represents the SVG tag 'text'.
 * Has the special attributes x1, y1.
 */
class SVGText extends SVGNodeContent
{
    const TAG_NAME = 'text';

    /**
     * @param string|null $x1 The first point's x coordinate.
     * @param string|null $y1 The first point's y coordinate.
     * @param string|null $text The text to print.
     * @param string|null $size Fontsize.
     * @param string|null $color Font-Color.
     * @param string|null $fontfile ttf Fontfile
     */
    public function __construct($x = null, $y = null, $text1 = null, $fontsize = null, $color = null, $fontfile = null)
    {
        parent::__construct();

        $this->setAttributeOptional('x', $x);
        $this->setAttributeOptional('y', $y);        
        $this->setAttributeOptional('font-size', $fontsize);
        $this->setAttributeOptional('fill', $color);
        #$this->setAttributeOptional('font-familiy', $fontfile);
/*?*/	$this->setStyle("font-family", $fontfile.";");
		$this->setContent($text1);
    }

    /**
     * @return string The first point's x coordinate.
     */
    public function getX()
    {
        return $this->getAttribute('x');
    }

    /**
     * Sets the first point's x coordinate.
     *
     * @param string $x1 The new coordinate.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setX($x)
    {
        return $this->setAttribute('x', $x);
    }

    /**
     * @return string The first point's y coordinate.
     */
    public function getY()
    {
        return $this->getAttribute('y');
    }

    /**
     * Sets the first point's y coordinate.
     *
     * @param string $y1 The new coordinate.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setY1($y1)
    {
        return $this->setAttribute('y', $y);
    }

	/**
     * @return string The first point's x coordinate.
     */
    public function getSize()
    {
        return $this->getAttribute('font-size');
    }

    /**
     * Sets the first point's x coordinate.
     *
     * @param string $x1 The new coordinate.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setSize($size)
    {
        return $this->setAttribute('font-size', $size);
    }
	
	/**
     * @return string The first point's x coordinate.
     */
    public function getColor()
    {
        return $this->getAttribute('fill');
    }

    /**
     * Sets the first point's x coordinate.
     *
     * @param string $x1 The new coordinate.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setColor($color)
    {
        return $this->setAttribute('fill', $color);
    }

	/**
     * @return string The first point's x coordinate.
     */
    public function getFontfile()
    {
        return $this->getAttribute('font-family');
    }

    /**
     * Sets the first point's x coordinate.
     *
     * @param string $x1 The new coordinate.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setFontfile($fontfile)
    {
        return $this->setAttribute('font-family', $fontfile);
    }

    public function rasterize(SVGRasterizer $rasterizer)
    {
        $rasterizer->render('text', array(
            'x'    			=> $this->getX(),
            'y'    			=> $this->getY(),
            'text' 			=> $this->getContent(),
            'font-size' 	=> $this->getSize(),
            'fill' 			=> $this->getColor(),
            'font-family' 	=> $this->getFontfile(),
        ), $this);
    }
}
