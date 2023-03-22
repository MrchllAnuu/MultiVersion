<?php

declare(strict_types=1);

namespace skyss0fly\MultiVersionPM4\network;

use pocketmine\network\mcpe\protocol\ProtocolInfo;

class ProtocolConstants {

    public const BEDROCK_1_16_220 = 431;
    public const BEDROCK_1_17_0 = 440;
    public const BEDROCK_1_17_10 = 448;
    public const BEDROCK_1_17_30 = 465;
    public const BEDROCK_1_17_40 = 471;
    public const BEDROCK_1_18_0 = 475;
    public const BEDROCK_1_19_0 = 527;
    public const BEDROCK_1_19_10 = 530;
    public const BEDROCK_1_19_20 = 542;
    public const BEDROCK_1_19_50 = 560;
    public const BEDROCK_1_19_60 = 561;
    public const BEDROCK_1_19_62 = 567;
    public const BEDROCK_1_19_63 = 568;
    public const BEDROCK_1_19_70 = 575;

    public const MINECRAFT_VERSION = [
        self::BEDROCK_1_16_220 => "1.16.220",
        self::BEDROCK_1_17_0 => "1.17.0",
        self::BEDROCK_1_17_10 => "1.17.10",
        self::BEDROCK_1_17_30 => "1.17.30",
        self::BEDROCK_1_17_40 => "1.17.40",
        self::BEDROCK_1_18_0 => "1.18.0",
        self::BEDROCK_1_19_0 => "1.19.0",
        self::BEDROCK_1_19_10 => "1.19.10",
        self::BEDROCK_1_19_20 => "1.19.20",
        self::BEDROCK_1_19_50 => "1.19.50",
        self::BEDROCK_1_19_60 => "1.19.60",
        self::BEDROCK_1_19_62 => "1.19.62",
        self::BEDROCK_1_19_63 => "1.19.63",
        self::BEDROCK_1_19_70 => "1.19.70",
        ProtocolInfo::CURRENT_PROTOCOL => ProtocolInfo::MINECRAFT_VERSION_NETWORK 
    ];

    public const SUPPORTED_PROTOCOLS = [
        self::BEDROCK_1_16_220,
        self::BEDROCK_1_17_0,
        self::BEDROCK_1_17_10,
        self::BEDROCK_1_17_30,
        self::BEDROCK_1_17_40,
        self::BEDROCK_1_18_0,
        self::BEDROCK_1_19_0,
        self::BEDROCK_1_19_10,
        self::BEDROCK_1_19_20,
        self::BEDROCK_1_19_50,
        self::BEDROCK_1_19_60,
        self::BEDROCK_1_19_62,
        self::BEDROCK_1_19_63,
        self::BEDROCK_1_19_70,
        ProtocolInfo::CURRENT_PROTOCOL
    ];
}
