let mouseDown = false;
window.onmousedown = () => {
  mouseDown = true;
  if (mouseDown) {
    console.log('mouse button down')
  }
}
window.onmouseup = () => {
  mouseDown = false;
  if (!mouseDown) {
    console.log('mouse button up')
  }
}