const yes4 = document.getElementById('yes4');
const no4 = document.getElementById('No4');
const indi = document.getElementById('individual');
const check2b_display = document.getElementById('check2b-display');
check2b_display.style.display = "none";
const yes2 = document.getElementById('yes7');
const no2 = document.getElementById('No7');
const yes2_display = document.getElementById('yes2-display');

yes2_display.style.display = "none";


yes2.addEventListener('click', () => {
    yes2_display.style.display = "block";

})

no2.addEventListener('click', () => {
    yes2_display.style.display = "none";

})

document.getElementById("displayDischarge").style.display = "none";

document.querySelectorAll('input[name="toggle"]').forEach(function(radioButton) {
    radioButton.addEventListener('change', function() {
      var element = document.getElementById("displayDischarge");
      if (this.value === "show") {
        element.style.display = "block";
      } else if (this.value === "hide") {
        element.style.display = "none";
      }
    });
  });







indi.addEventListener('click', () => {
     if (check2b_display.style.display === "none") {
        check2b_display.style.display = "block";
      } else {
        check2b_display.style.display = "none";
      }
})


// yes4.addEventListener('click', () => {
//     const yes_display = document.getElementById('yes-display');
//     yes_display.innerHTML = '<ul><li><label for="total_discharge">22.1. If yes, total discharge volume per day (m³ ):</label><input type="text" id="total_discharge" name="total_discharge" placeholder="Total discharge m³"></li></ul>';

// })

// no4.addEventListener('click', () => {
//     const yes_display = document.getElementById('yes-display');
//     yes_display.innerHTML = ' ';

// })



