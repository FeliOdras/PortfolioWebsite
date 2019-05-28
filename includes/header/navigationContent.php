        <!-- Start of Main Navigation -->
        <nav id="main-navigation" class="main-nav-default">
            <!-- I used the class "hmenu" here to make clear that this is an horizontal menu. The styles are provided in my custom stylesheet -->
            <ul class="hmenu">
                <li>
                    <a href="index.php" title="Ariane Feldmann | Senior HTML/CSS-Developer - Junior JavaScrpt-Developer"><i class="fas fa-home"></i><span class="menuitemdesc">Welcome</span></a>
                </li>
                <!-- List class 'hasChildren' indicates that this menu item has a sub-menu. I use this to display the down-angle in my navigation -->
                <li class="hasChildren <?= ($pageID == 'about') ? 'current':''; ?>">
                    <a href="about.php" title="Who am I - my Curriculum Vitae"><i class="fas fa-user-circle"></i><span class="menuitemdesc">About me</span></a>
                    <!-- 
                        I used a nested lists here to display my sub menues. The main navigation items refer to different HTML documents while my submenu items refer to anchors/bookmarks on that specific subpage of my project. 
                        -->
                    <!-- Start sub-menu 'About me' -->
                    <ul class="sub-menu">
                        <li><a href="about.php#education" title="What I learned. Where I learned.">Education</a></li>
                        <li><a href="about.php#workexperience" title="Where I worked and what I did there">Work Experience</a></li>
                        <li><a href="about.php#personal" title="Other things worth to know about me">Personal</a></li>
                    </ul>
                    <!-- End sub-menu 'About me' -->
                </li>
                <li class="hasChildren <?= ($pageID == 'skills') ? 'current':''; ?>"><a href="skills.php" title="How I can help you - Skills and Competences"><i class="fas fa-graduation-cap"></i><span class="menuitemdesc">Skills</span></a>
                   <!-- Start sub-menu 'Skills' -->
                    <ul class="sub-menu">
                        <li><a href="skills.php#coding" title="Webtechnologies, Programming Langugages">Web Development</a></li>
                        <li><a href="skills.php#cms" title="Content Management Systems I have worked with">CMS</a></li>

                        <li><a href="skills.php#grafic" title="Image editing and desktop publishing software">Graphic Design</a></li>
                        <li><a href="skills.php#languages" title="Languages I know to speak">Languages</a></li>
                    </ul>
                    <!-- End sub-menu 'Skills' -->
                </li>
                <li class="<?= ($pageID == 'projects') ? 'current':''; ?>"><a href="projects.php" title="What I did - selected projects and references of mine"><i class="fas fa-laptop-code"></i><span class="menuitemdesc">Projects</span></a>
                </li>
                <li><a href="contact.php" title="How to get in touch with me" class="<?= ($pageID == 'contact') ? 'current':''; ?>"><i class="fa fa-paper-plane"></i><span class="menuitemdesc">Contact</span></a></li>
            </ul>
        </nav>
        <!-- End of Main Navigation -->