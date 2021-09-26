<!DOCTYPE html>
<html>
  <head>
    <title>View (User Interface)</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <!-- (A) SEARCH JAVASCRIPT -->
    <script>


    function doSearch () {
      // (A1) GET SEARCH TERM
      var data = new FormData();
      data.append("search", document.getElementById("search").value);

      // (A2) AJAX - USE HTTP:// NOT FILE://
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "../controller/controller_view.php");

      xhr.onload = function(){
        let results = document.getElementById("results");
       let output = document.getElementById("output"),
            search = JSON.parse(this.response);
        results.innerHTML = "";
        output.innerHTML = "";
        if (search !== null) {
          output.innerHTML += `<div > <table align="center">
          <tr> <th >Id</th><th >Name</th></tr></table></div>`;

          for (let s of search) {
          results.innerHTML += `
         <div><table align="center">
          <tr> <th>${s.id}</th><th >${s.name}</th> </tr></table> </div>`;
      }}
        else if(search==null)
        {

          results.innerHTML+='<h3> Results not Found !!! Try again With Different Name</h3>'
           }
      };
         xhr.send(data);
      return false;
    }
    </script>

    <!-- (B) SEARCH FORM -->
    <div id="head">
   <h2> User Details</h2>

    <form onsubmit="return doSearch()">
      <input type="text" id="search" placeholder="Enter name" required/>
      <br>
      <br>
      <input id="button" type="submit" value="Search"/>
    </form>
  </div>
    <!-- (C) SEARCH RESULTS -->
<div id=output> </div>
<div id=results> </div>
<!-- //

}
?> -->
</table>
</div>
  </body>
</html>
