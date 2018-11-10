        <!-- Start of Main Navigation -->
        <nav id="main-navigation" class="main-nav-default">
            <!-- I used the class "hmenu" here to make clear that this is an horizontal menu. The styles are provided in my custom stylesheet -->
            <ul class="hmenu">
                <li>
                    <a href="index.php" title="Ariane Feldmann | Senior HTML/CSS-Developer - Junior JavaScrpt-Developer">Welcome</a>
                </li>
                <!-- List class 'hasChildren' indicates that this menu item has a sub-menu. I use this to display the down-angle in my navigation -->
                <li class="hasChildren <?= ($pageID == 'about') ? 'current':''; ?>">
                    <a href="about.php" title="Who am I - my Curriculum Vitae">About me</a>
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
                <li class="hasChildren <?= ($pageID == 'skills') ? 'current':''; ?>"><a href="skills.html" title="How I can help you - Skills and Competences">Skills</a>
                   <!-- Start sub-menu 'Skills' -->
                    <ul class="sub-menu">
                        <li><a href="skills.html#coding" title="Webtechnologies, Programming Langugages">Web Development</a></li>
                        <li><a href="skills.html#cms" title="Content Management Systems I have worked with">CMS</a></li>

                        <li><a href="skills.html#grafic" title="Image editing and desktop publishing software">Graphic Design</a></li>
                        <li><a href="skills.html#languages" title="Languages I know to speak">Languages</a></li>
                    </ul>
                    <!-- End sub-menu 'Skills' -->
                </li>
                <li class="hasChildren <?= ($pageID == 'projects') ? 'current':''; ?>"><a href="projects.html" title="What I did - selected projects and references of mine">Code &amp; Projects</a>
                    <!-- Start sub-menu 'Projects and Code' -->
                     <ul class="sub-menu">
                        <li><a href="projects.html#code" title="Some HTML/CSS Tricks">HTML/CSS</a></li>
                        <li><a href="projects.html#themes" title="Website Projects, Theme- and Template Development">WordPress</a></li>
                        <li><a href="projects.html#javascript" title="Javascript Projects inkl. EgmaScript, Node and React">JavaScript</a></li>
                        <li><a href="https://github.com/FeliOdras?tab=repositories" title="My Github Repository" target="_blank">Code on Github</a></li>
                    </ul>
                    <!-- End sub-menu 'Projects and Code' -->
                </li>
                <li><a href="contact.html" title="How to get in touch with me" class="<?= ($pageID == 'contact') ? 'current':''; ?>">Contact</a></li>
            </ul>
        </nav>
        <!-- End of Main Navigation -->