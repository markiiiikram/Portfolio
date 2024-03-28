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

const form = document.getElementById("form");
const errorElement = document.createElement("div");
errorElement.id = "error";
errorElement.textContent = "";
errorElement.style.borderBottom = "3px solid white";
errorElement.style.padding = "5px";
errorElement.style.borderRadius = "3px";
errorElement.style.fontWeight = "600";
errorElement.style.fontSize = "30px";
errorElement.style.display = "none";

// Insert errorElement before the form
form.parentNode.insertBefore(errorElement, form);
//Declare error messages in array
form.addEventListener("submit", (e) => {
  const inputs = [
    {
      element: document.getElementById("name"),
      message: "Please input your name",
    },
    {
      element: document.getElementById("surname"),
      message: "Please input your surname",
    },
    {
      element: document.getElementById("email"),
      message: "Please input a valid email",
    },
  ];
  // Declare empty variable
  let firstError = null;
  //If input is empty, show error.
  inputs.some((input) => {
    if (input.element.value.trim() === "") {
      firstError = input.message;
      return true; // Stop the loop
    }
    // Regex loop check for emails
    if (input.element === document.getElementById("email")) {
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(input.element.value.trim())) {
        firstError = "Please input a valid email";
        return true; // Stop the loop
      }
    }
  });
  // Prevent submission and display error
  if (firstError) {
    e.preventDefault();
    errorElement.textContent = firstError;
    errorElement.style.display = "block"; // Show the error message
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
