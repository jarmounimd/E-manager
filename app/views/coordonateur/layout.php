<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-manager</title>
    <!-- Basic Page Info -->

    <!-- Site favicon -->
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="<?=ASSETS?>LOGO.WHITE.png"
    />

    <!-- Mobile Specific Metas -->
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS?>vendors/styles/core.css" />
    <link
        rel="stylesheet"
        type="text/css"
        href="<?=ASSETS?>vendors/styles/icon-font.min.css"
    />
    <link
        rel="stylesheet"
        type="text/css"
        href="<?=ASSETS?>src/plugins/datatables/css/dataTables.bootstrap4.min.css"
    />
    <link
        rel="stylesheet"
        type="text/css"
        href="<?=ASSETS?>src/plugins/datatables/css/responsive.bootstrap4.min.css"
    />
    <link rel="stylesheet" type="text/css" href="<?=ASSETS?>vendors/styles/style.css" />


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
        async
        src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
    ></script>
    <script
        async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"
    ></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>l
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- js -->
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?=ASSETS?>vendors/scripts/core.js"></script>
    <script src="<?=ASSETS?>vendors/scripts/script.min.js"></script>
    <script src="<?=ASSETS?>vendors/scripts/process.js"></script>
    <script src="<?=ASSETS?>vendors/scripts/layout-settings.js"></script>
    <script src="<?=ASSETS?>src/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="<?=ASSETS?>src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
	<script src="https://code.highcharts.com/highcharts-3d.js"></script>
	<script src="<?=ASSETS?>src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
	<script src="<?=ASSETS?>vendors/scripts/highchart-setting.js"></script>
    <script src="<?=ASSETS?>src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?=ASSETS?>src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?=ASSETS?>src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="<?=ASSETS?>src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="<?=ASSETS?>vendors/scripts/dashboard.js"></script>
    <script src="<?=ASSETS?>src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
    <script src="<?=ASSETS?>vendors/scripts/knob-chart-setting.js"></script>
    <!-- buttons for Export datatable -->
    <script src="<?=ASSETS?>src/plugins/datatables/js/dataTables.buttons.min.js"></script>
    <script src="<?=ASSETS?>src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="<?=ASSETS?>src/plugins/datatables/js/buttons.print.min.js"></script>
    <script src="<?=ASSETS?>src/plugins/datatables/js/buttons.html5.min.js"></script>
    <script src="<?=ASSETS?>src/plugins/datatables/js/buttons.flash.min.js"></script>
    <script src="<?=ASSETS?>src/plugins/datatables/js/pdfmake.min.js"></script>
    <script src="<?=ASSETS?>src/plugins/datatables/js/vfs_fonts.js"></script>
    <!-- Datatable Setting js -->
    <script src="<?=ASSETS?>vendors/scripts/datatable-setting.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript
    ><iframe
            src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
            height="0"
            width="0"
            style="display: none; visibility: hidden"
        ></iframe
        ></noscript>
    <style>
        /* Additional styles */
        .module {
            cursor: move;
        }
        .module-dropzone {
            height: 50px;
        }
    </style>
    <script src="<?=ASSETS?>manage.emploi.js"></script>
</head>