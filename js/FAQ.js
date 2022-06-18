
   function submitFAQ() {

      var nameField = document.getElementById("name");
      var emailField = document.getElementById("email");
      var questionField = document.getElementById("question");

      if(!nameField.value){
        alert('Name should be filled');
        return false;
      }
      else if(!emailField.value){
          alert('Email should be filled');
          return false;
      }else if(!questionField.value){
          alert('Question should be filled');
          return false;
      }else{
        alert('Successfully Saved!');
        //document.getElementById("form").submit();
      }
    }
