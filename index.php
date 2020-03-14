<?php

/**
 * This file is part of the coronavirusinfections.org project.
 * 
 * @author Valentino Pesce
 * @copyright (c) Valentino Pesce <valentino@iltuobrand.it>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require 'vendor/autoload.php';

$host = "http://$_SERVER[HTTP_HOST]";

$updateDate = '13 March 2020';

$nextUpdate = '10 AM CET 15 March 2020'; 

$contagionDays = count(glob(dirname(__FILE__) . '/data/csv/reports/*'));

include('includes/head.php');

?>

<body>
    
    <?php include('includes/nav.php'); ?>

    <div class="container text-dark text-center">
        
        <?php include('includes/heading.php'); ?>

        <?php include('includes/form-by-date.php'); ?>   

        <?php include('includes/table.php'); ?>     

        <?php include('includes/data-graph.php'); ?>  

        <hr style="background:#343a40">
            
        <?php include('includes/protective-measures.php'); ?> 

        <?php include('includes/blockquote-who.php'); ?>    

        <hr style="background:#343a40">

        <?php include('includes/blockquote-data.php'); ?> 

        <p class="float-right">
            <a href="#">Back to top</a>
        </p>

    </div>

    <?php include('includes/footer.php'); ?> 

    <?php include('includes/script.php'); ?>

</body>

</html>
