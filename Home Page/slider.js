var i = 0;

var imgArray = [
    "Slider Imazhe/Ubtlogo.png",
    "Slider Imazhe/UPlogo.png",
    "Slider Imazhe/Ubtlogo.png",
    "Slider Imazhe/UPlogo.png",
];

function changeImg(){

    document.getElementById('partneret').src = imgArray[i];

    if(i < imgArray.length - 1){

       i++; 
    }
    else{
        i = 0;
    }
    // setTimeout("changeImg()", 3000);
}
window.onload = function(){
    document.getElementById('partneret').src = imgArray[0];
}