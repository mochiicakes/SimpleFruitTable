<html>
  <body>
    <style>
      table.b{
        table-layout: auto;
        width: 1000px;
        height: 400px;
      }
      /*BACKGROUND*/
      body{
      	background-image: url(sakura.gif);
      	background-position: right;
      	background-size:cover;
      }
      table.c{
        background-color: PINK;
      }

      div.a{
          text-align: center;
      }

      </style>
      <br>
      <div class="a">
      <h1> 10 Healthy Fruits </h1>
      <br>
      <center>
      <table class ="c" width="200" height="150" border="1">
          <tr>
              <th>Technical Summative 2
              by Michaella Gonzales
              </th>
      </tr>
      </table>
      </center>
      <center>
          <table class="b" border="4">
      </tr>
      <th style="background-color: PINK">IMAGE</th>
      <th style="background-color:PINK">NAME</th>
      <th style="background-color:PINK">DESCRIPTION</th>
      <th style="background-color:PINK">FACTS</th>
      </tr>

<!---RED--->
<th style ="background-color: red"><?php
    echo "<img src='red.jpg' width='120' height='120'/>"
    ?></th>
      <th><?php
            $a=array("STRAWBERRY");
            echo "$a[0]"; ?></th>
      <th><?php
            $a=array("COLOR RED");
            echo "$a[0]"; ?></th>
           <th><?php
                 $a=array("Strawberries are native to the temperate regions of the
                 Northern Hemisphere, and cultivated varieties are widely grown
                 throughout the world. The fruits are rich in vitamin C and are
                 commonly eaten fresh as a dessert fruit, are used as a pastry or
                 pie filling, and may be preserved in many ways.");
                 echo "$a[0]"; ?></th>
           </tr>

<!---ORANGE--->
<th style ="background-color: orange"><?php
    echo "<img src='orange.jpg' width='120' height='120'/>"
    ?></th>
      <th><?php
            $a=array("CANTALOUPE");
            echo "$a[0]"; ?></th>
      <th><?php
            $a=array("COLOR ORANGE");
            echo "$a[0]"; ?></th>
      <th><?php
            $a=array("The cantaloupe, rockmelon, sweet melon, or spanspek is a melon
            that is a variety of the muskmelon species from the family Cucurbitaceae.
            Cantaloupes range in weight from 0.5 to 5 kilograms.");
            echo "$a[0]"; ?></th>
            </tr>

<!---YELLOW--->
<th style ="background-color: yellow"><?php
    echo "<img src='yellow.jpg' width='120' height='120'/>"
    ?></th>
      <th><?php
            $a=array("LEMON");
            echo "$a[0]"; ?></th>
      <th><?php
            $a=array("COLOR YELLOW");
            echo "$a[0]"; ?></th>
      <th><?php
            $a=array("The lemon is a species of small evergreen trees in the flowering
            plant family Rutaceae, native to Asia, primarily Northeast India, Northern
            Myanmar or China.");
            echo "$a[0]"; ?></th>
            </tr>

<!---GREEN--->
<th style ="background-color: green"><?php
    echo "<img src='green.jpg' width='120' height='120'/>"
    ?></th>
      <th><?php
            $a=array("AVOCADO");
            echo "$a[0]"; ?></th>
      <th><?php
            $a=array("COLOR GREEN");
            echo "$a[0]"; ?></th>
      <th><?php
            $a=array("The avocado is a tree originating in the Americas which is likely
            native to the highland regions of south-central Mexico to Guatemala.
            It is classified as a member of the flowering plant family Lauraceae.");
            echo "$a[0]"; ?></th>
      </tr>


<!---BLUE 5/10--->
<th style ="background-color: BLUE"><?php
    echo "<img src='blue.png' width='120' height='120'/>"
    ?></th>
      <th><?php
          $a=array("BLUEBERRIES");
          echo "$a[0]"; ?></th>
          <th><?php
          $a=array("COLOR BLUE");
          echo "$a[0]"; ?></th>
      <th><?php
          $a=array("Blueberries are a widely distributed and widespread group of
          perennial flowering plants with blue or purple berries. They are classified
          in the section Cyanococcus within the genus Vaccinium.");
          echo "$a[0]"; ?></th>
      </tr>

<!---VIOLET--->
<th style ="background-color: VIOLET"><?php
    echo "<img src='violet.jpg' width='120' height='120'/>"
    ?></th>
      <th><?php
          $a=array("GRAPES");
          echo "$a[0]"; ?></th>
          <th><?php
          $a=array("COLOR VIOLET");
          echo "$a[0]"; ?></th>
      <th><?php
          $a=array("A grape is a fruit, botanically a berry, of the deciduous woody
          vines of the flowering plant genus Vitis. Grapes can be eaten fresh as table
          grapes, used for making wine, jam, grape juice, jelly, grape seed extract,
          vinegar, and grape seed oil, or dried as raisins, currants and sultanas.");
          echo "$a[0]"; ?></th>
          </tr>

<!---PURPLE--->
<th style ="background-color: PURPLE"><?php
    echo "<img src='purple.jpg' width='120' height='120'/>"
    ?></th>
    <th><?php
          $a=array("PLUM");
          echo "$a[0]"; ?></th>
          <th><?php
          $a=array("COLOR PURPLE");
          echo "$a[0]"; ?></th>
    <th><?php
          $a=array("A plum is a fruit of some species in Prunus subg. Prunus. Mature
          plum fruits may have a dusty-white waxy coating that gives them a glaucous
          appearance. This is an epicuticular wax coating and is known as wax bloom. ");
          echo "$a[0]"; ?></th>
          </tr>

<!---PINK--->
<th style ="background-color: PINK"><?php
    echo "<img src='pink.jpg' width='120' height='120'/>"
    ?></th>
    <th><?php
          $a=array("DRAGON FRUIT");
          echo "$a[0]"; ?></th>
          <th><?php
          $a=array("COLOR PINK");
          echo "$a[0]"; ?></th>
    <th><?php
          $a=array("A pitaya or pitahaya is the fruit of several different cactus
          species indigenous to the Americas. Pitaya usually refers to fruit of the
          genus Stenocereus, while pitahaya or dragon fruit refers to fruit of the
          genus Selenicereus, both in the family Cactaceae.");
          echo "$a[0]"; ?></th>
          </tr>


<!---BLACK--->
<th style ="background-color: BLACK"><?php
    echo "<img src='black.jpg' width='120' height='120'/>"
    ?></th>
    <th><?php
          $a=array("ELDERBERRIES");
          echo "$a[0]"; ?></th>
          <th><?php
          $a=array("COLOR BLACK");
          echo "$a[0]"; ?></th>
    <th><?php
          $a=array("Elderberry (Sambucus nigra) is the dark purple berry from the
          European elder tree. It has a long history of use for cold and flu.
          Elderberry is a popular ingredient in supplements. It might affect the
          immune system, and also seems to have activity against viruses,
          including the flu.");
          echo "$a[0]"; ?></th>
          </tr>


<!---WHITE--->
    <th style ="background-color: WHITE"><?php
    echo "<img src='white.jpg' width='120' height='120'/>"
    ?></th>
    <th><?php
          $a=array("WAX APPLE");
          echo "$a[0]"; ?></th>
          <th><?php
          $a=array("COLOR WHITE OR PINK");
          echo "$a[0]"; ?></th>
    <th><?php
          $a=array("Safed jamun or wax apple is also known as Golap Jaam in Bangladesh
          and it is also popular at fruit markets in Kolkata, where it is more popularly
          known as Gulab Jamun, owing to the sweet smell of rose in the fruit.");
          echo "$a[0]"; ?></th>
          </tr>
      </table>
    </center>
  </body>
</html>
