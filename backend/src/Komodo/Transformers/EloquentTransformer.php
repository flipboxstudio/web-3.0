<?php

namespace Flipbox\Komodo\Transformers;

use Illuminate\Database\Eloquent\Model;
use League\Fractal\TransformerAbstract;

class EloquentTransformer extends TransformerAbstract
{
    /**
     * {@inheritdoc}
     */
    public function transform(Model $model) : array
    {
        return $model->toArray();
    }
}
