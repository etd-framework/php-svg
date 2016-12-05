<?php
namespace JangoBrick\SVG\Nodes\Shapes;
use JangoBrick\SVG\Nodes\SVGNodeContent;
use JangoBrick\SVG\Rasterization\SVGRasterizer;

/**
 * Represents the SVG tag 'text'.
 * Has the special attributes x1, y1.
 */
class SVGTextBox extends SVGNodeContent
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
    public function __construct($x1 = null, $y1 = null, $x2 = null, $y2 = null, $text = null, $fontsize = null, $color = null, $fontfile = null)
    {
        parent::__construct();
        $this->setAttributeOptional('x1', $x1);
        $this->setAttributeOptional('y1', $y1);        
        $this->setAttributeOptional('x2', $x2);
        $this->setAttributeOptional('y2', $y2);
        $this->setAttributeOptional('font-size', $fontsize);
        $this->setAttributeOptional('fill', $color);
        #$this->setAttributeOptional('font-familiy', $fontfile);
/*?*/	$this->setStyle("font-family", $fontfile.";");

		$this->setContent($text1);
    }
    
    /**
     * @return string The first point's x1 coordinate.
     */
    public function getX1()
    {
        return $this->getAttribute('x1');
    }
    
    /**
     * Sets the first point's x1 coordinate.
     *
     * @param string $x1 The new coordinate.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setX1($x1)
    {
        return $this->setAttribute('x1', $x1);
    }
    
    /**
     * @return string The first point's y1 coordinate.
     */
    public function getY1()
    {
        return $this->getAttribute('y1');
    }
    
    /**
     * Sets the first point's y1 coordinate.
     *
     * @param string $y1 The new coordinate.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setY1($y1)
    {
        return $this->setAttribute('y1', $y1);
    }
    
    /**
     * @return string The first point's x2 coordinate.
     */
    public function getX2()
    {
        return $this->getAttribute('x2');
    }
    
    /**
     * Sets the first point's x2 coordinate.
     *
     * @param string $x2 The new coordinate.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setX2($x2)
    {
        return $this->setAttribute('x2', $x2);
    }
    
    /**
     * @return string The first point's y2 coordinate.
     */
    public function getY2()
    {
        return $this->getAttribute('y2');
    }
    
    /**
     * Sets the first point's y2 coordinate.
     *
     * @param string $y2 The new coordinate.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setY2($y2)
    {
        return $this->setAttribute('y2', $y2);
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
     * @return string get font-color.
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
            'x1'    			=> $this->getX1(),
            'y1'    			=> $this->getY1(),
            'x2'    			=> $this->getX2(),
            'y2'    			=> $this->getY2(),
            'text' 			=> $this->getContent(),
            'font-size' 	=> $this->getSize(),
            'fill' 			=> $this->getColor(),
            'font-family' 	=> $this->getFontfile(),
        ), $this);
    }
}
