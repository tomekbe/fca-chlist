
checklist
------------
files structure
------------

full_checklist.html
limited_checklist.html
					 /css/main.css
					 /img/popup-icon.gif
					 	  tip.gif
					 /js/main.js
           /service/full_checklist_jsonp_ie.php
                    limited_checklist_jsonp_ie.php



---------
CSS
-------------
Checklist is using already existing FCA stylesheets.

   http://fca.org.uk/static/fca-static/css/bootstrap.css
   http://fca.org.uk/static/fca-static/css/layout.css
   http://fca.org.uk/static/fca-static/css/skeleton.css
   http://fca.org.uk/static/fca-static/css/global.css
   http://fca.org.uk/static/fca-static/css/hoverover.css
   http://fca.org.uk/static/fca-static/css/forms.css

Additionally following custom CSS needs to be loaded 
  /css/main.css 

------------
 HTML
-----------

Markup for the checklist (full and limited) differs only in one ID attribute. 
for full checklist it is id="full-checklist"
for limited checklist it is id="limited-checklist"
<div id="chlist"></div> has the main role here. the script looks for this ID and bootstraps it with content.

	----------------------------------------------
	Markup for full checklist

 	<!----- ----------------- -->
        <!-- the checklist  goes here -->
          <div class="eight columns article" id="full-checklist">
            <h1>Full Permission</h1>
            <h3>Checklist</h3>
            <p></p>
            <div class="intro">
              This helpful checklist tells you exactly what you'll need
              for your Credit Ready application, so you can start gathering everything you
              need in advance. Tick off every box as you go along, and all the hard work will
              soon be done.
              You'll need to :
            </div>

          <!-- checklist starts here -->
            <div id="chlist"></div>
          <!-- checklist ends here -->
            


                   <p>If you’ve completed this checklist, you should have everything you need to apply for limited
      permission and you’re one step closer to becoming authorised. Your application opening date will
      have been emailed to you, but if you have any questions please feel free to call us on 0845 606 9966.</p>

      </div>
        
        <!-- the end of checklist goes here -->
	-------------------------------------------------

	
	-------------------------------------------------
	Mark up for limited checklist
        <!----- ----------------- -->
        <!-- the checklist  goes here -->
          <div class="eight columns article" id="limited-checklist">
            <h1>Limited Permission</h1>
            <h3>Checklist</h3>
            <p></p>
            <div class="intro">
              This helpful checklist tells you exactly what you'll need
              for your Credit Ready application, so you can start gathering everything you
              need in advance. Tick off every box as you go along, and all the hard work will
              soon be done.
              You'll need to :
            </div>

          <!-- checklist starts here -->

            <div id="chlist"></div>
          <!-- checklist ends here -->
            


            <p>If you’ve completed this checklist, you should have everything you need to apply for limited
                      permission and you’re one step closer to becoming authorised. Your application opening date will
                      have been emailed to you, but if you have any questions please feel free to call us on 0845 606 9966.</p>

      </div>
        
        <!-- the end of checklist goes here -->
     -------------------------------------------------------------------


---------
Scripts
----------

checklist is using the jquery that loads with the page.
http://fca.org.uk/static/fca-static/js/jquery-latest.js

additionally the main.js needs to be loaded

    <script src="js/main.js"></script>


--------
Content
----------

Is pulled from;

http://view-it.co.uk/services/fca/limited_checklist_jsonp_ie.php?callback=JSON_CALLBACK

http://view-it.co.uk/services/fca/full_checklist_jsonp_ie.php?callback=JSON_CALLBACK


It is also supplied in service folder.
