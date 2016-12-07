<?php

namespace Opnmind\SVG\Nodes;

use Opnmind\SVG\Rasterization\SVGRasterizer;

/**
 * Represents an SVG image element that contains child elements.
 */
abstract class SVGNodeContent extends SVGNodeContainer
{
    /** @var SVGNode[] $content This node's child nodes. */
    protected $content;

    public function __construct()
    {
        parent::__construct();

        $this->content = "";
    }
	
	/**
     * Adds an SVGNode instance to the end of this container's child list.
     * Does nothing if it already exists.
     *
     * @param SVGNode $node The node to add to this container's children.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setContent($content)
    {
        if (!is_string($content)) 
		{
            return False;
        }
        $this->content = $content;
        return True;
    }

    /**
     * Removes a child node, given either as its instance or as the index it's
     * located at, from this container.
     *
     * @param SVGNode|int $nodeOrIndex The node (or respective index) to remove.
     *
     * @return $this This node instance, for call chaining.
     */
    public function getContent()
    {
		return $this->content;
    }
	
	public function rasterize(SVGRasterizer $rasterizer)
    {
        #foreach ($this->children as $child) {
        #    $child->rasterize($rasterizer);
        #}
    }
}
