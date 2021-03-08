<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="To achieve excellent standards of quality education by keeping pace with rapidly changing technologies & create computer professionals of global standards with capabilities of accepting new challenges.">
    <meta name="keywords" content="SCSIT, INDORE, DAVV, COMPUTER SCIENCE, COLLEGE">
    <meta name="author" content="scsit davv">
    <title>Scsit Davv</title>
    <link rel="icon" href="./images/logo.png" type="image/png" sizes="16x16">
    <!-- SCRIPTS START   -->
    <?php include './includes/scriptincludes.php';?>
    <!-- SCRIPTS END -->
</head>


<style>
.content-left img {
    min-height: auto;
    height: 200px;
    width: 250px;
    object-fit: initial;
}

.books-items .item {
    display: flex;
    flex-direction: row;

}

@media (max-width: 600px) {

    .books-items .item {
        display: initial;
        flex-direction: row;

    }
}
</style>

<body>

    <div class="root">
        <!-- HEADER START   -->
        <?php include './includes/header.php';?>
        <!-- HEADER END -->

        <div class="page-title"></div>

        <!-- main content area -->
        <div class="primary-container">
            <div class="main-content-area" id="main-content-area">
                <div class="content-left padding-border">
                    <!-- ADD NEW CONTENT DOWN HERE -->
                    <h1> Research Fellowship</h1>
                    <!-- <p style="text-align:center"> Presently following research scholars are working as JRF/SRF through
                        UGC/CSIR:</p> -->

                    <div class="books-items">
                        <div class="item" style="">
                            <div class="faculty-card">
                                <img loading="lazy" src="./images/ResearchFellowship/Mr. Devesh K. Lal.jpg"
                                    alt="Avatar" />
                                <p>Mr. Devesh K. Lal</p>
                            </div>
                            <div class="faculty-card-container" style="margin-top: 30px;">
                                <h4><b>Senior Research Fellowship (SRF)</b></h4>
                                <br>
                                <p>He is currently working on Real-Time Big Data under the supervision of Dr.
                                    Ugrasen Suman.
                                </p>
                            </div>
                        </div>
                        <div class="item" style="">
                            <div class="faculty-card">
                                <img loading="lazy" src="./images/ResearchFellowship/Mr. Jitendra Gora.jpg"
                                    alt="Avatar" />
                                <p>Mr. Jitendra Gora</p>
                            </div>
                            <div class="faculty-card-container" style="margin-top: 30px;">
                                <h4><b>Junior Research Fellowship (JRF)</b></h4>
                                <br>
                                <p>He is currently working on Under Water Sensor Network (UWSN) under the
                                    supervision of Dr. Preeti Saxena and Dr. Sanjay Tanwani (Co-Supervisor)
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="sidebar content-right">
                    <div class="sidebar-content" id="sidebar">

                        <ul>
                            <a href="./DepartmentalResearchCommittee.php">
                                <li><span>🔗</span>Departmental Research Committee</li>
                            </a>
                            <a href="./ResearchSupervisors.php">
                                <li><span>🔗</span>Research Supervisors</li>
                            </a>
                            <a href="./Facilities.php">
                                <li><span>🔗</span>Facilities</li>
                            </a>
                            <a href="./Publications.php">
                                <li><span>🔗</span>Publications</li>
                            </a>
                            <a href="./upcoming_events.php">
                                <li><span>🔗</span>Seminars, Workshops & Conferences</li>
                            </a>
                            <a href="./CodeEthicsResearch.php">
                                <li><span>🔗</span>Code of Ethics</li>
                            </a>

                        </ul>

                        <!-- SIDEBAR LINKS START   -->
                        <?php include './includes/sidebarlinks.php';?>
                        <!-- SIDEBAR LINKS END -->

                    </div>
                </div>
            </div>
        </div>


        <!-- FOOTER START   -->
        <?php include './includes/footer.php';?>
        <!-- FOOTER END -->

    </div>


</body>

</html>