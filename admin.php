<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<?php

    require_once('./API/users/readAllUsers.php');
    ?> <h1>Table utilisateurs</h1> <?php
    foreach($result as $users){

        ?><ul>
            <li><?php echo $users['id']; ?></li>
            <li><?php echo $users['lastName']; ?></li>
            <li><?php echo $users['firstName']; ?></li>
            <li><?php echo $users['email']; ?></li>
            <li><?php if(!empty($users['phone'])) echo $users['phone']; ?></li>
            <li><?php echo $users['password']; ?></li>
        </ul>
        <script>

        $(document).ready(function() { 
            $(".update<?php echo $users['id'] ?>").click(function() {
                document.cookie = "updateId = <?php echo $users['id']; ?>";
        });
    });
    </script>
    <a class="update<?php echo $users['id'] ?>" href="./API/users/updateUsers"  >Modifier</a>
    <a class="update<?php echo $users['id'] ?>" href="./API/users/deleteUsers"  >Supprimer</a>

    <?php  
    } ?> <br><br><a class="update<?php echo $users['id'] ?>" href="./API/users/createUsers"  >Ajouter</a> <?php

    require_once('./API/advertisements/readAllAdvertisements.php');
    ?> <h1>Table annonçes</h1> <?php
    foreach($result as $advertisements){

        ?><ul>
            <li><?php echo $advertisements['id']; ?></li>
            <li><?php echo $advertisements['companieName']; ?></li>
            <li><?php echo $advertisements['companieLocalisation']; ?></li>
            <li><?php echo $advertisements['advertisementsDate']; ?></li>
            <li><?php echo $advertisements['postName']; ?></li>
            <li><?php echo $advertisements['contractType']; ?></li>
            <li><?php echo $advertisements['mission']; ?></li>
            <li><?php echo $advertisements['formation']; ?></li>
            <li><?php echo $advertisements['quality']; ?></li>
            <li><?php echo $advertisements['workTime']; ?></li>
            <li><?php echo $advertisements['experience']; ?></li>
            <li><?php echo $advertisements['salary']; ?></li>
            <li><?php echo $advertisements['telework']; ?></li>
        </ul>
        <script>

            $(document).ready(function() { 
                $(".update<?php echo $advertisements['id'] ?>").click(function() {
                    document.cookie = "updateId = <?php echo $advertisements['id']; ?>";
            });
        });
        </script>
        <a class="update<?php echo $advertisements['id'] ?>" href="./API/advertisements/updateAdvertisements"  >Modifier</a>
        <a class="update<?php echo $advertisements['id'] ?>" href="./API/advertisements/deleteAdvertisements"  >Supprimer</a>
        
        
    <?php
    } ?> <br><br><a class="update<?php echo $advertisements['id'] ?>" href="./API/advertisements/createAdvertisements"  >Ajouter</a> <?php

    require_once('./API/companies/readAllCompanies.php');
    ?> <h1>Table entreprises</h1> <?php
    foreach($result as $companies){

        ?><ul>
            <li><?php echo $companies['id']; ?></li>
            <li><?php echo $companies['name']; ?></li>
            <li><?php echo $companies['activitySector']; ?></li>
            <li><?php echo $companies['description']; ?></li>
        </ul>
        <script>

            $(document).ready(function() { 
                $(".update<?php echo $companies['id'] ?>").click(function() {
                    document.cookie = "updateId = <?php echo $companies['id']; ?>";
            });
        });
        </script>
        <a class="update<?php echo $companies['id'] ?>" href="./API/companies/updateCompanies"  >Modifier</a>
        <a class="update<?php echo $companies['id'] ?>" href="./API/companies/deleteCompanies"  >Supprimer</a>
        
    <?php  
    } ?> <br><br><a class="update<?php echo $companies['id'] ?>" href="./API/companies/createCompanies"  >Ajouter</a> <?php

    require_once('./API/jobApplication/readAllJobApplication.php');
    ?> <h1>Table demande d'emplois</h1> <?php
    foreach($result as $jobApplication){

        ?><ul>
            <li><?php echo $jobApplication['id']; ?></li>
            <li><?php echo $jobApplication['firstName']; ?></li>
            <li><?php echo $jobApplication['lastName']; ?></li>
            <li><?php echo $jobApplication['email']; ?></li>
            <li><?php echo $jobApplication['phone']; ?></li>
            <li><?php echo $jobApplication['companieName']; ?></li>
            <li><?php echo $jobApplication['emailSent']; ?></li>
        </ul>
        <script>

            $(document).ready(function() { 
                $(".update<?php echo $jobApplication['id'] ?>").click(function() {
                    document.cookie = "updateId = <?php echo $jobApplication['id']; ?>";
            });
        });
        </script>
        <a class="update<?php echo $jobApplication['id'] ?>" href="./API/jobApplication/updateJobApplication"  >Modifier</a>
        <a class="update<?php echo $jobApplication['id'] ?>" href="./API/jobApplication/deleteJobApplication"  >Supprimer</a>
        
    <?php  
    } ?> <br><br><a class="update<?php echo $jobApplication['id'] ?>" href="./API/jobApplication/createJobApplication"  >Ajouter</a> <?php


?>