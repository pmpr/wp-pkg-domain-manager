<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6673f43d9ab4b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Backlink; class Generator extends Common { public function cqykmuguekuoyuwy($qeqooyuoiasweuck) : array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $icwicymcioeyeyek = $this->aoqwsyoeawcgukgq($gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::awweqicqwikkykis, []), $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::ameuayawimeoysmc, 1), (bool) $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::syoumqikoowgswma, false)); $icwicymcioeyeyek[self::ssmskyqgcmeiayco] = $this->wsigkciwyyuccqam($qeqooyuoiasweuck); $icwicymcioeyeyek[self::iuqumwggccmcuyem] = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::sikqccmyeogmuosk, 10); return $icwicymcioeyeyek; } private function wsigkciwyyuccqam($qeqooyuoiasweuck) : string { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mkcicuowyumccgew = $this->caokeucsksukesyo()->iyowqkwcwiuccgag(); $cwsgqcqycqgwgyqq = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::qigcuyyegqmimoym, 5); $aqoqsuikwegoowys = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::cyukygkewseoqouw, 10); $qekwoswickiesugo = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::oecykcwqcimuygkw, 1); $meqwccucgqqgqwuc = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::swikuukssgyqwkue, 6); $ukgsssmgkskkuoow = $this->ciiacegocgeuouea($gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::ooqaewiocugokqco, [])); if (!($cwsgqcqycqgwgyqq > $aqoqsuikwegoowys)) { goto ieumumsgyguceusy; } [$cwsgqcqycqgwgyqq, $aqoqsuikwegoowys] = [$aqoqsuikwegoowys, $cwsgqcqycqgwgyqq]; ieumumsgyguceusy: if (!($qekwoswickiesugo > $meqwccucgqqgqwuc)) { goto coywmiyqgsweuiic; } [$qekwoswickiesugo, $meqwccucgqqgqwuc] = [$meqwccucgqqgqwuc, $qekwoswickiesugo]; coywmiyqgsweuiic: $gaeqamemwmwsyukm = $mkcicuowyumccgew->owsaaggskwmeemog($cwsgqcqycqgwgyqq, $aqoqsuikwegoowys); $momcykaoccoymeig = 1; $ewgwqamkygiqaawc = ''; $akesyikoueogakwq = $this->kkueyqkaummscuky($qeqooyuoiasweuck); $usemgeggswwgesiy = false; $aeusosmcqyyeyuiq = $mkcicuowyumccgew->owsaaggskwmeemog(0, $gaeqamemwmwsyukm); ycakugokkqkuqyiu: if (!($gaeqamemwmwsyukm > $momcykaoccoymeig)) { goto siqagquguiemuoku; } if (!isset($ukgsssmgkskkuoow[$momcykaoccoymeig])) { goto kiwqkcaekqqyuegq; } $ssukygsemqwswumi = $ukgsssmgkskkuoow[$momcykaoccoymeig]; if (!$ssukygsemqwswumi) { goto qsygcycwieukkgwc; } $ykiwomimkkuiigoq = $mkcicuowyumccgew->owsaaggskwmeemog($qekwoswickiesugo, $meqwccucgqqgqwuc); $scmssumoqgwqewig = []; sycygoiaiqqageym: if (!(count($ssukygsemqwswumi) > 0 && count($scmssumoqgwqewig) <= $ykiwomimkkuiigoq)) { goto oouoqimaaqcmccay; } $iukyueweicuocgow = $gkyciwoiiisgywcs->gymccqywkegiqiiw($ssukygsemqwswumi); if (!isset($ssukygsemqwswumi[$iukyueweicuocgow])) { goto gygawoqywkukmqee; } $qaiwucaaikseawuw = $ssukygsemqwswumi[$iukyueweicuocgow]; $scmssumoqgwqewig[] = $gkyciwoiiisgywcs->get($qaiwucaaikseawuw, self::TEXT, ''); unset($ssukygsemqwswumi[$iukyueweicuocgow]); $ssukygsemqwswumi = array_values($ssukygsemqwswumi); gygawoqywkukmqee: goto sycygoiaiqqageym; oouoqimaaqcmccay: if (!$scmssumoqgwqewig) { goto umgaesggesswoaqe; } if (!(!$usemgeggswwgesiy && $aeusosmcqyyeyuiq <= $momcykaoccoymeig)) { goto kciouyuaqkyqomam; } $qmysesckygsyuoqk = $gkyciwoiiisgywcs->gymccqywkegiqiiw($scmssumoqgwqewig); $gkyciwoiiisgywcs->insert($scmssumoqgwqewig, $qmysesckygsyuoqk, $akesyikoueogakwq); $usemgeggswwgesiy = true; kciouyuaqkyqomam: $ewgwqamkygiqaawc .= implode("\x20", $scmssumoqgwqewig); if (!($gaeqamemwmwsyukm > $momcykaoccoymeig + 1)) { goto wwkgkaecgiwggcck; } $ewgwqamkygiqaawc .= PHP_EOL . PHP_EOL; wwkgkaecgiwggcck: umgaesggesswoaqe: qsygcycwieukkgwc: kiwqkcaekqqyuegq: $momcykaoccoymeig++; goto ycakugokkqkuqyiu; siqagquguiemuoku: if ($usemgeggswwgesiy) { goto quwcqmyokicssyew; } $ewgwqamkygiqaawc .= $akesyikoueogakwq; quwcqmyokicssyew: return $ewgwqamkygiqaawc; } private function kkueyqkaummscuky($qeqooyuoiasweuck) : ?string { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $akesyikoueogakwq = ''; $yuwymayicwwqiske = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::mecugimsqkeicksm); $scqcgogsiaiksiiq = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::ouauqossmqiwwsui); $camsiwwcswiuecgs = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::ogcquccysekeyisc); $ggcusimcgowkewyk = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::momcisyewgkeguye); $momcykaoccoymeig = $gkyciwoiiisgywcs->gymccqywkegiqiiw($camsiwwcswiuecgs); if (!isset($camsiwwcswiuecgs[$momcykaoccoymeig])) { goto iqcogmsguwoikame; } $ksiyqouuaoymsycg = $camsiwwcswiuecgs[$momcykaoccoymeig]; $akesyikoueogakwq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(esc_html($gkyciwoiiisgywcs->get($ksiyqouuaoymsycg, self::kweqeqcagwaiucik, '')), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($ggcusimcgowkewyk)); iqcogmsguwoikame: return "{$yuwymayicwwqiske}\40{$akesyikoueogakwq}\40{$scqcgogsiaiksiiq}"; } private function aoqwsyoeawcgukgq($kiquukuikeymyooo, $wwqoakwweuiyqgco = 0, bool $jkwiusgeeuisquse = true) : array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wegougocoeeookww = $this->ciiacegocgeuouea($kiquukuikeymyooo); $mmwoqcwiwemokkue = 0; $aaokuekaimigoyue = $meqocwsecsywiiqs = []; foreach ($wegougocoeeookww as $kiquukuikeymyooo) { if (!($wwqoakwweuiyqgco > 0 && $mmwoqcwiwemokkue > $wwqoakwweuiyqgco)) { goto yqykqysmiquwoasu; } goto gimmuoqwckiseaik; yqykqysmiquwoasu: $iukyueweicuocgow = $gkyciwoiiisgywcs->gymccqywkegiqiiw($kiquukuikeymyooo); if (isset($kiquukuikeymyooo[$iukyueweicuocgow]) && $kiquukuikeymyooo[$iukyueweicuocgow]) { goto ayyweymyuuiauamo; } $mmwoqcwiwemokkue++; goto mosqsmqimqgqoase; ayyweymyuuiauamo: $ksiyqouuaoymsycg = $kiquukuikeymyooo[$iukyueweicuocgow]; $aaokuekaimigoyue[] = $gkyciwoiiisgywcs->get($ksiyqouuaoymsycg, self::ouywiegeiyuaaawo, ''); $meqocwsecsywiiqs[] = $gkyciwoiiisgywcs->get($ksiyqouuaoymsycg, self::qescuiwgsyuikume, ''); $ykiwomimkkuiigoq = $gkyciwoiiisgywcs->get($ksiyqouuaoymsycg, self::ksssumoioemcmcgo, 1); $mmwoqcwiwemokkue += $ykiwomimkkuiigoq; mosqsmqimqgqoase: cmqucgoewuyieoyk: } gimmuoqwckiseaik: if (!$jkwiusgeeuisquse) { goto omugkkesagcyagmk; } $aaokuekaimigoyue = array_reverse($aaokuekaimigoyue); omugkkesagcyagmk: return [self::ouywiegeiyuaaawo => implode("\55", $aaokuekaimigoyue), self::qescuiwgsyuikume => implode("\x20", $meqocwsecsywiiqs)]; } private function ciiacegocgeuouea($oammesyieqmwuwyi) : array { $sogksuscggsicmac = []; if (!$oammesyieqmwuwyi) { goto qqewoyookaskiuek; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!isset($igqsaukqcqscimok[self::ugqsimokykgqaeiq])) { goto iggyqogweyosuikc; } $sogksuscggsicmac[$igqsaukqcqscimok[self::ugqsimokykgqaeiq]][] = $igqsaukqcqscimok; iggyqogweyosuikc: kqksuugcgsyeoayy: } ygcsmkuycoagwyou: qqewoyookaskiuek: ksort($sogksuscggsicmac); return $sogksuscggsicmac; } }
