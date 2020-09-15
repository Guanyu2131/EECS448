let origin=1;

function plus(n){
    showPicture(origin+=n);
}

function showPicture(n){
    var i;
    var x = document.getElementsByClassName("slides");
    if(n>x.length){origin=1;}//when you hit next button and origin more than picture number, the position will move to first
    if(n<1){origin = x.length} //when you hit previous button and origin less than 1, the position will move to last picture
    for(i=0;i<x.length;i++){
        x[i].style.display="none"; //"none" will hiden the element, the element will not be displayed
    }
    x[origin-1].style.display = "block";//element is rendered as a block-level element

}