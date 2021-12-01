function showName(str) {
  if(str.length == 0) {
    document.getElementById('textName').innerHTML = "";
    return;
  }

  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById("textName").innerHTML = xmlhttp.responseText;
    }
  }

  xmlhttp.open('GET', 'frameworks.php?name=' + str, true);
  xmlhttp.send();
}