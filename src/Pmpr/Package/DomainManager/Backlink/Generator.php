<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621f2607d8abc             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Backlink; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Generator extends Common { public function cqykmuguekuoyuwy($qeqooyuoiasweuck) : array { $icwicymcioeyeyek = $this->aoqwsyoeawcgukgq(ManipulateArray::get($qeqooyuoiasweuck, self::awweqicqwikkykis, []), ManipulateArray::get($qeqooyuoiasweuck, self::ameuayawimeoysmc, 1)); $icwicymcioeyeyek[self::ssmskyqgcmeiayco] = $this->wsigkciwyyuccqam($qeqooyuoiasweuck); $icwicymcioeyeyek[self::iuqumwggccmcuyem] = ManipulateArray::get($qeqooyuoiasweuck, self::sikqccmyeogmuosk, 10); return $icwicymcioeyeyek; } private function wsigkciwyyuccqam($qeqooyuoiasweuck) : string { $cwsgqcqycqgwgyqq = ManipulateArray::get($qeqooyuoiasweuck, self::qigcuyyegqmimoym, 5); $aqoqsuikwegoowys = ManipulateArray::get($qeqooyuoiasweuck, self::cyukygkewseoqouw, 10); $qekwoswickiesugo = ManipulateArray::get($qeqooyuoiasweuck, self::oecykcwqcimuygkw, 1); $meqwccucgqqgqwuc = ManipulateArray::get($qeqooyuoiasweuck, self::swikuukssgyqwkue, 6); $ukgsssmgkskkuoow = $this->ciiacegocgeuouea(ManipulateArray::get($qeqooyuoiasweuck, self::ooqaewiocugokqco, [])); if (!($cwsgqcqycqgwgyqq > $aqoqsuikwegoowys)) { goto oomguqikqokqwgku; } [$cwsgqcqycqgwgyqq, $aqoqsuikwegoowys] = [$aqoqsuikwegoowys, $cwsgqcqycqgwgyqq]; oomguqikqokqwgku: if (!($qekwoswickiesugo > $meqwccucgqqgqwuc)) { goto samwkqgwouggsguc; } [$qekwoswickiesugo, $meqwccucgqqgqwuc] = [$meqwccucgqqgqwuc, $qekwoswickiesugo]; samwkqgwouggsguc: $gaeqamemwmwsyukm = rand($cwsgqcqycqgwgyqq, $aqoqsuikwegoowys); $momcykaoccoymeig = 1; $ewgwqamkygiqaawc = ''; $akesyikoueogakwq = $this->kkueyqkaummscuky($qeqooyuoiasweuck); $usemgeggswwgesiy = false; $aeusosmcqyyeyuiq = rand(0, $gaeqamemwmwsyukm); guykyqecgswcsmws: if (!($gaeqamemwmwsyukm > $momcykaoccoymeig)) { goto wyuemgggaqogsmsq; } if (!isset($ukgsssmgkskkuoow[$momcykaoccoymeig])) { goto aomysykcgikegiau; } $ssukygsemqwswumi = $ukgsssmgkskkuoow[$momcykaoccoymeig]; if (!$ssukygsemqwswumi) { goto ikqqskkqqwmwssoo; } $ykiwomimkkuiigoq = rand($qekwoswickiesugo, $meqwccucgqqgqwuc); $scmssumoqgwqewig = []; miweggwqeiaeweia: if (!(count($ssukygsemqwswumi) > 0 && count($scmssumoqgwqewig) <= $ykiwomimkkuiigoq)) { goto kkumywowcoycymeo; } $iukyueweicuocgow = ManipulateArray::gymccqywkegiqiiw($ssukygsemqwswumi); if (!isset($ssukygsemqwswumi[$iukyueweicuocgow])) { goto kqqiegkuqagcqsya; } $qaiwucaaikseawuw = $ssukygsemqwswumi[$iukyueweicuocgow]; $scmssumoqgwqewig[] = ManipulateArray::get($qaiwucaaikseawuw, self::TEXT, ''); unset($ssukygsemqwswumi[$iukyueweicuocgow]); $ssukygsemqwswumi = array_values($ssukygsemqwswumi); kqqiegkuqagcqsya: goto miweggwqeiaeweia; kkumywowcoycymeo: if (!$scmssumoqgwqewig) { goto iwekmyyccgiyuecc; } if (!(!$usemgeggswwgesiy && $aeusosmcqyyeyuiq <= $momcykaoccoymeig)) { goto ousiuuwgwkiyikyq; } $qmysesckygsyuoqk = ManipulateArray::gymccqywkegiqiiw($scmssumoqgwqewig); ManipulateArray::insert($scmssumoqgwqewig, $qmysesckygsyuoqk, $akesyikoueogakwq); $usemgeggswwgesiy = true; ousiuuwgwkiyikyq: $ewgwqamkygiqaawc .= implode("\40", $scmssumoqgwqewig); if (!($gaeqamemwmwsyukm > $momcykaoccoymeig + 1)) { goto ogsaaqsaogcqiouy; } $ewgwqamkygiqaawc .= PHP_EOL . PHP_EOL; ogsaaqsaogcqiouy: iwekmyyccgiyuecc: ikqqskkqqwmwssoo: aomysykcgikegiau: $momcykaoccoymeig++; goto guykyqecgswcsmws; wyuemgggaqogsmsq: if ($usemgeggswwgesiy) { goto cwwmimggaaecmucw; } $ewgwqamkygiqaawc .= $akesyikoueogakwq; cwwmimggaaecmucw: return $ewgwqamkygiqaawc; } private function kkueyqkaummscuky($qeqooyuoiasweuck) : ?string { $akesyikoueogakwq = ''; $yuwymayicwwqiske = ManipulateArray::get($qeqooyuoiasweuck, self::mecugimsqkeicksm); $scqcgogsiaiksiiq = ManipulateArray::get($qeqooyuoiasweuck, self::ouauqossmqiwwsui); $camsiwwcswiuecgs = ManipulateArray::get($qeqooyuoiasweuck, self::ogcquccysekeyisc); $ggcusimcgowkewyk = ManipulateArray::get($qeqooyuoiasweuck, self::momcisyewgkeguye); $momcykaoccoymeig = ManipulateArray::gymccqywkegiqiiw($camsiwwcswiuecgs); if (!isset($camsiwwcswiuecgs[$momcykaoccoymeig])) { goto awoaooyoeoyeeqee; } $ksiyqouuaoymsycg = $camsiwwcswiuecgs[$momcykaoccoymeig]; $akesyikoueogakwq = ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\x72\x65\146" => ManipulatePost::ycqquoiyyuesegsy($ggcusimcgowkewyk)], esc_html(ManipulateArray::get($ksiyqouuaoymsycg, self::kweqeqcagwaiucik, ''))); awoaooyoeoyeeqee: return "{$yuwymayicwwqiske}\x20{$akesyikoueogakwq}\40{$scqcgogsiaiksiiq}"; } private function aoqwsyoeawcgukgq($kiquukuikeymyooo, $wwqoakwweuiyqgco = 0) : array { $wegougocoeeookww = $this->ciiacegocgeuouea($kiquukuikeymyooo); $mmwoqcwiwemokkue = 0; $aaokuekaimigoyue = []; $meqocwsecsywiiqs = []; foreach ($wegougocoeeookww as $kiquukuikeymyooo) { if (!($wwqoakwweuiyqgco > 0 && $mmwoqcwiwemokkue > $wwqoakwweuiyqgco)) { goto mqkmcysgoiaouiwm; } goto ogqmesokykywseys; mqkmcysgoiaouiwm: $iukyueweicuocgow = ManipulateArray::gymccqywkegiqiiw($kiquukuikeymyooo); if (isset($kiquukuikeymyooo[$iukyueweicuocgow]) && $kiquukuikeymyooo[$iukyueweicuocgow]) { goto kosaqwikueyksqmw; } $mmwoqcwiwemokkue++; goto gicyayswqyuoekcq; kosaqwikueyksqmw: $ksiyqouuaoymsycg = $kiquukuikeymyooo[$iukyueweicuocgow]; $aaokuekaimigoyue[] = ManipulateArray::get($ksiyqouuaoymsycg, self::ouywiegeiyuaaawo, ''); $meqocwsecsywiiqs[] = ManipulateArray::get($ksiyqouuaoymsycg, self::qescuiwgsyuikume, ''); $ykiwomimkkuiigoq = ManipulateArray::get($ksiyqouuaoymsycg, self::ugqsimokykgqaeiq, 1); $mmwoqcwiwemokkue += $ykiwomimkkuiigoq; gicyayswqyuoekcq: ykomgumacooyomsk: } ogqmesokykywseys: return [self::ouywiegeiyuaaawo => implode("\x2d", $aaokuekaimigoyue), self::qescuiwgsyuikume => implode("\x20", $meqocwsecsywiiqs)]; } private function ciiacegocgeuouea($oammesyieqmwuwyi) : array { $sogksuscggsicmac = []; if (!$oammesyieqmwuwyi) { goto gcckqucukawcasgk; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!isset($igqsaukqcqscimok[self::ugqsimokykgqaeiq])) { goto cuumeogeomowqisc; } $sogksuscggsicmac[$igqsaukqcqscimok[self::ugqsimokykgqaeiq]][] = $igqsaukqcqscimok; cuumeogeomowqisc: uiosisocuwokwkie: } iikiiioqiyegyaak: gcckqucukawcasgk: ksort($sogksuscggsicmac); return $sogksuscggsicmac; } }
