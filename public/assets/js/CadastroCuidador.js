function contratante() {
    window.location = '/cadastro/contratante'
  }
  
  function cuidador() {
    window.location = '/cadastro/cuidador'
  }

const form = document.querySelector("form"),
    nextBtn = form.querySelector(".nextBtn"),
    backBtn = form.querySelector(".backBtn"),
    allInput = form.querySelectorAll(".first input");

let file1 = document.getElementById("inp1");
let file2 = document.getElementById("inp2");
let file3 = document.getElementById("inp3");
let file4 = document.getElementById("inp4");

let message1 = document.getElementById("nome1");
let message2 = document.getElementById("nome2");
let message3 = document.getElementById("nome3");
let message4 = document.getElementById("nome4");


let uploadButton = document.getElementById("upload-button");
let chosenImage = document.getElementById("chosen-image");
let fileName = document.getElementById("file-name");


nextBtn.addEventListener("click", () => {
    allInput.forEach(input => {
        if (input.value != "") {
            form.classList.add('secActive');
        } else {
            form.classList.remove('secActive');
        }
    })
})

backBtn.addEventListener("click", () => form.classList.remove('secActive'));


file1.addEventListener("input", () => {

    if (file1.files.length) {
        let fileName = file1.files[0].name;
        nome1.innerHTML = `${fileName}`;
    }

    else {
        nome1.innerHTML = "Selecione um arquivo.";
    }
});
file2.addEventListener("input", () => {
    if (file2.files.length) {
        let fileName = file2.files[0].name;
        nome2.innerHTML = `${fileName}`;
    }
    else {
        nome2.innerHTML = "Selecione um arquivo.";
    }
});
file3.addEventListener("input", () => {

    if (file3.files.length) {
        let fileName = file3.files[0].name;
        nome3.innerHTML = `${fileName}`;
    }

    else {
        nome3.innerHTML = "Selecione um arquivo.";
    }
});
file4.addEventListener("input", () => {

    if (file4.files.length) {
        let fileName = file4.files[0].name;
        nome4.innerHTML = `${fileName}`;
    }

    else {
        nome4.innerHTML = "Selecione um arquivo.";
    }
});

uploadButton.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(uploadButton.files[0]);
    reader.onload = () => {
        chosenImage.setAttribute("src", reader.result);
    }
    fileName.textContent = uploadButton.files[0].name;
}