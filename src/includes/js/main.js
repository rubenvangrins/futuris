const inpakken = window.location.pathname;

const template = document.querySelector('.mobiletemplate');

if (window.location.href.indexOf("tas_inpakken") != -1) {
  template.classList.add("no_padding");
}

function myFunction() {
  document.getElementById("myCheck").disabled = true;
}

const checkbox = document.querySelectorAll('.checkbox');



let items = document.querySelector(".list").childElementCount;
let procent = 100 / items;

// you can use forEach here too
[].forEach.call(checkbox, el => {
  el.addEventListener('click', btnClick, false)
})

function btnClick() {
  this.classList.toggle('checked');
  beunhaas();
}


function beunhaas() {

  let i = 0;
  let bar = document.querySelector('.inner_bar');

  if (checkbox) {
    [...checkbox].forEach((checked) => {
      let isChecked = checked.classList.contains("checked");

      if (isChecked == true) {
        i++;
      }
    })

    bar.style.width = procent * i + "%";

  }
}


beunhaas();
