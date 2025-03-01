  <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                                <a class="nav-link" href="dashboard.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                </a>
                                <a class="nav-link" href="users.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                    Manage Users
                                </a>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapsePosts">
                                    <div class="sb-nav-link-icon">
                                        <i class="fas fa-columns"></i>
                                    </div>
                                    Discussions
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsePosts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="faq.php">FAQs</a>
                                        <a class="nav-link" href="pendingPosts.php">Pending Posts</a>
                                        <a class="nav-link" href="acceptedPosts.php">Accepted Posts</a>
                                        <a class="nav-link" href="comments.php">Comments</a>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBooks" aria-expanded="false" aria-controls="collapseBooks">
                                    <div class="sb-nav-link-icon">
                                        <i class="fas fa-columns"></i>
                                    </div>
                                    Articles && Books
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseBooks" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="manage_article.php">Articles</a>
                                        <a class="nav-link" href="manage_book.php">Books</a>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePaddy" aria-expanded="false" aria-controls="collapsePaddy">
                                    <div class="sb-nav-link-icon">
                                        <i class="fas fa-columns"></i>
                                    </div>
                                    Paddy
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsePaddy" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="paddy_types.php">အမျိုးအစား</a>
                                        <a class="nav-link" href="paddy_diseases.php">ရောဂါနှင့်ပိုးမွှားများ</a>
                                        <a class="nav-link" href="paddy_price.php">ဈေးနှုန်း</a>

                                    </nav>
                                </div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBean" aria-expanded="false" aria-controls="collapseBean">
                                    <div class="sb-nav-link-icon">
                                        <i class="fas fa-columns"></i>
                                    </div>
                                    Bean
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseBean" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="bean_diseases.php">ရောဂါနှင့်ပိုးမွှားများ</a>
                                        <a class="nav-link" href="bean_price.php">ဈေးနှုန်း</a>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCost" aria-expanded="false" aria-controls="collapseCost">
                                    <div class="sb-nav-link-icon">
                                        <i class="fas fa-columns"></i>
                                    </div>
                                    Cost
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseCost" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="paddyInput.php">စပါး</a>
                                        <a class="nav-link" href="beanInput.php">ပဲ</a>
                                    </nav>
                                </div>

                                <a class="nav-link" href="logout.php" onclick="return confirm('Are You sure you want to logout?');">
                                    <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                    Logout
                                </a>
                        </div>
                    </div>
                
                </nav>
            </div>