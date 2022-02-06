<?php
include "header.php";
?>

		<div class="banner">
		<div class="product">
		<div class="slider">
            <div class="slides">
                <!--radio button start-->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <!--radio button end-->
                <!--slides images start-->
                <div class="slide first">
                    <div class="slide1 center" href="#about">
                        <div class="productText">
                        <p class="title">Coconut Fiber</p>
                        <p class="sub_title">Coconut fiber, is a natural fiber extracted from the outer skin of the coconut. Coconut coir is a fibrous substance found between hard shells, inside and outer layers of coconuts and is used in products such as floormats, brushes, mattresses and others.</p>
                        <a href="#coconutfiber"><button class="btn" >DISCOVER MORE</button></a>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide2 center" href="#about">
                        <div class="productText">
                        <p class="title">COMING SOON</p>
                        <p class="sub_title">This Product is Coming Soon</p>
                        <a href="#comingsoon1"><button class="btn" >COMING SOON</button></a>
                        </div>
                    </div> 
                </div>
                <div class="slide ">
                    <div class="slide3 center" href="#about">
                        <div class="productText">
                        <p class="title">COMING SOON</p>
                        <p class="sub_title">This Product is Coming Soon</p>
                        <a href="#comingsoon1"><button class="btn" >COMING SOON</button></a>
                        </div>
                    </div>    
                </div>
                <!--slides images end-->
                <!--auto nav start-->
                <div class="nav-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                </div>
                <!--auto nav end-->
                <script type="text/javascript">
            var counter = 1;
            setInterval(function(){
                document.getElementById('radio'+ counter).checked = true;
                counter++;
                if(counter > 3){
                    counter = 1;
                }
            }, 5000);
        </script>
            </div>
                <!--manual nav start-->
                <div class="nav-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                </div>
                <!--manual nav end-->
        </div>
        </div>
        </div>
        <section class="about about-product" id="coconutfiber">
        <div class="content">
      <div class="title">COCONUT FIBER</div>
      <p>Coconut fiber, is a natural fiber extracted from the outer skin of the coconut. Coconut coir is a fibrous substance found between hard shells, inside and outer layers of coconuts and is used in products such as floormats,brushes, mattresses and others.</p>
      <p>Coconut coir contains a high lignin content so that the cellulose content is low, making it stubborn, strong and very durable. The incredible fiber lightening is caused by cavities arising from dry sieve cells.
	Light fiber is best, golden yellow (fiber from raw coconut) or brown (fiber from ripe coconut).
</p>
      <p>Other uses of brown coir (made from ripe coconut) are paint paint, bags and gardening. White ker, harvested from raw coconut, is used to make soft brushes, ropes, ropes and fishing nets.</p>
      <p>The coconut tree (Cocos nucifera) is a member of the Palm Tree Family (Arecaceae) and the only remaining species of the genus Cocos. It is one of the most useful trees in the world and is often referred to as the "tree of life". It provides food, fuel, cosmetics, folk remedies and building materials, among many other uses.</p>
      <p>Indonesia ranks first among the world's coconut  fiber producing countries, after Brazil. since 2011, with the top coconut plantations. In terms of quality, Indonesia has what it takes to provide the best, ranging from land, climate and all needs. To plant this "tree of life".
This magnificent factory has become one of the strategic goods in Indonesia.
</p>
<div class="tablebox">
    <table>
      <tbody>
        <tr>
          <th>Color</th>
          <td>Gold & chocolate</td>
        </tr>
        <tr>
          <th>Moisture</th>
          <td>15-20%</td>
        </tr>
        <tr>
          <th>Long</th>
          <td>7-25 cm</td>
        </tr>
        <tr>
          <th>Dust</th>
          <td>2-4%</td>
        </tr>
        <tr>
          <th>Impurities</th>
          <td>5%</td>
        </tr>
        <tr>
          <th>Weight</th>
          <td>100-120kg/baal</td>
        </tr>
        </div>
        </tbody>
        </table>
    </div>
    
  </section>
        
  
<?php
include "footer.php";
?>