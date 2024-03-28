<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include_once './inc/head.php' ?>
  </head>
  <body>
    <div class="grid">
       <?php include_once './inc/sidebar.php' ?>
      <div class="main-body">
        <!-- Banner image -->
        <div class="header" id="header">
          <div class="banner-text">
            <h1 class="h1" id="banner-header">SCS-Scheme</h1>
          </div>

          <div class="scroll-container-top">
            <a href="#container-top" class="scroll-down"
              >Scroll down <br /><span class="icon-arrow-down-thick"></span
            ></a>
          </div>
        </div>

        <!-- Projects -->
        <div class="container" id="container-top">
          <div class="h2 h2-scs">
            <h2>Introduction to Scion Coalition Scheme</h2>
          </div>
          <div class="intro-text">
            <p class="intro-p">
              The Scion Coalition Scheme is an intensive, specially tailored
              training program run by Netmatters in order to give willing
              candidates the opportunity to enter the industry as web
              developers. Under the supervision of senior web developers, scions
              generally aim to complete training within six to nine months. The
              course is intensive and therefore the level of learning achieved
              is extensive in a short space of time.
            </p>
            <a
              target="_blank"
              href="https://www.netmatters.co.uk/scions-coalition-scheme"
              ><div class="viewlink">
                <span class="viewlink-click"
                  >Find Out More<span class="icon-arrow-right1"> </span
                ></span></div
            ></a>
          </div>
          <div class="scs-scheme-grid">
            <div class="scs-scheme-col-1">
              <div class="scs-scheme-1 article-container">
                <div class="contents-container">
                  <div class="container-h3"><h3>Treehouse</h3></div>
                  <img
                    src="images/treehouse.png"
                    alt="TeamTreeHouse logo"
                    class="image" />
                  <div class="container-text">
                    <p>
                      Treehouse is an online learning community, featuring
                      videos covering a number of topics from basic HTML to C#
                      programming, iOS development, data analysis, and more. By
                      completing courses users can earn points, allowing them to
                      track their progress and see how much they've covered in
                      certain areas.
                    </p>
                    <br />
                    <!-- GO DOWNLOAD ICONS -->
                    <a
                      target="_blank"
                      href="https://teamtreehouse.com/markskobelevs2"
                      ><div class="viewlink">
                        <span class="viewlink-click"
                          >Check My Score<span class="icon-arrow-right1"> </span
                        ></span></div
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="scs-scheme-2 article-container">
              <div class="contents-container">
                <div class="container-h3"><h3>About Netmatters</h3></div>
                <img
                  src="images/netmatterslogo-fotor-bg-remover-2024011611259.png"
                  alt="Netmatters logo"
                  class="image" />
                <div class="container-text">
                  <p>
                    Established in 2008, Norfolk's leading technology company is
                    the winner of the Princess Royal Training Award as well as
                    the EDP Skills of Tomorrow Award. With over 80 staff
                    members, the company operates from two locations across
                    Norfolk. They specialize in digital marketing, website and
                    software development, and IT support. Serving a broad
                    spectrum of clients, the company works nationwide and
                    adheres to strict company values.
                  </p>
                  <br />
                </div>
                <!-- GO DOWNLOAD ICONS -->
                <a target="_blank" href="https://www.netmatters.co.uk/"
                  ><div class="viewlink">
                    <span class="viewlink-click"
                      >Find Out More<span class="icon-arrow-right1"> </span
                    ></span></div
                ></a>
              </div>
            </div>
          </div>
          <?php include 'inc/contact.php'?>
        </div>
      </div>
    </div>
    <?php include './inc/script.php'?>
  </body>
</html>
