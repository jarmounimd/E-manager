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
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a
                    class="dropdown-toggle"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                >
                <?php
            $chef = new chef();
            $datas = $chef->getProfileChef($_SESSION['user']->id);
            ?>
                        <span class="user-icon">
                            <img src="<?= !empty($datas[0]->profile_pic) ? ASSETS . 'uploads/' . $datas[0]->profile_pic : ASSETS . 'vendors/images/user_chef.svg' ?>" alt="" />
                        </span>
                    <span class="user-name"><?=$_SESSION['user']->nom;?>. <?=$_SESSION['user']->prenom ;?></span>
                </a>
                <div
                    class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                >
                    <a class="dropdown-item" href="profile_chef"
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