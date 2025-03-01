

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light py-3" id="my_navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html"><span class="fw-bolder fs-4 text-primary">Let's farm&#128512;</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link" href="index.php">မူလစာမျက်နာ</a></li>
                <li class="nav-item"><a class="nav-link" href="resume.php">သီးနှံ</a></li>
                <li class="nav-item"><a class="nav-link" href="projects.php">ဆောင်းပါးနှင့်စာအုပ်စာစောင်များ</a></li>
                <li class="nav-item"><a class="nav-link" href="discussion.php">အမေးအဖြေ</a></li>
                <li class="nav-item"><a class="nav-link" href="crud.php">ဈေးနှုန်းပေါက်ဈေးများ</a></li>
                <li class="nav-item"><a class="nav-link" href="cost_estimate.php">စိုက်ပျိူးမည်</a></li>
                <li class="nav-item"><a class="nav-link" href="crud.php">websiteအသုံးပြုပုံ</a></li>
                <?php 
                    if(isset($_SESSION['userId'])){
                ?>
                        <li class="nav-item"><a class="nav-link" href="myprofile.php">myprofile</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php" onclick="return confirm('Are You sure you want to logout?');">logout</a></li>
                <?php
                    }
                    else{
                    ?>
                        <li class="nav-item"><a class="nav-link" href="login.php">login</a></li>
                    <?php
                    }
                ?>
                
            </ul>
        </div>
    </div>
</nav>