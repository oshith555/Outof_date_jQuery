<?php
// Get search query (vulnerable to XSS)
$search = isset($_POST['search']) ? $_POST['search'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Monster Hunter World</title>
  <!-- Outdated jQuery for XSS vulnerability -->
  <script src="https://code.jquery.com/jquery-1.8.3.min.js"></script>
  <link rel="stylesheet" href="tryhackme.css">
</head>
<body>
  <div class="container">
    <header>
      <h1>Monster Hunter World</h1>
      <p class="subtitle">
        Monster Hunter: World is a 2018 action role-playing game developed and published by Capcom. The fifth mainline installment in the Monster Hunter series, it was released worldwide for PlayStation 4 and Xbox One in January 2018, with a Windows version following in August 2018.
      </p>
      <img src="https://pplx-res.cloudinary.com/image/private/user_uploads/leOTstclcfPHmyl/image.jpg" alt="Monster Hunter World Main" class="main-img">
    </header>

    <section class="search-section">
      <form id="searchForm" method="POST" autocomplete="off">
        <input type="text" id="searchInput" name="search" placeholder="Search the site...">
        <button type="submit">Search</button>
      </form>
      <div id="searchResult">
        <?php
          // Vulnerable: Directly echoing user input (XSS possible)
          if($search !== '') {
            echo "You searched for: " . $search;
          }
        ?>
      </div>
    </section>

    <section class="gallery">
      <h2>Gallery</h2>
      <div class="images">
        <div class="img-block">
          <img src="https://pplx-res.cloudinary.com/image/private/user_uploads/leOTstclcfPHmyl/image.jpg" alt="Monster Hunter Image 1">
          <p>ppppppppppppp</p>
        </div>
        <div class="img-block">
          <img src="https://pplx-res.cloudinary.com/image/private/user_uploads/msZLUSOHAffirqu/image.jpg" alt="Monster Hunter Image 2">
          <p>ppppppppppppp</p>
        </div>
        <div class="img-block">
          <img src="https://pplx-res.cloudinary.com/image/private/user_uploads/IxvwtWKsmkWZWax/image.jpg" alt="Monster Hunter Image 3">
          <p>ppppppppppppp</p>
        </div>
        <div class="img-block">
          <img src="https://pplx-res.cloudinary.com/image/private/user_uploads/29695278/QVxyGHqROxLHvwz/image.jpg" alt="Monster Hunter Image 4">
          <p>ppppppppppppp</p>
        </div>
      </div>
    </section>
  </div>

  <footer>
    <div class="footer-content">
      <p>Gmail: <a href="mailto:monsterhunterworld@gmail.com">monsterhunterworld@gmail.com</a></p>
      <p>Contact: +1-234-567-8901</p>
      <p>About: We are passionate Monster Hunter fans sharing news, guides, and images for the community!</p>
    </div>
  </footer>
</body>
</html>
