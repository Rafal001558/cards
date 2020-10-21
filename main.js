const btn = document.querySelectorAll('.btn');
const food__img = document.querySelector('.food__img');

btn.forEach(element => {
   element.addEventListener("click", function(){
      alert("SOLD");
   });
   
});