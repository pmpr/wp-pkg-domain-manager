<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670da374be5c8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Model; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Purchase; use Pmpr\Module\DomainManager\Backlink\Model as Backlink; use WP_Error; use WP_REST_Request; class Domain extends Model { const aemeeukyaaokioui = "\x70\145\x72\x6d\x69\x73\x73\151\x6f\x6e"; const wygegsqueakqiccy = "\x62\141\x63\153\154\151\x6e\153" . Constants::mswocgcucqoaesaa; const kwouyaaaeiuuquis = "\160\x75\x72\143\150\141\x73\145" . Constants::mswocgcucqoaesaa; const ogqcgemayqiaucag = Constants::ocwsuwyiiasigqaa . Constants::mswocgcucqoaesaa; const geseccqgwqkukyuk = "\157\x77\x6e\145\162\x73\x68\x69\160" . Constants::mswocgcucqoaesaa; const muckogockysqwceq = 32; const yqkomaiikewyeges = "\x62\x6c\x6f\x63\153\x65\x64"; const ycaauyuekyyiuosk = "\166\x69\x6f\154\141\164\x65\x64"; const wyeieyscswyiskcw = "\141\x6c\x6c\x6f\167\145\x64"; const qyywsyikosmsacgu = "\x6e\157\x74\137\141\154\154\157\x77\145\x64"; const NOT_SPECIFIED = "\x6e\x6f\x74\x5f\x73\x70\145\143\x69\x66\x69\x65\144"; public function register() { $this->muuwuqssqkaieqge(__("\x44\x6f\155\141\151\x6e\163", PR__MDL__DOMAIN_MANAGER))->guiaswksukmgageq(__("\104\x6f\155\x61\x69\156", PR__MDL__DOMAIN_MANAGER))->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->uaywwyimkgwyqwya([Constants::yiuwgggacagyeqmo => 1]); $this->ecmiqywsauuoccwo(Constants::ukwaycqmyyuekwqg)->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw)->ecmiqywsauuoccwo(Constants::awysmmukegasimmq)->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq); $this->swsaakqseuaacagq(Constants::gseyicoqugouoega, [$this, "\161\155\161\157\x67\165\x73\157\x61\x71\145\171\147\x65\x77\x6d"]); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::NAME)->qcqeqimisiisswky()->acceqyqygswoecwe(256)->qkwyekmiceaogwci(false)->gswweykyogmsyawy(__("\104\x6f\155\x61\x69\x6e\x20\116\141\x6d\145", PR__MDL__DOMAIN_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::ciyoccqkiamemcmm)->qcqeqimisiisswky()->gswweykyogmsyawy(__("\x44\157\155\x61\151\x6e\40\x41\x64\144\162\145\163\163", PR__MDL__DOMAIN_MANAGER))->eccqsggkcosmqumc()->acceqyqygswoecwe(256)->qkwyekmiceaogwci(false)->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { if ($this->qcaekwgmiswccowk(Constants::ieioeisgwcgysukw) || $this->qcaekwgmiswccowk(Constants::weiosaewqequuyuq)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($eqgoocgaqwqcimie, "\150\164\164\x70\x73\x3a\x2f\57{$eqgoocgaqwqcimie}"); } return $eqgoocgaqwqcimie; }))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::igswcauwsgmeougs)->acceqyqygswoecwe(self::muckogockysqwceq)->qkwyekmiceaogwci(false)->gswweykyogmsyawy(__("\101\x50\x49\x20\113\x65\171", PR__MDL__DOMAIN_MANAGER))->acokiqqgsmoqaeyu())->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->kesomeowemmyygey(1, Constants::eqewsqmqmsiocaeg, __("\101\x63\164\x69\166\145", PR__MDL__DOMAIN_MANAGER))->kesomeowemmyygey(2, self::ycaauyuekyyiuosk, __("\126\x69\x6f\154\x61\164\145\144", PR__MDL__DOMAIN_MANAGER))->kesomeowemmyygey(3, self::yqkomaiikewyeges, __("\102\x6c\157\143\x6b\x65\x64", PR__MDL__DOMAIN_MANAGER))->gswweykyogmsyawy(__("\123\164\x61\164\165\163", PR__MDL__DOMAIN_MANAGER))->qassieeyqwaysucq())->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(self::aemeeukyaaokioui)->kesomeowemmyygey(1, self::NOT_SPECIFIED, __("\116\157\164\40\123\160\x65\143\x69\x66\151\x65\x64", PR__MDL__DOMAIN_MANAGER))->kesomeowemmyygey(2, self::qyywsyikosmsacgu, __("\116\157\164\40\101\154\154\x6f\x77\145\144", PR__MDL__DOMAIN_MANAGER))->kesomeowemmyygey(3, self::wyeieyscswyiskcw, __("\101\154\154\157\x77\145\144", PR__MDL__DOMAIN_MANAGER))->gswweykyogmsyawy(__("\120\145\x72\155\x69\x73\163\151\157\x6e", PR__MDL__DOMAIN_MANAGER))->qassieeyqwaysucq())->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::geseccqgwqkukyuk)->gswweykyogmsyawy(__("\x4f\167\156\145\162\163\x68\151\x70\x73", PR__MDL__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Ownership::class))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::wygegsqueakqiccy)->gswweykyogmsyawy(__("\x42\x61\143\x6b\154\x69\x6e\153\x73", PR__MDL__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Backlink::class))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::ogqcgemayqiaucag)->qcqeqimisiisswky()->ckmqkgwcusyaegmm()->uwmyqckcyamwaiww(Component::class)->kkeymosoimmgsaug()->gswweykyogmsyawy(__("\x41\x73\163\151\147\156\x65\144\40\103\x6f\155\x70\157\x6e\145\x6e\x74\x73", PR__MDL__DOMAIN_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::kwouyaaaeiuuquis)->gswweykyogmsyawy(__("\120\165\x72\x63\150\141\x73\145\163", PR__MDL__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Purchase::class))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::CREATED_AT)->gswweykyogmsyawy(__("\x43\x72\145\x61\164\145\x64\x20\x41\164", PR__MDL__DOMAIN_MANAGER))->qcqeqimisiisswky()); parent::uwmqacgewuauagai(); } public function aoqwywcqmoqaukkq() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::NAME))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::ciywsqoeiymemsys)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::aemeeukyaaokioui)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::ciyoccqkiamemcmm))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::ogqcgemayqiaucag)->oikgogcweiiaocka()->ugquamoakekwyiqg(Component::class)); } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $pkyyagewkiyckmwy = ''; if ($mksyucucyswaukig) { if (is_numeric($mksyucucyswaukig)) { $mksyucucyswaukig = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($mksyucucyswaukig); } $mokawwccycoiqeka = $this->waecsyqmwascmqoa($mksyucucyswaukig, Constants::ciyoccqkiamemcmm); if ($mokawwccycoiqeka) { $pkyyagewkiyckmwy = sprintf("\45\163\x20\50\45\x73\51", $this->waecsyqmwascmqoa($mksyucucyswaukig, Constants::NAME), $mokawwccycoiqeka); } } return $pkyyagewkiyckmwy; } private function mqwogqieoumeoocw() : string { return $this->caokeucsksukesyo()->owgcciayoweymuws()->ycwmswocisskwuwg(self::muckogockysqwceq); } public function qmqogusoaqeygewm($icwicymcioeyeyek) { if (!isset($icwicymcioeyeyek[Constants::igswcauwsgmeougs]) || empty($icwicymcioeyeyek[Constants::igswcauwsgmeougs])) { $icwicymcioeyeyek[Constants::igswcauwsgmeougs] = $this->mqwogqieoumeoocw(); } return $icwicymcioeyeyek; } public function smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce) : bool { $yciaosuiyeieceug = false; if ($mokawwccycoiqeka && $mkucggyaiaukqoce) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $aocawoeyuyauccks = Ownership::symcgieuakksimmu()->iekyeyicoyyawomk(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ukamowomoeiweqky = $aocawoeyuyauccks->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce)), $eqwoegegiamegqsm->megqywqeuquawkim(Ownership::qkmqmaeuyokqgemg, $mokawwccycoiqeka), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ucmueuwwcmocgmig, Ownership::myiiuekcoeksaasm)]); if (!$ukamowomoeiweqky) { $ukamowomoeiweqky = $aocawoeyuyauccks->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce)), $eqwoegegiamegqsm->megqywqeuquawkim(Ownership::qkmqmaeuyokqgemg, $mokawwccycoiqeka), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ucmueuwwcmocgmig, Ownership::cymeeiwqgosaoaia)]); if ($ukamowomoeiweqky) { $yciaosuiyeieceug = true; } } } return $yciaosuiyeieceug; } public function amogqycocouwaico($mokawwccycoiqeka, $mkucggyaiaukqoce) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $this->mwyqswsaeeewsosm($mokawwccycoiqeka); $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, Constants::NAME); if ($aokagokqyuysuksm && $ymqmyyeuycgmigyo && $mkucggyaiaukqoce) { if ($this->smqueiqomceqaeka($aokagokqyuysuksm, $mkucggyaiaukqoce)) { $icwicymcioeyeyek = [$this->kumuygiiqswoyasy() => $aokagokqyuysuksm, Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciywsqoeiymemsys => Constants::eqewsqmqmsiocaeg]; $ysyswymameciiyce = false; $eeamcawaiqocomwy = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, Constants::ciyoccqkiamemcmm); if ($eeamcawaiqocomwy) { $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm] = $eeamcawaiqocomwy; $ysyswymameciiyce = true; } if ($ysyswymameciiyce && !$this->smqueiqomceqaeka($aokagokqyuysuksm, $mkucggyaiaukqoce)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\x6f\x72\x72\171\x20\171\157\165\x20\x63\141\156\x20\x6e\x6f\x74\x20\x75\160\x64\x61\x74\x65\40\171\x6f\165\162\x20\x64\x6f\155\x61\x69\156\40\141\x64\x64\x72\145\163\163\x2e", PR__MDL__DOMAIN_MANAGER), 400); } else { $sogksuscggsicmac = $this->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if (!is_wp_error($sogksuscggsicmac)) { $sogksuscggsicmac = $icwicymcioeyeyek; } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\131\157\165\40\x64\x6f\156\x74\40\150\x61\166\x65\x20\x70\x65\x72\x6d\151\x73\163\151\x6f\156\40\164\157\40\x65\144\x69\x74\40\164\150\151\x73\x20\144\x6f\x6d\x61\x69\x6e\56", PR__MDL__DOMAIN_MANAGER), 401); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\x65\x71\165\x69\162\x65\144\x20\146\x69\x65\154\x64\163\40\x6e\x6f\164\40\160\141\163\x73\145\144\56", PR__MDL__DOMAIN_MANAGER), 400); } return $sogksuscggsicmac; } public function kmuykuaakicwsocs($icwicymcioeyeyek, $miowmmgaiagcuyoo = null) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $sogksuscggsicmac = null; $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::NAME); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::ciyoccqkiamemcmm); if ($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo) { if (!preg_match("\x23\x5e\x68\x74\x74\160\50\163\x29\x3f\72\x2f\57\x23", $eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = "\150\164\164\x70\x73\72\57\x2f{$eqgoocgaqwqcimie}"; } if ($cwaqscoiqkokyase->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { $gmqiuuqqkwakoiiu = true; $eqgoocgaqwqcimie = untrailingslashit(preg_replace("\x2f\x5e\167\77\167\x3f\167\x3f\x5c\x2e\57", '', $cwaqscoiqkokyase->mkcmkkskeeaskowy($eqgoocgaqwqcimie))); $mokawwccycoiqeka = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($eqgoocgaqwqcimie, Constants::ciyoccqkiamemcmm); if (!$mokawwccycoiqeka) { $sogksuscggsicmac = $this->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]); $kigowwqauiumummw = !is_wp_error($sogksuscggsicmac); if ($kigowwqauiumummw) { $mokawwccycoiqeka = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; } } else { $gmqiuuqqkwakoiiu = false; $kigowwqauiumummw = true; } if ($kigowwqauiumummw) { $wqykqusigegasqeg = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, $this->kumuygiiqswoyasy()); $ukamowomoeiweqky = null; $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); if ($miowmmgaiagcuyoo) { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($miowmmgaiagcuyoo); if (!$gmqiuuqqkwakoiiu) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ukamowomoeiweqky = $ueomouiqmosykioc->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($ueomouiqmosykioc::qkmqmaeuyokqgemg, $wqykqusigegasqeg)]); } if (!$ukamowomoeiweqky) { $sogksuscggsicmac = $ueomouiqmosykioc->ocsyiyiasyiwmuuc($wqykqusigegasqeg, $ycoeoaakqyskgykq); } } if (!isset($sogksuscggsicmac) || !is_wp_error($sogksuscggsicmac)) { $sogksuscggsicmac = [Constants::gouqcwikiiygyasc => $wqykqusigegasqeg, Constants::vswoiouoaykswgym => "\144\157\155\x61\151\x6e\137\141\x64\144\x65\144", Constants::ckmqoekmugkggeym => $mokawwccycoiqeka, Constants::ciywsqoeiymemsys => 200, Constants::eoskkkieowogacws => sprintf("\x25\163\74\142\162\57\x3e\x25\x73", __("\x44\x6f\x6d\141\x69\156\40\x73\x75\x63\143\x65\163\x73\146\165\154\x6c\171\x20\141\x64\x64\x65\144\56", PR__MDL__DOMAIN_MANAGER), __("\120\154\145\141\x73\145\x20\166\145\x72\151\146\x79\x20\x64\x6f\x6d\141\151\156\x2e", PR__MDL__DOMAIN_MANAGER))]; } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\156\164\145\162\145\x64\40\144\157\x6d\x61\x69\156\40\151\163\40\156\x6f\164\40\166\141\x6c\151\144\56", PR__MDL__DOMAIN_MANAGER), 400); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $sogksuscggsicmac; } public function isgemoumsseimwio($mokawwccycoiqeka) : bool { $gkioossaaiumqqsq = $this->iekyeyicoyyawomk(); return $gkioossaaiumqqsq->exists($gkioossaaiumqqsq->mgacegaoeamymmya(self::kwouyaaaeiuuquis, $mokawwccycoiqeka)); } public function aokkqqekiykiikki(WP_REST_Request $aqmwamyiwgeeymqa, bool $mwiwqcqqeoiygwia = true) : bool { $iakkeikwceeomgyq = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ogkysoamaegikmcy($aqmwamyiwgeeymqa); if ($mwiwqcqqeoiygwia) { $mokawwccycoiqeka = $this->aqiwcawmimkygoau($aqmwamyiwgeeymqa->get_param(Constants::igswcauwsgmeougs), $iakkeikwceeomgyq); } else { $mokawwccycoiqeka = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($iakkeikwceeomgyq, Constants::ciyoccqkiamemcmm); } $ksaameoqigiaoigg = false; if ($mokawwccycoiqeka && !is_wp_error($mokawwccycoiqeka)) { $ksaameoqigiaoigg = $this->koeimwecyiiqgesk($mokawwccycoiqeka); } return $ksaameoqigiaoigg; } public function mwiwqcqqeoiygwia($esuksqieigiqcaie, $mokawwccycoiqeka) { if ($mokawwccycoiqeka) { $keccaugmemegoimu = $this->aqiwcawmimkygoau($esuksqieigiqcaie, $mokawwccycoiqeka); if (!is_wp_error($keccaugmemegoimu)) { if ($keccaugmemegoimu) { $keccaugmemegoimu = __("\x41\120\x49\x20\113\x65\x79\x20\x69\163\x20\x76\x61\x6c\x69\144\56", PR__MDL__DOMAIN_MANAGER); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\141\156\40\x6e\157\164\x20\x66\157\165\x6e\144\x20\x64\x6f\x6d\141\151\x6e\x2c\40\x70\154\145\141\163\x65\40\147\145\164\40\x61\x6e\x64\40\141\x70\x69\x20\x6b\145\171\40\142\171\40\147\165\151\144\145\56", PR__MDL__DOMAIN_MANAGER), 404); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\145\x71\165\x65\163\164\x20\157\x72\x69\147\x69\x6e\x20\156\x6f\x74\x20\144\x65\164\x65\143\x74\x65\x64\56", PR__MDL__DOMAIN_MANAGER), 400); } return $keccaugmemegoimu; } public function koeimwecyiiqgesk($mokawwccycoiqeka, ?WP_REST_Request $aqmwamyiwgeeymqa = null) : bool { $ksaameoqigiaoigg = false; switch ($this->ogegcqqcukiaqscy(self::aemeeukyaaokioui, $mokawwccycoiqeka, self::NOT_SPECIFIED)) { case self::wyeieyscswyiskcw: $ksaameoqigiaoigg = true; break; case self::NOT_SPECIFIED: default: $gwgucoaaqcwwciqq = $this->waecsyqmwascmqoa($mokawwccycoiqeka, Constants::ciyoccqkiamemcmm); if ($gwgucoaaqcwwciqq && $this->isgemoumsseimwio($mokawwccycoiqeka) && $this->ucegqiqcwyqmsuwm($gwgucoaaqcwwciqq, $aqmwamyiwgeeymqa)) { $qoowakyqgwcscuss = self::wyeieyscswyiskcw; } else { $qoowakyqgwcscuss = self::qyywsyikosmsacgu; } $this->gssiscqyqsacmeca()->wqikesawekycweoi($mokawwccycoiqeka, [self::aemeeukyaaokioui => $qoowakyqgwcscuss], true); break; } return $ksaameoqigiaoigg; } public function ucegqiqcwyqmsuwm($iakkeikwceeomgyq, ?WP_REST_Request $aqmwamyiwgeeymqa = null) : bool { $ksaameoqigiaoigg = false; $yywmssikcykmsiqi = ["\x69\x72"]; if (in_array(strtolower(pathinfo($iakkeikwceeomgyq, PATHINFO_EXTENSION)), $yywmssikcykmsiqi)) { $ksaameoqigiaoigg = true; } else { if ($aqmwamyiwgeeymqa) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ssamkiocukucqkwg($aqmwamyiwgeeymqa->get_param("\x69\x70\163"), $yywmssikcykmsiqi); } } return $ksaameoqigiaoigg; } public function eqqmweomwciucoci($mkucggyaiaukqoce, $kqwygogeauwwyoca = false, $goocueskqsmqagii = true, $suaemuyiacqyugsm = 1, $weyoqgcesqgeusiu = 10) : array { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce); try { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $uoomaookgsyciacm = [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq)]; if ($kqwygogeauwwyoca) { $uoomaookgsyciacm[] = $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ucmueuwwcmocgmig, [Ownership::myiiuekcoeksaasm, Ownership::gogsqoacoimiocqg]); } $oysoyeaucuawyaky = Ownership::symcgieuakksimmu()->iekyeyicoyyawomk()->ssiyoimagsskwsoi($uoomaookgsyciacm, Ownership::qkmqmaeuyokqgemg); $siykeiywomwwuoiw = $this->iekyeyicoyyawomk()->wkmkqaiwuqouweye($this->kumuygiiqswoyasy(), $oysoyeaucuawyaky); if ($goocueskqsmqagii) { $wqogggcaamgeiwew = $this->iekyeyicoyyawomk()->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::imywcsggckkcywgk => $suaemuyiacqyugsm, Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu]); } else { $wqogggcaamgeiwew = $this->cwgkcyyaymmsomqa($this->iekyeyicoyyawomk()->iiqauwkoiguyeawu($siykeiywomwwuoiw)); } } catch (Exception $wgaoewqkwgomoaai) { $wqogggcaamgeiwew = []; } return $wqogggcaamgeiwew; } public function aqiwcawmimkygoau($esuksqieigiqcaie, $gwgucoaaqcwwciqq = false) { if (self::muckogockysqwceq === strlen($esuksqieigiqcaie)) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gqgemcmoicmgaqie[] = $eqwoegegiamegqsm->megqywqeuquawkim(Constants::igswcauwsgmeougs, $esuksqieigiqcaie); if ($gwgucoaaqcwwciqq !== false) { $gqgemcmoicmgaqie[] = $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciyoccqkiamemcmm, $gwgucoaaqcwwciqq); } $sogksuscggsicmac = $this->iekyeyicoyyawomk()->oqomcmyuuakigusk($gqgemcmoicmgaqie); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\131\157\x75\162\x20\x41\x50\x49\x20\x4b\145\171\40\x69\x73\40\x6e\157\x74\40\166\141\154\151\144\56", PR__MDL__DOMAIN_MANAGER), 400); } return $sogksuscggsicmac; } public function gwkkkwyoomgsiaou($gwgucoaaqcwwciqq) { return $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($gwgucoaaqcwwciqq, Constants::ciyoccqkiamemcmm); } }
