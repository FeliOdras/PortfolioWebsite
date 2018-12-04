
<!-- I have added a class to body here so I can address elements that need a special style only on the frontpage (for example the header here)-->
<body class="frontpage">
    <!-- This container wraps the whole content -->
    <div id="main-container">
        <?php 
            include 'navigationFront.php'; 
            include 'mainHeader.php'; 
        ?>
        <!-- Start of Main Section -->
        <main>
            <!-- Page Title - Headline displayed between Header and Main Content -->
            <h2 class="pagetitle alignleft "><?php echo $pageTitle ?></h2>