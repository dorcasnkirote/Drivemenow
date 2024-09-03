let car = document.querySelectorAll(".car");
let button = document.querySelector("#button");
let fleet = document.querySelector("#fleet");
let carCategory = document.querySelector("#carCategory")
let newElement = document.createElement("img");
let newContent = document.createTextNode("Available");
newElement.appendChild(newContent);
fleet.appendChild(newElement);

function uploadGUI() {
    car.innerHTML = fleet.appendChild(newElement);
}




// let h1El = document.querySelector("#h1");
// let p = document.getElementsByTagName("p");
// let buttonEl = document.querySelector("#submit");
// h1El.innerHTML  = "Good Morning, Steve";
// var h2El = document.getElementById("h2");
// h2El.innerHTML  = "Hello there";

// h1El.classList.add("active");
// h1El.classList.toggle("active");

// //p.style.toUppercase;

// function show()
// {
//     h1El.classList.toggle("active");
// }
// show();


// let box = document.querySelector("#box");
// //let newElement = document.createElement("a");
// //let newContent = document.createTextNode("This is a smart link");
// newElement.appendChild(newContent);
// box.appendChild(newElement);

// let newEl = document.createElement("h1");
// let content = document.createTextNode("Thank you");
// newEl.appendChild(content);
// box.appendChild(newEl);

// document.querySelector("#h2").id = "Steve";
// //document.getElementsByClassName("p1").style.backgroundcolour = "red";

// //let cont = document.getElementsByClassName("cont");
// let container =  document.querySelector(".cont li");
// let newLi = document.createElement("li");
// let newLi1 = document.createElement("a");
// let newItem = document.createTextNode("Contact Us");
// newLi.appendChild(newItem);
// container.appendChild(newLi);
// let newItem1 = document.createTextNode("google.com");
// newLi1.appendChild(newItem1);
// container.appendChild(newLi1);

// let newEle = document.createElement("h1");
// newEle.append("This is a link");

