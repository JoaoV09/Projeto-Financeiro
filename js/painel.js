addEventListener("DOMContentLoaded", () => {
    var alvo = document.getElementById("per");
    var alvo2 = document.getElementById("dorp");
    
    ativarPainel(alvo,alvo2);
    
    function ativarPainel(alvo, alvo2){
        alvo.addEventListener("click", function() {
            alvo2.style.display = "flex";
        })
        
        document.addEventListener("click", function(event) {
        
            if (!alvo.contains(event.target) && !alvo2.contains(event.target)) {
        
                alvo2.style.display = "none";
            }
        });
    }

});