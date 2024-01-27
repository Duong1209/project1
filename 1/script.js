//cartegory
const itemSlidebar = document.querySelectorAll(".cartegory-left-li")
itemSlidebar.forEach(function(menu,index){
    menu.addEventListener("click",function(){
        menu.classList.toggle("block")
    })
})

//product
const button = document.querySelector(".product-content-right-bottom-top")
if(button){
        button.addEventListener("click",function(){
                document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
        })
}

const bigImg = document.querySelector(".product-content-left-big-img img")
const smallImg = document.querySelectorAll(".product-content-left-small-img img")
smallImg.forEach(function(imgItem,X){
        imgItem.addEventListener("click",function(){
                bigImg.src = imgItem.src
        })
})

//index
const header = document.querySelector("header")
window.addEventListener("scroll",function(){
    x = window.pageYOffset
    if(x>0){
        header.classList.add("sticky")
    }
    else{
        header.classList.remove("sticky")
    }
})

const imgItem = document.querySelectorAll(".aspect-ratio-169 img")
const imgItemContainer = document.querySelector(".aspect-ratio-169")
const dotItem = document.querySelectorAll(".dot")
let index = 0;
let imgLeng = imgItem.length
imgItem.forEach(function(image,index){
    image.style.left = index*100 + "%"
    dotItem[index].addEventListener("click",function(){
    slideRun (index)
    })
})
function slider (){
    index++;
    if(index >= imgLeng){index=0;
   
    }S
    slideRun (index)
}
function slideRun (index) {
    imgItemContainer.style.left = "-" + index*100 + "%"
    let dotActive = document.querySelector(".active")
    dotActive.classList.remove("active")
    dotItem[index].classList.add("active");
}

setInterval (slider,5000)