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
document.querySelector(".register-popup .close-arrow").addEventListener("click", function() {
    document.querySelector(".register-popup").style.display = "none";
});

function decreaseValue() {
    var input = document.getElementById('quantity');
    if (input.value > 1) {
        input.value--;
    }
}

function increaseValue() {
    var input = document.getElementById('quantity');
    input.value++;
}

$(document).ready(function() {
    $("#quantity").TouchSpin();
});