const divConPreguntasYRespuestas = document.getElementById("preguntas");

fetch('https://opentdb.com/api.php?amount=10')
    .then(res => res.json())
    .then(json => {
        console.log(json)
        let contents = json["results"];
        contents.forEach(elem => {
            let question = elem["question"];
            let answers = getAnswers(elem["correct_answer"], elem["incorrect_answers"]);
            pintarDOM(question, answers);
        });
    });


function getAnswers(correct, incorrects) {
    incorrects.push(correct);
    return incorrects;
}

function pintarDOM(question, answers) {
    answersElement = "";
    ultimoElemento = answers.length - 1;

    answers.forEach((element, index) => {
        if (index === ultimoElemento) {
            answersElement += `<p><b>${element}</b></p>`;
        } else {
            answersElement += `<p>${element}</p>`;
        }
    });
    divConPreguntasYRespuestas.innerHTML += `<h2>${question}</h2>${answersElement}`;
}