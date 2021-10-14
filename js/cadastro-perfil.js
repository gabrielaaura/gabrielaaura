document.getElementById('modal').addEventListener('click',
function (){
    document.querySelector('.bg-popup').style.display = 'flex';
});

document.querySelector('x-popup').addEventListener('click',
function(){
    document.querySelector('.bg-popup').style.display = 'none';
});