<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once './inc/head.php' ?>
  </head>
  <body>
    <div class="grid">
    <?php include_once './inc/sidebar.php' ?>

      <div class="main-body">
        <div class="main-header header" id="header">
          <div class="banner-text">
            <h1 class="h1" id="banner-header">Mark Skobelevs</h1>
            <h2 class="banner-sub-header">Web Developer</h2>
          </div>
          <div class="scroll-container-top">
            <a href="#container-top" class="scroll-down"
              >Scroll down <br /><span class="icon-arrow-down-thick"></span
            ></a>
          </div>
        </div>
        <!-- Projects -->

          <div class="container" id="container-top">
            <div class="h2" id="Portfolio"><h2>My Portfolio</h2></div>
            <div class="project-grid">
             <div class="project-grid-col-1">
              <div class="project-1 article-container">
                <div class="contents-container">
                  <div class="project-image">
                    <img src="images/netmatters.png" alt="placeholder" />
                  </div>
                  <div class="icons">
                    <span class="icon-php"></span>
                    <span class="icon-mysql"></span>
                    <span class="icon-javascript"></span>
                    <span class="icon-html5"></span>
                    <span class="icon-sass"></span>
                    <span class="icon-css3"></span>
                  </div>

                </div>
              </div>
            </div>
            <div class="contents">
              <div class="container-h3"><h3>Netmatters Webpage</h3></div>
              <div class="project-text">
                <p>
                  Mirrored replica of the Netmatters website from scratch
                  with client and server side validation.
                </p>
              </div>

              <!-- GO DOWNLOAD ICONS -->
              <div class="goToLinks">
                <a
                  target="_blank"
                  href="https://netmatters.mark-skobelevs.netmatters-scs.co.uk/"
                  ><div class="viewlink">
                    <span class="viewlink-click"
                      >View Project</span></div
                ></a>
                <a
                  target="_blank"
                  href="https://markiiiikram.github.io/Netmatters-Replica-HTML-CSS//"
                  ><div class="viewlink">
                    <span class="viewlink-click"
                      >View Repository </span
                    ></span></div
                ></a>
              </div>
            </div>
            <div class="project-grid-col-2">
              <div class="project-2 article-container">


                <div class="contents-container">
                  <div class="project-image">
                    <img src="images/js-array.png" alt="JS Array" />
                  </div>
                  <div class="icons">
                    <span class="icon-javascript"></span>
                    <span class="icon-html5"></span>
                    <span class="icon-sass"></span>
                    <span class="icon-css3"></span>
                  </div>

                </div>
              </div>
            </div>
            <div class="contents col-1">
              <div class="container-h3"><h3>Image Fetch Array</h3></div>
              <div class="project-text">
                <p>
                  Created an image API system to store images for multiple emails, with a lightbox viewer and client-side validation.
                </p>
              </div>
              <!-- GO DOWNLOAD ICONS -->
              <div class="goToLinks">
                <a
                  target="_blank"
                  href="https://js-array.mark-skobelevs.netmatters-scs.co.uk/"
                  ><div class="viewlink">
                    <span class="viewlink-click"
                      >View Project</span></div
                ></a>
                <a
                  target="_blank"
                  href="https://github.com/markiiiikram/JS-Array"
                  ><div class="viewlink">
                    <span class="viewlink-click"
                      >View Repository </span
                    ></span></div
                ></a>
              </div>
            </div>
            </div>
          </div>
          <!-- Form -->
        <?php include 'inc/contact.php'?>
        </div>
      </canvas>
      </div>
    </div>
  <?php include './inc/script.php'?>
  </body>
</html>
