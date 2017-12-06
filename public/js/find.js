function myFunction() {
    var input, filter, ul, div, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
		div = document.getElementById("news-box");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
					//div[i].style.display = "";
        } else {
            li[i].style.display = "none";
						//div[i].style.display = "none";
        }
    }
}