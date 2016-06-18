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
    const LANG_ENGLISH_AUSTRALIA = "en_AU";
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
    const LANG_PORTUGUESE_BRAZIL = "pt_BR";
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
    const PLATFORM_ID_NA = "NA1";
    const PLATFORM_ID_OCE = "OC1";
    const PLATFORM_ID_TR = "TR1";
    const PLATFORM_ID_RU = "RU";
    const PLATFORM_ID_PBE = "PBE1";

    //REGIONS
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
    const URL_STATIC_DATA_ALL_ITEMS_API = "/api/lol/static-data/{region}/v1.2/item";
    const URL_STATIC_DATA_ITEM_BY_ID = "/api/lol/static-data/{region}/v1.2/item/{id}";
    const URL_STATIC_DATA_LANGUAGE_STRINGS = "/api/lol/static-data/{region}/v1.2/language-strings";
    const URL_STATIC_DATA_LANGUAGES = "/api/lol/static-data/{region}/v1.2/languages";
    const URL_STATIC_DATA_MAP = "/api/lol/static-data/{region}/v1.2/map";
    const URL_STATIC_DATA_MASTERIES = "/api/lol/static-data/{region}/v1.2/mastery";
    const URL_STATIC_DATA_MASTERY_BY_ID = "/api/lol/static-data/{region}/v1.2/mastery/{id}";
    const URL_STATIC_DATA_REALM = "/api/lol/static-data/{region}/v1.2/realm";
    const URL_STATIC_DATA_RUNES = "/api/lol/static-data/{region}/v1.2/rune";
    const URL_STATIC_DATA_RUNE_BY_ID = "/api/lol/static-data/{region}/v1.2/rune/{id}";
    const URL_STATIC_DATA_SUMMONER_SPELLS = "/api/lol/static-data/{region}/v1.2/summoner-spell";
    const URL_STATIC_DATA_SUMMONER_SPELL_BY_ID = "/api/lol/static-data/{region}/v1.2/summoner-spell/{id}";
    const URL_STATIC_DATA_VERSIONS = "/api/lol/static-data/{region}/v1.2/versions";
    //API STATUS
    const URL_STATUS_SHARDS = "/shards";
    const URL_STATUS_SHARD_BY_REGION = "/shards/{region}";
    //API_MATCHES
    const URL_MATCH_BY_ID = "/api/lol/{region}/v2.2/match/{matchId}";
    //API MATCH LIST
    const URL_MATCH_LIST_BY_SUMMONER_ID = "/api/lol/{region}/v2.2/matchlist/by-summoner/{summonerId}";
    // API STATS
    const URL_STATS_RANKED_BY_SUMMONER_ID = "/api/lol/{region}/v1.3/stats/by-summoner/{summonerId}/ranked";
    const URL_STATS_GENERAL_BY_SUMMONER_ID = "/api/lol/{region}/v1.3/stats/by-summoner/{summonerId}/summary";
    // API SUMMONER
    const URL_SUMMONER_BY_ACCOUNT_IDS = "/api/lol/{region}/v1.4/summoner/by-account/{accountIds}";
    const URL_SUMMONER_BY_SUMMONER_NAMES = "/api/lol/{region}/v1.4/summoner/by-name/{summonerNames}";
    const URL_SUMMONER_BY_SUMMONER_IDS = "/api/lol/{region}/v1.4/summoner/{summonerIds}";
    const URL_SUMMONER_MASTERIES_PAGE_BY_SUMMONER_ID = "/api/lol/{region}/v1.4/summoner/{summonerIds}/masteries";
    const URL_SUMMONER_NAME_BY_SUMMONER_ID = "/api/lol/{region}/v1.4/summoner/{summonerIds}/name";
    const URL_SUMMONER_RUNE_PAGES_BY_SUMMONER_IDS = "/api/lol/{region}/v1.4/summoner/{summonerIds}/runes";
    // API TEAM
    const URL_TEAM_BY_SUMMONER_IDS = "/api/lol/{region}/v2.4/team/by-summoner/{summonerIds}";
    const URL_TEAM_BY_TEAM_IDS = "/api/lol/{region}/v2.4/team/{teamIds}";

    //URL START
    const URL_START = "https://";
    const URL_MIDDLE = ".api.pvp.net";
    const URL_API_KEY = "?api_key=";

    //URL PARAMS
    const URL_PARAM_ID = "{id}";
    const URL_PARAM_SUMMONER_NAMES = "{summonerNames}";
    //TODO FINISH

    //Parameters
    const PARAM_CHAMPION_ID = 1;
    const PARAM_PLATFORM_ID = 2;
    const PARAM_SUMMONER_ID = 3;
    const PARAM_SUMMONER_IDS = 4;
    const PARAM_TEAM_IDS = 5;
    const PARAM_ID = 6;
    const PARAM_MATCH_ID = 7;
    const PARAM_ACCOUNT_IDS = 8;
    const PARAM_SUMMONER_NAMES = 9;

    //Options
    const OPTION_ALL_CHAMPIONS_F2P = 1; // to return only Free to play champions
    const OPTION_COUNT_TOP_CHAMPIONS_MASTERIES = 2; // Default value if not specified is Count=3
    const OPTION_LEAGUE_CHALLENGER_TYPE_5V5 = 3;
    const OPTION_LEAGUE_CHALLENGER_TYPE_3V3 = 4;
    const OPTION_LEAGUE_CHALLENGER_TYPE_SOLOQ = 5;
    const OPTION_LEAGUE_MASTER_TYPE_5V5 = 6;
    const OPTION_LEAGUE_MASTER_TYPE_3V3 = 7;
    const OPTION_LEAGUE_MASTER_TYPE_SOLOQ = 8;
    //TODO FINISH


    //static methods

    /**
     * Generate parameters needed for an URL API
     *
     * @param $param
     * @param $value
     * @param null $old
     * @return array|null
     */
    public static function generateParams($param, $value, $old = null)
    {
        if ($old != null) {
            $old[$param] = $value;
            return $old;
        }
        return array($param => $value);
    }

    /**
     * Generate options needed for an URL API
     *
     * @param $option
     * @param $value
     * @param null $old
     * @return array|null
     */
    public static function generateOpts($option, $value, $old = null)
    {
        if ($old != null) {
            $old[$option] = $value;
            return $old;
        }
        return array($option => $value);
    }

    /**
     * return the corresponding URL to the given API with given parameters.
     *
     * @param $region
     * @param $api
     * @param $params
     * @param string $options
     * @return string url
     */
    public static function generateURL($region, $api, $params, $options = "")
    {
        $ret = self::URL_START . $region . self::URL_MIDDLE . $api . self::URL_API_KEY . self::KEY . $options;
        if ($params != null) {
            switch ($api) {

                case self::URL_CHAMPION_BY_ID:
                    $ret = str_replace(self::URL_PARAM_ID, $params[self::PARAM_CHAMPION_ID], $ret);
                    break;
                case self::URL_SUMMONER_BY_SUMMONER_NAMES:
                    $ret = str_replace(self::URL_PARAM_SUMMONER_NAMES, $params[self::PARAM_SUMMONER_NAMES],$ret);
                    break;
            //TODO Complete
            }
        }

        return str_replace("{region}", $region, $ret);
    }


}