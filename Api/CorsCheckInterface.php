<?php

/**
 * @copyright  Copyright 2017 Khoazero123
 */

namespace Khoazero123\CorsRequests\Api;

/**
 * Interface CorsCheckInterface
 * @api
 * @package Khoazero123\CorsRequests\Api
 */
interface CorsCheckInterface
{

    /**
     * Return empty body response
     *
     * @return string
     */
    public function check();

}