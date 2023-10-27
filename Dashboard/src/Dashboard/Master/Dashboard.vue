

<template>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="log"> <a href="#" class="logo d-flex align-items-center"> <img src="../../assets/img/logoD.png" alt=""
                    class="A">
                <img src="../../assets/img/logoE.png" alt="" class="E"> <span class="d-none d-lg-block">BLOOD
                    <br>DONATE</span>
            </a>
        </div>
        <i class="bi bi-list toggle-sidebar-btn"></i>
        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#"> <input type="text" name="query"
                    placeholder="Rechercher" title="Enter search keyword"> <button type="submit" title="Search"><i
                        class="bi bi-search"></i></button></form>
        </div>
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item d-block d-lg-none"> <a class="nav-link nav-icon search-bar-toggle " href="#"> <i
                            class="bi bi-search"></i> </a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown"> <i class="bi bi-bell"
                            style="color: #00002E;"></i> <span class="badge bg-danger badge-number">2</span> </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header"> You have 4 new notifications <a href="#"><span
                                    class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>yoyo</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer"> <a href="#">Show all notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown"> <i class="bi bi-chat-left-text"
                            style="color: #00002E;"></i>
                        <span class="badge bg-danger badge-number">3</span> </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header"> You have 3 new messages <a href="#"><span
                                    class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="message-item">
                            <a href="#">
                                <img src="../../assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4> Orelien</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="message-item">
                            <a href="#">
                                <img src="../../assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Ymele orelien</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="message-item">
                            <a href="#">
                                <img src="../../assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Orelien</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer"> <a href="#">Show all messages</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> <img
                            src="../../assets/img/profile-img.jpg" alt="Profile" style="border-radius: 10px;widows: 50px;">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Orelien</span> </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Orelien</h6>
                            <span>Administrator</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li> <a class="dropdown-item d-flex align-items-center" href="users-profile.html"> <i
                                    class="bi bi-person"></i> <span>Mon ompte</span> </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li> <a class="dropdown-item d-flex align-items-center" href="users-profile.html"> <i
                                    class="bi bi-gear"></i> <span>Parametre</span> </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li> <a class="dropdown-item d-flex align-items-center" href="pages-faq.html"> <i
                                    class="bi bi-question-circle"></i> <span>Aider?</span> </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li> <a class="dropdown-item d-flex align-items-center" href="#"> <i
                                    class="bi bi-box-arrow-right"></i> <span>Deconnexion</span> </a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item"> <router-link to="/">
                    <a class="nav-link active" href="index.html"><i class="bi bi-grid"></i>
                        <span>Dashboard</span>

                    </a> </router-link>

            </li>
            <li class="nav-item">
                <RouterLink to="/users" style="text-decoration: none;">
                    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"><i
                            class="fa-solid fa-users"></i><span> Utilisateurs</span> <i
                            class="bi bi-chevron-down ms-auto"></i>

                    </a>
                    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <RouterLink to="/users">
                                <i class="bi bi-circle"></i><span>Nos Utilisateurs</span>
                            </RouterLink>
                        </li>
                        <li>
                            <RouterLink to="/users/activites"><i class="bi bi-circle"></i><span>Activites</span>
                            </RouterLink>
                        </li>

                    </ul>
                </RouterLink>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i
                        class="fa-solid fa-hospital"></i><span>Hopitaux</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>  <RouterLink to="/hospitaux"> <i class="bi bi-circle"></i><span>Nos hospitaux</span> </RouterLink></li>
           
                    <li> <RouterLink to="/hospitaux/activites"> <i class="bi bi-circle"></i><span>stockes et activites</span></RouterLink>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i
                        class="fa-solid fa-handshake-angle"></i><span>Partenaires</span><i
                        class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="tables-general.html"> <i class="bi bi-circle"></i><span>Nos partenaires </span> </a></li>
                    <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Ajouter un partenaire </span> </a>
                    </li>
                    <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Activites des partenaires </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"> <a class="nav-link collapsed" href="#"> <i class="fa-solid fa-bell"></i>
                    <span>Alertes</span>
                </a></li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#"> <i
                        class="fa-solid fa-hand-holding-droplet"></i><span>Don</span><i
                        class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="icons-bootstrap.html"> <i class="bi bi-circle"></i><span>Don de sang</span> </a></li>
                    <li> <a href="icons-remix.html"> <i class="bi bi-circle"></i><span>Don finacier</span> </a></li>

                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="" data-bs-toggle="collapse" href="#"> <i
                        class="bi bi-bar-chart"></i><span>Bilan</span></a>

            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#"> <i
                        class="fa-solid fa-calendar-plus"></i><span>Evenements</span><i
                        class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="charts-chartjs.html"> <i class="bi bi-circle"></i><span>listes des evenements</span> </a>
                    </li>
                    <li> <a href="charts-apexcharts.html"> <i class="bi bi-circle"></i><span>creer un evenemenet</span> </a>
                    </li>
                    <li> <a href="charts-echarts.html"> <i class="bi bi-circle"></i><span>activites</span> </a></li>
                </ul>
            </li>
        </ul>
    </aside>
    <main id="main" class="main">
        <router-view>

        </router-view>


    </main>
</template>
<script>
//  if (select('.toggle-sidebar-btn')) {
//     on('click', '.toggle-sidebar-btn', function(e) {
//       select('body').classList.toggle('toggle-sidebar')
//     })
//   }
</script>
<style></style>