function results(){
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;

  var comments = document.getElementById("comments").value;

  document.write("<h1>Thank you!</h1>");

  document.write("<h3>Here is your data: </h3>");
  document.write(name + "<br>");
  document.write(email + "<br>");
  document.write(comments + "<br>");
}

