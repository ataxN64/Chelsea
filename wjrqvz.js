const p = document.createElement('p');
const a = document.createElement('a');
document.body.appendChild(p);
p.setAttribute("id","u_p");
p.innerHTML='<span style="background-color:rgba(255,255,255,0.2);  user-select: none; padding: 0.2em 0.4em; border-radius:0.2em;"><i>💻</i> + <i>❤️</i> = <a id="myId" href="https://codepen.io/adsingh14" target="_blank">AMAN</a></span>';

document.head.insertAdjacentHTML('beforeend','<style>@import url("https://fonts.googleapis.com/css?family=Raleway"); p#u_p{transition:color 0.1s; opacity:0.3; transform: translatex(-50%); position:absolute; bottom:5px; right:0; left: 50%; font-family :Raleway; margin-top:1em; text-align:center; text-decoration:none;}  p#u_p:hover{opacity:0.7} i{font-style:normal; color:skyblue; } i:last-of-type{color:red;} a#myId{color:skyblue;display:inline; text-decoration:none;} a#myId:hover{color:#145d7b}</style>');