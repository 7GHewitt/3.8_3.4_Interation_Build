<!DOCTYPE html>
<html>
   <head>
      <!--Look this up in  -->
      <meta name="Author" content="Guy Hewitt">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="Keywords" content="Gannet, Beach, Adventures">
      <meta name="Description" content="Website for the company Gannet Beach Adventures">
      <meta charset="utf-8" />
      <title>Home Page</title>
      <!--This links the css to the html-->
      <link rel="stylesheet" href="css/style.css"/>
      <!--This imports the javascript file -->
      <script rel="js/script.js" defer></script>
   </head>
   <body>
	   <!--header containing banner --> 
      <div class = "container">
          <div class = "header">
            <img src = "images/banner.jpg" >
         	</div>
         <div class = "section">
			
            <div id="thumbnails">
            </div>
            <div id="myModal" class="modal">
               <!-- The Close Button -->
               <span class="close">&times;</span>
               <!-- Modal Content (The Image) -->
               <img class="modal-content" id="img01">
               <!-- Modal Caption (Image Text) -->
               <div id="caption"></div>
            </div>
			 <!--the aside navigation bar -->
            <h2>Welcome To Grahams website</h2>
            <aside>
               <ul>
                  <li><a href="playlist.php">Page 2</a></li>
                  <li><a href="index.php">Home</a></li>
               </ul>
            </aside>
			 <!--main section containg text -->
            <p>This is the main page of Grahams database website here Graham and others will be able to find his database of songs sorted and arranged in numerus ways. In North America, Europe, and Oceania, the decade saw the rise of disco, which became one of the biggest genres of the decade, especially in the mid-to-late 1970s.[1] In Europe, a variant known as Euro disco[1] rose in popularity towards the end of the 1970s. Aside from disco, funk, smooth jazz, jazz fusion, and soul music remained popular throughout the decade. Rock music played an important part in the Western musical scene, with punk rock thriving throughout the mid to late 1970s. </p>
         </div>
		  <!--the footer -->
         <div class = "footer">
            <h3>&copy; copyright Guy Hewitt 2021</h3>
         </div>
      </div>
      <!-- Load jQuery from the Google CDN -->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <!-- This is my own javascript file to load my image gallery -->
      <script type="text/javascript" src="javascript/07-gallery.js"></script>
   </body>
</html>