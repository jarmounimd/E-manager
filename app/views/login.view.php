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
            href="<?=ASSETS?>ensah.png"
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
</head>
<body class="login-page">
<div class="login-header box-shadow">
    <div
            class="container-fluid d-flex justify-content-between align-items-center"
    >
        <div class="brand-logo">
            <a href="home">
                <img src="<?=ASSETS?>ensah.png" alt="" />
            </a>
        </div>
        <div class="login-menu">
        </div>
    </div>
</div>
<div
        class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <img src="<?=ASSETS?>vendors/images/login-img.jpg" alt="" />
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                    <h2 class="text-center" style="color: #354A60;">Login To <span style="color: #0073ca;">E-manager</span></h2>
                    </div>
                    <form method="POST">
                        <div class="select-role">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn active">
                                    <input type="radio" name="selected_role" value="coordonateur" checked/>
                                    <div class="icon">
                                        <img src="<?=ASSETS?>vendors/images/cooor.svg" class="svg" alt=""/>
                                    </div>
                                    <span>Je suis</span>
                                    Coordonateur
                                </label>
                                <label class="btn">
                                    <input type="radio" name="selected_role" value="chef"/>
                                    <div class="icon">
                                        <img src="<?=ASSETS?>vendors/images/cheef.svg" class="svg" alt=""/>
                                    </div>
                                    Chef de département
                                </label>
                                <label class="btn">
                                    <input type="radio" name="selected_role" value="prof"/>
                                    <div class="icon">
                                        <img src="<?=ASSETS?>vendors/images/pro1.svg" class="svg" alt=""/>
                                    </div>
                                    <span>Je suis</span>
                                    Professeur
                                </label>
                                <label class="btn">
                                    <input type="radio" name="selected_role" value="etudiant"/>
                                    <div class="icon">
                                        <img src="<?=ASSETS?>vendors/images/stud.svg" class="svg" alt=""/>
                                    </div>
                                    <span>Je suis</span>
                                    Étudiant
                                </label>
                            </div>
                        </div>

                        <div class="input-group custom">
                            <input type="email" name="email" class="form-control form-control-lg" style="font-weight: 600;" placeholder="nom@uae.ac.ma" required/>
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="password" name="password" class="form-control form-control-lg" placeholder="**********" required/>
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                            </div>
                        </div>
                        <div class="row pb-30">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1"/>
                                    <label class="custom-control-label" for="customCheck1">Remember</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="forgot-password">
                                    <a href="forgot-password.html">Forgot Password</a>
                                </div>
                            </div>
                        </div>
                        <?php if(!empty($errors)):?>
                            <div class="alert alert-danger">
                                <?= implode("<br>", $errors)?>
                            </div>
                        <?php endif; ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- js -->
<script src="<?=ASSETS?>vendors/scripts/core.js"></script>
<script src="<?=ASSETS?>vendors/scripts/script.min.js"></script>
<script src="<?=ASSETS?>vendors/scripts/process.js"></script>
<script src="<?=ASSETS?>vendors/scripts/layout-settings.js"></script>
<!-- Google Tag Manager (noscript) -->
<noscript
><iframe
            src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
            height="0"
            width="0"
            style="display: none; visibility: hidden"
    ></iframe
    ></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>
