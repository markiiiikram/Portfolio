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
            <h1 class="h1" id="banner-header">
              Proficient,<br />
              Dynamic,<br />
              Tenacious.
            </h1>
          </div>
          <div class="scroll-container-top">
            <a href="#container-top" class="scroll-down"
              >Scroll down <br /><span class="icon-arrow-down-thick"></span
            ></a>
          </div>
        </div>

        <!-- Projects -->
        <div class="container" id="container-top">
          <div class="h2"><h2>A Little Bit About Me</h2></div>
          <div class="coding-grid">
            <div class="coding-grid-col-1">
              <div class="coding-1 article-container">
                <div class="about-me-container">
                  <div class="about-me-text">
                    <p>
                      Hey there! 👋 Former teacher turned enthusiastic coder,
                      currently refining my craft as a Fullstack Developer at
                      Netmatters. Armed with a versatile toolkit encompassing
                      PHP, SQL, JavaScript, SASS, and HTML5, I'm crafting
                      digital solutions that captivate and inspire.
                      <br /><br />
                      Transitioning from the classroom to the codebase, I'm
                      fueled by a passion for exploration and a hunger for
                      knowledge. Join me as we embark on a journey of discovery,
                      navigating through the ever-evolving landscape of
                      technology and pushing boundaries along the way!
                      <br /><br />
                      Outside of coding, I love diving into new subjects, gaming, and experimenting with projects.
                      Whether it's learning a new language, mastering the latest game, or starting a new project,
                      I'm always eager for new challenges. Let's chat about our latest discoveries and gaming triumphs!


                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Form -->
          <?php include 'inc/contact.php'?>
        </div>
      </div>
    </div>
    <?php include './inc/script.php'?>
  </body>
</html>
