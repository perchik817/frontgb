<?php

$data = require_once('data.php');
$startData = $data['about'];
$skillsData = $data['skills'];

?>

<!DOCTYPE html>

<html>

<head>

      <title>Мое резюме</title>

      <meta charset="UTF-8">

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

      <link rel="preconnect" href="https://fonts.googleapis.com">

      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

      <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <style>
            html,
            body,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                  font-family: 'Jost', sans-serif;
            }
      </style>

</head>

<body class="w3-light-grey">

      <!-- Page Container -->

      <div class="w3-content w3-margin-top" style="max-width:1400px;">

            <!-- The Grid -->

            <div class="w3-row-padding">

                  <!-- Left Column -->

                  <div class="w3-third">

                        <div class="w3-white w3-text-grey w3-card-4">

                              <div class="w3-display-container">

                                    <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">

                                    <div class="w3-display-bottomleft w3-container w3-text-black">

                                          <h2><?php echo $startData['name']; ?></h2>

                                    </div>

                              </div>

                              <div class="w3-container">

                                    <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $startData['profi']; ?></p>

                                    <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $startData['city'] ?></p>

                                    <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $startData['email'] ?></p>

                                    <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $startData['phone'] ?></p>

                                    <p><i class="fa fa-hourglass-half fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $startData['age'] ?> лет (<?php echo $startData['days'] ?> дней)</p>

                                    <hr>

                                    <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>

                                    <p><?php echo $skills['skill_name'][0]; ?></p>

                                    <div class="w3-light-grey w3-round-xlarge w3-small">

                                          <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][0]; ?>%"><?php echo $skills['level'][0]; ?>%</div>

                                    </div>

                                    <p><?php echo $skills['skill_name'][1]; ?></p>

                                    <div class="w3-light-grey w3-round-xlarge w3-small">

                                          <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][1]; ?>%">

                                                <div class="w3-center w3-text-white"><?php echo $skills['level'][1]; ?>%</div>

                                          </div>

                                    </div>

                                    <p><?php echo $skills['skill_name'][2]; ?></p>

                                    <div class="w3-light-grey w3-round-xlarge w3-small">

                                          <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][2]; ?>%"><?php echo $skills['level'][2]; ?>%</div>

                                    </div>

                                    <p><?php echo $skills['skill_name'][3]; ?></p>

                                    <div class="w3-light-grey w3-round-xlarge w3-small">

                                          <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][3]; ?>%"><?php echo $skills['level'][3]; ?>%</div>

                                    </div>

                                    <br>

                                    <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>

                                    <p>Английский</p>

                                    <div class="w3-light-grey w3-round-xlarge">

                                          <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>

                                    </div>

                                    <p>Испанский</p>

                                    <div class="w3-light-grey w3-round-xlarge">

                                          <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>

                                    </div>

                                    <p>Немецкий</p>

                                    <div class="w3-light-grey w3-round-xlarge">

                                          <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>

                                    </div>

                                    <br>

                              </div>

                        </div><br>

                        <!-- End Left Column -->

                        <div class="w3-container w3-card w3-white w3-margin-bottom">
                              <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
                              <div class="w3-container">
                                    <h5 class="w3-opacity"><b>
                                                <?php echo $job['job_name'][0]; ?>
                                          </b></h5>
                                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
                                          <?php echo $job['job_data'][0]; ?>
                                    </h6>
                                    <p>
                                          <?php echo $job['job_desc'][0]; ?>
                                    </p>
                                    <hr>
                              </div>
                              <div class="w3-container">
                                    <h5 class="w3-opacity"><b>
                                                <?php echo $job['job_name'][1]; ?>
                                          </b></h5>
                                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
                                          <?php echo $job['job_data'][1]; ?>
                                    </h6>
                                    <p>
                                          <?php echo $job['job_desc'][1]; ?>
                                    </p>
                                    <hr>
                              </div>
                              <div class="w3-container">
                                    <h5 class="w3-opacity"><b>
                                                <?php echo $job['job_name'][2]; ?>
                                          </b></h5>
                                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
                                          <?php echo $job['job_data'][2]; ?>
                                    </h6>
                                    <p>
                                          <?php echo $job['job_desc'][2]; ?>
                                    </p><br>
                              </div>
                        </div>