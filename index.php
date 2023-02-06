<!DOCTYPE html>
<html>
<head>
  <title>Welcome to Docker</title>
</head>
<body>
  <script>
    var fname, lname, birthYear, age;

    fname = prompt("What's your first name?");
    lname = prompt("What's your last name?");
    confirm("Is " + fname + " " + lname + " your name?");

    birthYear = prompt("In what year did you born?");
    if(birthYear == Number(birthYear)){
      age = 2022 - birthYear;
      alert("Welcome " + fname + " " + lname + " you are " + age + " years old.");
    document.write("Welcome <strong>" + fname + " " + lname + "</strong> to docker, you are " + age + " years old.");
    }else{
      alert("Sorry, you entered a valid number. Please try again!");
      birthYear = prompt("In what year did you born?");
    }
  </script>
  <script src="CalculatorSum.js"></script>
</body>
</html>

