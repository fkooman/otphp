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

interface TOTPInterface extends OTPInterface
{
    /**
     * Create a new TOTP object.
     *
     * If the secret is null, a random 64 bytes secret will be generated.
     *
     * @param string|null $secret
     * @param int         $period
     * @param string      $digest
     * @param int         $digits
     *
     * @return TOTPInterface
     */
    public static function create($secret = null, $period = 30, $digest = 'sha1', $digits = 6);
    /**
     * Return the TOTP at the current time.
     *
     * @return string
     */
    public function now();
    /**
     * Get the period of time for OTP generation (a non-null positive integer, in second).
     *
     * @return int
     */
    public function getPeriod();
    /**
     * @return int
     */
    public function getEpoch();
}