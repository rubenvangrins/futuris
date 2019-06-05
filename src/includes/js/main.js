const inpakken = window.location.pathname;

const template = document.querySelector('.mobiletemplate');

if (window.location.href.indexOf("doelen_detail") != -1) {
  template.classList.add("no_padding");
}

if (window.location.href.indexOf("doel_add") != -1) {
  template.classList.add("no_padding");
}

if (window.location.href.indexOf("subdoel_add") != -1) {
  template.classList.add("no_padding");
}

function myFunction() {
  document.getElementById("myCheck").disabled = true;
}

const checkbox = document.querySelectorAll('.checkbox');



let items = document.querySelector(".list").childElementCount;
let procent = 100 / items * 3;

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

function test(a, b) {

  var checkboxid = "checkbox" + a;

  console.log(checkboxid);
  console.log(b);

  if(b == "ja") {

    document.getElementById(checkboxid).value = "nee";

  } else {

    document.getElementById(checkboxid).value = "ja";

  }


  //document.getElementById("fieldname").value = ish;

}


beunhaas();
