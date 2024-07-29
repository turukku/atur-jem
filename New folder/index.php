<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src='https://get.geojs.io/v1/ip/country.js'></script>
    <script type='text/javascript'>
        const urlParams = new URLSearchParams(window.location.search);
        // Mendapatkan parameter id contoh.com/index.php?id=sofyan maka id akan berubah menjadi sofyan dan 'Sopen' adalah default id jika tidak ada id sama sekali contoh.com/index.php

        const id = urlParams.get('id') || 'Sopen';
        setTimeout(function() {
            fetch('https://get.geojs.io/v1/ip/country.json')
                .then(response => response.json())
                .then(data => {
                    const countryCode = data.country;
                    geoip(countryCode);
                })
                .catch(error => {
                    console.error('Gagal mendapatkan data lokasi:', error);
                });
        }, 10);

        function geoip(countryCode) {
            const isMobile = navigator.userAgent.match(/Android|iPhone|iPod|BlackBerry|Windows Phone|iPad/i);
            let urls;

            // "https://linknya.com/c/ee6898dc97719?track=" + id + "&subsource=" + id 

            // Parameter di sesuikan dengan dashboard masing masihg misal pada lospollos  "?u=kx7kd0b&o=ch4pmev&t=" + id cuman lospollos belum ada offer cari network lain sekiranya ada offernya

            // sextingpartners.com DOI
            if (["DK", "FL", "NO", "SE"].includes(countryCode)) {
                urls = isMobile ? "https://linknya.com/c/ee6898dc97719?track=" + id + "&subsource=" + id :
                    "https://linknya.com/c/ee6898dc97719?track=" + id + "&subsource=" + id;
            }
            // schuchternemadchen.com DOI
            else if (["DE", "CH"].includes(countryCode)) {
                urls = isMobile ? "https://linknya.com/c/fe7d1c12d0fae?track=" + id + "&subsource=" + id :
                    "https://linknya.com/c/fe7d1c12d0fae?track=" + id + "&subsource=" + id;
            }
            // ZoomFlirts SOI
            else if (["AU", "CA", "IE", "NZ", "US"].includes(countryCode)) {
                urls = isMobile ? "https://linknya.com/c/31be65d1ce328?track=" + id + "&subsource=" + id :
                    "https://linknya.com/c/31be65d1ce328?track=" + id + "&subsource=" + id;
            }
            // Kiss2Day DOI
            else if (countryCode === "AT") {
                urls = isMobile ? "https://linknya.com/c/c4f23042fb6d9?track=" + id + "&subsource=" + id :
                    "https://linknya.com/c/c4f23042fb6d9?track=" + id + "&subsource=" + id;
            }
            // clickdeamor.com DOI
            else if (["FR", "BE"].includes(countryCode)) {
                urls = isMobile ? "https://linknya.com/c/a91378f4457e9?track=" + id + "&subsource=" + id :
                    "https://linknya.com/c/a91378f4457e9?track=" + id + "&subsource=" + id;
            }
            // grandhookup.com DOI
            else if (countryCode === "ZA") {
                urls = isMobile ? "https://linknya.com/c/995469945f712?track=" + id + "&subsource=" + id :
                    "https://linknya.com/c/995469945f712?track=" + id + "&subsource=" + id;
            }
            // ragazzesole DOI LP10
            else if (countryCode === "IT") {
                urls = isMobile ? "https://linknya.com/c/068f35e047c24?track=" + id + "&subsource=" + id :
                    "https://linknya.com/c/068f35e047c24?track=" + id + "&subsource=" + id;
            }
            // FuegodeVida DOI
            else if (countryCode === "ES") {
                urls = isMobile ? "https://linknya.com/c/331e0f22fb0d4?track=" + id + "&subsource=" + id :
                    "https://linknya.com/c/331e0f22fb0d4?track=" + id + "&subsource=" + id;
            }
            // DamesErotiques DOI
            else if (countryCode === "LU") {
                urls = isMobile ? "https://linknya.com/c/670ba01fb0b51?track=" + id + "&subsource=" + id :
                    "https://linknya.com/c/670ba01fb0b51?track=" + id + "&subsource=" + id;
            }
            // Lets-Hookup SOI
            else if (countryCode === "CZ") {
                urls = isMobile ? "https://linknya.com/c/b74d5e17f5f25?track=" + id + "&subsource=" + id :
                    "https://linknya.com/c/b74d5e17f5f25?track=" + id + "&subsource=" + id;
            }
            // encuentrosmilf DOI
            else if (countryCode === "AR") {
                urls = isMobile ? "https://linknya.com/c/fbb8447d832cb?track=" + id + "&subsource=" + id :
                    "https://linknya.com/c/fbb8447d832cb?track=" + id + "&subsource=" + id;
            }
            // Iamnaughty SOI
            else if (countryCode === "SG") {
                urls = isMobile ? "https://linknya.com/c/e2e18654fa13a?track=" + id + "&subsource=" + id :
                    "https://linknya.com/c/e2e18654fa13a?track=" + id + "&subsource=" + id;
            }
            // amigaslindas.com DOI 
            else if (["BO", "CO", "CR", "CU", "DO", "EC", "GQ", "GT", "HN", "MX", "NI", "PA", "PE", "PR", "PY", "SV", "UY", "VE"].includes(countryCode)) {
                urls = isMobile ? "https://linknya.com/c/bf95995e56fce?track=" + id + "&subsource=" + id :
                    "https://linknya.com/c/bf95995e56fce?track=" + id + "&subsource=" + id;
            }
            // Default Smartlink
            else {
                urls = isMobile ? "https://linknya.com/s/607fbb1ac7fe5?track=" + id + "&subsource=" + id :
                    "https://jhcbbi.hornylocls.com/s/607fbb1ac7fe5?track=" + id + "&subsource=" + id;
            }

            window.location.href = urls;

        };
    </script>

</head>

<body>

</body>

</html>