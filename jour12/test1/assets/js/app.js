

                   // Get the button, and when the user clicks on it, execute myFunction
                    //document.getElementById("myBtn").onclick = function() {myFunction()};

                    /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
        //   function myFunction() {
        //      dropdown.classList.toggle("hide");

            //    }

                // myFunction()
//     dropdown = document.querySelector("#myDropdown")

//     dropdown.addEventListener("click", myFunction)



const outer  = document.getElementsByClassName('outer' )[0];
const middle = document.getElementsByClassName('middle')[0];
const inner1 = document.getElementsByClassName('inner1')[0];
const inner2 = document.getElementsByClassName('inner2')[0];

const capture = {
  capture : true
};
const noneCapture = {
  capture : false
};
const once = {
  once : true
};
const noneOnce = {
  once : false
};
const passive = {
  passive : true
};
const nonePassive = {
  passive : false
};

outer.addEventListener('click', onceHandler, once);
outer.addEventListener('click', noneOnceHandler, noneOnce);
middle.addEventListener('click', captureHandler, capture);
middle.addEventListener('click', noneCaptureHandler, noneCapture);
inner1.addEventListener('click', passiveHandler, passive);
inner2.addEventListener('click', nonePassiveHandler, nonePassive);

function onceHandler(event) {
  alert('outer, once');
}
function noneOnceHandler(event) {
  alert('outer, none-once, default');
}
function captureHandler(event) {
  //event.stopImmediatePropagation();
  alert('middle, capture');
}
function noneCaptureHandler(event) {
  alert('middle, none-capture, default');
}
function passiveHandler(event) {
  // Unable to preventDefault inside passive event listener invocation.
  event.preventDefault();
  alert('inner1, passive, open new page');
}
function nonePassiveHandler(event) {
  event.preventDefault();
  //event.stopPropagation();
  alert('inner2, none-passive, default, not open new page');
}

