<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6214cafc97f06             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Panel; use DateTime; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\DomainManager\Model\Domain; use Pmpr\Package\DomainManager\Model\Ownership; use Pmpr\Package\Panel\REST\AbstractREST; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends AbstractREST { public function __construct() { $this->rest_base = "\x64\x6f\155\141\151\156\x2d\155\141\156\141\147\145\x72"; parent::__construct(); } public function register_routes() { $this->register("\57\147\x65\x74\x2d\x64\x6f\x6d\141\x69\156", ["\x61\162\x67\x73" => [], "\155\x65\164\x68\x6f\144\163" => self::uigoseacoukemwqc, "\x63\141\154\x6c\x62\141\x63\x6b" => [$this, "\167\167\x61\x77\151\163\x63\x6b\151\x71\145\x75\x65\x6f\x75\x61"]]); $this->register("\x2f\x67\145\x74\x2d\144\x6f\x6d\141\x69\156\163", ["\141\162\147\163" => [], "\x6d\145\x74\150\x6f\x64\x73" => self::uigoseacoukemwqc, "\143\x61\154\x6c\x62\141\x63\153" => [$this, "\167\x69\161\165\155\x6b\x6d\x71\153\x71\157\171\x63\161\x79\151"]]); $this->register("\x2f\x67\145\164\55\x64\157\x6d\x61\x69\x6e\55\146\151\145\154\x64\x73", ["\141\162\147\163" => [], "\155\x65\164\150\157\x64\x73" => self::uigoseacoukemwqc, "\x63\141\154\154\142\x61\143\x6b" => [$this, "\165\147\x6d\143\x65\143\143\x67\167\141\x61\141\x69\x67\x69\x79"]]); $this->register("\x2f\x73\141\166\x65\x2d\144\x6f\155\141\x69\x6e", ["\141\x72\147\x73" => [], "\155\x65\x74\150\x6f\144\x73" => self::qucyckeykeuuaquw, "\x63\x61\x6c\x6c\x62\x61\x63\x6b" => [$this, "\155\x71\153\143\x61\165\145\x6b\171\x6d\x65\153\161\x61\153\151"]]); $this->register("\x2f\x75\160\x64\x61\x74\145\55\144\x6f\155\x61\151\x6e", ["\141\162\x67\163" => [], "\155\x65\x74\150\x6f\144\163" => self::qucyckeykeuuaquw, "\143\x61\154\154\142\141\143\153" => [$this, "\x61\x6d\157\147\x71\x79\x63\157\x63\x6f\165\x77\x61\x69\143\x6f"]]); $this->register("\57\147\145\164\55\x64\157\x6d\x61\x69\156\55\164\141\x62\163", ["\x61\x72\147\163" => [], "\x6d\x65\x74\150\x6f\x64\163" => self::uigoseacoukemwqc, "\x63\x61\154\x6c\142\x61\x63\x6b" => [$this, "\153\x63\x73\x71\x65\x71\x6d\143\x67\x6b\x77\153\x63\x79\x6f\165"]]); $this->register("\57\x67\145\x74\55\x6f\x77\156\145\x72\x73\150\x69\160\163", ["\141\162\147\x73" => [], "\155\x65\164\150\157\x64\163" => self::uigoseacoukemwqc, "\x63\x61\154\154\x62\141\143\x6b" => [$this, "\155\143\x6f\153\x77\x6d\145\x75\x75\143\161\x67\157\165\x6f\x73"]]); $this->register("\x2f\147\x65\164\55\157\x77\x6e\x65\x72\x73\x68\151\160", ["\x61\162\x67\x73" => [], "\155\145\x74\150\157\144\163" => self::uigoseacoukemwqc, "\x63\141\x6c\x6c\142\x61\x63\153" => [$this, "\151\x63\151\x6d\x6f\x63\171\155\x77\x63\157\x71\x65\x65\155\157"]]); $this->register("\x2f\166\x65\162\151\x66\171\55\144\x6f\155\141\x69\x6e", ["\141\162\147\163" => [], "\x6d\x65\x74\x68\157\144\x73" => self::qucyckeykeuuaquw, "\143\141\x6c\x6c\142\141\143\x6b" => [$this, "\145\171\155\x65\x73\163\x77\157\163\x6b\165\163\x6b\155\x79\x77"]]); } public function mqkcauekymekqaki(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto qwigomakwmyiwkgo; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $keccaugmemegoimu = $swgwkyqkakceqeia->kmuykuaakicwsocs($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto qgoiooayqmqqsiok; } $ceiwsaacewygcsqg = $swgwkyqkakceqeia->kumuygiiqswoyasy(); $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu[self::eoskkkieowogacws], [$ceiwsaacewygcsqg => $keccaugmemegoimu[$ceiwsaacewygcsqg]]); qgoiooayqmqqsiok: qwigomakwmyiwkgo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function amogqycocouwaico(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto asmecuqiyyswueqe; } $keccaugmemegoimu = Domain::symcgieuakksimmu()->amogqycocouwaico($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto myoicgcuugciueis; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x44\x6f\x6d\141\x69\156\40\163\165\143\x63\x65\163\163\x66\165\154\154\171\x20\165\160\144\141\x74\145\x64\x2e", PR__PKG__DOMAIN_MANAGER), $keccaugmemegoimu); myoicgcuugciueis: asmecuqiyyswueqe: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mcokwmeuucqgouos(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto sciwggaeogcoesiu; } $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\157\155\x61\151\x6e"); $ukamowomoeiweqky = $ueomouiqmosykioc->ksesieiwkmougeue($mokawwccycoiqeka, $keccaugmemegoimu); if ($ukamowomoeiweqky) { goto kuicqywysciceggs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4e\157\x20\141\x63\x63\x65\x73\163\x20\x74\157\x20\x74\x68\x69\x73\40\163\145\147\155\x65\156\x74", PR__PKG__DOMAIN_MANAGER), 401); goto mkwskuycuyguqqok; kuicqywysciceggs: if ($ueomouiqmosykioc->sqwcgyyocucsouyy($ukamowomoeiweqky) === $ueomouiqmosykioc::myiiuekcoeksaasm) { goto csscmcacoikwsecs; } $keccaugmemegoimu = $ueomouiqmosykioc->oosqweumiyeayasy($ueomouiqmosykioc->cwgkcyyaymmsomqa([$ukamowomoeiweqky])); goto cuykwgmswkskqkyi; csscmcacoikwsecs: $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ausqeuugegoygouq); $keccaugmemegoimu = $ueomouiqmosykioc->bikiqakeqgekegsk($mokawwccycoiqeka, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); cuykwgmswkskqkyi: mkwskuycuyguqqok: sciwggaeogcoesiu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function icimocymwcoqeemo(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto yowsmsiyimmimemc; } $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $keccaugmemegoimu = $ueomouiqmosykioc->ksesieiwkmougeue($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\x6f\155\141\151\156"), $keccaugmemegoimu); if (!$keccaugmemegoimu) { goto eqkauqciwewmgeoi; } $keccaugmemegoimu = $ueomouiqmosykioc->scqakcemaqsqkema($keccaugmemegoimu, [$ueomouiqmosykioc->kumuygiiqswoyasy(), $ueomouiqmosykioc::meksegaoamowuwoq, $ueomouiqmosykioc::awqaawasiusmysgc, $ueomouiqmosykioc::ucmueuwwcmocgmig, $ueomouiqmosykioc::komqcwuqaguwweiw]); goto kwagwqyusyiyoaqs; eqkauqciwewmgeoi: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\117\167\156\x65\162\163\x68\151\x70\40\x6e\157\x74\x20\x66\x6f\x75\156\x64", PR__PKG__DOMAIN_MANAGER), 404); kwagwqyusyiyoaqs: yowsmsiyimmimemc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa) { $mokawwccycoiqeka = null; $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto cggowoquuiwqkyew; } $aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); if (!$aokagokqyuysuksm) { goto sqiciiuwmykocycc; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->akkkoiiymmamsauc($aokagokqyuysuksm, $swgwkyqkakceqeia->kumuygiiqswoyasy(), [$swgwkyqkakceqeia::gouqcwikiiygyasc, $swgwkyqkakceqeia::NAME, $swgwkyqkakceqeia::ciyoccqkiamemcmm, $swgwkyqkakceqeia::igswcauwsgmeougs, $swgwkyqkakceqeia::CREATED_AT]); if (!$mokawwccycoiqeka) { goto iomcaiwewsawiamu; } $ukamowomoeiweqky = $swgwkyqkakceqeia->iscemaoqqckmkago(Domain::geseccqgwqkukyuk, $mokawwccycoiqeka, ["\52"], [self::meksegaoamowuwoq => $ycoeoaakqyskgykq]); if ($ukamowomoeiweqky) { goto kiqogmwcgcamwiig; } $mokawwccycoiqeka = null; kiqogmwcgcamwiig: iomcaiwewsawiamu: sqiciiuwmykocycc: if (!$mokawwccycoiqeka) { goto eequksumcoogyoem; } $keccaugmemegoimu = $mokawwccycoiqeka; goto uukumskkeggaowck; eequksumcoogyoem: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\161\165\x65\163\x74\x65\x64\40\144\x6f\155\141\151\x6e\40\156\157\x74\x20\146\x6f\165\x6e\x64\56", PR__PKG__DOMAIN_MANAGER), 404); uukumskkeggaowck: cggowoquuiwqkyew: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function eymesswoskuskmyw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto qmeoaqmsuseueqiy; } $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $iecimaigkkceeska = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); $ukamowomoeiweqky = $ueomouiqmosykioc->akkkoiiymmamsauc($iecimaigkkceeska); if ($ukamowomoeiweqky) { goto eiawsoasmscmqswa; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4f\167\156\145\162\163\x68\151\x70\x20\x6e\157\164\40\x66\157\x75\x6e\144", PR__PKG__DOMAIN_MANAGER), 404); goto ickcmqoiosquugwe; eiawsoasmscmqswa: $mokawwccycoiqeka = Domain::symcgieuakksimmu()->akkkoiiymmamsauc($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\144\157\x6d\x61\151\x6e")); if ($mokawwccycoiqeka) { goto qmiwsequckckoaei; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\104\157\155\141\151\156\x20\156\x6f\x74\x20\x66\x6f\165\156\x64", PR__PKG__DOMAIN_MANAGER), 404); goto goeoymmqqqeeoime; qmiwsequckckoaei: $eeamcawaiqocomwy = ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm); $uusmaiomayssaecw = ManipulateArray::get($ukamowomoeiweqky, Ownership::awqaawasiusmysgc); if ($uusmaiomayssaecw && $eeamcawaiqocomwy) { goto kecwuwwcwokuksyq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\x71\x75\x69\x72\145\x20\x70\141\x72\x61\155\x65\164\145\162\x73\x20\x6e\157\x74\x20\146\x6f\x75\x6e\144", PR__PKG__DOMAIN_MANAGER), 400); goto qgegkeomwscwwiuw; kecwuwwcwokuksyq: $iwywmkygwewiamwm = "\x68\164\164\x70\x3a\57\57{$eeamcawaiqocomwy}\57{$uusmaiomayssaecw}\x2e\150\x74\x6d\154"; $sogksuscggsicmac = wp_remote_get($iwywmkygwewiamwm); if (!is_wp_error($sogksuscggsicmac) && isset($sogksuscggsicmac["\x72\x65\x73\x70\x6f\x6e\163\x65"]["\x63\x6f\x64\145"]) && $sogksuscggsicmac["\162\x65\163\160\157\156\x73\x65"]["\143\x6f\x64\145"] == 200) { goto mswsoaimesegiiic; } if (is_wp_error($sogksuscggsicmac)) { goto wcesymwqykqoyuqk; } $uamcoiueqaamsqma = __("\x43\x61\x6e\40\x6e\x6f\164\x20\x66\x69\156\x64\x20\146\151\x6c\x65", PR__PKG__DOMAIN_MANAGER); goto usqgaogkqgemuima; wcesymwqykqoyuqk: $uamcoiueqaamsqma = print_r($this->wsmkmgikcacikiwe($sogksuscggsicmac), true); usqgaogkqgemuima: $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\145\x72\x69\x66\171\40\106\x61\x69\x6c\x65\x64\72\40\45\163", PR__PKG__DOMAIN_MANAGER), $uamcoiueqaamsqma), 404); goto egasokooagakisiy; mswsoaimesegiiic: $kuukgsmqkagwaciu = rtrim($sogksuscggsicmac["\x62\x6f\144\171"] ?? ''); if ($kuukgsmqkagwaciu && $kuukgsmqkagwaciu === ManipulateArray::get($ukamowomoeiweqky, Ownership::awqaawasiusmysgc)) { goto goacqqsgaaigyuaw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\x65\162\x69\x66\x79\x20\x46\x61\x69\x6c\145\144\72\40\45\x73", PR__PKG__DOMAIN_MANAGER), __("\106\x69\x6c\145\x20\143\157\x6e\164\145\x6e\164\x20\156\x6f\x74\40\x76\x61\x6c\151\144", PR__PKG__DOMAIN_MANAGER))); goto meawswgwagoqgkye; goacqqsgaaigyuaw: $sogksuscggsicmac = $ueomouiqmosykioc->gscuuyuyauokoyuo([self::ucmueuwwcmocgmig => Ownership::myiiuekcoeksaasm, $ueomouiqmosykioc::komqcwuqaguwweiw => (new Datetime("\x6e\x6f\x77"))->format("\131\55\x6d\x2d\x64\40\x48\x3a\151\72\163"), $ueomouiqmosykioc->kumuygiiqswoyasy() => $iecimaigkkceeska]); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto ocokwuuquaokmasc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x56\x65\162\151\146\x79\x20\x46\x61\x69\x6c\x65\144\x3a\40\45\163", PR__PKG__DOMAIN_MANAGER), __("\120\154\145\x61\x73\x65\40\164\x72\171\40\x61\x67\141\151\156", PR__PKG__DOMAIN_MANAGER)), 500); goto yiwiqaqmwiogawym; ocokwuuquaokmasc: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\104\157\x6d\141\x69\x6e\x20\126\145\x72\151\x66\x69\x65\x64\x20\x73\165\143\143\145\x73\163\x66\x75\154\x6c\x79\56", PR__PKG__DOMAIN_MANAGER)); yiwiqaqmwiogawym: meawswgwagoqgkye: egasokooagakisiy: qgegkeomwscwwiuw: goeoymmqqqeeoime: ickcmqoiosquugwe: qmeoaqmsuseueqiy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $kiicsyeqweiekmgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::osiogououyayqyck) == "\x65\144\x69\x74"; $ikgwqyuyckaewsow[] = Form::ymuegqgyuagyucws(self::NAME, __("\123\151\164\145\x20\x6f\x72\40\123\164\157\162\145\x20\116\141\x6d\145", PR__PKG__DOMAIN_MANAGER))->eumecwmqmukqgyea(); $eeamcawaiqocomwy = Form::ymuegqgyuagyucws(self::ciyoccqkiamemcmm, __("\111\156\164\x65\162\156\145\x74\40\104\157\x6d\x61\151\156", PR__PKG__DOMAIN_MANAGER), __("\105\x6e\164\x65\162\40\171\x6f\x75\x72\x20\144\x6f\x6d\x61\151\x6e\40\x77\151\164\150\157\x75\x74\x20\150\x74\164\160\40\x61\x6e\144\40\167\167\167", PR__PKG__DOMAIN_MANAGER))->kyiucygqsgequoys("\145\x78\141\155\160\x6c\x65\56\x63\157\x6d")->eumecwmqmukqgyea()->sqcsseccsaqsoyqy()->saemoowcasogykak(IconFontawesomeInterface::yakumqwueukksgcm); $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); if (!($kiicsyeqweiekmgc && !Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce))) { goto ygkcacsyyckescqs; } $eeamcawaiqocomwy->oykaosmaegqwmoga(); ygkcacsyyckescqs: $ikgwqyuyckaewsow[] = $eeamcawaiqocomwy; $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wiqumkmqkqoycqyi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto cuoqqgaygogsmmic; } $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ausqeuugegoygouq); $keccaugmemegoimu = Domain::symcgieuakksimmu()->eqqmweomwciucoci($keccaugmemegoimu, false, true, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); cuoqqgaygogsmmic: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kcsqeqmcgkwkcyou(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $keccaugmemegoimu = []; if (is_wp_error($mkucggyaiaukqoce)) { goto sukskmcwsoysiuqu; } $keccaugmemegoimu[] = "\x64\157\155\141\x69\x6e\x2d\x65\x64\x69\164"; $mokawwccycoiqeka = $aqmwamyiwgeeymqa->get_param(self::gouqcwikiiygyasc); if (!Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce)) { goto cgewcsueoyaeikgm; } $keccaugmemegoimu[] = "\x64\157\155\141\151\156\55\x6f\167\156\x65\162\163\x68\x69\x70"; $keccaugmemegoimu[] = "\144\157\155\141\x69\x6e\x2d\x76\145\x72\x69\x66\x69\x63\141\164\151\157\156"; cgewcsueoyaeikgm: sukskmcwsoysiuqu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
