        
       const usernameRegex = /^[A-Z][A-Za-z0-9]*$/;  
       const emailRegex = /^\w+[._-]?\w+@[a-z]+\.[a-z]{2,3}/;
       const passwordRegex = /^[A-Z].{7,}$/;
    
       const form = document.getElementById("form");
    
        form.addEventListener("submit", function(event) {
            
            const username = document.getElementById("username").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirmPassword").value;
           
            const usernameMsg = document.getElementById("usernameMessage");
            const emailMsg = document.getElementById("emailMessage");
            const passwordMsg = document.getElementById("passwordMessage");
            const confirmPasswordMsg = document.getElementById("confirmMessage");
            
            usernameMsg.innerText = "";
            emailMsg.innerText = "";
            passwordMsg.innerText = "";
            confirmPasswordMsg.innerText = "";
    
            let isValid = true;
    
           
            if (username == "") {
                usernameMsg.innerText = "Shkruani Emrin e perdoruesit.";
                isValid = false;
            } else if (!usernameRegex.test(username)) {
                usernameMsg.innerText = "Emri i perdoruesit duhet te filloje me shkronje te madhe!";
                isValid = false;
            }
            
            if(email == ""){
                emailMsg.innerText = "Shkruani Emailin.";
                isValid = false;
            }else if(!emailRegex.test(email)){
                emailMsg.innerText = "Formati juaj i Emailit eshte invalid!"
                isValid = false;
            }
            
            if (password == "") {
                passwordMsg.innerText = "Shkruani Passwordin.";
                isValid = false;
            } else if (!passwordRegex.test(password)) {
                passwordMsg.innerText = "Passwordi duhet te filloje me shkronje te madhe dhe te kete minimumi 8 karaktere!";
                isValid = false;
            }

            if(confirmPassword == "") {
                confirmPasswordMsg.innerText = "Ju lutem konfirmoni Passwordin.";
                isValid = false; 
            }
            else if (confirmPassword != password){
                confirmPasswordMsg.innerText = "Ju lutem kontrolloni se a keni karakteret e njejta!";
                isValid = false;
            }

        if(!isValid){
            event.preventDefault();
        }
    });