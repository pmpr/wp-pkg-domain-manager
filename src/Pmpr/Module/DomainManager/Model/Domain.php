<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678aa122ac55c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Model; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Purchase; use Pmpr\Module\DomainManager\Backlink\Model as Backlink; use WP_Error; use WP_REST_Request; class Domain extends Model { const aemeeukyaaokioui = "\x70\145\162\x6d\151\163\x73\151\157\156"; const wygegsqueakqiccy = "\142\141\143\153\154\x69\156\153" . Constants::mswocgcucqoaesaa; const kwouyaaaeiuuquis = "\x70\x75\162\x63\x68\x61\x73\x65" . Constants::mswocgcucqoaesaa; const ogqcgemayqiaucag = Constants::ocwsuwyiiasigqaa . Constants::mswocgcucqoaesaa; const geseccqgwqkukyuk = "\x6f\167\156\145\162\163\150\x69\x70" . Constants::mswocgcucqoaesaa; const muckogockysqwceq = 32; const yqkomaiikewyeges = "\x62\154\x6f\143\153\145\x64"; const ycaauyuekyyiuosk = "\x76\x69\x6f\154\x61\x74\x65\x64"; const wyeieyscswyiskcw = "\x61\x6c\154\157\167\x65\144"; const qyywsyikosmsacgu = "\156\x6f\x74\137\x61\x6c\154\x6f\167\145\144"; const NOT_SPECIFIED = "\x6e\157\x74\x5f\x73\160\x65\x63\x69\146\x69\145\144"; public function register() { $this->muuwuqssqkaieqge(__("\104\157\x6d\141\151\x6e\x73", PR__MDL__DOMAIN_MANAGER))->guiaswksukmgageq(__("\x44\157\x6d\x61\151\x6e", PR__MDL__DOMAIN_MANAGER))->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->uaywwyimkgwyqwya([Constants::yiuwgggacagyeqmo => 1]); $this->ecmiqywsauuoccwo(Constants::ukwaycqmyyuekwqg)->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw)->ecmiqywsauuoccwo(Constants::awysmmukegasimmq)->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq); $this->swsaakqseuaacagq(Constants::emsskyeoaqokwsoa, [$this, "\171\145\165\x79\171\x63\x6b\163\x65\157\x69\157\x6b\x6d\x6d\x6d"]); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::NAME)->qcqeqimisiisswky()->acceqyqygswoecwe(256)->qkwyekmiceaogwci(false)->gswweykyogmsyawy(__("\104\x6f\155\x61\151\x6e\x20\x4e\x61\x6d\x65", PR__MDL__DOMAIN_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::ciyoccqkiamemcmm)->qcqeqimisiisswky()->gswweykyogmsyawy(__("\x44\157\155\x61\x69\x6e\x20\101\144\144\162\x65\163\x73", PR__MDL__DOMAIN_MANAGER))->eccqsggkcosmqumc()->acceqyqygswoecwe(256)->qkwyekmiceaogwci(false)->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { if ($this->qcaekwgmiswccowk(Constants::ieioeisgwcgysukw) || $this->qcaekwgmiswccowk(Constants::weiosaewqequuyuq)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($eqgoocgaqwqcimie, "\150\164\164\x70\163\x3a\57\57{$eqgoocgaqwqcimie}"); } return $eqgoocgaqwqcimie; }))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::igswcauwsgmeougs)->gswweykyogmsyawy(__("\x41\120\111\40\x4b\145\x79", PR__MDL__DOMAIN_MANAGER))->acceqyqygswoecwe(self::muckogockysqwceq)->aguakyuusmksagai()->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->kesomeowemmyygey(1, Constants::eqewsqmqmsiocaeg, __("\101\x63\x74\x69\166\145", PR__MDL__DOMAIN_MANAGER))->kesomeowemmyygey(2, self::ycaauyuekyyiuosk, __("\x56\x69\157\154\x61\x74\145\x64", PR__MDL__DOMAIN_MANAGER))->kesomeowemmyygey(3, self::yqkomaiikewyeges, __("\x42\154\x6f\143\153\x65\144", PR__MDL__DOMAIN_MANAGER))->gswweykyogmsyawy(__("\x53\164\x61\x74\x75\x73", PR__MDL__DOMAIN_MANAGER))->qassieeyqwaysucq())->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(self::aemeeukyaaokioui)->kesomeowemmyygey(1, self::NOT_SPECIFIED, __("\x4e\x6f\x74\x20\123\x70\x65\x63\151\146\x69\145\x64", PR__MDL__DOMAIN_MANAGER))->kesomeowemmyygey(2, self::qyywsyikosmsacgu, __("\116\157\164\x20\x41\154\x6c\x6f\x77\145\144", PR__MDL__DOMAIN_MANAGER))->kesomeowemmyygey(3, self::wyeieyscswyiskcw, __("\101\x6c\x6c\157\167\x65\144", PR__MDL__DOMAIN_MANAGER))->gswweykyogmsyawy(__("\120\145\162\x6d\151\163\x73\151\157\x6e", PR__MDL__DOMAIN_MANAGER))->qassieeyqwaysucq())->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::geseccqgwqkukyuk)->gswweykyogmsyawy(__("\x4f\x77\x6e\x65\x72\x73\150\151\160\x73", PR__MDL__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Ownership::class))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::wygegsqueakqiccy)->gswweykyogmsyawy(__("\x42\141\x63\x6b\x6c\x69\x6e\153\163", PR__MDL__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Backlink::class))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::ogqcgemayqiaucag)->qcqeqimisiisswky()->ckmqkgwcusyaegmm()->uwmyqckcyamwaiww(Component::class)->kkeymosoimmgsaug()->gswweykyogmsyawy(__("\x41\x73\x73\151\147\156\x65\x64\x20\x43\157\x6d\x70\157\x6e\145\156\164\163", PR__MDL__DOMAIN_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::kwouyaaaeiuuquis)->gswweykyogmsyawy(__("\120\x75\x72\143\x68\x61\163\145\x73", PR__MDL__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Purchase::class))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::CREATED_AT)->gswweykyogmsyawy(__("\x43\162\x65\x61\164\145\144\40\101\164", PR__MDL__DOMAIN_MANAGER))->qcqeqimisiisswky()); parent::uwmqacgewuauagai(); } public function aoqwywcqmoqaukkq() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::NAME))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::ciywsqoeiymemsys)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::aemeeukyaaokioui)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::ciyoccqkiamemcmm)->kqqqugemmqagucuq())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::ogqcgemayqiaucag)->oikgogcweiiaocka()->ugquamoakekwyiqg(Component::class)); } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $pkyyagewkiyckmwy = ''; if ($mksyucucyswaukig) { if (is_numeric($mksyucucyswaukig)) { $mksyucucyswaukig = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($mksyucucyswaukig); } $mokawwccycoiqeka = $this->waecsyqmwascmqoa($mksyucucyswaukig, Constants::ciyoccqkiamemcmm); if ($mokawwccycoiqeka) { $pkyyagewkiyckmwy = sprintf("\45\x73\x20\x28\45\x73\51", $this->waecsyqmwascmqoa($mksyucucyswaukig, Constants::NAME), $mokawwccycoiqeka); } } return $pkyyagewkiyckmwy; } private function mqwogqieoumeoocw() : string { return $this->caokeucsksukesyo()->owgcciayoweymuws()->ycwmswocisskwuwg(self::muckogockysqwceq); } public function yeuyyckseoiokmmm($icwicymcioeyeyek, $aokagokqyuysuksm) { if (empty($aokagokqyuysuksm) && empty($icwicymcioeyeyek[Constants::igswcauwsgmeougs])) { $icwicymcioeyeyek[Constants::igswcauwsgmeougs] = $this->mqwogqieoumeoocw(); } return $icwicymcioeyeyek; } public function smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce) : bool { $yciaosuiyeieceug = false; if ($mokawwccycoiqeka && $mkucggyaiaukqoce) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $aocawoeyuyauccks = Ownership::symcgieuakksimmu()->iekyeyicoyyawomk(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ukamowomoeiweqky = $aocawoeyuyauccks->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce)), $eqwoegegiamegqsm->megqywqeuquawkim(Ownership::qkmqmaeuyokqgemg, $mokawwccycoiqeka), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ucmueuwwcmocgmig, Ownership::myiiuekcoeksaasm)]); if (!$ukamowomoeiweqky) { $ukamowomoeiweqky = $aocawoeyuyauccks->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce)), $eqwoegegiamegqsm->megqywqeuquawkim(Ownership::qkmqmaeuyokqgemg, $mokawwccycoiqeka), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ucmueuwwcmocgmig, Ownership::cymeeiwqgosaoaia)]); if ($ukamowomoeiweqky) { $yciaosuiyeieceug = true; } } } return $yciaosuiyeieceug; } public function amogqycocouwaico($mokawwccycoiqeka, $mkucggyaiaukqoce) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $this->mwyqswsaeeewsosm($mokawwccycoiqeka); $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, Constants::NAME); if ($aokagokqyuysuksm && $ymqmyyeuycgmigyo && $mkucggyaiaukqoce) { if ($this->smqueiqomceqaeka($aokagokqyuysuksm, $mkucggyaiaukqoce)) { $icwicymcioeyeyek = [$this->kumuygiiqswoyasy() => $aokagokqyuysuksm, Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciywsqoeiymemsys => Constants::eqewsqmqmsiocaeg]; $ysyswymameciiyce = false; $eeamcawaiqocomwy = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, Constants::ciyoccqkiamemcmm); if ($eeamcawaiqocomwy) { $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm] = $eeamcawaiqocomwy; $ysyswymameciiyce = true; } if ($ysyswymameciiyce && !$this->smqueiqomceqaeka($aokagokqyuysuksm, $mkucggyaiaukqoce)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\157\162\162\x79\40\x79\157\165\40\143\x61\156\40\x6e\x6f\164\x20\165\160\x64\141\164\145\x20\x79\157\x75\x72\x20\144\x6f\x6d\141\151\156\x20\x61\x64\x64\x72\145\163\163\x2e", PR__MDL__DOMAIN_MANAGER), 400); } else { $sogksuscggsicmac = $this->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if (!is_wp_error($sogksuscggsicmac)) { $sogksuscggsicmac = $icwicymcioeyeyek; } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x59\157\165\x20\x64\157\156\164\40\x68\x61\x76\145\40\160\145\x72\155\151\163\163\x69\157\156\x20\164\157\40\145\144\151\x74\x20\164\x68\x69\163\x20\144\x6f\x6d\x61\151\156\56", PR__MDL__DOMAIN_MANAGER), 401); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\145\x71\x75\x69\162\145\144\x20\146\x69\145\154\x64\163\40\156\x6f\164\40\160\141\x73\163\145\x64\x2e", PR__MDL__DOMAIN_MANAGER), 400); } return $sogksuscggsicmac; } public function kmuykuaakicwsocs($icwicymcioeyeyek, $miowmmgaiagcuyoo = null) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $sogksuscggsicmac = null; $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::NAME); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::ciyoccqkiamemcmm); if ($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo) { if (!preg_match("\43\x5e\150\x74\x74\x70\50\x73\51\x3f\x3a\x2f\x2f\43", $eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = "\150\x74\x74\x70\x73\x3a\57\x2f{$eqgoocgaqwqcimie}"; } if ($cwaqscoiqkokyase->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { $gmqiuuqqkwakoiiu = true; $eqgoocgaqwqcimie = untrailingslashit(preg_replace("\57\136\167\x3f\x77\77\167\x3f\134\56\x2f", '', $cwaqscoiqkokyase->mkcmkkskeeaskowy($eqgoocgaqwqcimie))); $mokawwccycoiqeka = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($eqgoocgaqwqcimie, Constants::ciyoccqkiamemcmm); if (!$mokawwccycoiqeka) { $sogksuscggsicmac = $this->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]); $kigowwqauiumummw = !is_wp_error($sogksuscggsicmac); if ($kigowwqauiumummw) { $mokawwccycoiqeka = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; } } else { $gmqiuuqqkwakoiiu = false; $kigowwqauiumummw = true; } if ($kigowwqauiumummw) { $wqykqusigegasqeg = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, $this->kumuygiiqswoyasy()); $ukamowomoeiweqky = null; $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); if ($miowmmgaiagcuyoo) { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($miowmmgaiagcuyoo); if (!$gmqiuuqqkwakoiiu) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ukamowomoeiweqky = $ueomouiqmosykioc->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($ueomouiqmosykioc::qkmqmaeuyokqgemg, $wqykqusigegasqeg)]); } if (!$ukamowomoeiweqky) { $sogksuscggsicmac = $ueomouiqmosykioc->ocsyiyiasyiwmuuc($wqykqusigegasqeg, $ycoeoaakqyskgykq); } } if (!isset($sogksuscggsicmac) || !is_wp_error($sogksuscggsicmac)) { $sogksuscggsicmac = [Constants::gouqcwikiiygyasc => $wqykqusigegasqeg, Constants::vswoiouoaykswgym => "\x64\x6f\x6d\141\x69\156\137\x61\x64\x64\x65\x64", Constants::ckmqoekmugkggeym => $mokawwccycoiqeka, Constants::ciywsqoeiymemsys => 200, Constants::eoskkkieowogacws => sprintf("\45\163\x3c\x62\x72\x2f\76\45\163", __("\104\157\155\141\x69\x6e\x20\163\165\x63\x63\x65\163\163\146\x75\154\154\171\40\x61\144\144\x65\144\56", PR__MDL__DOMAIN_MANAGER), __("\120\x6c\145\141\163\x65\x20\166\x65\162\151\146\x79\x20\x64\x6f\x6d\x61\151\x6e\x2e", PR__MDL__DOMAIN_MANAGER))]; } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\x6e\x74\145\162\145\x64\40\144\x6f\x6d\x61\151\156\x20\151\163\40\x6e\x6f\164\40\166\x61\x6c\x69\x64\x2e", PR__MDL__DOMAIN_MANAGER), 400); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $sogksuscggsicmac; } public function isgemoumsseimwio($mokawwccycoiqeka) : bool { $gkioossaaiumqqsq = $this->iekyeyicoyyawomk(); return $gkioossaaiumqqsq->exists($gkioossaaiumqqsq->mgacegaoeamymmya(self::kwouyaaaeiuuquis, $mokawwccycoiqeka)); } public function aokkqqekiykiikki(WP_REST_Request $aqmwamyiwgeeymqa, bool $mwiwqcqqeoiygwia = true) : bool { $iakkeikwceeomgyq = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ogkysoamaegikmcy($aqmwamyiwgeeymqa); if ($mwiwqcqqeoiygwia) { $mokawwccycoiqeka = $this->aqiwcawmimkygoau($aqmwamyiwgeeymqa->get_param(Constants::igswcauwsgmeougs), $iakkeikwceeomgyq); } else { $mokawwccycoiqeka = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($iakkeikwceeomgyq, Constants::ciyoccqkiamemcmm); } $ksaameoqigiaoigg = false; if ($mokawwccycoiqeka && !is_wp_error($mokawwccycoiqeka)) { $ksaameoqigiaoigg = $this->koeimwecyiiqgesk($mokawwccycoiqeka); } return $ksaameoqigiaoigg; } public function mwiwqcqqeoiygwia($esuksqieigiqcaie, $mokawwccycoiqeka) { if ($mokawwccycoiqeka) { $keccaugmemegoimu = $this->aqiwcawmimkygoau($esuksqieigiqcaie, $mokawwccycoiqeka); if (!is_wp_error($keccaugmemegoimu)) { if ($keccaugmemegoimu) { $keccaugmemegoimu = __("\x41\120\x49\x20\113\x65\x79\40\151\x73\x20\x76\x61\x6c\151\144\x2e", PR__MDL__DOMAIN_MANAGER); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\x61\x6e\x20\x6e\x6f\164\x20\146\157\165\x6e\x64\x20\x64\157\155\141\151\x6e\x2c\40\x70\x6c\145\x61\163\x65\40\147\145\x74\x20\x61\156\144\40\141\160\151\40\x6b\x65\x79\40\x62\x79\x20\x67\165\151\x64\145\x2e", PR__MDL__DOMAIN_MANAGER), 404); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\145\x71\165\145\x73\164\40\157\162\x69\x67\x69\156\x20\x6e\x6f\164\x20\x64\x65\164\145\143\164\x65\144\56", PR__MDL__DOMAIN_MANAGER), 400); } return $keccaugmemegoimu; } public function koeimwecyiiqgesk($mokawwccycoiqeka, ?WP_REST_Request $aqmwamyiwgeeymqa = null) : bool { $ksaameoqigiaoigg = false; switch ($this->ogegcqqcukiaqscy(self::aemeeukyaaokioui, $mokawwccycoiqeka, self::NOT_SPECIFIED)) { case self::wyeieyscswyiskcw: $ksaameoqigiaoigg = true; break; case self::NOT_SPECIFIED: default: $gwgucoaaqcwwciqq = $this->waecsyqmwascmqoa($mokawwccycoiqeka, Constants::ciyoccqkiamemcmm); if ($gwgucoaaqcwwciqq && $this->isgemoumsseimwio($mokawwccycoiqeka) && $this->ucegqiqcwyqmsuwm($gwgucoaaqcwwciqq, $aqmwamyiwgeeymqa)) { $qoowakyqgwcscuss = self::wyeieyscswyiskcw; } else { $qoowakyqgwcscuss = self::qyywsyikosmsacgu; } $this->gssiscqyqsacmeca()->wqikesawekycweoi($mokawwccycoiqeka, [self::aemeeukyaaokioui => $qoowakyqgwcscuss], true); break; } return $ksaameoqigiaoigg; } public function ucegqiqcwyqmsuwm($iakkeikwceeomgyq, ?WP_REST_Request $aqmwamyiwgeeymqa = null) : bool { $ksaameoqigiaoigg = false; $yywmssikcykmsiqi = ["\151\x72"]; if (in_array(strtolower(pathinfo($iakkeikwceeomgyq, PATHINFO_EXTENSION)), $yywmssikcykmsiqi)) { $ksaameoqigiaoigg = true; } else { if ($aqmwamyiwgeeymqa) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ssamkiocukucqkwg($aqmwamyiwgeeymqa->get_param("\151\160\x73"), $yywmssikcykmsiqi); } } return $ksaameoqigiaoigg; } public function eqqmweomwciucoci($mkucggyaiaukqoce, $kqwygogeauwwyoca = false, $goocueskqsmqagii = true, $suaemuyiacqyugsm = 1, $weyoqgcesqgeusiu = 10) : array { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce); try { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $uoomaookgsyciacm = [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq)]; if ($kqwygogeauwwyoca) { $uoomaookgsyciacm[] = $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ucmueuwwcmocgmig, [Ownership::myiiuekcoeksaasm, Ownership::gogsqoacoimiocqg]); } $oysoyeaucuawyaky = Ownership::symcgieuakksimmu()->iekyeyicoyyawomk()->ssiyoimagsskwsoi($uoomaookgsyciacm, Ownership::qkmqmaeuyokqgemg); $siykeiywomwwuoiw = $this->iekyeyicoyyawomk()->wkmkqaiwuqouweye($this->kumuygiiqswoyasy(), $oysoyeaucuawyaky); if ($goocueskqsmqagii) { $wqogggcaamgeiwew = $this->iekyeyicoyyawomk()->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::imywcsggckkcywgk => $suaemuyiacqyugsm, Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu]); } else { $wqogggcaamgeiwew = $this->cwgkcyyaymmsomqa($this->iekyeyicoyyawomk()->iiqauwkoiguyeawu($siykeiywomwwuoiw)); } } catch (Exception $wgaoewqkwgomoaai) { $wqogggcaamgeiwew = []; } return $wqogggcaamgeiwew; } public function aqiwcawmimkygoau($esuksqieigiqcaie, $gwgucoaaqcwwciqq = false) { if (self::muckogockysqwceq === strlen($esuksqieigiqcaie)) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gqgemcmoicmgaqie[] = $eqwoegegiamegqsm->megqywqeuquawkim(Constants::igswcauwsgmeougs, $esuksqieigiqcaie); if ($gwgucoaaqcwwciqq !== false) { $gqgemcmoicmgaqie[] = $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciyoccqkiamemcmm, $gwgucoaaqcwwciqq); } $sogksuscggsicmac = $this->iekyeyicoyyawomk()->oqomcmyuuakigusk($gqgemcmoicmgaqie); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\131\157\165\162\x20\101\x50\x49\40\113\x65\x79\x20\x69\163\40\x6e\x6f\164\x20\166\141\154\151\144\x2e", PR__MDL__DOMAIN_MANAGER), 400); } return $sogksuscggsicmac; } public function gwkkkwyoomgsiaou($gwgucoaaqcwwciqq) { return $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($gwgucoaaqcwwciqq, Constants::ciyoccqkiamemcmm); } }
