

window.onload=counter;
function counter(){
var seconds = 180;
countDown();
function countDown(){
var minutes = Math.floor(seconds / 60);
document.getElementById("remain").innerHTML= seconds;
if(seconds>0){
seconds=seconds - 1;
setTimeout(countDown,1000);
}
if(seconds == 0){
alert('timeout');
}

}
} 


