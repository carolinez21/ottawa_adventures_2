const buttons = document.querySelectorAll('button');

const divList1 = document.querySelector(".activities-body-div-1-items");

const divList2 = document.querySelector(".activities-body-div-2-list");

/*on button click*/
buttons.forEach((button) => {
    button.addEventListener('click', () => {
        const ul = divList2.querySelector("ul");
        /*add items*/
        if(button.id =="add") {
            const li = document.createElement("li");
            li.classList.add(button.className);
            li.textContent = divList1.querySelector("." + button.className).textContent;
            ul.appendChild(li);
        }
        /*remove items*/
        else if(button.id == "remove") {
            const li = divList2.querySelector("." + button.className);
            ul.removeChild(li);
        }
    })
})