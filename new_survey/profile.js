const seven  = document.getElementById('flexCheckDefault');
const one  = document.getElementById('flexCheckDefault1');
const two = document.getElementById('flexCheckDefault2');
const three = document.getElementById('flexCheckDefault3');
const four = document.getElementById('flexCheckDefault4');
const five  = document.getElementById('flexCheckDefault5');
const six  = document.getElementById('flexCheckDefault6');
const add = document.getElementById('additional');
add.style.display = "none";
one.addEventListener('click', () => {
    if (add.style.display === "none") {
        add.style.display = "block";
      } 
})
two.addEventListener('click', () => {
    if (add.style.display === "none") {
        add.style.display = "block";
      } 
})
three.addEventListener('click', () => {
    if (add.style.display === "none") {
        add.style.display = "block";
      } 
})
four.addEventListener('click', () => {
    if (add.style.display === "none") {
        add.style.display = "block";
      } 
})
five.addEventListener('click', () => {
    if (add.style.display === "none") {
        add.style.display = "block";
      } 
})
six.addEventListener('click', () => {
    if (add.style.display === "none") {
        add.style.display = "block";
      } 
})
seven.addEventListener('click', () => {
    if (add.style.display === "none") {
        add.style.display = "block";
      } 
})


const others = document.getElementById('others');
const others_display = document.getElementById('others_display');
const country = document.getElementById('country');

others_display.style.display = "none";

country.addEventListener('change', function() {
  if(country.value === "others") {
    others_display.style.display = "block";  
  }
  else {
    others_display.style.display = "none";

  }
}, false);





// others.addEventListener('click', () => {
//   others_display.style.display = "block";
// })

const countries = [
  "Afghanistan",
  "Albania",
  "Algeria",
  "india",
  "iran",
  // Add more country names here...
];

const countryInput = document.getElementById("countryInput");
const dataList = document.getElementById("countries");

countryInput.addEventListener("input", function() {
  const inputText = this.value.toLowerCase();
  const matchedCountries = countries.filter(function(country) {
    return country.toLowerCase().startsWith(inputText);
  });

  dataList.innerHTML = ""; // Clear previous suggestions

  matchedCountries.forEach(function(country) {
    const option = document.createElement("option");
    option.value = country;
    dataList.appendChild(option);
  });
});


const countries1 = [
  "Afghanistan",
  "Albania",
  "Algeria",
  "india",
  "iran",
  // Add more country names here...
];

const countryInput1 = document.getElementById("countryInput1");
const dataList1 = document.getElementById("countries1");

countryInput1.addEventListener("input", function() {
  const inputText1 = this.value.toLowerCase();
  const matchedCountries1 = countries.filter(function(country) {
    return country.toLowerCase().startsWith(inputText1);
  });

  dataList1.innerHTML = ""; // Clear previous suggestions

  matchedCountries1.forEach(function(country) {
    const option = document.createElement("option");
    option.value = country;
    dataList1.appendChild(option);
  });
});


const countries2 = [
  "Afghanistan",
  "Albania",
  "Algeria",
  "india",
  "iran",
  // Add more country names here...
];

const countryInput2 = document.getElementById("countryInput2");
const dataList2 = document.getElementById("countries2");

countryInput2.addEventListener("input", function() {
  const inputText2 = this.value.toLowerCase();
  const matchedCountries2 = countries.filter(function(country) {
    return country.toLowerCase().startsWith(inputText2);
  });

  dataList2.innerHTML = ""; // Clear previous suggestions

  matchedCountries2.forEach(function(country) {
    const option = document.createElement("option");
    option.value = country;
    dataList2.appendChild(option);
  });
});


