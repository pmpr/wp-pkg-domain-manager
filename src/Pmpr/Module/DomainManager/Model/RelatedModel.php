<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62b885ced9b6f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; abstract class RelatedModel extends Common { const qkmqmaeuyokqgemg = "\x64\157\x6d\x61\151\x6e\137\x69\x64"; const ymamoeqaciwakwue = "\x70\162\x69\166\151\154\145\x67\145\144"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconFontawesomeInterface::yakumqwueukksgcm)->guiaswksukmgageq(__("\x44\157\155\x61\x69\x6e", PR__MDL__DOMAIN_MANAGER))->muuwuqssqkaieqge(__("\x44\x6f\x6d\x61\151\x6e\x73", PR__MDL__DOMAIN_MANAGER))->gemkqqguesukeocw()->wkesqcmiekqoykag()->aseucqksocwomwos()->qemeyueyiwgsokuc(["\160\157\x73\x69\164\x69\157\x6e" => 5]); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->ggiieomioscuigco(self::qkmqmaeuyokqgemg)->uwmyqckcyamwaiww(Domain::class)->geimymogiqyssawi()->wakqsiacyacmumuw()->jyumyyugiwwiqomk(0)->gswweykyogmsyawy(__("\104\x6f\x6d\141\x69\x6e", PR__MDL__DOMAIN_MANAGER)), $this->kwwgyikigsyesgoo(self::ymamoeqaciwakwue)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\x44\157\155\x61\151\156\x20\x50\162\x69\x76\151\154\x65\147\145", PR__MDL__DOMAIN_MANAGER))->qcssowoqeqysosca()]); parent::ewaqwooqoqmcoomi(); } public function kssgsuewkcwgiksa() : array { return [self::qkmqmaeuyokqgemg => ["\143\157\x6c" => "\155\x64\55\x34"], self::ymamoeqaciwakwue => ["\143\157\x6c" => "\x6d\144\x2d\x34", self::squoamkioomemiyi => "\143\150\x65\x63\153\142\157\x78", "\141\163\x2d\151\x6e\x6c\x69\x6e\x65", "\160\141\162\x65\x6e\x74\55\143\x6c\x61\x73\x73" => "\40\155\x74\x2d\155\144\55\141\165\x74\157"]]; } public function uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig) { if (!($ukamowomoeiweqky = Ownership::symcgieuakksimmu())) { goto miyqyeiwquwsacsm; } $ywoucyskcquysiwc["\157\167\156\145\162\163\150\151\x70\163"] = [self::qgqyauaqwqmqseim => $ukamowomoeiweqky->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::qescuiwgsyuikume => $ukamowomoeiweqky->oyeskqayoscwciem()->qeeuwmmksmqiuywg(), self::ssmskyqgcmeiayco => $this->ywkiusmmqccekmaa($mksyucucyswaukig)]; miyqyeiwquwsacsm: return parent::uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig); } public function ywkiusmmqccekmaa($mksyucucyswaukig) : string { $ewgwqamkygiqaawc = ''; $mokawwccycoiqeka = $this->iscemaoqqckmkago(self::qkmqmaeuyokqgemg, $mksyucucyswaukig); if (!$mokawwccycoiqeka) { goto suswcqoyyqkkquuo; } $kugmgyukuauikwke = Domain::symcgieuakksimmu()->iscemaoqqckmkago(Domain::geseccqgwqkukyuk, $mokawwccycoiqeka); if ($kugmgyukuauikwke) { goto soqqemyioggmoakg; } $ewgwqamkygiqaawc = ManipulateHTML::ciuuiyckmsygceis(__("\116\x6f\40\157\167\156\x65\162\163\150\x69\x70\40\150\141\x73\x20\142\145\x65\x6e\x20\162\x65\147\151\163\164\x65\162\x65\144\40\146\157\x72\x20\164\x68\x69\x73\x20\x64\x6f\155\x61\151\x6e\x20\171\145\164\x2e", PR__MDL__DOMAIN_MANAGER), ["\143\x6c\x61\163\x73" => "\146\x6f\156\x74\x2d\x31\65"]); goto acaqummmoyiemqss; soqqemyioggmoakg: $essikcmqiyqaqoaq = []; $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); foreach ($kugmgyukuauikwke as $ukamowomoeiweqky) { $gkswkiicccswksiq = $ueomouiqmosykioc->yomgsemomcmgekyi(self::ucmueuwwcmocgmig, ManipulateArray::get($ukamowomoeiweqky, self::ucmueuwwcmocgmig)); $mkucggyaiaukqoce = ManipulateArray::get($ukamowomoeiweqky, self::meksegaoamowuwoq); if (!($mkucggyaiaukqoce && $gkswkiicccswksiq)) { goto wmmggowmigekyoso; } $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce); $migiiksoiymissge = ManipulateUser::yyykkcyiksewsoqy($mkucggyaiaukqoce); $essikcmqiyqaqoaq[] = [self::meksegaoamowuwoq => $this->geyuyukmwaoksywa($migiiksoiymissge, $ymqmyyeuycgmigyo), self::ucmueuwwcmocgmig => $gkswkiicccswksiq]; wmmggowmigekyoso: ywqgcegomwaiuquc: } eegqyykygiccaoeo: $ewgwqamkygiqaawc = ManipulateHTML::kuumcaywkqiasisk($essikcmqiyqaqoaq, [self::meksegaoamowuwoq => __("\x55\x73\x65\x72", PR__MDL__DOMAIN_MANAGER), self::ucmueuwwcmocgmig => __("\x43\141\x70\141\x62\x69\154\x69\164\171", PR__MDL__DOMAIN_MANAGER)], ["\143\x6c\x61\163\163" => "\146\x6f\156\x74\55\x31\x35\40\164\141\142\154\145\55\163\x74\162\151\x70\x65\144\x20\x74\141\142\x6c\145\55\142\x6f\162\x64\145\x72\x6c\x65\163\163"]); acaqummmoyiemqss: suswcqoyyqkkquuo: return $ewgwqamkygiqaawc; } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $pkyyagewkiyckmwy = $this->qogaqkcsogcqiaic($mksyucucyswaukig, self::qkmqmaeuyokqgemg, 0); if (!(is_numeric($pkyyagewkiyckmwy) && ($mokawwccycoiqeka = $this->iscemaoqqckmkago(self::qkmqmaeuyokqgemg, $mksyucucyswaukig)))) { goto oqugqwcyomiaaoqu; } $pkyyagewkiyckmwy = Domain::symcgieuakksimmu()->uikgwcuascgeissw($mokawwccycoiqeka); if (!($this->wkcuasmkgoscaiay() || $this->uqiykqoyaqymcues())) { goto eeqesooyqagwawae; } $iwywmkygwewiamwm = ManipulateFormat::gokuyqsimauyacke(ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm)); $pkyyagewkiyckmwy = $this->geyuyukmwaoksywa("\150\x74\164\x70\x73\72\x2f\x2f{$iwywmkygwewiamwm}", $pkyyagewkiyckmwy); eeqesooyqagwawae: oqugqwcyomiaaoqu: return $pkyyagewkiyckmwy; } public function uskosecsqoiqwmua($mokawwccycoiqeka) { $ocyamgcyecguqyou = null; if (!($mokawwccycoiqeka = Domain::symcgieuakksimmu()->keeuqgyooycqoygw($mokawwccycoiqeka))) { goto foeeqckqsyockkak; } $ocyamgcyecguqyou = $this->akkkoiiymmamsauc($mokawwccycoiqeka, self::qkmqmaeuyokqgemg); foeeqckqsyockkak: return $ocyamgcyecguqyou; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::qkmqmaeuyokqgemg: $eqgoocgaqwqcimie = Domain::symcgieuakksimmu()->acouumccocekeswu($eqgoocgaqwqcimie); goto iekumemscwieugqw; case self::ymamoeqaciwakwue: if ($eqgoocgaqwqcimie) { goto kymkucucyeoeikim; } $wkaqekwwgqsqwcoi = IconFontawesomeInterface::cugwqwigakiwyiuk; $sqeykgyoooqysmca = self::wyaqwomqwwaoiwas; $meqocwsecsywiiqs = __("\120\162\x69\x76\x69\154\145\147\x65\144\x20\x44\x6f\155\141\x69\x6e", PR__MDL__DOMAIN_MANAGER); goto usquiuuyiyqaeyiu; kymkucucyeoeikim: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::uoyseacicaismmug; $sqeykgyoooqysmca = self::ckcawaoawwioqecq; $meqocwsecsywiiqs = __("\x4e\x6f\x74\40\x50\162\x69\166\x69\154\x65\x67\145\144\x20\104\157\155\x61\x69\x6e", PR__MDL__DOMAIN_MANAGER); usquiuuyiyqaeyiu: $eqgoocgaqwqcimie = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\154\x61\163\x73" => "\x66\165\154\154\x2d\157\x70\141\143\x69\164\171\40\151\143\157\x6e\55\163\155\40\151\x63\x6f\x6e\x2d{$sqeykgyoooqysmca}", "\x74\x69\x74\x6c\145" => $meqocwsecsywiiqs]); goto iekumemscwieugqw; } hoeeyiowekaeemko: iekumemscwieugqw: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } }
