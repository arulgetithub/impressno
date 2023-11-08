const water = document.getElementById('water');
const water_consumption = document.getElementById('water-consumption');
const cost_of_water = document.getElementById('cost-of-water');
const form = document.getElementById('form');
const errorElement = document.getElementById('error');
const a = document.getElementById('a');
const b = document.getElementById('b');

a.addEventListener('click', () => {
    const if_yes=document.getElementById('if-yes');
    if_yes.innerHTML = '<ul><li>19.1. Water consumption by process : <input id="firstname" class="input" type="text" placeholder=" " /></li><li>19.2. Water consumption by domestic : <input id="firstname" class="input" type="text" placeholder=" " /></li></ul>';

})

b.addEventListener('click', () => {
    const if_yes=document.getElementById('if-yes');
    if_yes.innerHTML = ' ';

})

const last = document.getElementById('last');
const lastyear = document.getElementById('lastyear');
lastyear.style.display = 'none';
last.addEventListener('click', () =>{
    if(lastyear.style.display ==='none'){
        lastyear.style.display = 'block';
    }
})


form.addEventListener('submit', (e) => {
    let messages = []
    if(water.value === '' || water.value == null || Number.isInteger(water.value) == false) {
        messages.push('Quantity is required and it should be an integer')
    }
    if(cost_of_water.value === '' || cost_of_water.value == null || Number.isInteger(cost_of_water.value) == false) { 
        messages.push('Cost of water is required and it should be an integer')
    }
    if(water_consumption.value === '' || water_consumption.value == null || Number.isInteger(water_consumption.value) == false) {
        messages.push('Wtaer consumption is required and it should be an integer')
    }
    if(messages.length > 0) {
    e.preventDefault();
    alert(messages.join(', '));
    }
})


