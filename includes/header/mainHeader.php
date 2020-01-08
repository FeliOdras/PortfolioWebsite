        <!-- Start of Header Section -->
        <header id="main-header">
            <!-- Start of Title Section in Header -->
            <?= ($pageID == 'index') ? '<img src="images/ari-portrait.jpg" class="roundimg imgright profilepic" alt="Ariane Feldmann">
            ':''; ?> 
            <section id="title">
                <h1>Ariane Feldmann<br>
                    <small>Frontend.Developer by passion...</small></h1>
                <?php if ($pageID=='index') {
                    include 'headerTechs.php';
                }
                else {
                    echo '<h2 id="header_subline">[HTML | CSS | Bootstrap | Wordpress | git | JavaScript | jQuery | React | Node]</h2>';
                }
                ?>
            </section>
            <!-- End of Title Section in Header -->
        </header>
        <!-- End of Header Section -->