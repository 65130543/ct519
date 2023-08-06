<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Hobbies 543</title>
<meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Hobbies 543</title>
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
                     <a href="My.html">About</a>
                     <a href="electronic.html">Research</a>
                     <a href="jewellery.html">My Hobbies</a>
                  </div>
                 
                  
               </div>
            </div>
         </div>
</header>
    <main>
        <div class="content">
            <h2>Reading Hobbies</h2>
            <div class="formbold-main-wrapper">
                <!-- FormBold Form -->
                <div class="formbold-form-wrapper">
                    <form action="update.php" method="POST" enctype="multipart/form-data">
                        <div class="formbold-input-flex">
                            <div>
                                <label for="firstname" class="formbold-form-label"> ชื่อผู้แต่ง </label>
                                <input
                                    type="text"
                                    name="firstname"
                                    id="firstname"
                                    placeholder="Your first name"
                                    class="formbold-form-input"
                                />
                            </div>
                            <div>
                                <label for="lastname" class="formbold-form-label"> นามสกุล </label>
                                <input
                                    type="text"
                                    name="lastname"
                                    id="lastname"
                                    placeholder="Your last name"
                                    class="formbold-form-input"
                                />
                            </div>
                        </div>
                        <div class="formbold-input-flex">
                            <div>
                                <label for="email" class="formbold-form-label"> Email </label>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    placeholder="example@email.com"
                                    class="formbold-form-input"
                                />
                            </div>
                            <div>
                                <label class="formbold-form-label">เพศ</label>
                                <select class="formbold-form-input" name="gender" id="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="formbold-mb-3">
                            <label for="message" class="formbold-form-label">
                                รายละเอียดหนังสือ
                            </label>
                            <textarea
                                rows="6"
                                name="message"
                                id="message"
                                class="formbold-form-input"
                            ></textarea>
                        </div>
                        <div class="formbold-form-file-flex">
                            <label for="upload" class="formbold-form-label">
                                 อัพโหลดภาพ
                            </label>
                            <input
                                type="file"
                                name="upload"
                                id="upload"
                                class="formbold-form-file"
                            />
                        </div>
                        <button class="formbold-btn" type="submit">Apply Now</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- Other sections and scripts go here -->
</body>
</html>
