; ----------------
; Generated makefile from http://drushmake.me
; Permanent URL: http://drushmake.me/file.php?token=f8309ec6fed7
; ----------------
;
; This is a working makefile - try it! Any line starting with a `;` is a comment.

; Core version
; ------------
; Each makefile should begin by declaring the core version of Drupal that all
; projects should be compatible with.

core = 7.x

; API version
; ------------
; Every makefile needs to declare its Drush Make API version. This version of
; drush make uses API version `2`.

api = 2

; Core project
; ------------
; In order for your makefile to generate a full Drupal site, you must include
; a core project. This is usually Drupal core, but you can also specify
; alternative core projects like Pressflow. Note that makefiles included with
; install profiles *should not* include a core project.

; Drupal 7.x. Requires the `core` property to be set to 7.x.
projects[drupal][version] = 7.x



; Modules
; --------
projects[admin][version] = 2.0-beta3
projects[admin][type] = "module"
projects[admin][subdir] = "contrib"
projects[module_filter][version] = 2.0-alpha2
projects[module_filter][type] = "module"
projects[module_filter][subdir] = "contrib"
projects[ctools][version] = 1.4
projects[ctools][type] = "module"
projects[ctools][subdir] = "contrib"
projects[date][version] = 2.7
projects[date][type] = "module"
projects[date][subdir] = "contrib"
projects[devel][version] = 1.5
projects[devel][type] = "module"
projects[devel][subdir] = "contrib"
projects[features][version] = 2.0
projects[features][type] = "module"
projects[features][subdir] = "contrib"
projects[email][version] = 1.3
projects[email][type] = "module"
projects[email][subdir] = "contrib"
projects[link][version] = 1.2
projects[link][type] = "module"
projects[link][subdir] = "contrib"
projects[imce][version] = 1.9
projects[imce][type] = "module"
projects[imce][subdir] = "contrib"
projects[ds][version] = 2.6
projects[ds][type] = "module"
projects[ds][subdir] = "contrib"
projects[google_analytics][version] = 2.0
projects[google_analytics][type] = "module"
projects[google_analytics][subdir] = "contrib"
projects[html5_tools][version] = 1.2
projects[html5_tools][type] = "module"
projects[html5_tools][subdir] = "contrib"
projects[imageapi][version] = 1.x-dev
projects[imageapi][type] = "module"
projects[imageapi][subdir] = "contrib"
projects[libraries][version] = 2.2
projects[libraries][type] = "module"
projects[libraries][subdir] = "contrib"
projects[panelizer][version] = 3.1
projects[panelizer][type] = "module"
projects[panelizer][subdir] = "contrib"
projects[pathauto][version] = 1.2
projects[pathauto][type] = "module"
projects[pathauto][subdir] = "contrib"
projects[strongarm][version] = 2.0
projects[strongarm][type] = "module"
projects[strongarm][subdir] = "contrib"
projects[panels][version] = 3.4
projects[panels][type] = "module"
projects[panels][subdir] = "contrib"
projects[page_title][version] = 2.7
projects[page_title][type] = "module"
projects[page_title][subdir] = "contrib"
projects[views][version] = 3.8
projects[views][type] = "module"
projects[views][subdir] = "contrib"
projects[webform][version] = 3.20
projects[webform][type] = "module"
projects[webform][subdir] = "contrib"
projects[xmlsitemap][version] = 2.0
projects[xmlsitemap][type] = "module"
projects[xmlsitemap][subdir] = "contrib"
projects[navbar][subdir] = contrib



; Themes
; --------
projects[] = ember
projects[] = zurb_foundation



; Libraries
; ---------
libraries[html5bp][download][type] = "file"
libraries[html5bp][download][url] = "http://github.com/h5bp/html5-boilerplate/zipball/v3.0.2stripped"
libraries[jquery][download][type] = "file"
libraries[jquery][download][url] = "https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"
libraries[jqueryui][download][type] = "file"
libraries[jqueryui][download][url] = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"
libraries[Modernizr][type] = "libraries"
libraries[Modernizr][download][type] = "file"
libraries[Modernizr][download][url] = "https://github.com/Modernizr/Modernizr/archive/v2.7.1.zip"
libraries[backbone][type] = "libraries"
libraries[backbone][download][type] = "file"
libraries[backbone][download][url] = "https://github.com/jashkenas/backbone/archive/1.0.0.zip"
libraries[underscore][type] = "libraries"
libraries[underscore][download][type] = "file"
libraries[underscore][download][url] = "https://github.com/jashkenas/underscore/archive/1.4.4.zip"


