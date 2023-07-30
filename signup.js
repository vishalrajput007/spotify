
  function validateform() {
    let x = document.forms["myForm"]["email"].value;
    if (x == "" || x.length < 3) {
      alert("Name must be filled out");
      return false;
    }
  }

