<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668400d1e349e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Panel; use DateTime; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\DomainManager\Model\Ownership; use Pmpr\Module\Panel\REST\AbstractREST; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends AbstractREST { public function __construct() { $this->rest_base = "\x64\157\155\x61\151\x6e\x2d\x6d\x61\156\x61\x67\x65\162"; parent::__construct(); } public function register_routes() { $this->register("\57\147\145\164\55\144\x6f\x6d\x61\151\156", [self::wwgusigoaksqmwsm => [$this, "\x77\x77\x61\x77\x69\163\143\153\151\x71\145\165\145\157\165\141"]]); $this->register("\x2f\147\145\164\x2d\144\x6f\155\141\x69\x6e\163", [self::wwgusigoaksqmwsm => [$this, "\167\151\161\x75\x6d\153\155\x71\x6b\x71\157\171\x63\161\x79\151"]]); $this->register("\x2f\x67\x65\x74\55\144\x6f\155\141\151\156\x2d\x66\151\x65\x6c\144\163", [self::wwgusigoaksqmwsm => [$this, "\x75\x67\x6d\143\145\143\x63\x67\x77\141\x61\x61\x69\x67\151\x79"]]); $this->register("\x2f\x73\x61\166\145\x2d\x64\157\155\x61\151\156", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\155\161\153\x63\x61\x75\145\x6b\171\x6d\145\153\x71\141\x6b\x69"]]); $this->register("\57\x75\x70\x64\141\164\x65\55\x64\x6f\x6d\x61\x69\156", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\141\155\157\x67\x71\171\x63\x6f\143\157\x75\167\141\x69\x63\x6f"]]); $this->register("\x2f\x67\x65\x74\x2d\144\157\x6d\x61\151\156\x2d\x74\x61\142\x73", [self::wwgusigoaksqmwsm => [$this, "\x6b\x63\163\x71\145\161\155\x63\x67\x6b\167\153\143\171\157\x75"]]); $this->register("\57\147\x65\x74\55\157\x77\156\145\162\x73\150\151\160\x73", [self::wwgusigoaksqmwsm => [$this, "\155\x63\x6f\153\x77\x6d\145\165\165\x63\161\x67\x6f\x75\157\x73"]]); $this->register("\x2f\147\x65\164\55\157\167\x6e\x65\x72\x73\x68\151\x70", [self::wwgusigoaksqmwsm => [$this, "\x69\143\x69\x6d\x6f\x63\171\x6d\x77\143\157\x71\145\x65\x6d\x6f"]]); $this->register("\57\166\x65\x72\151\x66\171\55\x64\157\155\141\151\x6e", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\x65\x79\155\145\163\163\167\157\x73\153\165\163\x6b\155\x79\167"]]); } public function mqkcauekymekqaki(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto qgoiooayqmqqsiok; } if ($swgwkyqkakceqeia = Domain::symcgieuakksimmu()) { goto qiaqsassksqiuyae; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto qogqewiwmwiwskgm; qiaqsassksqiuyae: $keccaugmemegoimu = $swgwkyqkakceqeia->kmuykuaakicwsocs($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto cecuyayqoioasumi; } $ceiwsaacewygcsqg = $swgwkyqkakceqeia->kumuygiiqswoyasy(); $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu[self::eoskkkieowogacws], [$ceiwsaacewygcsqg => $keccaugmemegoimu[$ceiwsaacewygcsqg]]); cecuyayqoioasumi: qogqewiwmwiwskgm: qgoiooayqmqqsiok: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function amogqycocouwaico(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto csscmcacoikwsecs; } if ($swgwkyqkakceqeia = Domain::symcgieuakksimmu()) { goto myoicgcuugciueis; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto asmecuqiyyswueqe; myoicgcuugciueis: $keccaugmemegoimu = $swgwkyqkakceqeia->amogqycocouwaico($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto qwigomakwmyiwkgo; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x44\157\155\141\x69\x6e\40\x73\x75\143\x63\145\163\163\146\x75\154\154\x79\x20\x75\x70\144\141\164\x65\x64\56", PR__MDL__DOMAIN_MANAGER), $keccaugmemegoimu); qwigomakwmyiwkgo: asmecuqiyyswueqe: csscmcacoikwsecs: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mcokwmeuucqgouos(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto yowsmsiyimmimemc; } if ($ueomouiqmosykioc = Ownership::symcgieuakksimmu()) { goto eqkauqciwewmgeoi; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto kwagwqyusyiyoaqs; eqkauqciwewmgeoi: $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::weayyoewessosyko); if ($ukamowomoeiweqky = $ueomouiqmosykioc->ksesieiwkmougeue($mokawwccycoiqeka, $keccaugmemegoimu)) { goto mkwskuycuyguqqok; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\116\157\x20\141\143\143\x65\163\163\x20\164\157\40\x74\x68\x69\163\x20\x73\145\x67\155\x65\x6e\164", PR__MDL__DOMAIN_MANAGER), 401); goto sciwggaeogcoesiu; mkwskuycuyguqqok: if ($ueomouiqmosykioc->sqwcgyyocucsouyy($ukamowomoeiweqky) === $ueomouiqmosykioc::myiiuekcoeksaasm) { goto cuykwgmswkskqkyi; } $keccaugmemegoimu = $ueomouiqmosykioc->oosqweumiyeayasy([$ueomouiqmosykioc->scqakcemaqsqkema($ukamowomoeiweqky)]); goto kuicqywysciceggs; cuykwgmswkskqkyi: $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ausqeuugegoygouq); $keccaugmemegoimu = $ueomouiqmosykioc->bikiqakeqgekegsk($mokawwccycoiqeka, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); kuicqywysciceggs: sciwggaeogcoesiu: kwagwqyusyiyoaqs: yowsmsiyimmimemc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function icimocymwcoqeemo(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto uukumskkeggaowck; } if ($ueomouiqmosykioc = Ownership::symcgieuakksimmu()) { goto sqiciiuwmykocycc; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto eequksumcoogyoem; sqiciiuwmykocycc: $keccaugmemegoimu = $ueomouiqmosykioc->ksesieiwkmougeue($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::weayyoewessosyko), $keccaugmemegoimu); if (!$keccaugmemegoimu) { goto kiqogmwcgcamwiig; } $keccaugmemegoimu = $ueomouiqmosykioc->scqakcemaqsqkema($keccaugmemegoimu, [$ueomouiqmosykioc->kumuygiiqswoyasy(), $ueomouiqmosykioc::meksegaoamowuwoq, $ueomouiqmosykioc::awqaawasiusmysgc, $ueomouiqmosykioc::ucmueuwwcmocgmig, $ueomouiqmosykioc::komqcwuqaguwweiw]); goto iomcaiwewsawiamu; kiqogmwcgcamwiig: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4f\167\156\x65\162\163\x68\151\x70\x20\156\157\164\40\146\157\165\x6e\x64", PR__MDL__DOMAIN_MANAGER), 404); iomcaiwewsawiamu: eequksumcoogyoem: uukumskkeggaowck: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto usqgaogkqgemuima; } $aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu); if ($aokagokqyuysuksm) { goto meawswgwagoqgkye; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(__("\111\x44", PR__MDL__PANEL)); goto wcesymwqykqoyuqk; meawswgwagoqgkye: $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->akkkoiiymmamsauc($aokagokqyuysuksm, $swgwkyqkakceqeia->kumuygiiqswoyasy(), [$swgwkyqkakceqeia::gouqcwikiiygyasc, $swgwkyqkakceqeia::NAME, $swgwkyqkakceqeia::ciyoccqkiamemcmm, $swgwkyqkakceqeia::igswcauwsgmeougs, $swgwkyqkakceqeia::CREATED_AT]); if (!$mokawwccycoiqeka) { goto yiwiqaqmwiogawym; } if (!$ueomouiqmosykioc->qumqowkwyaceeqwu([$ueomouiqmosykioc::meksegaoamowuwoq => $ycoeoaakqyskgykq, $ueomouiqmosykioc::qkmqmaeuyokqgemg => $aokagokqyuysuksm])) { goto cggowoquuiwqkyew; } $keccaugmemegoimu = $mokawwccycoiqeka; goto ocokwuuquaokmasc; cggowoquuiwqkyew: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x54\150\x69\x73\x20\x64\x6f\155\x61\x69\x6e\x20\x6e\157\164\x20\x62\x65\154\x6f\156\147\x73\40\164\x6f\40\x79\157\x75\56", PR__MDL__DOMAIN_MANAGER), 400); ocokwuuquaokmasc: goto goacqqsgaaigyuaw; yiwiqaqmwiogawym: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\161\x75\x65\x73\x74\x65\x64\x20\x64\157\155\141\x69\x6e\x20\156\x6f\x74\x20\146\x6f\165\156\144\56", PR__MDL__DOMAIN_MANAGER), 404); goacqqsgaaigyuaw: wcesymwqykqoyuqk: usqgaogkqgemuima: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function eymesswoskuskmyw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto twkmiuomimomscew; } if ($ueomouiqmosykioc = Ownership::symcgieuakksimmu()) { goto mqccmesakuemceqi; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto eyiamcekkgkiawqy; mqccmesakuemceqi: $iecimaigkkceeska = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); $ukamowomoeiweqky = $ueomouiqmosykioc->akkkoiiymmamsauc($iecimaigkkceeska); if ($ukamowomoeiweqky) { goto sukskmcwsoysiuqu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4f\167\156\x65\162\x73\150\x69\x70\40\x6e\x6f\x74\x20\x66\x6f\x75\x6e\x64", PR__MDL__DOMAIN_MANAGER), 404); goto igymseewwyiocoug; sukskmcwsoysiuqu: $mokawwccycoiqeka = Domain::symcgieuakksimmu()->akkkoiiymmamsauc($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\157\x6d\x61\x69\156")); if ($mokawwccycoiqeka) { goto cuoqqgaygogsmmic; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\104\157\x6d\x61\x69\x6e\40\156\157\164\x20\146\157\x75\156\x64", PR__MDL__DOMAIN_MANAGER), 404); goto cgewcsueoyaeikgm; cuoqqgaygogsmmic: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eeamcawaiqocomwy = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, self::ciyoccqkiamemcmm); $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($ukamowomoeiweqky, Ownership::awqaawasiusmysgc); if ($uusmaiomayssaecw && $eeamcawaiqocomwy) { goto qmeoaqmsuseueqiy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\x71\165\151\x72\x65\40\x70\x61\x72\x61\x6d\145\x74\x65\x72\163\40\x6e\x6f\164\40\x66\157\x75\156\144", PR__MDL__DOMAIN_MANAGER), 400); goto ygkcacsyyckescqs; qmeoaqmsuseueqiy: $iwywmkygwewiamwm = "\x68\x74\164\160\163\x3a\57\x2f{$eeamcawaiqocomwy}\x2f{$uusmaiomayssaecw}\56\150\x74\x6d\x6c"; $sogksuscggsicmac = wp_remote_get($iwywmkygwewiamwm); if (!is_wp_error($sogksuscggsicmac) && isset($sogksuscggsicmac["\162\145\163\x70\x6f\156\x73\x65"]["\x63\x6f\x64\145"]) && $sogksuscggsicmac["\x72\145\x73\x70\157\156\x73\145"]["\x63\157\x64\x65"] == 200) { goto eiawsoasmscmqswa; } if (is_wp_error($sogksuscggsicmac)) { goto qmiwsequckckoaei; } $uamcoiueqaamsqma = __("\x43\x61\156\x20\156\157\x74\40\146\151\156\144\x20\x66\151\154\x65", PR__MDL__DOMAIN_MANAGER); goto goeoymmqqqeeoime; qmiwsequckckoaei: $uamcoiueqaamsqma = print_r($this->wsmkmgikcacikiwe($sogksuscggsicmac), true); goeoymmqqqeeoime: $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\145\x72\x69\x66\171\x20\106\141\151\154\145\x64\72\x20\x25\163", PR__MDL__DOMAIN_MANAGER), $uamcoiueqaamsqma), 404); goto ickcmqoiosquugwe; eiawsoasmscmqswa: $kuukgsmqkagwaciu = rtrim($sogksuscggsicmac["\142\157\x64\171"] ?? ''); if ($kuukgsmqkagwaciu && $kuukgsmqkagwaciu === $gkyciwoiiisgywcs->get($ukamowomoeiweqky, Ownership::awqaawasiusmysgc)) { goto kecwuwwcwokuksyq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\x65\x72\151\x66\171\x20\106\141\151\154\145\144\72\40\x25\x73", PR__MDL__DOMAIN_MANAGER), __("\106\151\x6c\145\x20\x63\x6f\x6e\164\145\x6e\x74\x20\x6e\x6f\x74\x20\166\x61\x6c\151\144", PR__MDL__DOMAIN_MANAGER))); goto qgegkeomwscwwiuw; kecwuwwcwokuksyq: $sogksuscggsicmac = $ueomouiqmosykioc->gscuuyuyauokoyuo([self::ucmueuwwcmocgmig => Ownership::myiiuekcoeksaasm, $ueomouiqmosykioc::komqcwuqaguwweiw => (new Datetime("\x6e\157\x77"))->format("\131\55\155\55\x64\40\x48\72\151\x3a\163"), $ueomouiqmosykioc->kumuygiiqswoyasy() => $iecimaigkkceeska]); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto mswsoaimesegiiic; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x56\145\x72\x69\146\171\x20\106\x61\151\154\x65\144\x3a\x20\x25\163", PR__MDL__DOMAIN_MANAGER), __("\x50\x6c\145\x61\163\145\x20\164\x72\171\x20\x61\x67\x61\x69\156", PR__MDL__DOMAIN_MANAGER)), 500); goto egasokooagakisiy; mswsoaimesegiiic: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\104\x6f\x6d\x61\x69\156\40\x56\x65\162\151\146\x69\145\x64\x20\163\x75\x63\143\145\163\163\146\x75\x6c\x6c\x79\56", PR__MDL__DOMAIN_MANAGER)); egasokooagakisiy: qgegkeomwscwwiuw: ickcmqoiosquugwe: ygkcacsyyckescqs: cgewcsueoyaeikgm: igymseewwyiocoug: eyiamcekkgkiawqy: twkmiuomimomscew: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $kiicsyeqweiekmgc = self::awysmmukegasimmq === $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::osiogououyayqyck); $ikgwqyuyckaewsow[] = Form::ymuegqgyuagyucws(self::NAME, __("\123\151\164\145\40\157\162\40\123\x74\x6f\x72\145\x20\116\x61\x6d\x65", PR__MDL__DOMAIN_MANAGER))->eumecwmqmukqgyea(); $eeamcawaiqocomwy = Form::ymuegqgyuagyucws(self::ciyoccqkiamemcmm, __("\111\x6e\x74\x65\162\x6e\145\164\x20\x44\157\155\141\151\156", PR__MDL__DOMAIN_MANAGER), __("\105\156\x74\145\162\40\x79\157\x75\x72\x20\x64\157\x6d\141\151\x6e\x20\x77\151\164\150\x6f\x75\x74\x20\x68\164\x74\160\40\x61\156\x64\x20\x77\167\x77", PR__MDL__DOMAIN_MANAGER))->kyiucygqsgequoys("\145\170\141\155\x70\x6c\145\x2e\x63\157\x6d")->eumecwmqmukqgyea()->sqcsseccsaqsoyqy()->saemoowcasogykak(IconInterface::emuwacasoaaageiq); $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); if (!($kiicsyeqweiekmgc && !Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce))) { goto kooskuwkuayiuose; } $eeamcawaiqocomwy->oykaosmaegqwmoga(); kooskuwkuayiuose: $ikgwqyuyckaewsow[] = $eeamcawaiqocomwy; $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wiqumkmqkqoycqyi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto qwcegcuowwgiccos; } $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ausqeuugegoygouq); $keccaugmemegoimu = Domain::symcgieuakksimmu()->eqqmweomwciucoci($keccaugmemegoimu, false, true, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); qwcegcuowwgiccos: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kcsqeqmcgkwkcyou(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $keccaugmemegoimu = []; if (is_wp_error($mkucggyaiaukqoce)) { goto yssscwioiyygssec; } $keccaugmemegoimu[] = "\144\157\x6d\141\x69\x6e\55\145\144\x69\164"; $mokawwccycoiqeka = $aqmwamyiwgeeymqa->get_param(self::gouqcwikiiygyasc); if (!Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce)) { goto qcessicwuikwqsis; } $keccaugmemegoimu[] = "\144\157\x6d\141\x69\x6e\55\x6f\x77\156\x65\162\163\x68\151\160"; $keccaugmemegoimu[] = "\x64\x6f\x6d\141\151\156\55\x76\x65\162\151\146\x69\143\141\x74\x69\157\156"; qcessicwuikwqsis: yssscwioiyygssec: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
