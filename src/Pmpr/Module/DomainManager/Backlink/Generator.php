<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c213240531             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Backlink; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Generator extends Common { public function cqykmuguekuoyuwy($qeqooyuoiasweuck) : array { $icwicymcioeyeyek = $this->aoqwsyoeawcgukgq(ManipulateArray::get($qeqooyuoiasweuck, self::awweqicqwikkykis, []), ManipulateArray::get($qeqooyuoiasweuck, self::ameuayawimeoysmc, 1), (bool) ManipulateArray::get($qeqooyuoiasweuck, self::syoumqikoowgswma, false)); $icwicymcioeyeyek[self::ssmskyqgcmeiayco] = $this->wsigkciwyyuccqam($qeqooyuoiasweuck); $icwicymcioeyeyek[self::iuqumwggccmcuyem] = ManipulateArray::get($qeqooyuoiasweuck, self::sikqccmyeogmuosk, 10); return $icwicymcioeyeyek; } private function wsigkciwyyuccqam($qeqooyuoiasweuck) : string { $cwsgqcqycqgwgyqq = ManipulateArray::get($qeqooyuoiasweuck, self::qigcuyyegqmimoym, 5); $aqoqsuikwegoowys = ManipulateArray::get($qeqooyuoiasweuck, self::cyukygkewseoqouw, 10); $qekwoswickiesugo = ManipulateArray::get($qeqooyuoiasweuck, self::oecykcwqcimuygkw, 1); $meqwccucgqqgqwuc = ManipulateArray::get($qeqooyuoiasweuck, self::swikuukssgyqwkue, 6); $ukgsssmgkskkuoow = $this->ciiacegocgeuouea(ManipulateArray::get($qeqooyuoiasweuck, self::ooqaewiocugokqco, [])); if (!($cwsgqcqycqgwgyqq > $aqoqsuikwegoowys)) { goto qiaqsassksqiuyae; } [$cwsgqcqycqgwgyqq, $aqoqsuikwegoowys] = [$aqoqsuikwegoowys, $cwsgqcqycqgwgyqq]; qiaqsassksqiuyae: if (!($qekwoswickiesugo > $meqwccucgqqgqwuc)) { goto qogqewiwmwiwskgm; } [$qekwoswickiesugo, $meqwccucgqqgqwuc] = [$meqwccucgqqgqwuc, $qekwoswickiesugo]; qogqewiwmwiwskgm: $gaeqamemwmwsyukm = rand($cwsgqcqycqgwgyqq, $aqoqsuikwegoowys); $momcykaoccoymeig = 1; $ewgwqamkygiqaawc = ''; $akesyikoueogakwq = $this->kkueyqkaummscuky($qeqooyuoiasweuck); $usemgeggswwgesiy = false; $aeusosmcqyyeyuiq = rand(0, $gaeqamemwmwsyukm); qwigomakwmyiwkgo: if (!($gaeqamemwmwsyukm > $momcykaoccoymeig)) { goto qgoiooayqmqqsiok; } if (!isset($ukgsssmgkskkuoow[$momcykaoccoymeig])) { goto eqkauqciwewmgeoi; } $ssukygsemqwswumi = $ukgsssmgkskkuoow[$momcykaoccoymeig]; if (!$ssukygsemqwswumi) { goto sciwggaeogcoesiu; } $ykiwomimkkuiigoq = rand($qekwoswickiesugo, $meqwccucgqqgqwuc); $scmssumoqgwqewig = []; asmecuqiyyswueqe: if (!(count($ssukygsemqwswumi) > 0 && count($scmssumoqgwqewig) <= $ykiwomimkkuiigoq)) { goto myoicgcuugciueis; } $iukyueweicuocgow = ManipulateArray::gymccqywkegiqiiw($ssukygsemqwswumi); if (!isset($ssukygsemqwswumi[$iukyueweicuocgow])) { goto csscmcacoikwsecs; } $qaiwucaaikseawuw = $ssukygsemqwswumi[$iukyueweicuocgow]; $scmssumoqgwqewig[] = ManipulateArray::get($qaiwucaaikseawuw, self::TEXT, ''); unset($ssukygsemqwswumi[$iukyueweicuocgow]); $ssukygsemqwswumi = array_values($ssukygsemqwswumi); csscmcacoikwsecs: goto asmecuqiyyswueqe; myoicgcuugciueis: if (!$scmssumoqgwqewig) { goto mkwskuycuyguqqok; } if (!(!$usemgeggswwgesiy && $aeusosmcqyyeyuiq <= $momcykaoccoymeig)) { goto cuykwgmswkskqkyi; } $qmysesckygsyuoqk = ManipulateArray::gymccqywkegiqiiw($scmssumoqgwqewig); ManipulateArray::insert($scmssumoqgwqewig, $qmysesckygsyuoqk, $akesyikoueogakwq); $usemgeggswwgesiy = true; cuykwgmswkskqkyi: $ewgwqamkygiqaawc .= implode("\40", $scmssumoqgwqewig); if (!($gaeqamemwmwsyukm > $momcykaoccoymeig + 1)) { goto kuicqywysciceggs; } $ewgwqamkygiqaawc .= PHP_EOL . PHP_EOL; kuicqywysciceggs: mkwskuycuyguqqok: sciwggaeogcoesiu: eqkauqciwewmgeoi: $momcykaoccoymeig++; goto qwigomakwmyiwkgo; qgoiooayqmqqsiok: if ($usemgeggswwgesiy) { goto kwagwqyusyiyoaqs; } $ewgwqamkygiqaawc .= $akesyikoueogakwq; kwagwqyusyiyoaqs: return $ewgwqamkygiqaawc; } private function kkueyqkaummscuky($qeqooyuoiasweuck) : ?string { $akesyikoueogakwq = ''; $yuwymayicwwqiske = ManipulateArray::get($qeqooyuoiasweuck, self::mecugimsqkeicksm); $scqcgogsiaiksiiq = ManipulateArray::get($qeqooyuoiasweuck, self::ouauqossmqiwwsui); $camsiwwcswiuecgs = ManipulateArray::get($qeqooyuoiasweuck, self::ogcquccysekeyisc); $ggcusimcgowkewyk = ManipulateArray::get($qeqooyuoiasweuck, self::momcisyewgkeguye); $momcykaoccoymeig = ManipulateArray::gymccqywkegiqiiw($camsiwwcswiuecgs); if (!isset($camsiwwcswiuecgs[$momcykaoccoymeig])) { goto yowsmsiyimmimemc; } $ksiyqouuaoymsycg = $camsiwwcswiuecgs[$momcykaoccoymeig]; $akesyikoueogakwq = ManipulateHTML::uuccukgasskgimsq("\141", ["\150\x72\145\x66" => ManipulatePost::ycqquoiyyuesegsy($ggcusimcgowkewyk)], esc_html(ManipulateArray::get($ksiyqouuaoymsycg, self::kweqeqcagwaiucik, ''))); yowsmsiyimmimemc: return "{$yuwymayicwwqiske}\x20{$akesyikoueogakwq}\40{$scqcgogsiaiksiiq}"; } private function aoqwsyoeawcgukgq($kiquukuikeymyooo, $wwqoakwweuiyqgco = 0, bool $jkwiusgeeuisquse = true) : array { $wegougocoeeookww = $this->ciiacegocgeuouea($kiquukuikeymyooo); $mmwoqcwiwemokkue = 0; $aaokuekaimigoyue = $meqocwsecsywiiqs = []; foreach ($wegougocoeeookww as $kiquukuikeymyooo) { if (!($wwqoakwweuiyqgco > 0 && $mmwoqcwiwemokkue > $wwqoakwweuiyqgco)) { goto sqiciiuwmykocycc; } goto kiqogmwcgcamwiig; sqiciiuwmykocycc: $iukyueweicuocgow = ManipulateArray::gymccqywkegiqiiw($kiquukuikeymyooo); if (isset($kiquukuikeymyooo[$iukyueweicuocgow]) && $kiquukuikeymyooo[$iukyueweicuocgow]) { goto eequksumcoogyoem; } $mmwoqcwiwemokkue++; goto uukumskkeggaowck; eequksumcoogyoem: $ksiyqouuaoymsycg = $kiquukuikeymyooo[$iukyueweicuocgow]; $aaokuekaimigoyue[] = ManipulateArray::get($ksiyqouuaoymsycg, self::ouywiegeiyuaaawo, ''); $meqocwsecsywiiqs[] = ManipulateArray::get($ksiyqouuaoymsycg, self::qescuiwgsyuikume, ''); $ykiwomimkkuiigoq = ManipulateArray::get($ksiyqouuaoymsycg, self::ksssumoioemcmcgo, 1); $mmwoqcwiwemokkue += $ykiwomimkkuiigoq; uukumskkeggaowck: iomcaiwewsawiamu: } kiqogmwcgcamwiig: if (!$jkwiusgeeuisquse) { goto cggowoquuiwqkyew; } $aaokuekaimigoyue = array_reverse($aaokuekaimigoyue); cggowoquuiwqkyew: return [self::ouywiegeiyuaaawo => implode("\55", $aaokuekaimigoyue), self::qescuiwgsyuikume => implode("\x20", $meqocwsecsywiiqs)]; } private function ciiacegocgeuouea($oammesyieqmwuwyi) : array { $sogksuscggsicmac = []; if (!$oammesyieqmwuwyi) { goto meawswgwagoqgkye; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!isset($igqsaukqcqscimok[self::ugqsimokykgqaeiq])) { goto goacqqsgaaigyuaw; } $sogksuscggsicmac[$igqsaukqcqscimok[self::ugqsimokykgqaeiq]][] = $igqsaukqcqscimok; goacqqsgaaigyuaw: yiwiqaqmwiogawym: } ocokwuuquaokmasc: meawswgwagoqgkye: ksort($sogksuscggsicmac); return $sogksuscggsicmac; } }
