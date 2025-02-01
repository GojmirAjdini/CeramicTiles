        
       const emailRegex = /^\w+[._-]?\w+@[a-z]+\.[a-z]{2,3}/;  
       const passwordRegex = /^[A-Z].{7,}$/; 
       
       const form = document.getElementById("form");
    
        form.addEventListener("submit", function(event) {
            
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
           
            const emailMsg = document.getElementById("emailMessage");
            const passwordMsg = document.getElementById("passwordMessage");
            
            emailMsg.innerText = "";
            passwordMsg.innerText = "";
    
            let isValid = true;
    
           
            if (email == "") {
                emailMsg.innerText = "Shkruani Emailin!.";
                isValid = false;
            } else if (!emailRegex.test(email)) {
                emailMsg.innerText = "Formati juaj i Emailit është invalid!";
                isValid = false;
            }
    
            if (password == "") {
                passwordMsg.innerText = "Shkruani Passwordin.";
                isValid = false;
            } else if (!passwordRegex.test(password)) {
                passwordMsg.innerText = "Passwordi duhet te filloje me shkronje te madhe dhe te kete minimumi 8 karaktere!.";
                isValid = false;
            }

        if(!isValid){
            event.preventDefault();
        }
    });