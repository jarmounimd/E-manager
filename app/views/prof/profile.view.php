<?php include('layout.php');?>
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
        <?php include('header.php');?>
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
                        <a href="home_prof" class="dropdown-toggle no-arrow active ">
                            <span class="micon bi bi-house-fill"></span
                            ><span class="mtext">Home</span>
                        </a>
                    </li><li class="dropdown">
                        <a href="saisir_notes" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-clipboard-fill"></span
                            ><span class="mtext">Saisir les notes</span>
                        </a>
                    </li><li class="dropdown">
                        <a href="afficher_emploi_prof" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-calendar-date-fill"></span
                            ><span class="mtext">Emploi du temps</span>
                        </a>
                    </li><li class="dropdown">
                        <a href="aid_prof" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-info-circle-fill"></span
                            ><span class="mtext">Support et aide</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="title">
									<h4>Profile</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="home_prof">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Profile
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<?php
            $prof = new prof();
            $data = $prof->getProfileProf($_SESSION['user']->id);
            ?>
					<div class="row">
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 mb-30">
							<div class="pd-20 card-box ">
								<div class="profile-photo text-center">
									<img
										src="<?= !empty($data[0]->profile_pic) ? ASSETS . 'uploads/' . $data[0]->profile_pic : ASSETS . 'vendors/images/pro.svg' ?>"
										alt=""
										class="avatar-photo"
									/>
									<a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body pd-5">
                                                    <div class="img-container">
                                                        <img id="image" src="<?= isset($data[0]->profile_pic) ? ASSETS . 'uploads/' . $data[0]->profile_pic : ASSETS . 'vendors/images/pro.svg' ?>" alt="Picture" />
                                                    </div>
                                                    <!-- File input for choosing a new profile picture within the modal -->
                                                    <form action="update_profile_prof/updatePicture" method="POST" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label for="profilePicture">Choisissez une nouvelle photo de profil:</label>
                                                            <input type="file" name="profile_picture" id="profilePicture" class="form-control-file" accept="image/*">
                                                        </div>     
                                                </div>
                                                <div class="modal-footer">
												    <input type="submit" value="Upload" class="btn btn-primary">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
												    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<h5 class="text-center h5 mb-0"><?php echo  $data[0]->prenom_prof.' '. $data[0]->nom_prof; ?></h5>
								<p class="text-center text-muted font-14">
									Professeur
								</p>
								<div class="profile-info">
									<h5 class="mb-20 h5 text-blue">Informations personnelles</h5>
									<ul>
										<li>
											<span>Adresse e-mail:</span>
											<?php echo  $data[0]->email_prof; ?>
										</li>
										<li>
											<span>Numéro de téléphone:</span>
											<?php echo  $data[0]->phone_nbr; ?>
										</li>
										<li>
											<span>Pays:</span>
											<?php echo  $data[0]->Country; ?>
										</li>
										<li>
											<span>Address:</span>
											<?php echo  $data[0]->Address; ?>
										</li>
										<li>
											<span>Filière:</span>
											<?php echo  $data[0]->nom_filiere; ?>
										</li>
										<li>
											<span>Département:</span>
											<?php echo  $data[0]->nom_dep; ?>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 mb-30">
							<div class="card-box height-100-p overflow-hidden">
								<div class="profile-tab ">
									<div class="tab ">
										<ul class="nav nav-tabs customtab" role="tablist">
											<li class="nav-item">
												<a
													class="nav-link active"
													data-toggle="tab"
													href="#timeline"
													role="tab"
													>Chronologie des Tâches</a
												>
											</li>
											<li class="nav-item">
												<a
													class="nav-link"
													data-toggle="tab"
													href="#tasks"
													role="tab"
													>Tâches Personnelles</a
												>
											</li>
											<li class="nav-item">
												<a
													class="nav-link"
													data-toggle="tab"
													href="#setting"
													role="tab"
													>Modifier profile</a
												>
											</li>
										</ul>
										<div class="tab-content">
										<div class="tab-pane fade show active" id="timeline" role="tabpanel">
        <div class="pd-20">
            <div class="profile-timeline">
            <?php
            $tacheModel = new tache();
            $tasks = $tacheModel->getTasksProf($_SESSION['user']->id);

            // Sort tasks by due_date in ascending order
            usort($tasks, function($a, $b) {
                return strtotime($a->due_date) - strtotime($b->due_date);
            });

            $currentMonth = '';

            foreach ($tasks as $task) {
                $taskDate = date('d M', strtotime($task->due_date));
                $taskMonth = date('F, Y', strtotime($task->due_date));

                if ($currentMonth !== $taskMonth) {
                    if ($currentMonth !== '') {
                        echo '</ul></div>';
                    }
                    $currentMonth = $taskMonth;
                    echo '<div class="timeline-month"><h5>' . htmlspecialchars($currentMonth) . '</h5></div>';
                    echo '<div class="profile-timeline-list"><ul>';
                }

                echo '<li>';
                echo '<div class="date">' . htmlspecialchars($taskDate) . '</div>';
                echo '<div class="task-name"><i class="ion-android-alarm-clock"></i> ' . htmlspecialchars($task->task_title) . '</div>';
                echo '<div class="task-assign">' . htmlspecialchars($task->task_message) . '</div>';
                echo '<div class="task-time">Date limite <span>' . htmlspecialchars(date('d F Y', strtotime($task->due_date))) . '</span></div>';
                echo '</li>';
            }

            if ($currentMonth !== '') {
                echo '</ul></div>';
            }
            ?>
                </div>
            </div>
        </div>


											<!-- Tasks Tab start -->
											<div class="tab-pane fade" id="tasks" role="tabpanel">
												<div class="pd-20 profile-task-wrap">
													<div class="container pd-0">
													<?php
                                        $tacheModel = new tache();
                                        $tasks = $tacheModel->getTasks($_SESSION['user']->id_filiere); 
                                        $currentDate = date('Y-m-d'); // Current date
                                        
                                        $openTasks = [];
                                        $closedTasks = [];
                                        
                                        foreach ($tasks as $task) {
                                            // Check if the task is outdated
                                            if (strtotime($task->due_date) >= strtotime($currentDate)) {
                                                $openTasks[] = $task; // Task is still open
                                            } else {
                                                $closedTasks[] = $task; // Task is outdated
                                            }
                                        }
                                        
                                        $openTasksCount = count($openTasks);
                                        ?>
                                        
                                        <!-- Tâches assignées Début -->
                                        <div class="task-title row align-items-center">
                                        <div class="col-md-8 col-sm-12">
                                        <h5>Tâches En Attente (<?= $openTasksCount ?> tâches)</h5>
                                        </div>
                                        </div>
                                        
                                        <div class="profile-task-list pb-30">
                                        <ul>
                                        <?php if ($openTasks): ?>
                                        <?php foreach ($openTasks as $task): ?>
                                        <li>
                                        <div class="task-type"><?= $task->task_title ?></div>
                                        <?= $task->task_message ?>
                                        <div class="task-assign">
                                        <div class="due-date">
                                        Date limite <span><?= date('d F Y', strtotime($task->due_date)) ?></span>
                                        </div>
                                        </div>
                                        </li>
                                        <?php endforeach; ?>
                                        <?php else: ?>
                                        <li>Aucune tâche disponible.</li>
                                        <?php endif; ?>
                                        </ul>
                                        </div>
                                        <!-- Tâches assignées Fin -->
                                        
                                        <!-- Tâches Clôturées Début -->
                                        <div class="task-title row align-items-center">
                                        <div class="col-md-12 col-sm-12">
                                        <h5>Tâches Clôturées</h5>
                                        </div>
                                        </div>
                                        <div class="profile-task-list close-tasks">
                                        <ul>
                                        <?php if ($closedTasks): ?>
                                        <?php foreach ($closedTasks as $task): ?>
                                        <li>
                                        <div class="custom-control custom-checkbox mb-5">
                                        <input
                                        type="checkbox"
                                        class="custom-control-input"
                                        id="task-close-<?= $task->id ?>"
                                        checked=""
                                        disabled=""
                                        />
                                        <label
                                        class="custom-control-label"
                                        for="task-close-<?= $task->id ?>"
                                        ></label>
                                        </div>
                                        <div class="task-type"><?= $task->task_title ?></div>
                                        <?= $task->task_message ?>
                                        <div class="task-assign">
                                        Assigné à <?= $task->professor_name ?>
                                        <div class="due-date">
                                        Date limite <span><?= date('d F Y', strtotime($task->due_date)) ?></span>
                                        </div>
                                        </div>
                                        </li>
                                        <?php endforeach; ?>
                                        <?php else: ?>
                                        <li>Aucune tâche en retard.</li>
                                        <?php endif; ?>
                                        </ul>
                                        </div>
                                        <!-- Tâches Clôturées Fin -->
											<!-- Tasks Tab End -->
										</div>
									</div>
									</div>
																				<!-- Setting Tab start -->
											<div
												class="tab-pane fade height-100-p"
												id="setting"
												role="tabpanel"
											>
	    <div class="profile-setting">
             <form action="update_profile_prof/updatePersonalInfo" method="POST">
               <ul class="profile-edit-list row">
                  <li class="weight-500 col-md-11">
                <h4 class="text-blue h5 mb-20">
                    Modifier vos paramètres personnels
                </h4>
                
                <div class="form-group">
                    <label>Nom</label>
                    <input
                        class="form-control form-control-lg"
                        type="text"
                        name="nom"
                        value="<?= htmlspecialchars($data[0]->nom_prof) ?>"
                        required
                    />
                </div>
                <div class="form-group">
                    <label>Prénom</label>
                    <input
                        class="form-control form-control-lg"
                        type="text"
                        name="prenom"
                        value="<?= htmlspecialchars($data[0]->prenom_prof) ?>"
                        required
                    />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input
                        class="form-control form-control-lg"
                        type="email"
                        name="email"
                        value="<?= htmlspecialchars($data[0]->email_prof) ?>"
                        required
                    />
                </div>
                <div class="form-group">
                    <label>Pays</label>
                    <select
                        class="selectpicker form-control form-control-lg"
                        data-style="btn-outline-secondary btn-lg"
                        title="Choisir un pays"
                        name="pays"
                        required
                    >
                        <option value="<?= htmlspecialchars($data[0]->Country) ?>" selected>
                            <?= htmlspecialchars($data[0]->Country) ?>
                        </option>
                        <option value="Algérie">Algérie</option>
                        <option value="Angola">Angola</option>
                        <option value="Bénin">Bénin</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cameroun">Cameroun</option>
                        <option value="Cap-Vert">Cap-Vert</option>
                        <option value="République centrafricaine">République centrafricaine</option>
                        <option value="Comores">Comores</option>
                        <option value="République du Congo">République du Congo</option>
                        <option value="République démocratique du Congo">République démocratique du Congo</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Égypte">Égypte</option>
                        <option value="Guinée équatoriale">Guinée équatoriale</option>
                        <option value="Érythrée">Érythrée</option>
                        <option value="Eswatini">Eswatini</option>
                        <option value="Éthiopie">Éthiopie</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambie">Gambie</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Guinée">Guinée</option>
                        <option value="Guinée-Bissau">Guinée-Bissau</option>
                        <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Libéria">Libéria</option>
                        <option value="Libye">Libye</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Mali">Mali</option>
                        <option value="Mauritanie">Mauritanie</option>
                        <option value="Maurice">Maurice</option>
                        <option value="Maroc">Maroc</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Namibie">Namibie</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigéria">Nigéria</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Sao Tomé-et-Principe">Sao Tomé-et-Principe</option>
                        <option value="Sénégal">Sénégal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Somalie">Somalie</option>
                        <option value="Afrique du Sud">Afrique du Sud</option>
                        <option value="Soudan">Soudan</option>
                        <option value="Soudan du Sud">Soudan du Sud</option>
                        <option value="Tanzanie">Tanzanie</option>
                        <option value="Togo">Togo</option>
                        <option value="Tunisie">Tunisie</option>
                        <option value="Ouganda">Ouganda</option>
                        <option value="Zambie">Zambie</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Numéro de téléphone</label>
                    <input
                        class="form-control form-control-lg"
                        type="text"
                        name="telephone"
                        value="<?= htmlspecialchars($data[0]->phone_nbr) ?>"
                        required
                    />
                </div>
                <div class="form-group">
                    <label>Adresse</label>
                    <textarea class="form-control" name="adresse" required><?= htmlspecialchars($data[0]->Address) ?></textarea>
                </div>
                <div class="form-group mb-0">
                    <input
                        type="submit"
                        class="btn btn-primary"
                        value="Mettre à jour les informations"
                    />
                </div>
                     </li>
                </ul>
            </form>
                </div>


											</div>
											<!-- Setting Tab End -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>