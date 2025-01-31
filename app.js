// Open login form when login button is clicked
document.getElementById("loginBtn").addEventListener("click", function() {
    document.querySelector(".popup").style.display = "flex";
});

// Close login form when close button is clicked
document.querySelector(".popup .close-arrow").addEventListener("click", function() {
    document.querySelector(".popup").style.display = "none";
});

// Open register form when register button is clicked
document.getElementById("registerBtn").addEventListener("click", function() {
    document.querySelector(".register-popup").style.display = "flex";
});

// Close register form when close button is clicked
// document.querySelector(".register-popup .close-arrow").addEventListener("click", function() {
//     document.querySelector(".register-popup").style.display = "none";
// });



// For Passangers descrese and increase
const plus = document.querySelector(".plus"),
    minus = document.querySelector(".minus"),
    num = document.querySelector(".num");

let a = 1;
num.innerText = a; 

plus.addEventListener("click", () => {

    a++;
    a=(a<10)?"0"+a:a;
    num.innerText=a;
    
});

minus.addEventListener("click", () => {
    if (a > 1) { 
        a--;
         a=(a<10)?"0"+a:a;
        num.innerText = a;
    }
});
