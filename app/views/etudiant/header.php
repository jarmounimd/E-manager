<div class="header">
    <div class="header-left">
        <div class="menu-icon bi bi-list"></div>
        <div
            class="search-toggle-icon bi bi-search"
            data-toggle="header_search"
        ></div>
        <div class="header-search">
            <form>
                <div class="form-group mb-0">
                    <i class="dw dw-search2 search-icon"></i>
                    <input
                        type="text"
                        class="form-control search-input"
                        placeholder="Search Here"
                    />
                    <div class="dropdown">
                        <a
                            class="dropdown-toggle no-arrow"
                            href="#"
                            role="button"
                            data-toggle="dropdown"
                        >
                            <i class="ion-ios-search"></i>
                        </a>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="header-right">
        <div class="dashboard-setting user-notification">
            <div class="dropdown">
                <a
                    class="dropdown-toggle no-arrow"
                    href="javascript:;"
                    data-toggle="right-sidebar"
                >
                    <i class="dw dw-settings2"></i>
                </a>
            </div>
        </div>
        <div class="user-notification">
            <div class="dropdown">
                <a
                    class="dropdown-toggle no-arrow"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                >
                    <i class="icon-copy dw dw-notification"></i>
                    <span class="badge notification-active"></span>
                </a>
                <?php
                    $notes = new Notes();
                    $allNotes = $notes->getAllNotes($_SESSION['user']->id);
                    $etud = new etudiant();
                    $datas = $etud->getProfileEtud($_SESSION['user']->id);
                    
                    $_SESSION['new_notifications'] = [];
                    if (!empty($allNotes)) {
                        foreach ($allNotes as $note) {
                            $_SESSION['new_notifications'][] = $note->nom_module;
                        }
                    }
                ?>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="notification-list mx-h-350 customscroll">
                        <ul>
                            <?php if (!empty($_SESSION['new_notifications'])): ?>
                                <?php foreach ($_SESSION['new_notifications'] as $module): ?>
                                    <li>
                                        <a href="consultation_notes">
                                            <img src="<?=ASSETS?>vendors/images/marks.png" alt="" />
                                            <h3><?= htmlspecialchars($module); ?></h3>
                            <p>La note pour le module <?= htmlspecialchars($module); ?> est maintenant disponible.</p>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                                <?php // Clear the notifications after displaying them ?>
                                <?php unset($_SESSION['new_notifications']); ?>
                            <?php else: ?>
                                <p>Aucune nouvelle notification.</p>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a
                    class="dropdown-toggle"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                >
                        <span class="user-icon">
                            <img src="<?= !empty($datas[0]->profile_pic) ? ASSETS . 'uploads/' . $datas[0]->profile_pic : ASSETS . 'vendors/images/user.student.svg' ?>" alt="" />
                        </span>
                    <span class="user-name"><?=$_SESSION['user']->nom;?>. <?=$_SESSION['user']->prenom ;?></span>
                </a>
                <div
                    class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                >
                    <a class="dropdown-item" href="profile_etud"
                    ><i class="dw dw-user1"></i> Profile</a
                    >
                    <a class="dropdown-item" href="javascript:;" data-toggle="right-sidebar"
                    ><i class="dw dw-settings2"></i> Setting</a
                    >
                    <a class="dropdown-item" href="logout"
                    ><i class="dw dw-logout"></i> Log out</a
                    >
                </div>
            </div>
        </div>
    </div>
</div>