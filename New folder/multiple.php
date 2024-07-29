<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src='https://get.geojs.io/v1/ip/country.js'></script>
    <script type='text/javascript'>
        const urlParams = new URLSearchParams(window.location.search);

        const id = urlParams.get('id') || 'Ajaribang';

        fetch('https://get.geojs.io/v1/ip/country.json')
            .then(response => response.json())
            .then(data => {
                const countryCode = data.country;
                geoip(countryCode);
            })
            .catch(error => {
                console.error('Gagal mendapatkan data lokasi:', error);
            });

        function geoip(countryCode) {
            const isMobile = navigator.userAgent.match(/Android|iPhone|iPod|BlackBerry|Windows Phone|iPad/i);
            let urls;
            // sextingpartners.com DOI
            // Lospollos
            if (["DK", "FI", "NO", 'SE'].includes(countryCode)) {
                const urlMobile = [
                    "https://domain.com/c/ee6898dc97719?subsource=" + id,
                    "https://domain.com/?u=kx7kd0b&o=ch4pmev&t=" + id,
                ];
                const urlDekstop = [
                    "https://domain.com/c/ee6898dc97719?subsource=" + id,
                    "https://domain.com/?u=kx7kd0b&o=ch4pmev&t=" + id,
                ];
                urls = isMobile ? urlMobile[Math.floor(Math.random() * urlMobile.length)] : urlDekstop[Math.floor(Math.random() * urlDekstop.length)];
            }
            // vollbusigemutter.de DOI
            // schuchternemadchen.com DOI
            // Emma Madchen DOI
            // Lospollos
            else if (["AT", "DE", "CH"].includes(countryCode)) {
                const urlMobile = [
                    "https://domain.com/c/08ec4e928c81a?subsource=" + id,
                    "https://domain.com/c/fe7d1c12d0fae?subsource=" + id,
                    "https://domain.com/c/5d26d851da2db?subsource=" + id,
                    "https://domain.com/?u=kx7kd0b&o=ch4pmev&t=" + id,
                ];
                const urlDekstop = [
                    "https://domain.com/c/08ec4e928c81a?subsource=" + id,
                    "https://domain.com/c/fe7d1c12d0fae?subsource=" + id,
                    "https://domain.com/c/5d26d851da2db?subsource=" + id,
                    "https://domain.com/?u=kx7kd0b&o=ch4pmev&t=" + id,
                ];
                urls = isMobile ? urlMobile[Math.floor(Math.random() * urlMobile.length)] : urlDekstop[Math.floor(Math.random() * urlDekstop.length)];
            }
            // ZoomFlirts SOI AU/CA/IE/NZ
            // Lospollos
            else if (["AU", "CA", "IE", 'NZ'].includes(countryCode)) {
                const urlMobile = [
                    "https://domain.com/c/31be65d1ce328?subsource=" + id,
                    "https://domain.com/?u=kx7kd0b&o=ch4pmev&t=" + id,
                ];
                const urlDekstop = [
                    "https://domain.com/c/31be65d1ce328?subsource=" + id,
                    "https://domain.com/?u=kx7kd0b&o=ch4pmev&t=" + id,
                ];
                urls = isMobile ? urlMobile[Math.floor(Math.random() * urlMobile.length)] : urlDekstop[Math.floor(Math.random() * urlDekstop.length)];
            }
            // ZoomFlirts SOI
            // Searchingforsingles DOI Mobile
            // Lospollos
            else if (countryCode === "US") {
                const urlMobile = [
                    "https://domain.com/c/31be65d1ce328?subsource=" + id,
                    "https://domain.com/c/05884628f6e66?subsource=" + id,
                    "https://domain.com/?u=kx7kd0b&o=ch4pmev&t=" + id,
                ];
                const urlDekstop = [
                    "https://domain.com/c/31be65d1ce328?subsource=" + id,
                    "https://domain.com/?u=kx7kd0b&o=ch4pmev&t=" + id,
                ];
                urls = isMobile ? urlMobile[Math.floor(Math.random() * urlMobile.length)] : urlDekstop[Math.floor(Math.random() * urlDekstop.length)];
            }
            // 5493. Jolly.me - Mobile/Desktop [PL] SOI
            // 8978. Flirtooy(Mainstream) - Desktop / Mobile[WW] SOI + revShare
            else if (countryCode === "PL") {
                const urlMobile = [
                    "https://domain.com/aff_c?offer_id=5493&aff_id=74812&url_id=0_8443_8444_8961_8962_8963_9618_9619_9620_9621_10615&aff_sub=" + id + "&aff_sub5=fb&source=" + id,
                    "https://domain.com/aff_nl?offer_id=8978&aff_id=74812&lands=17_18_19_26_27_28_29_30_32_33_34_80_81_82_94&url_id=0&aff_sub=" + id + "&aff_sub5=fb&source=" + id
                ];
                const urlDekstop = [
                    "https://domain.com/aff_c?offer_id=5493&aff_id=74812&url_id=0_8443_8444_8961_8962_8963_9618_9619_9620_9621_10615&aff_sub=" + id + "&aff_sub5=fb&source=" + id,
                    "https://domain.com/aff_nl?offer_id=8978&aff_id=74812&lands=17_18_19_26_27_28_29_30_32_33_34_80_81_82_94&url_id=0&aff_sub=" + id + "&aff_sub5=fb&source=" + id
                ];
                urls = isMobile ? urlMobile[Math.floor(Math.random() * urlMobile.length)] : urlDekstop[Math.floor(Math.random() * urlDekstop.length)];
            }
            // 7619. Loveeto - Mobile / Desktop[UA] SOI 25 +
            // 8978. Flirtooy(Mainstream) - Desktop / Mobile[WW] SOI + revShare
            else if (countryCode === "UA") {
                const urlMobile = [
                    "https://domain.com/aff_nl?offer_id=7619&aff_id=74812&lands=27_28_29_30_32_33_80_81_82&url_id=0_12662_12663_12664_12665_12666_12667_12668_12669_12670_12671&aff_sub=" + id + "&aff_sub5=fb&source=" + id,
                    "https://domain.com/aff_nl?offer_id=8978&aff_id=74812&lands=17_18_19_26_27_28_29_30_32_33_34_80_81_82_94&url_id=0&aff_sub=" + id + "&aff_sub5=fb&source=" + id
                ];
                const urlDekstop = [
                    "https://domain.com/aff_nl?offer_id=7619&aff_id=74812&lands=27_28_29_30_32_33_80_81_82&url_id=0_12662_12663_12664_12665_12666_12667_12668_12669_12670_12671&aff_sub=" + id + "&aff_sub5=fb&source=" + id,
                    "https://domain.com/aff_nl?offer_id=8978&aff_id=74812&lands=17_18_19_26_27_28_29_30_32_33_34_80_81_82_94&url_id=0&aff_sub=" + id + "&aff_sub5=fb&source=" + id
                ];
                urls = isMobile ? urlMobile[Math.floor(Math.random() * urlMobile.length)] : urlDekstop[Math.floor(Math.random() * urlDekstop.length)];
            }
            // 6671. OneAmour - Mobile / Desktop [AZ, KZ, MD, GE, LT, LV, EE] SOI 25+
            // 8978. Flirtooy(Mainstream) - Desktop / Mobile[WW] SOI + revShare
            else if (["AZ", "KZ", "MD", 'GE', 'LT', 'LV', 'EE'].includes(countryCode)) {
                const urlMobile = [
                    "https://domain.com/aff_nl?offer_id=6671&aff_id=74812&lands=80_81_82&url_id=0_11100_11101&aff_sub=" + id + "&aff_sub5=fb&source=" + id,
                    "https://domain.com/aff_nl?offer_id=8978&aff_id=74812&lands=17_18_19_26_27_28_29_30_32_33_34_80_81_82_94&url_id=0&aff_sub=" + id + "&aff_sub5=fb&source=" + id
                ];
                const urlDekstop = [
                    "https://domain.com/aff_nl?offer_id=6671&aff_id=74812&lands=80_81_82&url_id=0_11100_11101&aff_sub=" + id + "&aff_sub5=fb&source=" + id,
                    "https://domain.com/aff_nl?offer_id=8978&aff_id=74812&lands=17_18_19_26_27_28_29_30_32_33_34_80_81_82_94&url_id=0&aff_sub=" + id + "&aff_sub5=fb&source=" + id
                ];
                urls = isMobile ? urlMobile[Math.floor(Math.random() * urlMobile.length)] : urlDekstop[Math.floor(Math.random() * urlDekstop.length)];
            }
            // Default Smartlink
            // Lospollos
            // Trafee
            else {
                const urlMobile = [
                    "https://domain.com/?u=kx7kd0b&o=ch4pmev&t=" + id,
                    "https://domain.com/s/607fbb1ac7fe5?subsource=" + id
                ];
                const urlDekstop = [
                    "https://domain.com/?u=kx7kd0b&o=ch4pmev&t=" + id,
                    "https://domain.com/s/607fbb1ac7fe5?subsource=" + id
                ];
                urls = isMobile ? urlMobile[Math.floor(Math.random() * urlMobile.length)] : urlDekstop[Math.floor(Math.random() * urlDekstop.length)];
            }

            window.location.href = urls;

        };
    </script>

</head>

<body>

</body>

</html>