<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621f3afcbf009             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Backlink; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Foundation\ORM\DB\Model as BaseClass; use Pmpr\Package\ComponentManager\Model\Component; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; class Model extends BaseClass { const qkmqmaeuyokqgemg = "\x64\157\x6d\x61\x69\156" . self::mswocgcucqoaesaa; const ogqcgemayqiaucag = "\143\x6f\x6d\160\x6f\x6e\x65\x6e\164" . self::mswocgcucqoaesaa; public function ckgmycmaukqgkosk() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->usuqmwksoeaayaig("\142\x61\143\x6b\154\151\x6e\x6b")->wiskakymeaywyeuw($wksoawcgagcgoask)->muuwuqssqkaieqge(__("\102\141\143\153\154\x69\156\153\x73", PR__PKG__DOMAIN_MANAGER))->guiaswksukmgageq(__("\102\141\143\153\154\x69\156\153", PR__PKG__DOMAIN_MANAGER))->yioesawwewqaigow(IconFontawesomeInterface::yakumqwueukksgcm)->aseucqksocwomwos(); parent::ckgmycmaukqgkosk(); } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $aaokuekaimigoyue = ManipulateArray::get($mksyucucyswaukig, self::ouywiegeiyuaaawo, ''); $meqocwsecsywiiqs = ManipulateArray::get($mksyucucyswaukig, self::ogigqueukwysusii, ''); return sprintf("\x25\x73\x20\50\45\x73\51", $meqocwsecsywiiqs, $aaokuekaimigoyue); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->ymuegqgyuagyucws(self::qescuiwgsyuikume)->gswweykyogmsyawy(__("\x54\151\164\x6c\x65", PR__PKG__DOMAIN_MANAGER)), $this->ymuegqgyuagyucws(self::ouywiegeiyuaaawo)->gswweykyogmsyawy(__("\x53\154\x75\x67", PR__PKG__DOMAIN_MANAGER)), $this->ymuegqgyuagyucws(self::ssmskyqgcmeiayco)->gswweykyogmsyawy(__("\103\157\156\164\145\156\164", PR__PKG__DOMAIN_MANAGER)), $this->geqyygqiwiqusekc(self::iuqumwggccmcuyem)->acceqyqygswoecwe(4)->gswweykyogmsyawy(__("\120\x72\x69\157\162\151\164\171", PR__PKG__DOMAIN_MANAGER)), $this->ggiieomioscuigco(self::qkmqmaeuyokqgemg)->wuuqgaekqeymecag()->uwmyqckcyamwaiww(Domain::class)->gswweykyogmsyawy(__("\x44\x6f\x6d\x61\x69\156", PR__PKG__DOMAIN_MANAGER)), $this->ggiieomioscuigco(self::ogqcgemayqiaucag)->wuuqgaekqeymecag()->uwmyqckcyamwaiww(Component::class)->gswweykyogmsyawy(__("\103\x6f\155\160\x6f\156\x65\156\164", PR__PKG__DOMAIN_MANAGER))]); parent::ewaqwooqoqmcoomi(); } public function wqssmeicqigigsym($mokawwccycoiqeka, $wksoawcgagcgoask) { $suaemuyiacqyugsm = []; $eaekkwggowaaogiu = Generator::symcgieuakksimmu(); $qeqooyuoiasweuck = $eaekkwggowaaogiu->moyiakuigiusagwo($wksoawcgagcgoask); if (!$qeqooyuoiasweuck) { goto ouamogymawucwswu; } $suaemuyiacqyugsm = $eaekkwggowaaogiu->cqykmuguekuoyuwy($qeqooyuoiasweuck); if (!$suaemuyiacqyugsm) { goto emmsycooskoqmgeg; } if (is_numeric($mokawwccycoiqeka)) { goto ciykoyeioqgyaeqo; } $mokawwccycoiqeka = ManipulateArray::get($mokawwccycoiqeka, self::gouqcwikiiygyasc, 0); ciykoyeioqgyaeqo: if (!$mokawwccycoiqeka) { goto qgeugwymkkiacwoc; } $sogksuscggsicmac = $this->gscuuyuyauokoyuo(array_merge($suaemuyiacqyugsm, [self::qkmqmaeuyokqgemg => $mokawwccycoiqeka, self::ogqcgemayqiaucag => $wksoawcgagcgoask])); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto mqicocmqegwukkwg; } return $this->oemauiimmycumcsk($sogksuscggsicmac[self::iwyueouqaqegmcas], 500); mqicocmqegwukkwg: qgeugwymkkiacwoc: emmsycooskoqmgeg: ouamogymawucwswu: return $suaemuyiacqyugsm; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::CREATED_AT: $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, ManipulateSetting::yoaaussmackoisuw(), null, $mksyucucyswaukig); goto mugqyyeayeyggqqk; } acsqgiuageaasiyy: mugqyyeayeyggqqk: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } }
