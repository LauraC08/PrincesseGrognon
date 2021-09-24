window.gallery = function(){
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    Array.from(document.querySelectorAll(".gallery-item")).forEach(img => {
        img.onclick = function(e){
        modal.style.display = "block";
        modalImg.src = e.target.src;
        captionText.innerHTML = this.alt;
        
        }
    });


    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    } 
}