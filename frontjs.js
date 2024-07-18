let slideBtnL = document.getElementById("slider-btn-left")
let slideBtnR = document.getElementById("slider-btn-right")
let imgItem = document.querySelectorAll(".image-item")

let startSlider=0
let endSlider = (imgItem.length - 1)*100

slideBtnL.addEventListener("click",()=>{
    if(startSlider < 0){
        startSlider=startSlider+100;
    }
    imgItem.forEach(element=>{
        element.style.transform=`translateX(${startSlider}%)`;
    })
})
slideBtnR.addEventListener("click",()=>{
    if(startSlider >= -endSlider+100){
        startSlider=startSlider-100;
    }
    imgItem.forEach(element=>{
        element.style.transform=`translateX(${startSlider}%)`;
    })
})
