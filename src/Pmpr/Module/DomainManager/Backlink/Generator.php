<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce11822697f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Backlink; use Pmpr\Common\Foundation\Interfaces\Constants; class Generator extends Common { public function cqykmuguekuoyuwy($qeqooyuoiasweuck) : array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $icwicymcioeyeyek = $this->aoqwsyoeawcgukgq($gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::awweqicqwikkykis, []), $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::ameuayawimeoysmc, 1), (bool) $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::syoumqikoowgswma, false)); $icwicymcioeyeyek[Constants::ssmskyqgcmeiayco] = $this->wsigkciwyyuccqam($qeqooyuoiasweuck); $icwicymcioeyeyek[Constants::iuqumwggccmcuyem] = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::sikqccmyeogmuosk, 10); return $icwicymcioeyeyek; } private function wsigkciwyyuccqam($qeqooyuoiasweuck) : string { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mkcicuowyumccgew = $this->caokeucsksukesyo()->iyowqkwcwiuccgag(); $cwsgqcqycqgwgyqq = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::qigcuyyegqmimoym, 5); $aqoqsuikwegoowys = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::cyukygkewseoqouw, 10); $qekwoswickiesugo = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::oecykcwqcimuygkw, 1); $meqwccucgqqgqwuc = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::swikuukssgyqwkue, 6); $ukgsssmgkskkuoow = $this->ciiacegocgeuouea($gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::ooqaewiocugokqco, [])); if (!($cwsgqcqycqgwgyqq > $aqoqsuikwegoowys)) { goto ugqwuugsweqgmywk; } [$cwsgqcqycqgwgyqq, $aqoqsuikwegoowys] = [$aqoqsuikwegoowys, $cwsgqcqycqgwgyqq]; ugqwuugsweqgmywk: if (!($qekwoswickiesugo > $meqwccucgqqgqwuc)) { goto uaukmuiwskcemcsw; } [$qekwoswickiesugo, $meqwccucgqqgqwuc] = [$meqwccucgqqgqwuc, $qekwoswickiesugo]; uaukmuiwskcemcsw: $gaeqamemwmwsyukm = $mkcicuowyumccgew->owsaaggskwmeemog($cwsgqcqycqgwgyqq, $aqoqsuikwegoowys); $momcykaoccoymeig = 1; $ewgwqamkygiqaawc = ''; $akesyikoueogakwq = $this->kkueyqkaummscuky($qeqooyuoiasweuck); $usemgeggswwgesiy = false; $aeusosmcqyyeyuiq = $mkcicuowyumccgew->owsaaggskwmeemog(0, $gaeqamemwmwsyukm); mkwkkmkgiqiamacc: if (!($gaeqamemwmwsyukm > $momcykaoccoymeig)) { goto sockeswygwcskeuq; } if (!isset($ukgsssmgkskkuoow[$momcykaoccoymeig])) { goto ewscugeuicukkycc; } $ssukygsemqwswumi = $ukgsssmgkskkuoow[$momcykaoccoymeig]; if (!$ssukygsemqwswumi) { goto eeyyskqsmquyquqw; } $ykiwomimkkuiigoq = $mkcicuowyumccgew->owsaaggskwmeemog($qekwoswickiesugo, $meqwccucgqqgqwuc); $scmssumoqgwqewig = []; cscusseysqygsoiy: if (!(count($ssukygsemqwswumi) > 0 && count($scmssumoqgwqewig) <= $ykiwomimkkuiigoq)) { goto uaqackioaiqwcocy; } $iukyueweicuocgow = $gkyciwoiiisgywcs->gymccqywkegiqiiw($ssukygsemqwswumi); if (!isset($ssukygsemqwswumi[$iukyueweicuocgow])) { goto isgwkwacoyimiauk; } $qaiwucaaikseawuw = $ssukygsemqwswumi[$iukyueweicuocgow]; $scmssumoqgwqewig[] = $gkyciwoiiisgywcs->get($qaiwucaaikseawuw, Constants::TEXT, ''); unset($ssukygsemqwswumi[$iukyueweicuocgow]); $ssukygsemqwswumi = array_values($ssukygsemqwswumi); isgwkwacoyimiauk: goto cscusseysqygsoiy; uaqackioaiqwcocy: if (!$scmssumoqgwqewig) { goto cgyakcqgugqgkqiw; } if (!(!$usemgeggswwgesiy && $aeusosmcqyyeyuiq <= $momcykaoccoymeig)) { goto mggeqkcksyaymcsa; } $qmysesckygsyuoqk = $gkyciwoiiisgywcs->gymccqywkegiqiiw($scmssumoqgwqewig); $gkyciwoiiisgywcs->insert($scmssumoqgwqewig, $qmysesckygsyuoqk, $akesyikoueogakwq); $usemgeggswwgesiy = true; mggeqkcksyaymcsa: $ewgwqamkygiqaawc .= implode("\x20", $scmssumoqgwqewig); if (!($gaeqamemwmwsyukm > $momcykaoccoymeig + 1)) { goto uegouoiuyoqkcscg; } $ewgwqamkygiqaawc .= PHP_EOL . PHP_EOL; uegouoiuyoqkcscg: cgyakcqgugqgkqiw: eeyyskqsmquyquqw: ewscugeuicukkycc: $momcykaoccoymeig++; goto mkwkkmkgiqiamacc; sockeswygwcskeuq: if ($usemgeggswwgesiy) { goto kqswcsysqawkcgye; } $ewgwqamkygiqaawc .= $akesyikoueogakwq; kqswcsysqawkcgye: return $ewgwqamkygiqaawc; } private function kkueyqkaummscuky($qeqooyuoiasweuck) : ?string { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $akesyikoueogakwq = ''; $yuwymayicwwqiske = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::mecugimsqkeicksm); $scqcgogsiaiksiiq = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::ouauqossmqiwwsui); $camsiwwcswiuecgs = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::ogcquccysekeyisc); $ggcusimcgowkewyk = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::momcisyewgkeguye); $momcykaoccoymeig = $gkyciwoiiisgywcs->gymccqywkegiqiiw($camsiwwcswiuecgs); if (!isset($camsiwwcswiuecgs[$momcykaoccoymeig])) { goto wusciwkkckmqigms; } $ksiyqouuaoymsycg = $camsiwwcswiuecgs[$momcykaoccoymeig]; $akesyikoueogakwq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(esc_html($gkyciwoiiisgywcs->get($ksiyqouuaoymsycg, self::kweqeqcagwaiucik, '')), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($ggcusimcgowkewyk)); wusciwkkckmqigms: return "{$yuwymayicwwqiske}\x20{$akesyikoueogakwq}\40{$scqcgogsiaiksiiq}"; } private function aoqwsyoeawcgukgq($kiquukuikeymyooo, $wwqoakwweuiyqgco = 0, bool $jkwiusgeeuisquse = true) : array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wegougocoeeookww = $this->ciiacegocgeuouea($kiquukuikeymyooo); $mmwoqcwiwemokkue = 0; $aaokuekaimigoyue = $meqocwsecsywiiqs = []; foreach ($wegougocoeeookww as $kiquukuikeymyooo) { if (!($wwqoakwweuiyqgco > 0 && $mmwoqcwiwemokkue > $wwqoakwweuiyqgco)) { goto mwysseaekcsiesmm; } goto iiiccouaaqsyikae; mwysseaekcsiesmm: $iukyueweicuocgow = $gkyciwoiiisgywcs->gymccqywkegiqiiw($kiquukuikeymyooo); if (isset($kiquukuikeymyooo[$iukyueweicuocgow]) && $kiquukuikeymyooo[$iukyueweicuocgow]) { goto amgsueumgaguceaa; } $mmwoqcwiwemokkue++; goto gygwewcqsmwqismo; amgsueumgaguceaa: $ksiyqouuaoymsycg = $kiquukuikeymyooo[$iukyueweicuocgow]; $aaokuekaimigoyue[] = $gkyciwoiiisgywcs->get($ksiyqouuaoymsycg, Constants::ouywiegeiyuaaawo, ''); $meqocwsecsywiiqs[] = $gkyciwoiiisgywcs->get($ksiyqouuaoymsycg, Constants::qescuiwgsyuikume, ''); $ykiwomimkkuiigoq = $gkyciwoiiisgywcs->get($ksiyqouuaoymsycg, self::ksssumoioemcmcgo, 1); $mmwoqcwiwemokkue += $ykiwomimkkuiigoq; gygwewcqsmwqismo: ukkcmocamwgiqayu: } iiiccouaaqsyikae: if (!$jkwiusgeeuisquse) { goto uougwgeyiokewkkm; } $aaokuekaimigoyue = array_reverse($aaokuekaimigoyue); uougwgeyiokewkkm: return [Constants::ouywiegeiyuaaawo => implode("\x2d", $aaokuekaimigoyue), Constants::qescuiwgsyuikume => implode("\40", $meqocwsecsywiiqs)]; } private function ciiacegocgeuouea($oammesyieqmwuwyi) : array { $sogksuscggsicmac = []; if (!$oammesyieqmwuwyi) { goto uykousayyomcaeaa; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!isset($igqsaukqcqscimok[self::ugqsimokykgqaeiq])) { goto ucqmumuygcywwqma; } $sogksuscggsicmac[$igqsaukqcqscimok[self::ugqsimokykgqaeiq]][] = $igqsaukqcqscimok; ucqmumuygcywwqma: ukqocwewouckikso: } gommacygsykyussk: uykousayyomcaeaa: ksort($sogksuscggsicmac); return $sogksuscggsicmac; } }
