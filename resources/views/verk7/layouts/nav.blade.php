<div>
    <nav class="menu">
        <ul class="top-ul">
          <li><a class="active" href="/verk7">News</a></li>
        </ul>
    </nav>
</div>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for articles.." title="Type in a name">
<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}
</script>