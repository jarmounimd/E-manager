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
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="notification-list mx-h-350 customscroll">
                        <ul>
                            <?php
                            $tacheModel = new tache();
                            $openTasks = $tacheModel->getTasksProf($_SESSION['user']->id);
                            $prof = new prof();
                            $datas = $prof->getProfileProf($_SESSION['user']->id);

                            if ($openTasks):
                                usort($openTasks, function($a, $b) {
                                    return strtotime($a->due_date) - strtotime($b->due_date);
                                });
                                
                               foreach ($openTasks as $task):
                            ?>
                            <li>
                                <a href="profile_prof">
                                    <img src="<?=ASSETS?>vendors/images/notification.png" alt="" />
                                    <h3><?= htmlspecialchars($task->task_title) ?></h3>
                                    <p><?= htmlspecialchars($task->task_message) ?></p>
                                    <small>Date limite: <?= date('d F Y', strtotime($task->due_date)) ?></small>
                                </a>
                            </li>
                            <?php
                                endforeach;
                             else:
                            ?>
                            <li>
                                <p>Aucune tâche disponible.</p>
                            </li>
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
                            <img src="<?= !empty($datas[0]->profile_pic) ? ASSETS . 'uploads/' . $datas[0]->profile_pic : ASSETS . 'vendors/images/pro.svg' ?>" alt="" />
                        </span>
                    <span class="user-name"><?=$_SESSION['user']->nom;?>. <?=$_SESSION['user']->prenom ;?></span>
                </a>
                <div
                    class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                >
                    <a class="dropdown-item" href="profile_prof"
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