<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62b885ced9b6f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Panel; use DateTime; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\DomainManager\Model\Ownership; use Pmpr\Module\Panel\REST\AbstractREST; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends AbstractREST { public function __construct() { $this->rest_base = "\x64\x6f\x6d\141\151\x6e\x2d\155\141\156\141\147\x65\162"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x67\145\164\x2d\144\157\155\141\x69\156", ["\141\x72\x67\x73" => [], "\155\x65\x74\150\x6f\144\163" => self::uigoseacoukemwqc, "\x63\141\154\154\x62\141\x63\x6b" => [$this, "\167\167\x61\167\151\x73\143\153\x69\x71\145\x75\x65\x6f\165\141"]]); $this->register("\57\147\145\164\55\144\x6f\155\141\x69\x6e\163", ["\141\x72\x67\x73" => [], "\155\145\x74\x68\x6f\x64\x73" => self::uigoseacoukemwqc, "\143\141\154\154\142\141\x63\153" => [$this, "\x77\151\161\x75\155\153\155\x71\153\x71\157\171\143\161\171\151"]]); $this->register("\x2f\147\x65\164\55\x64\x6f\155\x61\151\156\55\146\x69\x65\x6c\144\x73", ["\141\x72\x67\163" => [], "\155\145\x74\150\x6f\x64\x73" => self::uigoseacoukemwqc, "\x63\x61\154\x6c\x62\x61\143\x6b" => [$this, "\x75\x67\x6d\143\145\x63\x63\147\x77\x61\141\x61\x69\x67\x69\171"]]); $this->register("\57\163\x61\x76\145\x2d\x64\157\155\x61\x69\x6e", ["\141\162\x67\163" => [], "\155\145\x74\x68\157\x64\x73" => self::qucyckeykeuuaquw, "\x63\x61\x6c\154\x62\141\x63\153" => [$this, "\155\161\153\x63\141\x75\x65\x6b\x79\x6d\x65\x6b\161\141\x6b\x69"]]); $this->register("\x2f\x75\x70\144\x61\164\145\x2d\144\x6f\155\x61\x69\156", ["\141\162\147\x73" => [], "\x6d\x65\x74\x68\157\x64\x73" => self::qucyckeykeuuaquw, "\x63\141\154\154\142\141\143\153" => [$this, "\x61\x6d\157\147\161\x79\x63\x6f\143\157\165\x77\141\x69\143\x6f"]]); $this->register("\x2f\x67\x65\x74\x2d\x64\157\155\x61\151\x6e\55\x74\x61\x62\163", ["\x61\x72\147\x73" => [], "\155\x65\164\x68\157\144\163" => self::uigoseacoukemwqc, "\x63\x61\154\154\x62\x61\x63\x6b" => [$this, "\x6b\x63\163\161\145\x71\155\x63\x67\x6b\x77\x6b\143\171\x6f\x75"]]); $this->register("\57\147\x65\164\55\157\x77\x6e\x65\162\163\150\x69\x70\163", ["\141\162\147\x73" => [], "\155\145\164\150\x6f\144\163" => self::uigoseacoukemwqc, "\x63\141\x6c\154\142\x61\x63\153" => [$this, "\x6d\x63\157\x6b\167\155\145\165\165\143\x71\x67\x6f\x75\x6f\x73"]]); $this->register("\x2f\x67\x65\164\x2d\x6f\x77\156\x65\x72\x73\150\x69\x70", ["\141\162\147\x73" => [], "\x6d\145\164\x68\157\x64\x73" => self::uigoseacoukemwqc, "\143\x61\x6c\154\142\x61\x63\x6b" => [$this, "\151\x63\151\x6d\x6f\x63\171\x6d\x77\143\x6f\x71\x65\x65\155\x6f"]]); $this->register("\x2f\166\145\162\x69\146\x79\x2d\144\x6f\155\x61\151\156", ["\x61\x72\x67\163" => [], "\155\x65\x74\150\x6f\x64\x73" => self::qucyckeykeuuaquw, "\x63\x61\x6c\x6c\142\141\143\153" => [$this, "\145\171\x6d\145\x73\163\167\x6f\163\x6b\165\163\153\155\171\167"]]); } public function mqkcauekymekqaki(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto asiqwuoswmigcaki; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $keccaugmemegoimu = $swgwkyqkakceqeia->kmuykuaakicwsocs($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto wcugqegqsuuuwqao; } $ceiwsaacewygcsqg = $swgwkyqkakceqeia->kumuygiiqswoyasy(); $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu[self::eoskkkieowogacws], [$ceiwsaacewygcsqg => $keccaugmemegoimu[$ceiwsaacewygcsqg]]); wcugqegqsuuuwqao: asiqwuoswmigcaki: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function amogqycocouwaico(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto mqicocmqegwukkwg; } $keccaugmemegoimu = Domain::symcgieuakksimmu()->amogqycocouwaico($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto ciykoyeioqgyaeqo; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x44\157\x6d\141\x69\x6e\40\x73\x75\143\x63\145\x73\163\x66\x75\x6c\x6c\x79\x20\x75\160\144\x61\x74\145\x64\x2e", PR__MDL__DOMAIN_MANAGER), $keccaugmemegoimu); ciykoyeioqgyaeqo: mqicocmqegwukkwg: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mcokwmeuucqgouos(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto acsqgiuageaasiyy; } $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\x6f\x6d\x61\151\x6e"); $ukamowomoeiweqky = $ueomouiqmosykioc->ksesieiwkmougeue($mokawwccycoiqeka, $keccaugmemegoimu); if ($ukamowomoeiweqky) { goto ouamogymawucwswu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\116\x6f\x20\x61\x63\x63\x65\163\x73\40\x74\157\x20\164\x68\x69\163\40\163\x65\147\155\x65\156\164", PR__MDL__DOMAIN_MANAGER), 401); goto mugqyyeayeyggqqk; ouamogymawucwswu: if ($ueomouiqmosykioc->sqwcgyyocucsouyy($ukamowomoeiweqky) === $ueomouiqmosykioc::myiiuekcoeksaasm) { goto qgeugwymkkiacwoc; } $keccaugmemegoimu = $ueomouiqmosykioc->oosqweumiyeayasy($ueomouiqmosykioc->cwgkcyyaymmsomqa([$ukamowomoeiweqky])); goto emmsycooskoqmgeg; qgeugwymkkiacwoc: $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ausqeuugegoygouq); $keccaugmemegoimu = $ueomouiqmosykioc->bikiqakeqgekegsk($mokawwccycoiqeka, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); emmsycooskoqmgeg: mugqyyeayeyggqqk: acsqgiuageaasiyy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function icimocymwcoqeemo(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto wyuemgggaqogsmsq; } $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $keccaugmemegoimu = $ueomouiqmosykioc->ksesieiwkmougeue($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\157\x6d\141\151\156"), $keccaugmemegoimu); if (!$keccaugmemegoimu) { goto oomguqikqokqwgku; } $keccaugmemegoimu = $ueomouiqmosykioc->scqakcemaqsqkema($keccaugmemegoimu, [$ueomouiqmosykioc->kumuygiiqswoyasy(), $ueomouiqmosykioc::meksegaoamowuwoq, $ueomouiqmosykioc::awqaawasiusmysgc, $ueomouiqmosykioc::ucmueuwwcmocgmig, $ueomouiqmosykioc::komqcwuqaguwweiw]); goto samwkqgwouggsguc; oomguqikqokqwgku: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\117\167\156\x65\x72\163\150\x69\160\40\156\157\x74\40\146\x6f\165\156\x64", PR__MDL__DOMAIN_MANAGER), 404); samwkqgwouggsguc: wyuemgggaqogsmsq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto aomysykcgikegiau; } $aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); if ($aokagokqyuysuksm) { goto iwekmyyccgiyuecc; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(__("\111\x44", PR__MDL__PANEL)); goto ikqqskkqqwmwssoo; iwekmyyccgiyuecc: if ($swgwkyqkakceqeia = Domain::symcgieuakksimmu()) { goto ousiuuwgwkiyikyq; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto ogsaaqsaogcqiouy; ousiuuwgwkiyikyq: $mokawwccycoiqeka = $swgwkyqkakceqeia->akkkoiiymmamsauc($aokagokqyuysuksm, $swgwkyqkakceqeia->kumuygiiqswoyasy(), [$swgwkyqkakceqeia::gouqcwikiiygyasc, $swgwkyqkakceqeia::NAME, $swgwkyqkakceqeia::ciyoccqkiamemcmm, $swgwkyqkakceqeia::igswcauwsgmeougs, $swgwkyqkakceqeia::CREATED_AT]); if (!$mokawwccycoiqeka) { goto kkumywowcoycymeo; } $ukamowomoeiweqky = $swgwkyqkakceqeia->iscemaoqqckmkago(Domain::geseccqgwqkukyuk, $mokawwccycoiqeka, ["\52"], [self::meksegaoamowuwoq => $ycoeoaakqyskgykq]); if ($ukamowomoeiweqky) { goto guykyqecgswcsmws; } $mokawwccycoiqeka = null; guykyqecgswcsmws: kkumywowcoycymeo: if (!$mokawwccycoiqeka) { goto miweggwqeiaeweia; } $keccaugmemegoimu = $mokawwccycoiqeka; goto kqqiegkuqagcqsya; miweggwqeiaeweia: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\161\165\x65\x73\164\145\x64\40\144\157\x6d\141\x69\x6e\x20\156\157\164\x20\x66\x6f\x75\156\x64\x2e", PR__MDL__DOMAIN_MANAGER), 404); kqqiegkuqagcqsya: ogsaaqsaogcqiouy: ikqqskkqqwmwssoo: aomysykcgikegiau: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function eymesswoskuskmyw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto eekcoeikaeaaeyii; } $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $iecimaigkkceeska = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); $ukamowomoeiweqky = $ueomouiqmosykioc->akkkoiiymmamsauc($iecimaigkkceeska); if ($ukamowomoeiweqky) { goto csammceowmqwaamq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\117\x77\156\145\162\x73\150\x69\160\40\x6e\157\x74\x20\x66\157\x75\x6e\x64", PR__MDL__DOMAIN_MANAGER), 404); goto ocaguquugeamqckq; csammceowmqwaamq: $mokawwccycoiqeka = Domain::symcgieuakksimmu()->akkkoiiymmamsauc($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\x6f\x6d\141\151\156")); if ($mokawwccycoiqeka) { goto gcckqucukawcasgk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\104\157\155\141\x69\156\x20\156\x6f\164\x20\x66\x6f\165\x6e\x64", PR__MDL__DOMAIN_MANAGER), 404); goto qmkaeeomgkwggoyo; gcckqucukawcasgk: $eeamcawaiqocomwy = ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm); $uusmaiomayssaecw = ManipulateArray::get($ukamowomoeiweqky, Ownership::awqaawasiusmysgc); if ($uusmaiomayssaecw && $eeamcawaiqocomwy) { goto uiosisocuwokwkie; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\161\165\x69\162\145\x20\x70\x61\x72\141\155\x65\x74\145\162\163\x20\156\x6f\164\40\146\157\x75\156\144", PR__MDL__DOMAIN_MANAGER), 400); goto cuumeogeomowqisc; uiosisocuwokwkie: $iwywmkygwewiamwm = "\150\x74\164\x70\72\x2f\x2f{$eeamcawaiqocomwy}\x2f{$uusmaiomayssaecw}\56\x68\164\x6d\154"; $sogksuscggsicmac = wp_remote_get($iwywmkygwewiamwm); if (!is_wp_error($sogksuscggsicmac) && isset($sogksuscggsicmac["\x72\x65\163\160\157\156\163\145"]["\x63\157\x64\x65"]) && $sogksuscggsicmac["\162\145\163\160\x6f\156\163\145"]["\x63\x6f\144\145"] == 200) { goto gicyayswqyuoekcq; } if (is_wp_error($sogksuscggsicmac)) { goto mqkmcysgoiaouiwm; } $uamcoiueqaamsqma = __("\x43\x61\156\40\x6e\x6f\x74\40\146\151\156\x64\40\x66\x69\154\145", PR__MDL__DOMAIN_MANAGER); goto kosaqwikueyksqmw; mqkmcysgoiaouiwm: $uamcoiueqaamsqma = print_r($this->wsmkmgikcacikiwe($sogksuscggsicmac), true); kosaqwikueyksqmw: $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x56\145\x72\151\x66\x79\x20\x46\x61\x69\x6c\145\x64\72\x20\45\163", PR__MDL__DOMAIN_MANAGER), $uamcoiueqaamsqma), 404); goto iikiiioqiyegyaak; gicyayswqyuoekcq: $kuukgsmqkagwaciu = rtrim($sogksuscggsicmac["\142\x6f\144\171"] ?? ''); if ($kuukgsmqkagwaciu && $kuukgsmqkagwaciu === ManipulateArray::get($ukamowomoeiweqky, Ownership::awqaawasiusmysgc)) { goto ogqmesokykywseys; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\x65\x72\x69\x66\x79\x20\x46\x61\151\154\x65\x64\72\40\45\163", PR__MDL__DOMAIN_MANAGER), __("\106\151\154\145\40\x63\157\156\x74\145\156\164\40\156\x6f\x74\40\166\x61\154\x69\x64", PR__MDL__DOMAIN_MANAGER))); goto ykomgumacooyomsk; ogqmesokykywseys: $sogksuscggsicmac = $ueomouiqmosykioc->gscuuyuyauokoyuo([self::ucmueuwwcmocgmig => Ownership::myiiuekcoeksaasm, $ueomouiqmosykioc::komqcwuqaguwweiw => (new Datetime("\156\x6f\x77"))->format("\x59\x2d\x6d\55\144\40\110\72\151\x3a\x73"), $ueomouiqmosykioc->kumuygiiqswoyasy() => $iecimaigkkceeska]); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto cwwmimggaaecmucw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x56\145\162\x69\x66\x79\40\x46\141\x69\x6c\145\144\72\x20\x25\163", PR__MDL__DOMAIN_MANAGER), __("\120\x6c\x65\141\x73\x65\x20\164\162\x79\x20\x61\x67\x61\x69\156", PR__MDL__DOMAIN_MANAGER)), 500); goto awoaooyoeoyeeqee; cwwmimggaaecmucw: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x44\x6f\x6d\141\151\x6e\40\x56\145\162\x69\x66\151\x65\x64\x20\163\x75\x63\x63\145\163\163\146\x75\154\154\x79\56", PR__MDL__DOMAIN_MANAGER)); awoaooyoeoyeeqee: ykomgumacooyomsk: iikiiioqiyegyaak: cuumeogeomowqisc: qmkaeeomgkwggoyo: ocaguquugeamqckq: eekcoeikaeaaeyii: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $kiicsyeqweiekmgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::osiogououyayqyck) == "\145\144\x69\x74"; $ikgwqyuyckaewsow[] = Form::ymuegqgyuagyucws(self::NAME, __("\123\151\x74\x65\x20\x6f\x72\40\x53\x74\x6f\x72\x65\40\x4e\x61\x6d\x65", PR__MDL__DOMAIN_MANAGER))->eumecwmqmukqgyea(); $eeamcawaiqocomwy = Form::ymuegqgyuagyucws(self::ciyoccqkiamemcmm, __("\x49\156\164\x65\x72\x6e\x65\x74\x20\x44\x6f\x6d\x61\x69\156", PR__MDL__DOMAIN_MANAGER), __("\x45\x6e\x74\x65\x72\40\171\x6f\x75\162\x20\144\157\155\x61\151\156\40\x77\x69\164\x68\x6f\x75\x74\40\150\x74\x74\x70\40\141\156\144\40\x77\167\167", PR__MDL__DOMAIN_MANAGER))->kyiucygqsgequoys("\145\170\141\x6d\x70\154\x65\56\143\x6f\155")->eumecwmqmukqgyea()->sqcsseccsaqsoyqy()->saemoowcasogykak(IconFontawesomeInterface::yakumqwueukksgcm); $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); if (!($kiicsyeqweiekmgc && !Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce))) { goto cogywoqcqummsyus; } $eeamcawaiqocomwy->oykaosmaegqwmoga(); cogywoqcqummsyus: $ikgwqyuyckaewsow[] = $eeamcawaiqocomwy; $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wiqumkmqkqoycqyi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto gmwykkouysyaqwqm; } $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ausqeuugegoygouq); $keccaugmemegoimu = Domain::symcgieuakksimmu()->eqqmweomwciucoci($keccaugmemegoimu, false, true, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); gmwykkouysyaqwqm: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kcsqeqmcgkwkcyou(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $keccaugmemegoimu = []; if (is_wp_error($mkucggyaiaukqoce)) { goto uaukmuiwskcemcsw; } $keccaugmemegoimu[] = "\x64\x6f\155\x61\151\x6e\55\145\x64\x69\164"; $mokawwccycoiqeka = $aqmwamyiwgeeymqa->get_param(self::gouqcwikiiygyasc); if (!Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce)) { goto ugqwuugsweqgmywk; } $keccaugmemegoimu[] = "\x64\x6f\x6d\x61\151\156\55\x6f\x77\156\145\162\x73\x68\x69\x70"; $keccaugmemegoimu[] = "\x64\x6f\155\141\151\156\x2d\166\x65\x72\x69\146\x69\x63\x61\164\x69\x6f\156"; ugqwuugsweqgmywk: uaukmuiwskcemcsw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
