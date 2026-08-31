let dragging = "none";
let holding = false;
let x = 0;
let y = 0;

function MouseDown(e) {
    holding = true;
    dragging = document.getElementById(e.id);
}
window.onmouseup = () => {
    dragging.style.zIndex = 0;
    dragging.style.transition = 0.5+"s";
    holding = false;
    dragging = "none";
}

document.addEventListener("mousemove", MoveCursor);

function MoveCursor(e){
    if (holding) {
        x = e.clientX;
        y = e.clientY;

        dragging.style.zIndex  = 1;
        dragging.style.transition = 0+"s";
        dragging.style.position = "absolute";
        dragging.style.top = y + "px";
        dragging.style.left = x + "px";

        x = e.clientX;
        y = e.clientY;
    }
}