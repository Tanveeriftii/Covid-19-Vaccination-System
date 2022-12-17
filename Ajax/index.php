<script>
    function get(id)
    {
        return document.getElementById(id);
    }
    function loadDoc()
    {
        var xhr = new XMLHttpRequest();
        xhr.open("GET","myprofile.php",true);
        xhr.onreadystatechange=function()
        {
            if (this.readyState== 4 && this.status == 200)
            {
                get("demo").innerHTML = this.responseTEXT;
            }
        };
        xhr.send;
    }
    </script>
    <button onclick="loadDoc()">Click me</button>
    <div id="demo"></div>