const inputHover = () =>{
    const input1 = document.querySelector('#title');
    const input2 = document.querySelector('#snippet');
    input1.style.borderBottom = "0.2em solid #cfe8ff";
    input2.style.borderBottom = "0.2em solid #cfe8ff";
}

const snippet = document.querySelectorAll('.blog-snippet');

snippet.forEach(element => {

    let text = element.innerHTML.substring(0,150);

    element.innerHTML = text + `...`;
});

