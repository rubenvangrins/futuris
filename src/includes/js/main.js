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
}

function beunhaas() {
  if (checkbox) {
    [...checkbox].forEach((checked) => {
      let total = 0;
      let isChecked = checked.classList.contains("checked");

      for (let sel = 0; sel < checkbox.length; sel++) {
        console.log(sel);
      }

    })
  }
}

beunhaas();
