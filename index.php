<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IQ Test Platform</title>
<style>
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg, #5b8df9, #6ee2f5);
  color: #fff;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
}
.container {
  background: rgba(255,255,255,0.1);
  border-radius: 20px;
  padding: 40px;
  text-align: center;
  box-shadow: 0 8px 25px rgba(0,0,0,0.2);
  max-width: 500px;
}
h1 {
  font-size: 2.2em;
  margin-bottom: 10px;
}
p {
  font-size: 1.1em;
  line-height: 1.5em;
  margin-bottom: 30px;
}
button {
  background: #fff;
  color: #333;
  border: none;
  padding: 12px 30px;
  font-size: 1.1em;
  border-radius: 30px;
  cursor: pointer;
  transition: 0.3s;
}
button:hover {
  background: #333;
  color: #fff;
}
</style>
</head>
<body>
  <div class="container">
    <h1>Welcome to the IQ Test</h1>
    <p>Measure your logical reasoning, numerical ability, and pattern recognition skills through this short quiz. Click below to start.</p>
    <button onclick="startTest()">Start Test</button>
  </div>

<script>
function startTest(){
  window.location.href = 'quiz.php';
}
</script>
</body>
</html>
