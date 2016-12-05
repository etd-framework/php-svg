<?php

namespace JangoBrick\SVG\Rasterization\Renderers;

use JangoBrick\SVG\Rasterization\SVGRasterizer;

/**
 * This renderer can draw text. Filling is not supported.
 *
 * Options:
 * - float x1: first x coordinate
 * - float y1: first y coordinate
 */
class SVGLineRenderer extends SVGRenderer
{
    protected function prepareRenderParams(SVGRasterizer $rasterizer, array $options)
    {
        return array(
            'x' => self::prepareLengthX($options['x'], $rasterizer),
            'y' => self::prepareLengthY($options['y'], $rasterizer),
        );
    }

    /**
     * @SuppressWarnings("unused")
     */
    protected function renderFill($image, array $params, $color)
    {
        // can't fill
    }

    protected function renderStroke($image, array $param)
    {
        imagesetthickness($image, $strokeWidth);
		imagettftext(
			$image, 
			$params['font-size'], 
			$angle = 0, 
			$params['x'], 
			$params['y'], 
			$params['fill'],
			$params['font-family'], 
			$params['text']
			);
			
        #imageline($image, $params['x1'], $params['y1'], $params['x2'], $params['y2'], $color);
    }
}
