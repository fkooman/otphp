<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2018 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */
namespace OTPHP;

interface HOTPInterface extends OTPInterface
{
    /**
     * The initial counter (a positive integer).
     *
     * @return int
     */
    public function getCounter();
    /**
     * Create a new TOTP object.
     *
     * If the secret is null, a random 64 bytes secret will be generated.
     *
     * @param string|null $secret
     * @param int         $counter
     * @param string      $digest
     * @param int         $digits
     *
     * @return HOTPInterface
     */
    public static function create($secret = null, $counter = 0, $digest = 'sha1', $digits = 6);
}