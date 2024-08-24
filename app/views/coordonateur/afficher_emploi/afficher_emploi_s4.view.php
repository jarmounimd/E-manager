<?php include($_SERVER['DOCUMENT_ROOT'] . '/MVC-PROJ/app/views/coordonateur/layout.php');?>

<body>
<div class="pre-loader">
    <div class="pre-loader-box">
        <div class="loader-logo">
            <img src="<?=ASSETS?>ensah.png" alt="" />
        </div>
        <div class="loader-progress" id="progress_div">
            <div class="bar" id="bar1"></div>
        </div>
        <div class="percent" id="percent1">0%</div>
        <div class="loading-text">Loading...</div>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/MVC-PROJ/app/views/coordonateur/header.php');?>
<div class="right-sidebar">
    <div class="sidebar-title">
        <h3 class="weight-600 font-16 text-blue">
            Layout Settings
            <span class="btn-block font-weight-400 font-12"
            >User Interface Settings</span
            >
        </h3>
        <div class="close-sidebar" data-toggle="right-sidebar-close">
            <i class="icon-copy ion-close-round"></i>
        </div>
    </div>
    <div class="right-sidebar-body customscroll">
        <div class="right-sidebar-body-content">
            <h4 class="weight-600 font-18 pb-10">Header Background</h4>
            <div class="sidebar-btn-group pb-30 mb-10">
                <a
                        href="javascript:void(0);"
                        class="btn btn-outline-primary header-white active"
                >White</a
                >
                <a
                        href="javascript:void(0);"
                        class="btn btn-outline-primary header-dark"
                >Dark</a
                >
            </div>

            <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
            <div class="sidebar-btn-group pb-30 mb-10">
                <a
                        href="javascript:void(0);"
                        class="btn btn-outline-primary sidebar-light"
                >White</a
                >
                <a
                        href="javascript:void(0);"
                        class="btn btn-outline-primary sidebar-dark active"
                >Dark</a
                >
            </div>

            <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
            <div class="sidebar-radio-group pb-10 mb-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input
                            type="radio"
                            id="sidebaricon-1"
                            name="menu-dropdown-icon"
                            class="custom-control-input"
                            value="icon-style-1"
                            checked=""
                    />
                    <label class="custom-control-label" for="sidebaricon-1"
                    ><i class="fa fa-angle-down"></i
                        ></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input
                            type="radio"
                            id="sidebaricon-2"
                            name="menu-dropdown-icon"
                            class="custom-control-input"
                            value="icon-style-2"
                    />
                    <label class="custom-control-label" for="sidebaricon-2"
                    ><i class="ion-plus-round"></i
                        ></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input
                            type="radio"
                            id="sidebaricon-3"
                            name="menu-dropdown-icon"
                            class="custom-control-input"
                            value="icon-style-3"
                    />
                    <label class="custom-control-label" for="sidebaricon-3"
                    ><i class="fa fa-angle-double-right"></i
                        ></label>
                </div>
            </div>

            <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
            <div class="sidebar-radio-group pb-30 mb-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input
                            type="radio"
                            id="sidebariconlist-1"
                            name="menu-list-icon"
                            class="custom-control-input"
                            value="icon-list-style-1"
                            checked=""
                    />
                    <label class="custom-control-label" for="sidebariconlist-1"
                    ><i class="ion-minus-round"></i
                        ></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input
                            type="radio"
                            id="sidebariconlist-2"
                            name="menu-list-icon"
                            class="custom-control-input"
                            value="icon-list-style-2"
                    />
                    <label class="custom-control-label" for="sidebariconlist-2"
                    ><i class="fa fa-circle-o" aria-hidden="true"></i
                        ></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input
                            type="radio"
                            id="sidebariconlist-3"
                            name="menu-list-icon"
                            class="custom-control-input"
                            value="icon-list-style-3"
                    />
                    <label class="custom-control-label" for="sidebariconlist-3"
                    ><i class="dw dw-check"></i
                        ></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input
                            type="radio"
                            id="sidebariconlist-4"
                            name="menu-list-icon"
                            class="custom-control-input"
                            value="icon-list-style-4"
                            checked=""
                    />
                    <label class="custom-control-label" for="sidebariconlist-4"
                    ><i class="icon-copy dw dw-next-2"></i
                        ></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input
                            type="radio"
                            id="sidebariconlist-5"
                            name="menu-list-icon"
                            class="custom-control-input"
                            value="icon-list-style-5"
                    />
                    <label class="custom-control-label" for="sidebariconlist-5"
                    ><i class="dw dw-fast-forward-1"></i
                        ></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input
                            type="radio"
                            id="sidebariconlist-6"
                            name="menu-list-icon"
                            class="custom-control-input"
                            value="icon-list-style-6"
                    />
                    <label class="custom-control-label" for="sidebariconlist-6"
                    ><i class="dw dw-next"></i
                        ></label>
                </div>
            </div>

            <div class="reset-options pt-30 text-center">
                <button class="btn btn-danger" id="reset-settings">
                    Reset Settings
                </button>
            </div>
        </div>
    </div>
</div>
<div class="left-side-bar">
        <div class="brand-logo">
            <a href="">
                <img src="<?=ASSETS?>logo.png" alt="" class="dark-logo" />
                <img src="<?=ASSETS?>logo-light.png" alt="" class="light-logo">
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a href="home_coordonateur" class="dropdown-toggle no-arrow active ">
                            <span class="micon bi bi-house-fill"></span
                            ><span class="mtext">Home</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
								<span class="micon icon-copy fa fa-tasks"></span
                                ><span class="mtext">Gérer les modules</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="liste_modules_coordonateur">Liste des modules</a></li>
                            <li><a href="ajouter_module_coordonateur">Ajouter un module</a></li>


                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
								<span class="micon icon-copy fi-torsos-all"></span
                                ><span class="mtext">Gérer les professeurs</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="liste_profs_coordonateur">Liste des professeurs</a></li>
                            <li><a href="affectation_module_coordonateur">Affectation des modules</a></li>

                        </ul>
                    </li>
                    </li>
                    <li class="dropdown">
                        <a href="liste_etudiants_coordonateur" class="dropdown-toggle no-arrow">
                            <span class="micon icon-copy fa fa-users"></span
                            ><span class="mtext">Liste des étudiants</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-calendar-date-fill"></span
                                ><span class="mtext">Création des emplois</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="creer_emploi_s1">Créer emploi pour S1</a></li>
                            <li><a href="creer_emploi_s2">Créer emploi pour S2</a></li>
                            <li><a href="creer_emploi_s3">Créer emploi pour S3</a></li>
                            <li><a href="creer_emploi_s4">Créer emploi pour S4</a></li>
                            <li><a href="creer_emploi_s5">Créer emploi pour S5</a></li>
                            <li><a href="creer_emploi_s6">Créer emploi pour S6</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-calendar-date-fill"></span
                                ><span class="mtext">Affichage des emplois</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="afficher_emploi_s1">Afficher emploi pour S1</a></li>
                            <li><a href="afficher_emploi_s2">Afficher emploi pour S2</a></li>
                            <li><a href="afficher_emploi_s3">Afficher emploi pour S3</a></li>
                            <li><a href="afficher_emploi_s4">Afficher emploi pour S4</a></li>
                            <li><a href="afficher_emploi_s5">Afficher emploi pour S5</a></li>
                            <li><a href="afficher_emploi_s6">Afficher emploi pour S6</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="consultation_notes_coordonateur" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-clipboard-fill"></span
                                ><span class="mtext">Consultation des notes</span>
                        </a>
                    </li>
                   <li class="dropdown">
                        <a href="aid_coor" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-info-circle-fill"></span
                            ><span class="mtext">Support et aide</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- liste des modules avec notes !-->
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Liste des étudiants</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="home_coordonateur">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Consultation d'emploi S1
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
           
            <?php
            // Fetch schedule data from the controller
            $scheduleData = $scheduleData;

            // Initialize an array to organize the schedule by day and slot
            $schedule = [];
            if (is_array($scheduleData) && !empty($scheduleData)) {
                foreach ($scheduleData as $data) {
                    $schedule[$data->day][$data->slot] = $data->nom_module;
                }
            }
            // Define days and slots
            $days = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'];
            $slots = ['1', '2', '3', '4'];
            ?>

            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Emploi du temps</h4>
                </div>
                <div class="pb-20">
                    <table class="table hover multiple-select-row data-table-export nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Jour</th>
                                <th class="table-plus datatable-nosort">8:30 - 10:30</th>
                                <th class="table-plus datatable-nosort">10:30 - 12:30</th>
                                <th class="table-plus datatable-nosort">14:30 - 16:30</th>
                                <th class="table-plus datatable-nosort">16:30 - 18:30</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($days as $day): ?>
                                <tr>
                                    <th class="table-plus"><?php echo ucfirst($day); ?></th>
                                    <?php foreach ($slots as $slot): ?>
                                        <td class="table-plus"><?php echo isset($schedule[$day][$slot]) ? $schedule[$day][$slot] : '-'; ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <form method="POST" action="reset_emploi/reset">
                            <input type="hidden" name="idSemestre" value="4">
                            <button type="submit" class="btn btn-primary"><?= !empty($scheduleData) ? 'Reset emploi' : 'Creer emploi' ?></button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
</body>
</html>
