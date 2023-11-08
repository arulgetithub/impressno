const yes = document.getElementById('yes8');
const no = document.getElementById('no8');

const yes_display = document.getElementById('yes-display2');
yes_display.style.display = "none";

yes.addEventListener('click', () => {
    yes_display.style.display = "block";
    // yes_display.innerHTML = '<textarea id="waters" placeholder="Details..." cols="100" rows="5"></textarea> ';
})

no.addEventListener('click', () => {
    yes_display.style.display = "none";
})



const ad = document.getElementById('ad');
const bd = document.getElementById('bd');
ad.addEventListener('click', () => {
    const ad_display = document.getElementById('ad-display');
    ad_display.innerHTML = '<textarea id="waters1" placeholder="Details..." cols="100" rows="5"></textarea> ';

})

bd.addEventListener('click', () => {
    const ad_display = document.getElementById('ad-display');
    ad_display.innerHTML = ' ';

})

const ae = document.getElementById('ae');
const be = document.getElementById('be');
ae.addEventListener('click', () => {
    const ae_display = document.getElementById('ae-display');
    ae_display.innerHTML = '<textarea id="waters2" placeholder="Details..." cols="100" rows="5"></textarea> ';

})

be.addEventListener('click', () => {
    const ae_display = document.getElementById('ae-display');
    ae_display.innerHTML = ' ';

})

const af = document.getElementById('af');
const bf = document.getElementById('bf');
af.addEventListener('click', () => {
    const af_display = document.getElementById('af-display');
    af_display.innerHTML = '<textarea id="waters3" placeholder="Details..." cols="100" rows="5"></textarea> ';

})

bf.addEventListener('click', () => {
    const af_display = document.getElementById('af-display');
    af_display.innerHTML = ' ';

})


const eg = document.getElementById('eg');
const ea = document.getElementById('ea');
const ec = document.getElementById('ec');
const ee = document.getElementById('ee');
const ef = document.getElementById('ef');
const eg_display = document.getElementById('eg-display');

eg.addEventListener('click', () => {
    eg_display.innerHTML = '<textarea placeholder="Details..." id="waters4" cols="100" rows="5"></textarea>';
})
ea.addEventListener('click', () => {
    eg_display.innerHTML = ' ';
})
ec.addEventListener('click', () => {
    eg_display.innerHTML = ' ';
})
ee.addEventListener('click', () => {
    eg_display.innerHTML = ' ';
})
ef.addEventListener('click', () => {
    eg_display.innerHTML = ' ';
})