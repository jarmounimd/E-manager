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
                            <div class="title text-blue">
                                <h2 class="text-blue" >L'application de gestion E-manager</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap">
						<div class="container pd-0">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="blog-detail card-box overflow-hidden mb-30">
										<div class="blog-img text-center">
											<img src="<?=ASSETS?>ensah.png"  alt="" />
										</div>
                                        <div class="blog-caption">
                                            <div class="pull-left">
                                            <p style="font-size: 20px; color:black">
                                                <span style="font-size: 24px; font-weight: bold;">E-manager</span> est une application innovante conçue pour simplifier la gestion académique. Elle offre une solution complète pour la saisie, la consultation et la gestion des notes, permettant aux enseignants de gérer efficacement les performances de leurs étudiants pour chaque module qu'ils dispensent. En plus de cela, E-manager intègre également une fonctionnalité avancée de gestion des tâches, facilitant la coordination entre les enseignants et les coordonnateurs de filières pour une organisation optimale.
                                                <p style="font-size: 20px; color:black">Les fonctionnalités principales incluent une authentification sécurisée des utilisateurs, la gestion des notes, l'affectation et la modification des modules attribués aux professeurs, la gestion des tâches pour les enseignants et les coordonnateurs, ainsi que la création et la gestion des emplois du temps pour les professeurs et les étudiants.</p>

                                                <p style="font-size: 20px; color:black">
                                                    Cette application a été développée par l'étudiant <span style="font-weight: bold;">Mohamed JARMOUNI</span> en utilisant des technologies telles que PHP, JavaScript, HTML et CSS, sans recourir à des frameworks externes. Le projet est en constante amélioration, et toute contribution ou suggestion est la bienvenue. Pour plus d'informations ou pour contribuer à l'amélioration de l'application, vous pouvez contacter <a href="mailto:mohamed.jarmouni1@etu.uae.ac.ma">mohamed.jarmouni1@etu.uae.ac.ma</a>.
                                                </p>
                                                <br>
                                                <h3 class="text-blue h3" style="font-size: 20px;">Quelques informations techniques :</h3>
                                                <p style="font-size: 20px; color:black">L'application a été soigneusement élaborée principalement en PHP, qui constitue environ 90 % du code, avec des ajouts en JavaScript, CSS et HTML pour enrichir ses fonctionnalités. En optant pour une approche sans frameworks externes, l'application bénéficie d'une architecture pure et cohérente, assurant une intégration fluide entre PHP et JavaScript. Conformément au modèle MVC (Modèle-Vue-Contrôleur), ce développement assure une structuration logique et modulaire, favorisant ainsi la maintenabilité et l'évolutivité du système.</p>
                                                <br>
                                                <h3 class="text-blue h3" style="font-size: 20px;">À propos du développeur :</h3>
                                                <p style="font-size: 20px; color:black">Mohamed JARMOUNI est un étudiant en première année de génie informatique à l'École Nationale des Sciences Appliquées - Al Hoceima.</p>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
                            <div class="footer-wrap pd-20 mb-20 card-box text-center">
                            <p class="footer-title"><span style="color:#0073ca; font-size: 20px;">Copyrights  <i class="icon-copy fa fa-copyright" aria-hidden="true"></i> </span><span>Mohamed JARMOUNI</span></p>
                                <div class="social-media-icons" style="margin-top: 10px;">
                                    <a href="mailto:mohamed.jarmouni1@etu.uae.ac.ma" target="_blank" title="Email" class="icon email">
                                    <i class="icon-copy bi bi-envelope-fill" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://www.facebook.com/jarmounimd" target="_blank" title="Facebook" class="icon facebook">
                                    <i class="icon-copy bi bi-facebook"aria-hidden="true"></i> 
                                    </a>
                                    <a href="https://www.instagram.com/jarmounimd11" target="_blank" title="Instagram" class="icon instagram">
                                        <i class="icon-copy bi bi-instagram" aria-hidden="true"></i> <!-- Using image as a placeholder -->
                                    </a>
                                    <a href="https://www.linkedin.com/in/mohamed-jarmouni-888864200" target="_blank" title="LinkedIn" class="icon linkedin">
                                        <i class="icon-copy bi bi-linkedin" aria-hidden="true"></i> <!-- Using user as a placeholder -->
                                    </a>
                                </div>
                            </div>

						</div>
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

