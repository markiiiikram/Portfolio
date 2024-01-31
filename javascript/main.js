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

if (subHeaderElement) { // Simplified null check
    typingEffect(subHeaderElement, 200);
}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Hamburger rotation animation activation script

function show() {
    document.querySelectorAll('#sidebar, #hamburger').forEach(function(element) {
      element.classList.toggle('active');
    });
  }


  ///////////////////////////////////////////////////////////////////////////

  
const form = document.getElementById('form');
const errorElement = document.getElementById('error');

form.addEventListener('submit', (e) => {
  const inputs = [
    { element: document.getElementById('name'), message: 'Please input your name' },
    { element: document.getElementById('surname'), message: 'Please input your surname' },
    { element: document.getElementById('email'), message: 'Please input a valid email' }
    // Add more objects for additional input fields
  ];

  let firstError = null;

  inputs.some(input => {
    if (input.element.value.trim() === '') {
      firstError = input.message;
      return true; // Stop the loop
    }
    if (input.element === document.getElementById('email')) {
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(input.element.value.trim())) {
        firstError = 'Please input a valid email';
        return true; // Stop the loop
      }
    }
  });

  if (firstError) {
    e.preventDefault();
    errorElement.innerText = firstError;
  }
});


/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
