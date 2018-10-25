var menu = document.querySelectorAll(".menu");
if (document.addEventListener) {
  document.addEventListener('contextmenu', function(e) {
    menu[0].style.display = 'block';
    menu[0].style.marginLeft = e.clientX + 'px';
    menu[0].style.marginTop = e.clientY + 'px';
    e.preventDefault();
  }, false);
} else {
  document.attachEvent('oncontextmenu', function() {
    menu[0].style.display = 'block';
    menu[0].style.marginLeft = e.clientX + 'px';
    menu[0].style.marginTop = e.clientY + 'px';
    window.event.returnValue = false;
  });
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  display: none;
}
li a {
  display: block;
  color: #000;
  padding: 8px 0 8px 16px;
  text-decoration: none;
}
li a:hover {
  background-color: #555;
  color: white;
}
<ul class="menu">
  <li><a href="#">Item 1</a>
  </li>
  <li><a href="#">Item 2</a>
  </li>
  <li><a href="#">Item 3</a>
  </li>
  <li><a href="#">Item 4</a>
  </li>
</ul>
var menu = document.querySelectorAll(".menu");
if (document.addEventListener) {
  document.addEventListener('contextmenu', function(e) {
    menu[0].style.display = 'block';
    menu[0].style.marginLeft = e.clientX + 'px';
    menu[0].style.marginTop = e.clientY + 'px';
    e.preventDefault();
  }, false);
} else {
  document.attachEvent('oncontextmenu', function() {
    menu[0].style.display = 'block';
    menu[0].style.marginLeft = e.clientX + 'px';
    menu[0].style.marginTop = e.clientY + 'px';
    window.event.returnValue = false;
  });
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  display: none;
}
li a {
  display: block;
  color: #000;
  padding: 8px 0 8px 16px;
  text-decoration: none;
}
li a:hover {
  background-color: #555;
  color: white;
}
<ul class="menu">
  <li><a href="#">Item 1</a>
  </li>
  <li><a href="#">Item 2</a>
  </li>
  <li><a href="#">Item 3</a>
  </li>
  <li><a href="#">Item 4</a>
  </li>
</ul>

