<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>good</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js
" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css
" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js
"></script>
</head>
<body>
    <div class="container">
        <h1>Posts</h1>
        <div class="divInfo" class="row">
            <div class="col-12">
               
            </div>
        </div>
        <div id="divMain" class="row">
            <div class="col-12">
 <table class="table">
                <thead>
                <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Body</th>
                        
                    </tr>
                </thead>
                <tbody id="tbldata"> 
    
                        </tbody>
                       </table>
            </div>
           
        </div>
    </div>
    <script>

        function btnInfo_click(id){
            alert(id)
            $("#divInfo").show();
            $("#divMain").hide();

        }
        function loadJSONArray(){
            var url ="https://jsonplaceholder.typicode.com/posts"; 
            $.getJSON(url)
                .done((data)=>{
                  console.log(data)
                      $.each(data, (k, item)=>{
                        console.log(item)
                        var Array ="<tr>"
                            + "<td><button onClick='btnInfo_click("+ item.id + ")' "
                            + "class='btn-sm btn-primary'>I</button></td>"
                            + "<td>" + item.id + "</td>" 
                            + "<td>" + item.title + "</td>"
                            + "<td>" + item.body + "</td>"
                            + "</tr>";
                        $("#tbldata").append(Array);

                })
            })
            .fail((xhr, status, err)=>{
                console.log("error");
            })
        }
        $(()=>{
            $("#divInfo").hide();
            loadJSONArray();
        });
    </script>
   

</body>
</html>