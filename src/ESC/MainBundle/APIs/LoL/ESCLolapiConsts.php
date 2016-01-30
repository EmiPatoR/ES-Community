<?php
/**
 * Util Class containing all Constants and static methods
 * User: emip
 * Date: 29/01/16
 * Time: 23:16
 */

namespace ESC\MainBundle\APIs\LoL;


final class ESCLolapiConsts
{
    //API Key
    const KEY = "c486c127-2fe0-4a76-ad60-10f60d766c67";

    //LOCALES
    const LANG_CZECH = "cs_CZ";
    const LANG_GERMAN = "de_DE";
    const LANG_GREEK = "el_GR";
    const LANG_ENGLISH_AUSTALIA = "en_AU";
    const LANG_ENGLISH_UK = "en_GB";
    const LANG_ENGLISH_PHILIPPINES = "en_PH";
    const LANG_ENGLISH_POLAND = "en_PL";
    const LANG_ENGLISH_SINGAPORE = "en_SG";
    const LANG_ENGLISH_US = "en_US";
    const LANG_SPANISH_ARGENTINA = "es_AR";
    const LANG_SPANISH = "es_ES";
    const LANG_SPANISH_MEXICO = "es_MX";
    const LANG_FRENCH = "fr_FR";
    const LANG_HUNGARIAN = "hu_HU";
    const LANG_INDONESIAN = "id_ID";
    const LANG_ITALIAN = "it_IT";
    const LANG_JAPANESE = "ja_JP";
    const LANG_KOREAN = "ko_KR";
    const LANG_MALAY = "ms_MY";
    const LANG_POLISH = "pl_PL";
    const LANG_PORTUGUESE_BRASIL = "pt_BR";
    const LANG_ROMANIAN = "ro_RO";
    const LANG_RUSSIAN = "ru_RU";
    const LANG_THAI = "th_TH";
    const LANG_TURKISH = "tr_TR";
    const LANG_VIETNAMESE = "vn_VN";
    const LANG_CHINESE = "zh_CN";
    const LANG_CHINESE_MALAYSIA = "zh_MY";
    const LANG_CHINESE_TAIWAN = "zh_TW";

    //REGIONS PLATFORMS IDs
    const PLATFORM_ID_BR = "BR1";
    const PLATFORM_ID_EUNE = "EUN1";
    const PLATFORM_ID_EUW = "EUW1";
    const PLATFORM_ID_KR = "KR";
    const PLATFORM_ID_LAN = "LA1";
    const PLATFORM_ID_LAS = "LA2";
    const PLATFORM_ID_NA  = "NA1";
    const PLATFORM_ID_OCE = "OC1";
    const PLATFORM_ID_TR = "TR1";
    const PLATFORM_ID_RU = "RU";
    const PLATFORM_ID_PBE = "PBE1";

    //REGIONS

    //REGIONS URLS
    const BR = "br";
    const EUNE = "eune";
    const EUW = "euw";
    const KR = "kr";
    const LAN = "lan";
    const LAS = "las";
    const NA = "na";
    const OCE = "oce";
    const TR = "tr";
    const RU = "ru";
    const PBE = "pbe";
    const _GLOBAL = "global";

    //

    //API URLS
        //API CHAMPIONS
    const URL_ALL_CHAMIPONS = "/api/lol/{region}/v1.2/champion";
    const URL_CHAMPION_BY_ID = "/api/lol/{region}/v1.2/champion/{id}";
        //API CHAMPION MASTERY
    const URL_CHAMPION_MASTERY_BY_ID_API = "/championmastery/location/{platformId}/player/{summonerId}/champion/{championId}";
    const URL_ALL_CHAMPIONS_MASTERIES_API = "/championmastery/location/{platformId}/player/{summonerId}/champions";
    const URL_TOP_CHAMPIONS_MASTERIES_API = "/championmastery/location/{platformId}/player/{summonerId}/topchampions";
    const URL_TOTAL_MASTERIES_SCORE_API = "/championmastery/location/{platformId}/player/{summonerId}/score";
        //API CURRENT GAME
    const URL_CURRENT_GAME_API = "/observer-mode/rest/consumer/getSpectatorGameInfo/{platformId}/{summonerId}";
        //API FEATURED GAMES
    const URL_FEATURED_GAMES_API = "/observer-mode/rest/featured";
        //API GAME
    const URL_RECENT_GAME_API = "/api/lol/{region}/v1.3/game/by-summoner/{summonerId}/recent";
        //API STATIC DATA
    const URL_STATIC_DATA_ALL_CHAMPIONS_API = "/api/lol/static-data/{region}/v1.2/champion";
    const URL_STATIC_DATA_CHAMPION_BY_ID_API = "/api/lol/static-data/{region}/v1.2/champion/{id}";
    //TODO To FINISH

    //URL START
    const URL_START = "https://";
    const URL_MIDDLE = ".api.pvp.net";

    //static methods
    /**
     * Concats PARAMS to generate API's corresponding URL
     * @param $region string
     * @param $api string
     * @param string $options
     * @return string concatened URL
     */
    public static function generateURL($region,$api, $options = ""){
        $ret = self::URL_START . $region . self::URL_MIDDLE . $api . "?api_key=" . self::KEY . $options;
        return str_replace("{region}",$region,$ret);
    }


}