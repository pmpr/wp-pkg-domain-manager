<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d55dd8c4308             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Backlink; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Foundation\ORM\DB\Model as BaseClass; use Pmpr\Package\ComponentManager\Model\Component; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; class Model extends BaseClass { const qkmqmaeuyokqgemg = "\x64\157\x6d\141\151\x6e" . self::mswocgcucqoaesaa; const ogqcgemayqiaucag = "\x63\x6f\155\160\x6f\156\145\x6e\164" . self::mswocgcucqoaesaa; public function ckgmycmaukqgkosk() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->usuqmwksoeaayaig("\x62\141\143\153\154\x69\156\x6b")->wiskakymeaywyeuw($wksoawcgagcgoask)->muuwuqssqkaieqge(__("\x42\x61\143\x6b\x6c\151\156\x6b\163", PR__PKG__DOMAIN_MANAGER))->guiaswksukmgageq(__("\x42\141\x63\x6b\154\151\156\x6b", PR__PKG__DOMAIN_MANAGER))->yioesawwewqaigow(IconFontawesomeInterface::yakumqwueukksgcm)->aseucqksocwomwos(); parent::ckgmycmaukqgkosk(); } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $aaokuekaimigoyue = ManipulateArray::get($mksyucucyswaukig, self::ouywiegeiyuaaawo, ''); $meqocwsecsywiiqs = ManipulateArray::get($mksyucucyswaukig, self::ogigqueukwysusii, ''); return sprintf("\x25\163\x20\x28\45\x73\x29", $meqocwsecsywiiqs, $aaokuekaimigoyue); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->ymuegqgyuagyucws(self::qescuiwgsyuikume)->gswweykyogmsyawy(__("\x54\151\x74\154\x65", PR__PKG__DOMAIN_MANAGER)), $this->ymuegqgyuagyucws(self::ouywiegeiyuaaawo)->gswweykyogmsyawy(__("\123\154\x75\147", PR__PKG__DOMAIN_MANAGER)), $this->ymuegqgyuagyucws(self::ssmskyqgcmeiayco)->gswweykyogmsyawy(__("\103\x6f\x6e\164\145\156\x74", PR__PKG__DOMAIN_MANAGER)), $this->geqyygqiwiqusekc(self::iuqumwggccmcuyem)->acceqyqygswoecwe(4)->gswweykyogmsyawy(__("\120\162\x69\157\x72\151\164\171", PR__PKG__DOMAIN_MANAGER)), $this->ggiieomioscuigco(self::qkmqmaeuyokqgemg)->wuuqgaekqeymecag()->uwmyqckcyamwaiww(Domain::class)->gswweykyogmsyawy(__("\x44\x6f\x6d\141\x69\156", PR__PKG__DOMAIN_MANAGER)), $this->ggiieomioscuigco(self::ogqcgemayqiaucag)->wuuqgaekqeymecag()->uwmyqckcyamwaiww(Component::class)->gswweykyogmsyawy(__("\x43\157\155\160\157\x6e\145\x6e\x74", PR__PKG__DOMAIN_MANAGER))]); parent::ewaqwooqoqmcoomi(); } public function wqssmeicqigigsym($mokawwccycoiqeka, $wksoawcgagcgoask) { $suaemuyiacqyugsm = []; $eaekkwggowaaogiu = Generator::symcgieuakksimmu(); $qeqooyuoiasweuck = $eaekkwggowaaogiu->moyiakuigiusagwo($wksoawcgagcgoask); if (!$qeqooyuoiasweuck) { goto myoicgcuugciueis; } $suaemuyiacqyugsm = $eaekkwggowaaogiu->cqykmuguekuoyuwy($qeqooyuoiasweuck); if (!$suaemuyiacqyugsm) { goto qwigomakwmyiwkgo; } if (is_numeric($mokawwccycoiqeka)) { goto qiaqsassksqiuyae; } $mokawwccycoiqeka = ManipulateArray::get($mokawwccycoiqeka, self::gouqcwikiiygyasc, 0); qiaqsassksqiuyae: if (!$mokawwccycoiqeka) { goto qgoiooayqmqqsiok; } $sogksuscggsicmac = $this->gscuuyuyauokoyuo(array_merge($suaemuyiacqyugsm, [self::qkmqmaeuyokqgemg => $mokawwccycoiqeka, self::ogqcgemayqiaucag => $wksoawcgagcgoask])); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto qogqewiwmwiwskgm; } return $this->oemauiimmycumcsk($sogksuscggsicmac[self::iwyueouqaqegmcas], 500); qogqewiwmwiwskgm: qgoiooayqmqqsiok: qwigomakwmyiwkgo: myoicgcuugciueis: return $suaemuyiacqyugsm; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::CREATED_AT: $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, ManipulateSetting::yoaaussmackoisuw(), null, $mksyucucyswaukig); goto asmecuqiyyswueqe; } csscmcacoikwsecs: asmecuqiyyswueqe: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } }
