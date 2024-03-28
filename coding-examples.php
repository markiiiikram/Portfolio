<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include_once './inc/head.php' ?>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/github-dark.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
  </head>
  <body>
    <div class="grid">
    <?php include_once './inc/sidebar.php' ?>
    <div class="main-body">
      <!-- Banner image -->
      <div class="header" id="header">
        <div class="banner-text">
          <h1 class="h1" id="banner-header">Coding Examples</h1>
        </div>
        <div class="scroll-container-top">
          <a href="#container-top" class="scroll-down"
            >Scroll down <br /><span class="icon-arrow-down-thick"></span
          ></a>
        </div>
      </div>

      <!-- Projects -->
      <div class="container" id="container-top">
        <div class="h2">
          <h2>Some of the code I've used and created whilst studying</h2>
        </div>
        <div class="coding-grid">
          <div class="coding-grid-col-1">
            <div class="coding-1">
              <div class="coding-container">
                <h2>PHP - Server Side Form Validation </h2>
                <pre class="">
                    <code class="">
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Sanitize input
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $company_name = test_input($_POST["company_name"]);
      $message = test_input($_POST["message"]);
      $telephone = test_input($_POST["telephone"]);
      $marketing = isset($_POST['check-sup']) ? 1 : 0;
      // Validate name
      if (empty($name)) {
          $nameErr = "Name is required";
      }
      // Validate Email
      if (empty($email)) {
          $emailErr = "Email is required";
      } elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
          $emailErr = "Invalid email format";
      }
      // Validate telephone
      if (empty($telephone)) {
          $telephoneErr = "Telephone number is required";
      } elseif (!preg_match("/^\d+$/", $telephone)) {
          $telephoneErr = "The telephone format is incorrect.";
      } elseif(strlen($telephone)> 15){
          $telephoneErr = "Telephone number is too long";
      }
      // Validate message
      if (strlen($message) < 5) {
          $messageErr = "The message must be at least 5 characters long";
      }
  }

                    </code>
                </pre>
                <div class="comment">This code processes form submissions, ensuring that required fields are filled and have valid formats. It checks if the form is submitted via POST method, sanitizes input, validates fields like name, email, telephone, and message for correctness, and sets error messages if necessary. </div>

                <h2>Form Submission</h2>
                <pre>
                  <code>

if (empty($nameErr) && empty($emailErr) && empty($telephoneErr) && empty($messageErr)) {
    try {
        include "dbCon.php";
        $sql = "INSERT INTO contactus (name, company_name, email, telephone, message, marketing)
        VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            throw new Exception(mysqli_error($conn));
        }
        mysqli_stmt_bind_param($stmt, "sssssi", $name, $company_name, $email, $telephone, $message, $marketing);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        $successMessage = "Your Enquiry has been submitted.";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
                  </code>
                </pre>
                <div class="comment"> If there are no validation errors in the form data, this code inserts the sanitized form data into a database table. It connects to the database, prepares an SQL statement to insert the data, binds the sanitized values to the statement, executes it, and closes the statement and the database connection. If an error occurs during this process, it catches the exception and outputs an error message. Finally, if the insertion is successful, it displays a success message. </div>
              </div>
            </div>

            <div class="coding-grid-col-1">
              <div class="coding-1">
                <div class="coding-container">
                <h2>Javascript</h2>
                <pre class="">
                  <code class="">
  const form = document.getElementById('form');
  const errorElement = document.createElement('div');
  errorElement.id = 'error';
  errorElement.textContent = '';
  form.parentNode.insertBefore(errorElement, form);

  // Declare error messages in array
  form.addEventListener('submit', (e) => {
      const inputs = [
          { element: document.getElementById('name'), message: 'Please input your name' },
          { element: document.getElementById('surname'), message: 'Please input your surname' },
          { element: document.getElementById('email'), message: 'Please input a valid email' }
      ];

      let firstError = null;

      inputs.some(input => {
          if (input.element.value.trim() === '') {
              firstError = input.message;
              return true;
          }
          // Regex loop check for emails
          if (input.element === document.getElementById('email')) {
              const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
              if (!emailPattern.test(input.element.value.trim())) {
                  firstError = 'Please input a valid email';
                  return true;
              }
          }
      });

      // Prevent submission and display error
      if (firstError) {
          e.preventDefault();
          errorElement.textContent = firstError;
          errorElement.style.display = 'block';
      }
  });

                                    </code>
                                </pre>
                <div class="comment">
                  This JavaScript snippet facilitates form validation for the
                  contact form below. Initially, it targets the form element and
                  generates a div to showcase error messages. These messages are
                  positioned ahead of the form within the document structure.
                  Upon form submission, the script verifies each input field for
                  validation. <br>Should it encounter an empty field or an invalid
                  email address, it halts the form submission and exhibits the
                  relevant error message within the div.
                </div>
              </div>
            </div>
                <div class="coding-grid-col-1">
                  <div class="coding-1">
                    <div class="coding-container">
                <h2>Sass/Css</h2>
                <pre class="code-2"><code>
@mixin hover-style($bg-color, $text-color, $btn-bg) {
  &:hover {
    background-color: $bg-color;
    .btn-art {
        color: $text-color;
        background-color: $btn-bg;
          }
    .icon {
        color: $text-color;
        background-color: $btn-bg;
          }
      }
  }

  .bespoke-software {
      @include hover-style($hoki, $hoki, $white);
  }

  .it-support {
      @include hover-style($blue, $blue, $white);
}
                                   </code></pre>
                                   <br>
                <div class="comment">
                  This is a snippet of the code I used to create the hover
                  effect for the various containers throughout Netmatters. It is
                  a solution that I came up with after realizing a lot of code
                  was frequently repeated. <br /><br />
                  This code defines a SASS mixin called "hover-style" that
                  accepts three parameters: background color, text color, and
                  button background color. When applied to an element, it sets
                  the background color on hover and changes the text and button
                  background color accordingly within that element.
                </div>
              </div>
            </div>
          </div>

          <!-- Form -->
          <?php include 'inc/contact.php'?>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <?php include './inc/script.php'?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/languages/go.min.js"></script>
    <script>
      hljs.highlightAll();
    </script>
  </body>
</html>
