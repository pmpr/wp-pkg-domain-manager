<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c213240531             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Backlink; use Pmpr\Common\Foundation\REST\RESTController; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class REST extends RESTController { protected ?Generator $generator = null; public function __construct() { $this->rest_base = "\142\141\x63\153\x6c\151\156\x6b"; $this->generator = Generator::symcgieuakksimmu(); parent::__construct(); } public function siciqscsekqaqess() : ?Generator { return $this->generator; } public function register_routes() { $this->register("\x2f\x67\145\164\x2d\x64\141\x74\141", ["\141\x72\147\x73" => [], "\155\145\164\x68\x6f\x64\163" => self::uigoseacoukemwqc, "\143\141\x6c\x6c\142\141\x63\153" => [$this, "\x73\x65\x79\171\x69\161\x6d\147\167\x79\155\x79\x75\x6d\x6f\x71"]]); } public function seyyiqmgwymyumoq(WP_REST_Request $aqmwamyiwgeeymqa) { $ccamueccusigaaio = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::mgsccwumkcawaqcy); if ($ccamueccusigaaio) { goto coywmiyqgsweuiic; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\161\165\x69\x72\145\x20\x70\x61\x72\x61\155\x65\164\x65\x72\x73\40\x6d\151\x73\x73\151\x6e\x67\56", PR__MDL__DOMAIN_MANAGER), 400); goto siqagquguiemuoku; coywmiyqgsweuiic: $wksoawcgagcgoask = $this->siciqscsekqaqess()->yoieqkskckuicoiu($ccamueccusigaaio); if ($wksoawcgagcgoask) { goto yssscwioiyygssec; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\x71\x75\x65\x73\164\145\x64\40\x63\157\x6d\160\x6f\x6e\145\156\x74\40\156\157\164\x20\x66\x6f\x75\x6e\x64\56", PR__MDL__DOMAIN_MANAGER), 400); goto ieumumsgyguceusy; yssscwioiyygssec: $qeqooyuoiasweuck = $this->sscegwueamckwmcy("\147\145\x74\x5f{$wksoawcgagcgoask}", []); if ($qeqooyuoiasweuck) { goto qwcegcuowwgiccos; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x43\x61\x6e\40\x6e\157\x74\40\147\145\x6e\145\162\x61\164\145\x20\x70\141\147\x65\40\144\x61\x74\141\56", PR__MDL__DOMAIN_MANAGER), 400); goto qcessicwuikwqsis; qwcegcuowwgiccos: $icwicymcioeyeyek = $this->siciqscsekqaqess()->cqykmuguekuoyuwy($qeqooyuoiasweuck); if ($icwicymcioeyeyek) { goto twkmiuomimomscew; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x50\154\x65\x61\x73\145\x20\x74\x72\171\40\x61\147\141\x69\x6e", PR__MDL__DOMAIN_MANAGER)); goto kooskuwkuayiuose; twkmiuomimomscew: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\104\x61\164\141\x20\147\145\156\x65\x72\x61\x74\145\x64\40\163\x75\143\x63\x65\x73\x73\x66\x75\x6c\154\171\56", PR__MDL__DOMAIN_MANAGER), $icwicymcioeyeyek); kooskuwkuayiuose: qcessicwuikwqsis: ieumumsgyguceusy: siqagquguiemuoku: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
