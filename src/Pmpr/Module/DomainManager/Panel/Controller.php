<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c213240531             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Panel; use DateTime; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\DomainManager\Model\Ownership; use Pmpr\Module\Panel\REST\AbstractREST; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends AbstractREST { public function __construct() { $this->rest_base = "\x64\157\x6d\x61\x69\x6e\x2d\x6d\x61\156\x61\147\145\162"; parent::__construct(); } public function register_routes() { $this->register("\57\147\145\x74\55\144\157\155\x61\x69\156", ["\x61\162\x67\x73" => [], "\155\x65\164\150\x6f\144\x73" => self::uigoseacoukemwqc, "\x63\x61\x6c\154\x62\141\143\x6b" => [$this, "\167\167\141\x77\151\163\143\153\x69\x71\x65\165\x65\x6f\x75\x61"]]); $this->register("\57\147\145\164\x2d\x64\157\155\x61\151\156\x73", ["\141\162\147\163" => [], "\155\x65\164\150\x6f\x64\x73" => self::uigoseacoukemwqc, "\143\141\x6c\154\x62\x61\x63\x6b" => [$this, "\167\x69\x71\165\x6d\153\155\161\153\x71\x6f\171\143\161\171\x69"]]); $this->register("\57\147\x65\x74\55\144\157\155\x61\151\x6e\55\146\x69\x65\154\144\163", ["\x61\162\147\163" => [], "\155\x65\x74\x68\157\x64\x73" => self::uigoseacoukemwqc, "\143\141\154\x6c\x62\141\x63\153" => [$this, "\165\147\x6d\143\x65\143\143\147\167\x61\141\x61\x69\147\x69\x79"]]); $this->register("\x2f\x73\x61\166\145\x2d\x64\157\x6d\141\x69\x6e", ["\141\162\x67\x73" => [], "\155\145\x74\x68\x6f\144\x73" => self::qucyckeykeuuaquw, "\143\x61\x6c\x6c\x62\x61\x63\x6b" => [$this, "\x6d\x71\x6b\143\x61\165\x65\x6b\171\155\145\153\161\141\153\x69"]]); $this->register("\x2f\x75\x70\x64\141\164\145\55\144\157\155\141\151\x6e", ["\x61\x72\x67\163" => [], "\155\x65\x74\150\x6f\144\163" => self::qucyckeykeuuaquw, "\x63\141\x6c\154\x62\x61\x63\153" => [$this, "\141\155\157\x67\x71\171\x63\157\143\x6f\165\167\141\151\x63\x6f"]]); $this->register("\x2f\147\145\164\x2d\x64\157\155\141\x69\156\55\164\x61\x62\x73", ["\141\x72\x67\x73" => [], "\x6d\145\x74\150\157\144\x73" => self::uigoseacoukemwqc, "\x63\141\154\x6c\142\x61\x63\x6b" => [$this, "\x6b\x63\163\x71\x65\161\155\143\147\x6b\167\x6b\143\171\x6f\x75"]]); $this->register("\x2f\x67\145\x74\55\x6f\167\x6e\145\x72\x73\x68\151\x70\163", ["\x61\162\147\x73" => [], "\155\x65\164\150\157\x64\x73" => self::uigoseacoukemwqc, "\x63\x61\x6c\x6c\x62\141\143\x6b" => [$this, "\155\x63\x6f\x6b\167\x6d\145\165\165\x63\161\x67\157\165\157\x73"]]); $this->register("\x2f\x67\x65\164\x2d\157\x77\x6e\x65\x72\x73\150\x69\x70", ["\141\162\147\163" => [], "\155\x65\164\x68\x6f\144\163" => self::uigoseacoukemwqc, "\x63\141\154\154\x62\x61\143\x6b" => [$this, "\x69\x63\x69\155\x6f\143\171\155\x77\143\157\161\145\x65\x6d\157"]]); $this->register("\57\x76\x65\162\x69\146\x79\x2d\x64\x6f\155\x61\x69\156", ["\141\162\147\x73" => [], "\155\x65\x74\150\157\x64\x73" => self::qucyckeykeuuaquw, "\x63\141\x6c\154\142\141\x63\153" => [$this, "\x65\x79\155\x65\x73\x73\x77\157\x73\153\165\x73\x6b\x6d\x79\x77"]]); } public function mqkcauekymekqaki(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto asiqwuoswmigcaki; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $keccaugmemegoimu = $swgwkyqkakceqeia->kmuykuaakicwsocs($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto wcugqegqsuuuwqao; } $ceiwsaacewygcsqg = $swgwkyqkakceqeia->kumuygiiqswoyasy(); $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu[self::eoskkkieowogacws], [$ceiwsaacewygcsqg => $keccaugmemegoimu[$ceiwsaacewygcsqg]]); wcugqegqsuuuwqao: asiqwuoswmigcaki: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function amogqycocouwaico(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto mqicocmqegwukkwg; } $keccaugmemegoimu = Domain::symcgieuakksimmu()->amogqycocouwaico($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto ciykoyeioqgyaeqo; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\104\157\155\x61\x69\x6e\40\x73\x75\x63\x63\145\163\163\x66\x75\x6c\154\171\x20\x75\x70\144\x61\164\x65\144\56", PR__MDL__DOMAIN_MANAGER), $keccaugmemegoimu); ciykoyeioqgyaeqo: mqicocmqegwukkwg: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mcokwmeuucqgouos(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto acsqgiuageaasiyy; } $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\157\x6d\141\x69\156"); $ukamowomoeiweqky = $ueomouiqmosykioc->ksesieiwkmougeue($mokawwccycoiqeka, $keccaugmemegoimu); if ($ukamowomoeiweqky) { goto ouamogymawucwswu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4e\x6f\40\141\143\x63\145\x73\163\x20\164\157\x20\x74\150\x69\163\x20\163\x65\147\x6d\x65\156\164", PR__MDL__DOMAIN_MANAGER), 401); goto mugqyyeayeyggqqk; ouamogymawucwswu: if ($ueomouiqmosykioc->sqwcgyyocucsouyy($ukamowomoeiweqky) === $ueomouiqmosykioc::myiiuekcoeksaasm) { goto qgeugwymkkiacwoc; } $keccaugmemegoimu = $ueomouiqmosykioc->oosqweumiyeayasy($ueomouiqmosykioc->cwgkcyyaymmsomqa([$ukamowomoeiweqky])); goto emmsycooskoqmgeg; qgeugwymkkiacwoc: $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ausqeuugegoygouq); $keccaugmemegoimu = $ueomouiqmosykioc->bikiqakeqgekegsk($mokawwccycoiqeka, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); emmsycooskoqmgeg: mugqyyeayeyggqqk: acsqgiuageaasiyy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function icimocymwcoqeemo(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto wyuemgggaqogsmsq; } $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $keccaugmemegoimu = $ueomouiqmosykioc->ksesieiwkmougeue($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\x6f\x6d\x61\151\x6e"), $keccaugmemegoimu); if (!$keccaugmemegoimu) { goto oomguqikqokqwgku; } $keccaugmemegoimu = $ueomouiqmosykioc->scqakcemaqsqkema($keccaugmemegoimu, [$ueomouiqmosykioc->kumuygiiqswoyasy(), $ueomouiqmosykioc::meksegaoamowuwoq, $ueomouiqmosykioc::awqaawasiusmysgc, $ueomouiqmosykioc::ucmueuwwcmocgmig, $ueomouiqmosykioc::komqcwuqaguwweiw]); goto samwkqgwouggsguc; oomguqikqokqwgku: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4f\x77\156\145\x72\x73\150\x69\x70\40\156\x6f\x74\40\x66\x6f\x75\x6e\144", PR__MDL__DOMAIN_MANAGER), 404); samwkqgwouggsguc: wyuemgggaqogsmsq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa) { $mokawwccycoiqeka = null; $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ogsaaqsaogcqiouy; } $aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); if (!$aokagokqyuysuksm) { goto miweggwqeiaeweia; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->akkkoiiymmamsauc($aokagokqyuysuksm, $swgwkyqkakceqeia->kumuygiiqswoyasy(), [$swgwkyqkakceqeia::gouqcwikiiygyasc, $swgwkyqkakceqeia::NAME, $swgwkyqkakceqeia::ciyoccqkiamemcmm, $swgwkyqkakceqeia::igswcauwsgmeougs, $swgwkyqkakceqeia::CREATED_AT]); if (!$mokawwccycoiqeka) { goto kkumywowcoycymeo; } $ukamowomoeiweqky = $swgwkyqkakceqeia->iscemaoqqckmkago(Domain::geseccqgwqkukyuk, $mokawwccycoiqeka, ["\x2a"], [self::meksegaoamowuwoq => $ycoeoaakqyskgykq]); if ($ukamowomoeiweqky) { goto guykyqecgswcsmws; } $mokawwccycoiqeka = null; guykyqecgswcsmws: kkumywowcoycymeo: miweggwqeiaeweia: if (!$mokawwccycoiqeka) { goto kqqiegkuqagcqsya; } $keccaugmemegoimu = $mokawwccycoiqeka; goto ousiuuwgwkiyikyq; kqqiegkuqagcqsya: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\161\165\x65\x73\164\145\144\40\144\157\155\x61\x69\156\40\x6e\x6f\x74\40\146\157\165\x6e\144\x2e", PR__MDL__DOMAIN_MANAGER), 404); ousiuuwgwkiyikyq: ogsaaqsaogcqiouy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function eymesswoskuskmyw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto qmkaeeomgkwggoyo; } $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $iecimaigkkceeska = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); $ukamowomoeiweqky = $ueomouiqmosykioc->akkkoiiymmamsauc($iecimaigkkceeska); if ($ukamowomoeiweqky) { goto cuumeogeomowqisc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\117\x77\156\x65\162\x73\x68\151\x70\x20\x6e\x6f\x74\40\x66\x6f\x75\x6e\x64", PR__MDL__DOMAIN_MANAGER), 404); goto gcckqucukawcasgk; cuumeogeomowqisc: $mokawwccycoiqeka = Domain::symcgieuakksimmu()->akkkoiiymmamsauc($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\157\155\x61\151\156")); if ($mokawwccycoiqeka) { goto iikiiioqiyegyaak; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\104\157\155\x61\x69\156\40\x6e\157\x74\x20\x66\x6f\165\x6e\144", PR__MDL__DOMAIN_MANAGER), 404); goto uiosisocuwokwkie; iikiiioqiyegyaak: $eeamcawaiqocomwy = ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm); $uusmaiomayssaecw = ManipulateArray::get($ukamowomoeiweqky, Ownership::awqaawasiusmysgc); if ($uusmaiomayssaecw && $eeamcawaiqocomwy) { goto kosaqwikueyksqmw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\x71\x75\151\162\145\40\160\141\x72\141\x6d\145\164\145\x72\x73\x20\x6e\157\x74\x20\146\157\165\x6e\x64", PR__MDL__DOMAIN_MANAGER), 400); goto gicyayswqyuoekcq; kosaqwikueyksqmw: $iwywmkygwewiamwm = "\x68\x74\x74\x70\x3a\x2f\57{$eeamcawaiqocomwy}\x2f{$uusmaiomayssaecw}\56\x68\164\x6d\154"; $sogksuscggsicmac = wp_remote_get($iwywmkygwewiamwm); if (!is_wp_error($sogksuscggsicmac) && isset($sogksuscggsicmac["\162\x65\x73\x70\157\156\x73\x65"]["\x63\x6f\x64\x65"]) && $sogksuscggsicmac["\162\145\x73\x70\157\x6e\x73\145"]["\143\157\x64\145"] == 200) { goto ykomgumacooyomsk; } if (is_wp_error($sogksuscggsicmac)) { goto awoaooyoeoyeeqee; } $uamcoiueqaamsqma = __("\x43\141\x6e\40\156\x6f\164\40\146\x69\156\144\40\146\151\154\145", PR__MDL__DOMAIN_MANAGER); goto ogqmesokykywseys; awoaooyoeoyeeqee: $uamcoiueqaamsqma = print_r($this->wsmkmgikcacikiwe($sogksuscggsicmac), true); ogqmesokykywseys: $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\x65\162\x69\146\171\x20\106\x61\x69\154\145\144\x3a\x20\x25\x73", PR__MDL__DOMAIN_MANAGER), $uamcoiueqaamsqma), 404); goto mqkmcysgoiaouiwm; ykomgumacooyomsk: $kuukgsmqkagwaciu = rtrim($sogksuscggsicmac["\x62\x6f\144\171"] ?? ''); if ($kuukgsmqkagwaciu && $kuukgsmqkagwaciu === ManipulateArray::get($ukamowomoeiweqky, Ownership::awqaawasiusmysgc)) { goto aomysykcgikegiau; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\x65\162\151\146\x79\40\x46\x61\151\x6c\145\x64\72\x20\x25\x73", PR__MDL__DOMAIN_MANAGER), __("\106\151\x6c\x65\40\x63\157\x6e\164\145\x6e\164\40\x6e\x6f\164\x20\x76\141\x6c\151\144", PR__MDL__DOMAIN_MANAGER))); goto cwwmimggaaecmucw; aomysykcgikegiau: $sogksuscggsicmac = $ueomouiqmosykioc->gscuuyuyauokoyuo([self::ucmueuwwcmocgmig => Ownership::myiiuekcoeksaasm, $ueomouiqmosykioc::komqcwuqaguwweiw => (new Datetime("\156\157\x77"))->format("\131\55\155\55\144\x20\110\72\151\x3a\163"), $ueomouiqmosykioc->kumuygiiqswoyasy() => $iecimaigkkceeska]); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto iwekmyyccgiyuecc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x56\145\x72\x69\146\171\x20\106\141\x69\154\x65\x64\72\x20\x25\163", PR__MDL__DOMAIN_MANAGER), __("\120\x6c\145\x61\x73\145\x20\164\x72\171\40\x61\147\141\x69\156", PR__MDL__DOMAIN_MANAGER)), 500); goto ikqqskkqqwmwssoo; iwekmyyccgiyuecc: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\104\x6f\x6d\141\x69\156\x20\x56\x65\x72\x69\146\x69\145\144\40\x73\165\143\x63\x65\163\163\x66\165\x6c\x6c\171\x2e", PR__MDL__DOMAIN_MANAGER)); ikqqskkqqwmwssoo: cwwmimggaaecmucw: mqkmcysgoiaouiwm: gicyayswqyuoekcq: uiosisocuwokwkie: gcckqucukawcasgk: qmkaeeomgkwggoyo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $kiicsyeqweiekmgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::osiogououyayqyck) == "\145\144\151\x74"; $ikgwqyuyckaewsow[] = Form::ymuegqgyuagyucws(self::NAME, __("\123\151\164\x65\40\157\x72\x20\123\x74\157\x72\x65\40\116\141\x6d\x65", PR__MDL__DOMAIN_MANAGER))->eumecwmqmukqgyea(); $eeamcawaiqocomwy = Form::ymuegqgyuagyucws(self::ciyoccqkiamemcmm, __("\111\156\164\x65\162\156\x65\164\40\x44\157\155\x61\151\156", PR__MDL__DOMAIN_MANAGER), __("\x45\x6e\x74\145\162\x20\x79\157\x75\x72\40\144\x6f\x6d\141\x69\x6e\x20\167\151\164\150\157\165\164\40\x68\164\x74\160\40\141\156\144\40\167\167\x77", PR__MDL__DOMAIN_MANAGER))->kyiucygqsgequoys("\x65\x78\x61\x6d\x70\x6c\145\56\x63\157\x6d")->eumecwmqmukqgyea()->sqcsseccsaqsoyqy()->saemoowcasogykak(IconFontawesomeInterface::yakumqwueukksgcm); $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); if (!($kiicsyeqweiekmgc && !Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce))) { goto csammceowmqwaamq; } $eeamcawaiqocomwy->oykaosmaegqwmoga(); csammceowmqwaamq: $ikgwqyuyckaewsow[] = $eeamcawaiqocomwy; $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wiqumkmqkqoycqyi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ocaguquugeamqckq; } $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ausqeuugegoygouq); $keccaugmemegoimu = Domain::symcgieuakksimmu()->eqqmweomwciucoci($keccaugmemegoimu, false, true, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); ocaguquugeamqckq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kcsqeqmcgkwkcyou(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $keccaugmemegoimu = []; if (is_wp_error($mkucggyaiaukqoce)) { goto cogywoqcqummsyus; } $keccaugmemegoimu[] = "\144\157\x6d\x61\151\156\x2d\x65\144\151\164"; $mokawwccycoiqeka = $aqmwamyiwgeeymqa->get_param(self::gouqcwikiiygyasc); if (!Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce)) { goto eekcoeikaeaaeyii; } $keccaugmemegoimu[] = "\x64\x6f\155\141\x69\156\55\157\167\x6e\145\162\163\150\151\x70"; $keccaugmemegoimu[] = "\x64\x6f\155\141\x69\x6e\55\166\x65\x72\151\x66\x69\143\141\164\x69\x6f\x6e"; eekcoeikaeaaeyii: cogywoqcqummsyus: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
