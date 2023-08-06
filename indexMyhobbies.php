<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Eflyer</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="styles.css">
   </head>
   <body>
      <!-- banner bg main start -->
      
<body>
    <header>
    <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li><a href="index.html">Home</a></li>
                           <li><a href="contact.html">About</a></li>
                           <li><a href="research.html">Research</a></li>
                           <li><a href="indexMyhobbies.php">My Hobbies</a></li>
                     
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="index.html">Home</a>
                     <a href="contact.html">About</a>
                     <a href="research.html">Research</a>
                     <a href="indexMyhobbies.php">My Hobbies</a>
                  </div>
                 
                  
               </div>
            </div>
         </div>
         
</header>
    <main>
        <div class="content">
            <!-- Your form code goes here -->
        </div>
        <div class="crud-table">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ชื่อผู้แต่ง</th>
                        <th>นามสกุล</th>
                        <th>Email</th>
                        <th>เพศ</th>
                        <th>รายละเอียดหนังสือ</th>
                        <th>ภาพ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $servername = "db";
		    $username = "admin";
		    $password = "65130543";
    		    $dbname = "hobbies_db";

                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM reading_hobbies";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row["id"] . '</td>';
                            echo '<td>' . $row["firstname"] . '</td>';
                            echo '<td>' . $row["lastname"] . '</td>';
                            echo '<td>' . $row["email"] . '</td>';
                            echo '<td>' . $row["gender"] . '</td>';
                            echo '<td>' . $row["message"] . '</td>';
                            echo '<td><img src="' . $row["resume_path"] . '" alt="Resume" width="100"></td>';
                            echo '<td><a href="' . $row["resume_path"] . '">Click Full</a></td>';
                            echo '<td><a href="updatedata.php?id=' . $row["id"] . '" class="update-button">Update</a></td>';
                            echo '<td><a href="delete.php?id=' . $row["id"] . '" class="delete-button">Delete</a></td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="7">No data available.</td></tr>';
                    }

                    $conn->close();
                    ?>
                </tbody>
                
            </table>
            <center>
            <div class="add-button">
            <a href="Myhobbies.php" class="add-button-link" style="color: white;">เพิ่มใหม่</a>
    </div> </center>
        </div>
    </main>
    <!-- Other sections and scripts go here -->
</body>
</html>