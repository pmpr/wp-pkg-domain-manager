<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6214cafc97f06             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Backlink; use Pmpr\Common\Foundation\REST\RESTController; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class REST extends RESTController { protected ?Generator $generator = null; public function __construct() { $this->rest_base = "\x62\x61\x63\153\154\x69\x6e\153"; $this->generator = Generator::symcgieuakksimmu(); parent::__construct(); } public function siciqscsekqaqess() : ?Generator { return $this->generator; } public function register_routes() { $this->register("\57\x67\145\x74\55\144\141\x74\x61", ["\x61\162\x67\x73" => [], "\x6d\145\x74\x68\157\144\x73" => self::uigoseacoukemwqc, "\143\x61\x6c\x6c\x62\141\143\153" => [$this, "\x73\145\171\x79\x69\x71\x6d\147\167\x79\155\x79\165\x6d\x6f\161"]]); } public function seyyiqmgwymyumoq(WP_REST_Request $aqmwamyiwgeeymqa) { $ccamueccusigaaio = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::mgsccwumkcawaqcy); if ($ccamueccusigaaio) { goto iwsuawwqomaowuii; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\x71\x75\x69\162\145\40\160\x61\x72\x61\x6d\145\164\x65\x72\x73\x20\155\151\163\x73\x69\156\x67\56", PR__PKG__DOMAIN_MANAGER), 400); goto wcugqegqsuuuwqao; iwsuawwqomaowuii: $wksoawcgagcgoask = $this->siciqscsekqaqess()->yoieqkskckuicoiu($ccamueccusigaaio); if ($wksoawcgagcgoask) { goto wagqgeqymeqoeuyi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\161\x75\x65\x73\164\x65\x64\x20\143\157\155\x70\157\156\x65\x6e\x74\x20\156\x6f\x74\40\146\157\165\156\x64\56", PR__PKG__DOMAIN_MANAGER), 400); goto qoqskyuuwueqkquk; wagqgeqymeqoeuyi: $qeqooyuoiasweuck = $this->sscegwueamckwmcy("\147\145\x74\x5f{$wksoawcgagcgoask}", []); if ($qeqooyuoiasweuck) { goto eogwckcymuugikuy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x43\141\156\40\156\x6f\x74\40\147\145\x6e\145\x72\x61\x74\145\x20\x70\x61\147\145\x20\144\141\x74\x61\56", PR__PKG__DOMAIN_MANAGER), 400); goto msemumccgceyugmg; eogwckcymuugikuy: $icwicymcioeyeyek = $this->siciqscsekqaqess()->cqykmuguekuoyuwy($qeqooyuoiasweuck); if ($icwicymcioeyeyek) { goto mwsmsguqqkcwiiuk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x50\x6c\x65\141\x73\145\x20\x74\162\171\40\141\x67\141\x69\x6e", PR__PKG__DOMAIN_MANAGER)); goto eeauyscekuckoues; mwsmsguqqkcwiiuk: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\104\x61\x74\141\40\x67\x65\156\145\162\141\164\x65\x64\x20\x73\165\x63\x63\x65\x73\x73\x66\x75\x6c\x6c\x79\56", PR__PKG__DOMAIN_MANAGER), $icwicymcioeyeyek); eeauyscekuckoues: msemumccgceyugmg: qoqskyuuwueqkquk: wcugqegqsuuuwqao: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
