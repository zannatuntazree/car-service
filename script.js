
const scroll = new LocomotiveScroll({
    el: document.querySelector('#main'),
    smooth: true
});


var elemc = document.querySelector("#elem-container")
var fixed = document.querySelector("#fixed-image")
elemc.addEventListener("mouseenter",function(){
    fixed.style.display = "block"
})
elemc.addEventListener("mouseleave", function () {
    fixed.style.display = "none"
})

var elems = document.querySelectorAll(".elem")
elems.forEach(function (e){
    e.addEventListener("mouseenter", function () {
        var image = e.getAttribute("data-image")
        fixed.style.backgroundImage = `url(${image})`
    })
})


// <!--another part-->
// <div id="aboutus">
//     <div class="img-area">
//         <img src="a1.jpg" alt="">
//     </div>
//     <div id="text">
//         <h2>WE ARE <span>TRUSTED</span> <br>REPAIR CENTER</h2>
//         <p>We have professional service partners with Skilled
//         <br>mechanics. We are making a one-stop car service
//         <br>solution because your flexibility is our main priority.
//     </div>
// </div>



