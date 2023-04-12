let content = document.querySelectorAll('.content');
let opt = document.querySelectorAll('.opt');
let icon = document.querySelectorAll('.bi bi-grid');
let datepicker = document.querySelector('.datepicker');
let hire_btn = document.querySelectorAll('.hire_btn');
let hire_input = document.querySelector('.hire_id');
let city = document.querySelector('.city');
let speciality = document.querySelector('.speciality');
let search = document.querySelector('.search');
let clear = document.querySelector('.clear');
let user_city = document.querySelectorAll('.user_city');
let user_speciality = document.querySelectorAll('.user_speciality');


for(let i = 0; i < opt.length; i++) {
    opt[i].addEventListener("click", function(e) {
        for(let j = 0; j < opt.length; j++) {
        content[j].classList.add("d-none")
        }
        content[i].classList.remove("d-none")
    })
}

// for(let i = 0; i < icon.length; i++) {
//     icon[i].addEventListener("click", function(e) {
//             icon[i].classList.add("bi bi-grid-fill")
//     })
// }

// Set min attribute to today's date
  var today = new Date().toISOString().split('T')[0];
  datepicker.setAttribute('min', today);

//get repairman id to the modal
for(let i=0;i<hire_btn.length;i++){
    hire_btn[i].addEventListener('click',function(e){
      let repair_id = e.target.id;
      hire_input.value = repair_id ;
  })
  }
  

// search
search.addEventListener('click',searching)
function searching(){

for (let i = 0; i < user_city.length; i++) {
    user_city[i].parentElement.parentElement.parentElement.parentElement.parentElement.style.display = "none";
    if(user_city[i].textContent.includes(city.value) && user_speciality[i].textContent.toLowerCase().includes(speciality.value.toLowerCase())){
        user_city[i].parentElement.parentElement.parentElement.parentElement.parentElement.style.display = "";
    }
    
}
}

//clear
clear.addEventListener('click',clearing)
function clearing()
{   
    city.value = ""
    speciality.value = ""
    for (let i = 0; i < user_city.length; i++) {
    user_city[i].parentElement.parentElement.parentElement.parentElement.parentElement.style.display = "";
    }
}