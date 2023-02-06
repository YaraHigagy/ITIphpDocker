var x, y;

function inputGetting(){
  x = Number(prompt("Enter the first number!"));
  y = Number(prompt("Enter the second number!"));
  return x, y;
}

function sum (){
  return x + y;
}

alert("This is a summation calculator. Click 'ok' to use it!");

alert(inputGetting());

if(x == Number(x) && y == Number(y)){
  alert("The solution is " + sum());
  document.write(`<br>${x} + ${y} = ${sum()}`);
}else{
  alert("Please, enter valid numbers!");
  alert(inputGetting());
}
