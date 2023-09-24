<?php

declare(strict_types=1);

namespace AkmalFairuz\MultiVersion\network;

use pocketmine\network\mcpe\protocol\ProtocolInfo;

class ProtocolConstants{

    public const BEDROCK_1_20_0 = 589;
    public const BEDROCK_1_20_10 = 594;
    public const BEDROCK_1_20_30 = 618;

    public const MINECRAFT_VERSION = [
        self::BEDROCK_1_20_0 => "1.20.0",
        self::BEDROCK_1_20_10 => "1.20.10",
        self::BEDROCK_1_20_30 => "1.20.30",
        ProtocolInfo::CURRENT_PROTOCOL => ProtocolInfo::MINECRAFT_VERSION_NETWORK
    ];

    public const SUPPORTED_PROTOCOLS = [
        self::BEDROCK_1_20_0,
        self::BEDROCK_1_20_10,
        self::BEDROCK_1_20_30,
        ProtocolInfo::CURRENT_PROTOCOL
    ];
}
