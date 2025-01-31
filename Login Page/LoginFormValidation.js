        
       const usernameRegex = /^[A-Z][A-Za-z0-9]*$/;  
       const passwordRegex = /^[A-Z].{7,}$/; 
       
       const form = document.getElementById("form");
    
        form.addEventListener("submit", function(event) {
            
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;
           
            const usernameMsg = document.getElementById("usernameMessage");
            const passwordMsg = document.getElementById("passwordMessage");
            
            usernameMsg.innerText = "";
            passwordMsg.innerText = "";
    
            let isValid = true;
    
           
            if (username == "") {
                usernameMsg.innerText = "Shkruani Emrin e perdoruesit.";
                isValid = false;
            } else if (!usernameRegex.test(username)) {
                usernameMsg.innerText = "Emri i perdoruesit duhet te filloje me shkronje te madhe!";
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