const headerElement = document.querySelector("#banner-header");
const subHeaderElement = document.querySelector("#banner-sub-header");

console.log(headerElement.classList);

function typingEffect(element, speed) {
  const text = element.innerText.split("");
  element.innerText = "";

  text.forEach((character, index) => {
    setTimeout(() => {
      element.innerHTML += character;
    }, index * speed);
  });
}

typingEffect(headerElement, 100);

if (subHeaderElement) {
  typingEffect(subHeaderElement, 200);
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Hamburger rotation animation activation script & sidebar

function show() {
  document.querySelectorAll("#sidebar, #hamburger").forEach(function (element) {
    element.classList.toggle("active");
  });
}

document.body.addEventListener("click", function (event) {
  var sidebar = document.getElementById("sidebar");
  var hamburger = document.getElementById("hamburger");
  var isClickInsideSidebar =
    sidebar.contains(event.target) || event.target === sidebar;
  var isClickInsideHamburger =
    hamburger.contains(event.target) || event.target === hamburger;

  if (!isClickInsideSidebar && !isClickInsideHamburger) {
    // Click occurred outside of both #sidebar and #hamburger, so remove the 'active' class
    document
      .querySelectorAll("#sidebar, #hamburger")
      .forEach(function (element) {
        element.classList.remove("active");
      });
  }
});

///////////////////////////////////////////////////////////////////////////
//Form validation & styling for error message

document.addEventListener("DOMContentLoaded", function () {
  var form = document.getElementById("form");
  var submitButton = document.getElementById("submit");
  var nameInput = document.getElementById("name");
  var surnameInput = document.getElementById("surname");
  var emailInput = document.getElementById("email");
  var subjectInput = document.getElementById("subject");
  var messageInput = document.getElementById("message");

  // Event listener for form submission
  submitButton.addEventListener("click", function (event) {
    var isValid = true;

    // Validate name input
    if (nameInput.value.trim() === "") {
      nameInput.classList.add("invalid");
      isValid = false;
    } else {
      nameInput.classList.remove("invalid");
    }

    // Validate surname input
    if (surnameInput.value.trim() === "") {
      surnameInput.classList.add("invalid");
      isValid = false;
    } else {
      surnameInput.classList.remove("invalid");
    }

    // Validate email input
    if (emailInput.value.trim() === "" || !isValidEmail(emailInput.value)) {
      emailInput.classList.add("invalid");
      isValid = false;
    } else {
      emailInput.classList.remove("invalid");
    }

    // Validate message input
    if (messageInput.value.trim() === "") {
      messageInput.classList.add("invalid");
      isValid = false;
    } else {
      messageInput.classList.remove("invalid");
    }

    // Prevent form submission if any field is invalid
    if (!isValid) {
      event.preventDefault();
    }
  });

  // Event listener for input change
  form.addEventListener("input", function (event) {
    var input = event.target;
    if (input.matches("#name, #surname, #email, #message")) {
      if (input.value.trim() === "") {
        input.classList.add("invalid");
      } else {
        input.classList.remove("invalid");
      }
    }
  });

  function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
});
////////////////////////////////////
//////////// Close button
///////////////////////////////////
document.addEventListener("DOMContentLoaded", function () {
  var closeButtons = document.querySelectorAll(
    ".error span.close, .success span.close"
  );

  closeButtons.forEach(function (button) {
    button.addEventListener("click", function () {
      var errorDiv = button.closest(".error, .success");
      if (errorDiv) {
        errorDiv.remove();
      }
    });
  });
});
