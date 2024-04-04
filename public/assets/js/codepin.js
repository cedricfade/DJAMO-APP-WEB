//lets
let input = document.querySelectorAll(".keys .input");
var views = document.querySelector(".views");
let reloadBtn = document.querySelector(".reload");
let color = document.querySelector(".stateColor");
let unlocked = false;
let pinSet = false;
let code = undefined;
let value = '';
//reload window.location.href = window.location.href;
reloadBtn.addEventListener('click', function() {
  window.location.href = window.location.href;
});
//main loop
for ( let i = 0; i < input.length; i++ ) {
  setInputFilter(input[i], function(value) {
    return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 9);
  });
  input[i].addEventListener('input', function() {
    if ( unlocked ) { return }
    if ( input[i].value.length > 0 ) {
      input[i].value = input[i].value.slice(0, 1);
      if ( i < input.length - 1 ) {
        input[i + 1].focus();
      } else if ( i === input.length - 1 ) {
        if ( pinSet ) {
          computeCode();
          validateCode();
        }

        // else {
        //   computeCode();
        //   setPin(value);
        //   pinSet = true;
        //   document.querySelector('.header').textContent = 'Try using your or other pins';
        //   clearInputs();
        // }
      }
    }
  }
  )
  input[i].addEventListener('keydown', function(e) {
    if ( unlocked ) { return }
    let key = e.which || e.keyCode || 0;
    if ( key === 8  ) {
      this.value = '';
      if ( (i - 1) < 0  ) { return }
      else {
        input[ i - 1 ].focus();
      }
    }
  });
}
//functions
function setPin(pin) {
  code = pin;
  value = '';
}
function computeCode() {
  for ( let i = 0; i < input.length; i++ ) {
    value += input[i].value;
  }
  value = Number(value);
}
function clearInputs() {
  for ( let i = 0; i < input.length; i++ ) {
    input[i].value = '';
  }
  input[0].focus();
}
// function validateCode() {
//   if ( code === value ) {
//     unlocked = true;
//   } else {
//     animateCSS('.stateColor', 'shake');
//     clearInputs();
//     value = '';
//   }
//   if ( unlocked ) {
//     color.classList.add('unlocked');
//     setTimeout(showReload, 750);
//   }
// }
function showReload() {
  reloadBtn.classList.add('show');
}
//fast focus && reload btn listener
input[0].focus();
//filtering function *imported*
function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
    textbox.addEventListener(event, function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      }
    });
  });
}
//some animate.css stuff
// function animateCSS(element, animationName, callback) {
//     const node = document.querySelector(element)
//     node.classList.add('animated', animationName)

//     function handleAnimationEnd() {
//         node.classList.remove('animated', animationName)
//         node.removeEventListener('animationend', handleAnimationEnd)

//         if (typeof callback === 'function') callback()
//     }

//     node.addEventListener('animationend', handleAnimationEnd)
// }

// Ajoute un écouteur d'événements pour chaque élément avec la classe .input
let values = [];
var password = document.querySelector('.password');
input.forEach(inputs => {
  inputs.addEventListener('input', () => {
    values.push(inputs.value);
    //  views.innerText = values.join('');
    if (password.value.length > 4) {
        password.value = input.value.slice(0, 4);
      }

     password.value = values.join('');
 // Vérifiez si tous les champs d'entrée sont remplis
 var allFilled = true;
 inputs.forEach(input => {
   if (input.value.length !== 1) {
     allFilled = false;
   }
 });

 // Si tous les champs d'entrée sont remplis, soumettez automatiquement le formulaire
 if (allFilled) {
  window.location.href = "index.html";
 }
  });
});

// // Sélectionnez tous les champs d'entrée avec la classe .input
// let inputs = document.querySelectorAll(".input");
// const form = document.querySelector('form');
// // Ajoutez un écouteur d'événements input à chaque champ d'entrée
// inputs.forEach(input => {
//   input.addEventListener('input', () => {
//     // Mettez à jour le tableau des valeurs


//     // Mettez à jour le texte dans l'élément .views


//     // Vérifiez si tous les champs d'entrée sont remplis
//     let allFilled = true;
//     inputs.forEach(input => {
//       if (input.value.length !== 1) {
//         allFilled = false;
//       }
//     });

//     // Si tous les champs d'entrée sont remplis, soumettez automatiquement le formulaire
//     if (allFilled) {
//       // Rediriger vers une autre page après avoir soumis le formulaire
//       window.location.href = "index.html";
//     }
//   });
// });
