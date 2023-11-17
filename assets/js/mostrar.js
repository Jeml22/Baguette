function showPlaceholder() {
    document.getElementById("passwordPlaceholder").style.display = "inline";
  }
  
  function hidePlaceholder() {
    var passwordInput = document.getElementById("contra");
    if (passwordInput.value === "") {
      document.getElementById("passwordPlaceholder").style.display = "none";
    }
  }