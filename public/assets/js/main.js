// function display() {
//    event.preventDefault();
// }
window.onload = function () {
   document.getElementById("pay_button").addEventListener('click', function () {
      document.getElementById("popup_windows").style.cssText = "display: flex;"
   });
   document.getElementById("Cancel").addEventListener('click', function () {
      document.getElementById("popup_windows").style.cssText = "display: none;";
   });

   document.getElementById("verify_btn").addEventListener('click', function () {
      document.getElementById("popup_windows").style.cssText = "display: flex;"
   });

   document.getElementById("close").addEventListener('click', function () {
      document.getElementById("popup_windows").style.cssText = "display: none;"
   });
}