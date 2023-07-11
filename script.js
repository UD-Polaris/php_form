document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // prevent form submission
    
    // get form values
    var name = document.getElementById("name").value;
    var age = document.getElementById("age").value;
    var weight = document.getElementById("weight").value;
    var email = document.getElementById("email").value;
    
    console.log("Name: " + name);
    console.log("Age: " + age);
    console.log("Weight: " + weight);
    console.log("Email: " + email);
    
    // reset the form
    document.getElementById("myForm").reset();
  });
