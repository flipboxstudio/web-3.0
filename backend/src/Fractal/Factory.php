<?php

namespace Flipbox\Fractal;

use Spatie\Fractal\Fractal as BaseFractal;

class Factory extends BaseFractal
{
    /**
     * Current resource status.
     *
     * @var string
     */
    protected $status = 'ok';

    /**
     * Current resource message.
     *
     * @var string
     */
    protected $message = 'success';

    /**
     * Set status to current resource.
     *
     * @param string $status
     *
     * @return \Flipbox\Fractal\Factory
     */
    public function withStatus(string $status) : Factory
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Set message to current resource.
     *
     * @param string $message
     *
     * @return \Flipbox\Fractal\Factory
     */
    public function withMessage(string $message) : Factory
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get status of current resource.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }

    /**
     * Get message of current resource.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
}
