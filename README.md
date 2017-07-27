===========================================
===========================================
    Customizable Bootstrap 2 Menu Bar
https://getbootstrap.com/components/#navbar
===========================================
===========================================

- All configuration settings lie under assets/css/menubar-config.less

- This project uses the LESS CSS preprocessor which must be included at the top of your HTML file

- The jQuery scripts at the end of the index.php file are required for submenus to work correctly

- To ensure correctness, add files to your main HTML file in the following order:
    - css/bootstrap.min.css
    - css/menubar.less
    - js/jquery.min.js
    - js/bootstrap.min.js
    - js/less.min.js

- For "deeper" customization, try editing classes under menubar.less

- In the index.php, the navigation bar begins and ends with the tag "<nav>" 

- Be sure to include the following tag in the "<head>" of your HTML. If you don't, mobile browsers won't work correctly.
  
  Tag: <meta name="viewport" content="width=device-width, initial-scale=1">