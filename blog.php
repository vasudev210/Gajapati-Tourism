<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="Website Icon" type="png" href="images/f-i-4.png">
    <title>Gajapati Tourism</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="style.css" rel="stylesheet">
    <link href="content.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="header-bar">
            <nav>
                <a href="#" class="logo"><i class="fa fa-space-shuttle"></i>Tourism</a>
                <label for="toggle"><i class="fa fa-bars"></i></label>
                <div class="menu">
                    <ul>
                        <li><a href="entry.html"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="blog.php"><i class="fa fa-camera-retro"></i>Blog</a></li>
                        <li><a href="about.html"><i class="fa fa-tasks"></i>About</a></li>
                        <li><a href="index.html"><i class="fa fa-sign-out"></i>Log out</a></li>
                    </ul>
                </div>

            </nav>
        </div>
    </header>
    <div class="main_3">
        <div class="upload">
            <div class="mssg">
                <form action="saveimage.php" method="POST" enctype="multipart/form-data">
                    <div class="input-group">
                        <label for="post-image">Upload Image:</label>
                        <input type="file" id="post-image" name="image">
                    </div>
                    <div class="input-group">
                        <label for="post-content">Post Content:</label>
                        <textarea class="textpost" id="post-content" name="name"
                            placeholder="type your text here..."></textarea>
                    </div>
                    <input type="submit" name="submit" value="Upload">
                </form>
            </div>
        </div>

        <div class="post-content">
            <h2>Blog post</h2>

            <div>

                <?php 
				include('conn.php');
				$query = "SELECT * FROM images";
				$result = $conn->query($query);
				$x = 1;
				while ($row = $result->fetch_assoc()) {
			?>
                <div class="post-content">
                    <div><img height="200px" src="data:image/;base64,<?php echo base64_encode($row['image']); ?>">
                    </div>
                    <!-- <div><img height="200px" src="data:assets;base64,<?php echo base64_encode($row['image']); ?>">
                    </div> -->
                    <div class="post-content">
                        <h4 class="table"><?php echo $row['name'] ?></h4>
                    </div>
                </div>
                <?php $x++; } ?>

            </div>
        </div>


    </div>

    <footer class="footer">
        <ul class="social-icon">
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                    <i class="fa-brands fa-facebook"></i>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                    <i class="fa-brands fa-square-twitter"></i>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                    <i class="fa-brands fa-linkedin"></i>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                    <i class="fa-brands fa-square-instagram"></i>
                </a></li>
        </ul>
        <ul class="menu-2">
            <li class="menu__item"><a class="menu__link" href="entry.html">Home</a></li>
            <li class="menu__item"><a class="menu__link" href="teams.html">Teams</a></li>
            <li class="menu__item"><a class="menu__link" href="place.html">Services</a></li>
            <li class="menu__item"><a class="menu__link" href="contact.html">Contact Us</a></li>
            <li class="menu__item"><a class="menu__link" href="policy.html">PRIVACY AND POLICY</a></li>
            <li class="menu__item"><a class="menu__link" href="terms.html">TERMS AND CONDITIONS</a></li>

        </ul>
        <p>Copyright &copy; 2023 Gajapati Tourism | All Rights Reserved</p>
    </footer>

</body>

</html>