
        
        <a id="back2Top" title="Back to top" href="#">&#10148;</a>

        <?php
                if(isset($webpage)):
                        if($webpage == 'index' || $webpage == 'createAds' || $webpage=='manageAds'):
                                include_once('footer-content.php');
                        endif;
                        
                endif;

        ?>


       

        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.bundle.js"></script>
        <script src="bootstrap/js/jqueryFx.js"></script>

        <?php
                if(isset($webpage)):
                        if($webpage == 'approve'):
                                echo "<script src='bootstrap/js/approve.js'></script>";
                        endif;
                        if($webpage == 'createAds'):
                                echo "<script src='bootstrap/js/createAds.js'></script>";
                        endif;
                endif;
        ?>
    
</body>
</html>