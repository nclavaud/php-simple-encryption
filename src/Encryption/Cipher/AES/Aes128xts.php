<?php

declare(strict_types=1);

namespace Encryption\Cipher\AES;

use Encryption\Cipher\ACipherWithInitializationVector;
use Encryption\Traits\Decrypt;
use Encryption\Traits\EncryptWithPadding;

/**
 * Class Aes128xts
 * @package Encryption\Cipher\AES
 */
final class Aes128xts extends ACipherWithInitializationVector
{
    use Decrypt;
    use EncryptWithPadding;

    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 16;
    public const CIPHER = 'AES-128-XTS';
}
