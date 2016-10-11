<?php

namespace Flipbox\Fractal\Transformers;

use League\Fractal\TransformerAbstract;

class ArrayTransformer extends TransformerAbstract
{
    /**
     * {@inheritdoc}
     */
    public function transform(array $array) : array
    {
        return $array;
    }
}
