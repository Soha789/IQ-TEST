<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IQ Test - Quiz</title>
<style>
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg, #f093fb, #f5576c);
  margin: 0;
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
.quiz-container {
  background: rgba(0,0,0,0.3);
  border-radius: 15px;
  padding: 40px;
  width: 90%;
  max-width: 600px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}
h2 {
  margin-bottom: 20px;
  text-align: center;
}
.question {
  font-size: 1.1em;
  margin-bottom: 10px;
}
.options label {
  display: block;
  background: rgba(255,255,255,0.1);
  margin: 8px 0;
  padding: 10px;
  border-radius: 10px;
  cursor: pointer;
  transition: 0.3s;
}
.options input {
  margin-right: 10px;
}
label:hover {
  background: rgba(255,255,255,0.3);
}
button {
  display: block;
  background: #fff;
  color: #333;
  border: none;
  padding: 12px 25px;
  border-radius: 30px;
  cursor: pointer;
  margin: 20px auto 0;
  transition: 0.3s;
}
button:hover {
  background: #333;
  color: #fff;
}
</style>
</head>
<body>
  <div class="quiz-container">
    <h2>IQ Test Questions</h2>
    <div id="quiz"></div>
    <button id="nextBtn" onclick="nextQuestion()">Next</button>
  </div>

<script>
const questions = [
  {q:"What comes next? 2, 4, 8, 16, ?", options:["18","24","32","36"], answer:"32"},
  {q:"Which shape has the most sides?", options:["Triangle","Hexagon","Pentagon","Square"], answer:"Hexagon"},
  {q:"If all Bloops are Razzies and all Razzies are Lazzies, are all Bloops Lazzies?", options:["Yes","No"], answer:"Yes"},
  {q:"Which is different: 2, 3, 5, 7, 9?", options:["2","3","5","9"], answer:"9"},
  {q:"Find the missing number: 5 + 3 × 2 =", options:["16","11","13","10"], answer:"11"},
  {q:"If CAT = 24, and DOG = 26, then FISH = ?", options:["28","30","32","34"], answer:"32"},
  {q:"Which number is the smallest?", options:["0.7","0.09","0.17","0.009"], answer:"0.009"},
  {q:"Which comes next: A, C, F, J, O, ?", options:["T","S","U","V"], answer:"U"},
  {q:"Which one is not like the others?", options:["Banana","Apple","Grape","Car"], answer:"Car"},
  {q:"If you rearrange ‘CIFAIPC’ you get:", options:["Pacific","Specific","Pacifc","Cifapic"], answer:"Pacific"}
];

let current = 0;
let score = 0;

function loadQuestion(){
  let q = questions[current];
  let quizDiv = document.getElementById("quiz");
  quizDiv.innerHTML = `
    <div class='question'>${current+1}. ${q.q}</div>
    <div class='options'>
      ${q.options.map(opt=>`
        <label><input type='radio' name='option' value='${opt}'> ${opt}</label>
      `).join('')}
    </div>
  `;
}

function nextQuestion(){
  const selected = document.querySelector('input[name="option"]:checked');
  if(!selected){
    alert("Please select an answer before continuing!");
    return;
  }
  if(selected.value === questions[current].answer){
    score++;
  }
  current++;
  if(current < questions.length){
    loadQuestion();
  } else {
    localStorage.setItem("iqScore", score);
    window.location.href = 'result.php';
  }
}

window.onload = loadQuestion;
</script>
</body>
</html>
