<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce11822697f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Backlink; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\DB\Model as BaseClass; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; class Model extends BaseClass { const qkmqmaeuyokqgemg = Constants::weayyoewessosyko . Constants::mswocgcucqoaesaa; const ogqcgemayqiaucag = Constants::ocwsuwyiiasigqaa . Constants::mswocgcucqoaesaa; public function ckgmycmaukqgkosk() { $wksoawcgagcgoask = $this->akuociswqmoigkas(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->usuqmwksoeaayaig("\x62\141\x63\x6b\x6c\151\156\153")->ckaeqgiaiqwsccke(20)->wiskakymeaywyeuw($wksoawcgagcgoask)->okgmqaeuaeymaocm($wksoawcgagcgoask)->muuwuqssqkaieqge(__("\102\x61\143\153\x6c\x69\156\153\x73", PR__MDL__DOMAIN_MANAGER))->guiaswksukmgageq(__("\x42\x61\143\153\154\151\156\x6b", PR__MDL__DOMAIN_MANAGER))->yioesawwewqaigow(IconInterface::emuwacasoaaageiq)->gemkqqguesukeocw()->wkesqcmiekqoykag()->aseucqksocwomwos()->qemeyueyiwgsokuc(); parent::ckgmycmaukqgkosk(); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->gysoeyaguiyewoes(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\x54\x69\164\154\x65", PR__MDL__DOMAIN_MANAGER)), $this->gysoeyaguiyewoes(Constants::ouywiegeiyuaaawo)->gswweykyogmsyawy(__("\123\x6c\165\147", PR__MDL__DOMAIN_MANAGER)), $this->qoemykoeuecmsmwe(Constants::iuqumwggccmcuyem)->acceqyqygswoecwe(4)->gswweykyogmsyawy(__("\x50\x72\151\x6f\162\151\164\171", PR__MDL__DOMAIN_MANAGER))->acokiqqgsmoqaeyu(), $this->eoaomaokwkwqyqiq(self::qkmqmaeuyokqgemg)->wuuqgaekqeymecag()->uwmyqckcyamwaiww(Domain::class)->gswweykyogmsyawy(__("\104\157\155\141\151\156", PR__MDL__DOMAIN_MANAGER)), $this->eoaomaokwkwqyqiq(self::ogqcgemayqiaucag)->wuuqgaekqeymecag()->uwmyqckcyamwaiww(Component::class)->gswweykyogmsyawy(__("\x43\x6f\x6d\x70\157\x6e\145\156\164", PR__MDL__DOMAIN_MANAGER)), $this->gysoeyaguiyewoes(Constants::ssmskyqgcmeiayco)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\x43\157\x6e\164\145\156\164", PR__MDL__DOMAIN_MANAGER))]); parent::ewaqwooqoqmcoomi(); } public function aoqwywcqmoqaukkq() { $this->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::ouywiegeiyuaaawo)->kqqqugemmqagucuq())->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::iuqumwggccmcuyem)->escqqisecooswqgo())->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::qkmqmaeuyokqgemg)->ugquamoakekwyiqg(Domain::class))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::ogqcgemayqiaucag)->ugquamoakekwyiqg(Component::class))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::ssmskyqgcmeiayco)); } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aaokuekaimigoyue = $gkyciwoiiisgywcs->get($mksyucucyswaukig, Constants::ouywiegeiyuaaawo, ''); $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($mksyucucyswaukig, Constants::ogigqueukwysusii, ''); return sprintf("\45\x73\x20\50\x25\x73\51", $meqocwsecsywiiqs, $aaokuekaimigoyue); } public function wqssmeicqigigsym($wqykqusigegasqeg, $syqougokmmgaoaee) { $suaemuyiacqyugsm = []; if (!($eaekkwggowaaogiu = Generator::symcgieuakksimmu())) { goto sioekkmekwygemyc; } if (!($qeqooyuoiasweuck = $eaekkwggowaaogiu->moyiakuigiusagwo($syqougokmmgaoaee))) { goto qukocuwgakemmyga; } if (!($suaemuyiacqyugsm = $eaekkwggowaaogiu->cqykmuguekuoyuwy($qeqooyuoiasweuck))) { goto uqokiksoqcwwqgio; } if (is_numeric($wqykqusigegasqeg)) { goto uimeeckqksqeekqq; } $wqykqusigegasqeg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wqykqusigegasqeg, Constants::gouqcwikiiygyasc, 0); uimeeckqksqeekqq: if (!$wqykqusigegasqeg) { goto kocqqoyymosmuksu; } $sogksuscggsicmac = $this->gscuuyuyauokoyuo(array_merge($suaemuyiacqyugsm, [self::qkmqmaeuyokqgemg => $wqykqusigegasqeg, self::ogqcgemayqiaucag => $syqougokmmgaoaee])); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto iuuuususuuuaieem; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($sogksuscggsicmac[Constants::iwyueouqaqegmcas], 500); iuuuususuuuaieem: kocqqoyymosmuksu: uqokiksoqcwwqgio: qukocuwgakemmyga: sioekkmekwygemyc: return $suaemuyiacqyugsm; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, &$mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::CREATED_AT: $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw(), null, $mksyucucyswaukig); goto yiowgigkkwsoqcci; } ieqesiiageaauiuw: yiowgigkkwsoqcci: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } }
