        
        const nameRegex = /^[A-Z][a-z]*$/;
        const surnameRegex = /^[A-Z][a-z]*$/;
        const emailRegex = /^\w+[._-]?\w+@[a-z]+\.[a-z]{2,3}/;
    
        const form = document.getElementById("form");
    
        form.addEventListener("submit", function(event) {
            
            const name = document.getElementById("name").value;
            const surname = document.getElementById("surname").value;
            const email = document.getElementById("email").value;
            const mesazh = document.getElementById("mesazh").value;
            
           
            const nameMsg = document.getElementById("nameMessage");
            const surnameMsg = document.getElementById("surnameMessage");
            const emailMsg = document.getElementById("emailMessage");
            const mesazhMsg = document.getElementById("mesazhMessage");

            
            nameMsg.innerText = "";
            surnameMsg.innerText = "";
            emailMsg.innerText = "";
            mesazhMsg.innerText = "";
            
    
            let isValid = true;
    
           
            if (name == "") {
                nameMsg.innerText = "Shkruani Emrin.";
                isValid = false;
            } else if (!nameRegex.test(name)) {
                nameMsg.innerText = "Emri duhet të fillojë me shkronjë të madhe dhë të ketë vetëm shkronja.";
                isValid = false;
            }
    
            if (surname == "") {
                surnameMsg.innerText = "Shkruani Mbiemrin.";
                isValid = false;
            } else if (!surnameRegex.test(surname)) {
                surnameMsg.innerText = "Mbiemri duhet të fillojë me shkronjë të madhe dhe të ketë vetëm shkronja.";
                isValid = false;
            }

            if(email == ""){
                emailMsg.innerText = "Shkruani Emailin.";
                isValid = false;
            }else if(!emailRegex.test(email)){
                emailMsg.innerText = "Formati juaj i Emailit është invalid!"
                isValid = false;
            }

            if(mesazh == ""){
                mesazhMsg.innerText = "Mesazhi nuk duhet të jetë i zbrazët";
                isValid = false;
            }
        if(!isValid){
            event.preventDefault();
        }
    });