let oprador = document.querySelectorAll("input[type='text']");
let numero = document.querySelectorAll("input[type='number']");
let textarea = document.querySelector("textarea");
let resultado = document.querySelector("#resultado");
let apagar = document.querySelector("#apagar");

numero.forEach(input => {
    input.addEventListener("click", () => {
        textarea.value += input.value;
        valor_guardado = Number(input.value);
    });
});
oprador.forEach(input => {
    input.addEventListener("click", () => {
        textarea.value += input.value;
    });
});

function CheckarRsultado() {
    var tratamento_resultado = eval(textarea.value);
    if (tratamento_resultado == undefined) {
        resultado.innerText = 0;
    } else {
        resultado.innerText = tratamento_resultado;
    }
};
apagar.addEventListener("click", () => {
    let tamanho = (Number(textarea.textLength) - Number(1)).toString();
    let texto_retirado = textarea.value.substr(0, tamanho);
    textarea.value = texto_retirado;
});
setInterval(() => {
    CheckarRsultado();
}, 1);