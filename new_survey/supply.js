const water = document.getElementById('water');
const water_consumption = document.getElementById('water-consumption');
const cost_of_water = document.getElementById('cost-of-water');
const form = document.getElementById('form');
const errorElement = document.getElementById('error');
const a = document.getElementById('yes1');
const b = document.getElementById('no1');
const g = document.getElementById('yes12');
const h = document.getElementById('no12');
const l = document.getElementById('yes15');
const m = document.getElementById('no15');




document.getElementById("process1").style.display = "none";

document.querySelectorAll('input[name="unit"]').forEach(function(radioButton) {
    radioButton.addEventListener('change', function() {
      var element = document.getElementById("process1");
      if (this.value === "show") {
        element.style.display = "block";
      } else if (this.value === "hide") {
        element.style.display = "none";
      }
    });
  });

  document.getElementById("process2").style.display = "none";

  document.querySelectorAll('input[name="unit1"]').forEach(function(radioButton) {
      radioButton.addEventListener('change', function() {
        var element = document.getElementById("process2");
        if (this.value === "show") {
          element.style.display = "block";
        } else if (this.value === "hide") {
          element.style.display = "none";
        }
      });
    });
  
    document.getElementById("process3").style.display = "none";

  document.querySelectorAll('input[name="unit2"]').forEach(function(radioButton) {
      radioButton.addEventListener('change', function() {
        var element = document.getElementById("process3");
        if (this.value === "show") {
          element.style.display = "block";
        } else if (this.value === "hide") {
          element.style.display = "none";
        }
      });
    });
  




form.addEventListener('submit', (e) => {
    let messages = []
    if(water.value === '' || water.value == null || Number.isInteger(water.value) == false) {
        messages.push('Quantity is required and it should be an integer')
    }
    if(cost_of_water.value === '' || cost_of_water.value == null || Number.isInteger(cost_of_water.value) == false) { 
        messages.push('Cost of water is required and it should be an integer')
    }
    if(water_consumption.value === '' || water_consumption.value == null || Number.isInteger(water_consumption.value) == false) {
        messages.push('Water consumption is required and it should be an integer')
    }
    if(messages.length > 0) {
    e.preventDefault();
    alert(messages.join(', '));
    }
})


