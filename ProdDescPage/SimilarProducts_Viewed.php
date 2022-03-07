   <style>
       .a,
       .a:hover {
           color: black;
           text-decoration: none;
       }

       .RSProd {
           overflow-y: auto;
       }

       @media screen and (min-width: 768px) {

           .RSProd {
               overflow-y: auto;
           }
       }
   </style>
   <div class="container-md RSProd">
       <table class="image" border="0" width="100%" align="center" bgcolor='white'>
           <tbody id="simProd">
               <tr>
               <tr>
                   <td colspan="5">
                       <h2 class="mt-2 ml-4">Similar Products</h2>
                       <hr>
                   </td>
               </tr>
               <td>
                   <div class="cards">
                       <img src="Images/pic5.jpg" width="75%" alt="pic">
                       <h4>*Product Name*</h4>
                       <h5>*Product Price*</h5>
                   </div>
               </td>

               <td>
                   <div class="cards">
                       <img src="Images/pic4.jpg" width="75%" alt="pic">
                       <h4>*Product Name*</h4>
                       <h5>*Product Price*</h5>
                   </div>
               </td>
               <td>
                   <div class="cards">
                       <img src="Images/pic9.jpg" width="75%" alt="pic">
                       <h4>*Product Name*</h4>
                       <h5>*Product Price*</h5>
                   </div>
               </td>
               <td>
                   <div class="cards">
                       <img src="Images/pic7.jpg" width="75%" alt="pic">
                       <h4>*Product Name*</h4>
                       <h5>*Product Price*</h5>
                   </div>
               </td>
               </tr>
           </tbody>
       </table>
   </div>
   <div class="RSProd container-md my-5">
       <table class="image" border="0" width="100%" align="center" bgcolor='white'>
           <tbody id="recProd">
               <tr>
               <tr>
                   <td colspan="5">
                       <h2 class="mt-2 ml-4">Recently Viewed Products</h2>
                       <hr>
                   </td>
               </tr>
               <td>
                   <div class="cards">
                       <img src="Images/pic2.jpg" width="75%" alt="pic">
                       <h4>*Product Name*</h4>
                       <h5>*Product Price*</h5>
                   </div>
               </td>

               <td>
                   <div class="cards">
                       <img src="Images/pic3.jpg" width="75%" alt="pic">
                       <h4>*Product Name*</h4>
                       <h5>*Product Price*</h5>
                   </div>
               </td>
               <td>
                   <div class="cards">
                       <img src="Images/pic8.jpg" width="75%" alt="pic">
                       <h4>*Product Name*</h4>
                       <h5>*Product Price*</h5>
                   </div>
               </td>
               <td>
                   <div class="cards">
                       <img src="Images/pic1.jpg" width="75%" alt="pic">
                       <h4>*Product Name*</h4>
                       <h5>*Product Price*</h5>
                   </div>
               </td>
               </tr>
           </tbody>
       </table>
   </div>
   <script>
       function setSimilar() {
           const simProd = document.getElementById("simProd");
           let productHtmlr = '';
           $.ajax({
               url: "./php/getRecentView.php",
               method: "GET",
               dataType: "JSON",
               success: function(data) {
                   data.forEach(value => {
                       //console.log(value);
                       productHtmlr +=
                           '<td><a class="a" href=../ProdDescPage/?pid=' + value.product_id +
                           '><div class = "cards" ><img src="../' + value.image +
                           '" width = "75%" alt = "pic"> <h4> ' + value.title + ' <h4> <h5> ₹' + value
                           .price + ' </h5> </div></a></td>';
                   });
                   document.getElementById('simProd').innerHTML =
                       ' <tr> <tr><td colspan = "5" ><h2 class = "mt-2 ml-4"> Recently Viewed Products </h2> <hr></td> </tr>' +
                       productHtmlr + '</tr>';
               }
           });
       }
       setSimilar();

       function setRecents() {
           let RproductHtmlr = '';
           $.ajax({
               url: "./php/getSimilarView.php",
               method: "GET",
               dataType: "JSON",
               success: function(data) {
                   data.forEach(value => {
                       //console.log(value);
                       RproductHtmlr +=
                           '<td><a class="a" href=../ProdDescPage/?pid=' + value.product_id +
                           '><div class = "cards" ><img src="../' + value.image +
                           '" width = "75%" alt = "pic"> <h4> ' + value.title + ' <h4> <h5> ₹' + value
                           .price + ' </h5> </div> </a> </td>';
                   });
                   document.getElementById('recProd').innerHTML =
                       ' <tr> <tr><td colspan = "5" ><h2 class = "mt-2 ml-4"> Similar Products </h2> <hr></td> </tr>' +
                       RproductHtmlr + '</tr>';
               }
           });
       }
       setRecents();
   </script>