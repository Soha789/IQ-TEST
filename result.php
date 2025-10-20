<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IQ Test Results</title>
<style>
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg, #43cea2, #185a9d);
  color: #fff;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  text-align: center;
}
.container {
  background: rgba(255,255,255,0.1);
  padding: 40px;
  border-radius: 20px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.2);
  width: 90%;
  max-width: 500px;
}
h2 {
  font-size: 2em;
  margin-bottom: 15px;
}
p {
  font-size: 1.1em;
  margin: 10px 0;
}
button {
  background: #fff;
  color: #333;
  border: none;
  padding: 12px 25px;
  border-radius: 30px;
  cursor: pointer;
  transition: 0.3s;
  margin-top: 20px;
}
button:hover {
  background: #333;
  color: #fff;
}
</style>
</head>
<body>
  <div class="container">
    <h2>Your IQ Test Results</h2>
    <p id="scoreDisplay"></p>
    <p id="feedback"></p>
    <button onclick="retake()">Retake Test</button>
  </div>

<script>
window.onload = function(){
  let score = localStorage.getItem("iqScore");
  if(score === null) score = 0;
  document.getElementById("scoreDisplay").innerHTML = `You scored <strong>${score}/10</strong>`;
  let feedback = "";
  if(score <= 3) feedback = "You can improve your logical thinking skills.";
  else if(score <= 6) feedback = "Good! You have an average IQ level.";
  else if(score <= 8) feedback = "Great work! You have above-average reasoning skills.";
  else feedback = "Excellent! You have exceptional IQ and logical ability!";
  document.getElementById("feedback").innerText = feedback;
}
function retake(){
  window.location.href = 'index.php';
}
</script>
</body>
</html>
