function Sprawdz() {
    var Log = document.getElementById("mylog");
    var mHaslo = document.getElementById("mypass");
    Haslo = mHaslo.value;
    Login = Log.value;
   var jest= $.ajax({
        url: "PobierzDane.php",
        method: "Post",
        data: { Login: Login, Haslo: Haslo },
        dataType: "JSON",
        success: function (data) {
            if(data[2]==true){
              location.href="running_catalog.html"   
            }
            else{
                alert("Niepoprawny login lub hasło")
            }
        },
        
    })
}

