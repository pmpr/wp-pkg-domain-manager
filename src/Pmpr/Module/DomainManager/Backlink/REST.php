<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678aa122ac55c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Backlink; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\REST\RESTController; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class REST extends RESTController { protected ?Generator $generator = null; public function __construct() { $this->rest_base = "\x62\x61\143\153\x6c\151\x6e\x6b"; $this->generator = Generator::symcgieuakksimmu(); parent::__construct(); } public function siciqscsekqaqess() : ?Generator { return $this->generator; } public function register_routes() { $this->register("\x2f\x67\145\164\x2d\x64\x61\164\141", [Constants::okeuagwgwkmiokac => [], Constants::oaggieeykyaoiiyw => self::uigoseacoukemwqc, Constants::wwgusigoaksqmwsm => [$this, "\x73\x65\171\171\151\161\155\x67\x77\x79\155\x79\x75\x6d\157\161"]]); } public function seyyiqmgwymyumoq(WP_REST_Request $aqmwamyiwgeeymqa) { $ccamueccusigaaio = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::mgsccwumkcawaqcy); if ($ccamueccusigaaio) { $wksoawcgagcgoask = $this->siciqscsekqaqess()->yoieqkskckuicoiu($ccamueccusigaaio); if ($wksoawcgagcgoask) { $qeqooyuoiasweuck = $this->sscegwueamckwmcy("\x67\x65\164\x5f{$wksoawcgagcgoask}", []); if ($qeqooyuoiasweuck) { $icwicymcioeyeyek = $this->siciqscsekqaqess()->cqykmuguekuoyuwy($qeqooyuoiasweuck); if ($icwicymcioeyeyek) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\104\x61\x74\x61\40\147\145\x6e\145\x72\x61\x74\x65\144\40\163\x75\x63\143\x65\163\163\146\x75\154\154\x79\56", PR__MDL__DOMAIN_MANAGER), $icwicymcioeyeyek); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\x6c\x65\x61\163\145\x20\x74\162\171\40\141\147\141\151\x6e", PR__MDL__DOMAIN_MANAGER)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\141\156\40\156\x6f\164\40\147\x65\156\145\162\x61\x74\x65\x20\x70\141\147\x65\40\x64\x61\164\141\x2e", PR__MDL__DOMAIN_MANAGER), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\x65\x71\x75\x65\163\164\x65\x64\x20\143\157\155\x70\x6f\156\145\x6e\164\40\156\x6f\x74\x20\x66\157\x75\x6e\x64\x2e", PR__MDL__DOMAIN_MANAGER), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\x65\161\x75\151\x72\x65\x20\160\x61\x72\x61\155\145\164\145\x72\163\x20\x6d\x69\163\163\x69\x6e\x67\56", PR__MDL__DOMAIN_MANAGER), 400); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
