=== Wordpress Single File PHP Gallery ===
Contributors: Mitnik
Donate link: 
Tags: gallery, single file, simple, photos
Requires at least: 2.0.2
Tested up to: 2.6.2
Stable tag: 3.6.0

Wordpress Single File PHP Gallery is a gallery in one single PHP file.

== Description ==

Wordpress Single File PHP Gallery is a gallery in one single PHP file. All you have to do is copy the file to any directory containing JPG, JPEG, PNG or GIF images to make a gallery. You can then use your favorite FTP client to upload images to the gallery. Sub directories will be sub galleries. Thumbnails for images and directories are generated automatically. Description of galleries and images can be added by creating a simple .txt file with the description. It does not use a DataBase, nore does it require any programming skills to use.

____________________________________________________________
FEATURES

 - Wordpress Single File PHP Gallery is Freeware

 - Very simple and easy to use

 - Uses no DataBase

 - Automatically creates thumbnails on-the-fly

 - No configuration is required

 - Many configuration options

 - Easy to customize / personalize

 - Option to save thumbnails on server, to speed up when
   gallery is shown again

 - Unlimited numbers of sub galleries

 - Generates valid HTML 4.0 Transitional

 - Contains valid CSS

 - See configuration information below for all features


____________________________________________________________
REQUIREMENTS

This script requires a working installation of Wordpress.

For this script to function as designed you will need a web
server with PHP 4 or PHP 5 and the GD library installed.
See here for information: http://www.php.net/

For the script to create thumbnails, the PHP memory_limit
must be large enough to contain:
script + fullimage (converted to BMP) + thumbnail (converted
to BMP) at one time.

In order to save thumbnails on server and show the data
provided by SHOW_DIR_INFO, SHOW_IMAGE_INFO and
SHOW_FILE_INFO, PHP must have write access to the set
THUMB_ROOT folder.

== Installation ==

The only thing you have to do is copy the photos directory to the root of your wordpress integration, or put the wsfpg
index.php file in any subdirectory of your Wordpress Blog. When this is done all images (jpg, jpeg, png, gif) in that
directory and all sub directories will be shown in the gallery.

Note: The gallery must be installed as a subdirectory of your wordpress blog.

____________________________________________________________
TIPS / FAQ

 - Set the THUMB_ROOT to a path where PHP have write access.
   Doing this allows all created thumbnails to be saved on
   the server for later usage when gallery is shown again.
   This will speed up the gallery and save server CPU

 - If a thumbnail exists, it will be used. So remember to
   delete the old thumbnails if you make changes to the way
   thumbnails are created

 - You can make your own thumbnails. Just save them under
   THUMB_ROOT in the same path and name as the full image is
   under GALLERY_ROOT

 - If some or all thumbnails are missing or show up as a red
   X, the reason could be that the full images are too big
   for the php-enging to load them into memory. You will
   then have to do one of the following:
     1. Make your own thumbnails
     2. Make the full images smaller
     3. Increase the memory_limit in php.ini. (If the 
        memory_limit is 8MB, it gives a maximum image size
        on about 1600*1600)

 - Single File PHP Gallery don't have to be called
   index.php, you can rename it to whatever you like
____________________________________________________________
CONFIGURATION INFORMATION

  If you edit the index.php file in a plain text editor you
  will find the configuration section at the top of the
  script.

  Refer to the descriptions below for configuration.

  ____________________________________________________________
  define("GALLERY_ROOT", "./");

  Set the path of the gallery root, where the images and sub
  directories containing images are placed.
  The default value "./" is the directory where the script is
  placed.
  If SHOW_FILES is TRUE, the files will only be downloadable
  if a relative path like the one in example 1 is used.
  GALLERY_ROOT should always end with a slash.

  Example 1: "./images/"

  Example 2: $_SERVER[DOCUMENT_ROOT]."/gallery/images/"

  Example 3: "/users/bob_the_user/wwwroot/images/my_pictures/"


  ____________________________________________________________
  define("THUMB_ROOT", "");

  Set the path of the thumbnail root, where the thumbnails
  will be created.
  Should be set to a directory outside GALLERY_ROOT where PHP
  have write access.
  If the directory does not exists it will be created.
  Set to "" to disable saving of thumbnails.

  INFO: If defined, THUMB_ROOT should always end with a slash
        like the examples below.

  Example 1: "./thumbs/"

  Example 2: $_SERVER[DOCUMENT_ROOT]."/gallery/thumbs/"

  Example 3: "/users/bob_the_user/data/sfpg_thumbs/"


  ____________________________________________________________
  define("SECURITY_PHRASE", "change this text!");

  Set this option to a random phrase or just a number of
  random chars - and don't tell anyone! The string will be
  used to make gallery URL's tamper resistant.

  Example 1: "WI5M2YzMjekzNmM3"

  Example 2: "I.like.icecream"

  ____________________________________________________________
  define("SHOW_DIR_NAME", 1);

  Set where to show the names of the directories.

  Options:
   0 : do not show directory names.
   1 : show name below thumbnails.
   2 : show name as a hover/title on thumbs.

  TIP: Just make a sum of the desired options.

  Example: To activate option 1 and 2 you should set to 3.


  ____________________________________________________________
  define("SHOW_DIR_INFO", 5);

  Set where to show directory information (date, number of Sub
  galleries, number of images and number of files)

  Options:
   0 : do not show directory information.
   1 : show info below thumbnails.
   2 : show info as a thumb hover/title.
   4 : show info in thumbnail view at top of gallery.

  TIP: Just make a sum of the desired options.

  Example: To activate option 1 and 4 you should set to 5.

  INFO: This option requires the THUMB_ROOT to be set.

  INFO: The information files is created when viewing inside
        the current directory in thumbnail view.
        The information is then saved in THUMB_ROOT in the
        current directory in a file called "_info.sfpg".
        When the total number of items (dirs + images + files)
        in a given directory changes, the information files is
        then updated.

  TIP: In a given folder. If a file is deleted and a new file
       is added, the total number of files is the same, the
       information file is then not updated. In that case you
       can delete the "_info.sfpg" file to trigger a
       regenerate of the file with the correct information.


  ____________________________________________________________
  define("SHOW_DIR_DESC", 5);

  Set where to show directory description (the text from the
  file defined by the DIR_DESC_FILE)

  Options:
   0 : do not show directory description.
   1 : show description below thumbnails.
   2 : show description as a thumb hover/title.
   4 : show description in thumbnail view at top of gallery.

  TIP: Just make a sum of the desired options.

  Example: To activate option 2 and 4 you should set to 6.


  ____________________________________________________________
  define("DIR_UNDERSCORE_AS_SPACE", TRUE);

  Set to TRUE to have underscores in directory names shown as
  spaces.
  Set to FALSE to have directory names shown as is.


  ____________________________________________________________
  define("DIR_NAME_FILE", "_name.txt");

  Set the name of the name-file that can be placed in every
  directory of the gallery.
  If a file with the given name is found, the first line of
  text from the file will be used instead of the directory
  name. Directories will still be sorted after the actual
  name.

  TIP 1: This is useful if you would like to use chars that
         cannot be used in directory names.

  TIP 2: See SORT_DIVIDER for an easy way of sorting
         directories, images and files.


  ____________________________________________________________
  define("DIR_IMAGE_FILE", "_image.jpg");

  Set the name of the image that can be placed in every
  directory in the gallery.
  If an image with the given name is found, it will be used as
  the thumbnail for that directory. The image will not be
  displayed inside the directory.

  TIP 1: This is very useful when having directories with only
         files of non-supported image types for download.

  TIP 2: You do not have to resize the image, it will be
         resized like all other images in the gallery.


  ____________________________________________________________
  define("DIR_DESC_FILE", "_desc.txt");

  Set the name of the description file that can be placed in
  every directory of the gallery (including the GALLERY_ROOT).
  If a file with the given name is found, the text will be
  shown in the gallery.


  ____________________________________________________________
  define("DIR_DESC_HTML", FALSE);

  Set to TRUE to allow HTML in the directory description.
  Set to FALSE to have text from description shown as is.

  INFO: If set to TRUE, special chars and or HTML could render
        the page useless if not used with caution.

  TIP: Description in the title will always be shown as is, so
       if set to TRUE remember to turn title description off.


  ____________________________________________________________
  define("DIR_SORT_REVERSE", FALSE);

  Set to TRUE to sort directories in reverse order (highest to
  lowest).
  Set to FALSE to sort directories in normal order (lowest to
  highest).


  ____________________________________________________________
  define("DIR_SORT_BY_TIME", FALSE);

  Set to TRUE to sort directories by modified time.
  Set to FALSE to sort directories by name.

  INFO: The modified time of a directory is updated when
        changes are made to the contents of the directory.
        Even deleting a file or image will make the directory
        "new". (This might differ from platform to platform)


  ____________________________________________________________
  $dir_exclude = array();

  Set an array of directory names that should not be shown in
  the gallery.

  INFO 1: Directory names should be entered in lower case.

  INFO 2: Exclusion is not case sensitive. If you exclude
          "readme.txt", all the following files will be
          excluded: "readme.txt", "ReadMe.Txt","README.TXT"
          and so on.

  INFO 3: Adding a directory to the exclude list will only
          remove the directory from beeing listed. It will
          still be possible for a user to guess and modify the
          url and have the content listed in the gallery.

  Example 1: array("cgi-bin");

  Example 2: array("cgi-bin", "include", "old_images");


  ____________________________________________________________
  define("SHOW_IMAGE_NAME", 5);

  Set where to show the names of the images.

  Options:
   0 : do not show image names.
   1 : show name below thumbnails.
   2 : show name as a hover/title on thumbs.
   4 : show name in full image view above image.

  TIP: Just make a sum of the desired options.

  Example: To activate option 1, 2 and 4 you should set to 7.


  ____________________________________________________________
  define("SHOW_IMAGE_INFO", 5);

  Set where to show the image information (date, file size and
  image size)

  Options:
   0 : do not show image info.
   1 : show info below thumbnails.
   2 : show info as a hover/title on thumbs.
   4 : show info in full image view below image.

  TIP: Just make a sum of the desired options.

  Example: To activate option 1 and 2 you should set to 3.

  INFO: This option requires the THUMB_ROOT to be set.

  INFO: The information files is created when thumbnails are
        created by viewing images the first time in thumbnail
        view. The information is then saved in THUMB_ROOT in
        the current directory in a file with the same name as
        the image with ".sfpg" added to the name.


____________________________________________________________
define("SHOW_IMAGE_DESC", 5);

Set where to show the image description.

Options:
 0 : do not show image description.
 1 : show description below thumbnails.
 2 : show description as a hover/title on thumbs.
 4 : show description in full image view below image.

TIP: Just make a sum of the desired options.

Example: To activate option 2 and 4 you should set to 6.


____________________________________________________________
define("SHOW_IMAGE_NAVI", 2);

Set where to show the previous and/or next links.

Options:
 0 : do not show previous/next links.
 1 : show previous/next links above image.
 2 : show previous/next links below image.

TIP: Just make a sum of the desired options.

Example: To activate option 1 and 2 you should set to 3.


____________________________________________________________
define("SHOW_IMAGE_DOWNLOAD", 0);

Set where to show the download link for the fullsize images.

Options:
 0 : do not show a download link.
 1 : show a download link below thumbnails for images.
 2 : show a download link in full image view below image.

TIP: Just make a sum of the desired options.

Example: To activate option 1 and 2 you should set to 3.


____________________________________________________________
define("IMAGE_UNDERSCORE_AS_SPACE", TRUE);

Set to TRUE to have underscores in image names shown as
spaces.
Set to FALSE to have image names shown as is.


____________________________________________________________
define("SHOW_IMAGE_EXT", FALSE);

Set to TRUE to show image name extensions.
Set to FALSE to not show image name extensions.


____________________________________________________________
define("IMAGE_DESC_EXT", ".txt");

Set the extension of image description files. Place a file
with the same name as an image with the set extension
added to the image name, to have the text shown with the
image.  Use the SHOW_IMAGE_DESC to place the description.

INFO 1: Case sensitivity in this constant follows the case
        sensitivity of the server on wich the script runs.

INFO 2: Extensions should be entered with a dot in front,
        like the exampel below.

Example: If set to ".txt" and one of the images is named
         "IMG_10a.jpg". You can then make a file called
         "IMG_10a.jpg.txt", and place it in the same folder
          as the image.

TIP: If SHOW_FILES is set to TRUE you can use
     $file_ext_exclude to exclude the description files from
     the view. So if you would like to list .txt but don't
     want the descriptions files shown, you should set to
     any other extension that you do not use (feel free to
     use ".sfpg") and exclude that one using
     $file_ext_exclude.


____________________________________________________________
define("IMAGE_DESC_HTML", FALSE);

Set to TRUE to allow HTML in the image description.
Set to FALSE to have text from description shown as is.

INFO: If set to TRUE, special chars and or HTML could render
      the page useless if not used with caution.

TIP: Description in the title will always be shown as is, so
     if set to TRUE remember to turn title description off.


____________________________________________________________
define("IMAGE_SORT_REVERSE", FALSE);

Set to TRUE to sort images in reverse order (highest to
lowest).
Set to FALSE to sort images in normal order (lowest to
highest).


____________________________________________________________
define("IMAGE_SORT_BY_TIME", FALSE);

Set to TRUE to sort images by modified time.
Set to FALSE to sort images by name.


____________________________________________________________
define("IMAGE_IN_NEW_WINDOW", TRUE);

Set to TRUE to have images open in a pop-up window.
Set to FALSE to have images open in same window, you will
then have to use the back button in the browser or the link
from TEXT_CLICK_CLOSE to get back to the gallery.


____________________________________________________________
define("SHOW_FILES", FALSE);

Set to TRUE to show non-image files and images of
non-supported types as download links in the gallery.

TIP: Use $file_exclude and/or $file_ext_exclude to exclude
     files you do not want to have displayed.


____________________________________________________________
define("SHOW_FILE_NAME", 1);

Set where to show the names of the files.

Options:
 0 : do not show file names.
 1 : show name below thumbnails.
 2 : show name as a hover/title on thumbs.

TIP: Just make a sum of the desired options.

Example: To activate option 1, and 2 you should set to 3.

INFO: If no thumb exists for a file, the name will be shown
      even though option 1 are not used (for the link).


____________________________________________________________
define("SHOW_FILE_INFO", 1);

Set where to show the file information (date and file size)

Options:
 0 : do not show image info.
 1 : show info below thumbnails.
 2 : show info as a hover/title on thumbs.

TIP: Just make a sum of the desired options.

Example: To activate option 1 and 2 you should set to 3.

INFO: This option requires the THUMB_ROOT to be set.

INFO: The information files is created when viewing the
      gallery in thumbnail view. The information is then
      saved in THUMB_ROOT in the current directory in a file
      with the same name as the file with ".sfpg" added to
      the name.
      If there is changes in the number of files in a given
      directory, the information file is then updated.

TIP: In a given folder. If a file is deleted and a new file
     is added, the total number of files is the same, the
     information file is then not updated. In that case you
     can delete the information file to trigger a regenerate
     of the file with the correct information.


____________________________________________________________
define("SHOW_FILE_DESC", 3);

Set where to show the file description.

Options:
 0 : do not show file description.
 1 : show description below thumbnails.
 2 : show description as a hover/title on thumbs.

TIP: Just make a sum of the desired options.

Example: To activate option 1 and 2 you should set to 3.


____________________________________________________________
define("FILE_UNDERSCORE_AS_SPACE", TRUE);

Set to TRUE to have underscores in file names shown as
spaces.
Set to FALSE to have file names shown as is.


____________________________________________________________
define("SHOW_FILE_EXT", TRUE);

Set to TRUE to show file name extensions.
Set to FALSE to not show file name extensions.


____________________________________________________________
define("FILE_IN_NEW_WINDOW", TRUE);

Set to TRUE to have files open in a pop-up window.
Set to FALSE to have files open in the same window.


____________________________________________________________
define("FILE_THUMB_EXT", ".jpg");

Set the extension of file thumbnail files. Place an image
with the same name as a file with the set extension
added to the file name, to have the image used as an
thumbnail for the file. The image will be resized as any
other thumbnail in the gallery.

INFO 1: Can be set to any of the supported image types.

INFO 2: Case sensitivity in this constant follows the case
        sensitivity of the server on wich the script runs.

INFO 3: Extensions should be entered with a dot in front,
        like the exampel below.

Example: If set to ".jpg" and one of the files is named
         "In_The_Snow.avi". You can then make an image
         called "In_The_Snow.avi.jpg", and place it in the
         same folder as the image.


____________________________________________________________
define("FILE_DESC_EXT", ".txt");

Set the extension of file description files. Place a file
with the same name as a file with the set extension added to
the file name, to have the text shown with the file. Use
the SHOW_FILE_DESC to place the description.

INFO 1: Case sensitivity in this constant follows the case
        sensitivity of the server on wich the script runs.

INFO 2: Extensions should be entered with a dot in front,
        like the exampel below.

Example: If set to ".txt" and one of the files is named
         "OneFile.zip". You can then make a file called
         "OneFile.zip.txt", and place it in the same folder
          as the image.

TIP: If SHOW_FILES is set to TRUE you can use
     $file_ext_exclude to exclude the description files from
     the view. So if you would like to list .txt but don't
     want the descriptions files shown, you should set to
     any other extension that you do not use (feel free to
     use ".sfpg") and exclude that one using
     $file_ext_exclude.


____________________________________________________________
define("FILE_DESC_HTML", FALSE);

Set to TRUE to allow HTML in the file description.
Set to FALSE to have text from description shown as is.

INFO: If set to TRUE, special chars and or HTML could render
      the page useless if not used with caution.

TIP: Description in the title will always be shown as is, so
     if set to TRUE remember to turn title description off.


____________________________________________________________
define("FILE_SORT_REVERSE", FALSE);

Set to TRUE to sort files in reverse order (highest to
lowest).
Set to FALSE to sort files in normal order (lowest to
highest).


____________________________________________________________
define("FILE_SORT_BY_TIME", FALSE);

Set to TRUE to sort files by modified time.
Set to FALSE to sort files by name.


____________________________________________________________
$file_exclude = array();

Set an array of file names that should not be shown in the
gallery.

INFO 1: File names should be entered in lower case.

INFO 2: Exclusions works only on non-supported file types.

INFO 3: Exclusion is not case sensitive. If you exclude
        "readme.txt", all the following files will be
        excluded: "readme.txt", "ReadMe.Txt","README.TXT"
        and so on.

Example 1: array("readme.txt");

Example 2: array("readme.txt", "admin.php", "style.css");


____________________________________________________________
$file_ext_exclude = array(".php", ".txt");

Set an array of file extensions for files that should not be
shown in the gallery.

INFO 1: Extensions should be entered in lower case with a
        dot in front, like the examples below.

INFO 2: Exclusions works only on non-supported file types.
        You can not exclude the supporte image types like
        ".jpg", ".jpeg", ".png" or ".gif"

INFO 3: Exclusion is not case sensitive. If you exclude
        ".txt", all files with the following extensions will
        be excluded: ".txt", ".Txt", ".TXT" and so on.

Example 1: array(".php");

Example 2: array(".php", ".txt", ".inc", ".html");


____________________________________________________________
define("TEXT_GALLERY_NAME", "Single File PHP Gallery");

Set the gallery name. Will be shown in the table header. Set
to "" to remove the table header.


____________________________________________________________
define("TEXT_HOME", "Home");

Set the text for the link that will take you to the gallery
root in the navigation bar. Set to "" to remove the
navigation bar.


____________________________________________________________
define("TEXT_CLICK_CLOSE", "- Click image to close window -");

Set the text to show below the image in full image view.
The text and image will be working according to the
following:

If IMAGE_IN_NEW_WINDOW is TRUE and USE_JAVA is TRUE, the
text and image will be a link to simply close the window.

If IMAGE_IN_NEW_WINDOW is TRUE and USE_JAVA is FALSE, the
text and image will not be a link.

If IMAGE_IN_NEW_WINDOW is FALSE and USE_JAVA is TRUE and
SHOW_IMAGE_NAVI is set to FALSE, the text and image will be
a link to go back to the previous page, wich should be the
gallery from where you came, including if the page have been
scrolled down. Just like if you press "back" in your
browser.

If IMAGE_IN_NEW_WINDOW is FALSE and USE_JAVA is TRUE and
SHOW_IMAGE_NAVI is set, the text and image will be a link to
the gallery from where you came.

If IMAGE_IN_NEW_WINDOW is FALSE and USE_JAVA is FALSE, the
text and image will be a link to the gallery from where you
came.

Set to "" to remove the text below the image. The image
will still be working like described above.

TIP: Remember to change the text if IMAGE_IN_NEW_WINDOW,
     USE_JAVA or SHOW_IMAGE_NAVI is changed so that the text
     reflect the action of the link.

INFO: if TEXT_CLICK_FULLRES is set, the text is written by
      java, so be carefull with special chars.


____________________________________________________________
define("TEXT_CLICK_FULLRES", "- Image resized to fit screen - Click image for full resolution -");

Set the text of the link that will be shown below images
that are too big to fit on screen in full image view.

If this option is set to anything but "", and an image plus
the text below is too big to fit on screen in full image
view. Then the image will be resized to fit screen, and the
this link will be shown instead of the TEXT_CLICK_CLOSE
text/link. When clicked the image will be shown in full
resolution and the text will be replaced by the
TEXT_CLICK_CLOSE text/link.

Set to "" to always have images open in full resolution.

INFO: Requires both USE_JAVA and IMAGE_IN_NEW_WINDOW to be
      set to TRUE.

INFO: if TEXT_CLICK_FULLRES is set, the text is written by
      java, so be carefull with special chars.


____________________________________________________________
define("TEXT_PREVIOUS", "<< Previous");

Set the text for the "Previous" link to be shown in full
image view.
Set the SHOW_IMAGE_NAVI to determine where the link goes.


____________________________________________________________
define("TEXT_NEXT", "Next >>");

Set the text for the "Next" link to be shown in full
image view.
Set the SHOW_IMAGE_NAVI to determine where the link goes.


____________________________________________________________
define("TEXT_PREVIOUS_PAGE", "<< Previous page");

Set the text for the "Previous page" link to be shown before
the page links.
Set to "" to not show "Previous page" link.


____________________________________________________________
define("TEXT_NEXT_PAGE", "Next page >>");

Set the text for the "Next page" link to be shown after the
page links.
Set to "" to not show "Next page" link.


____________________________________________________________
define("TEXT_DOWNLOAD", "Download fullsize image");

Set the text for the download link.
Set SHOW_IMAGE_DOWNLOAD to determine where to show the link.


____________________________________________________________
define("TEXT_IMAGE_LINK", "");

Set the text for the direct link to the image page. If set,
the link will be shown below the fullsize image.
Set to "" to not shot the link.

Example: set to "Link to image"

TIP: can be used to link directly to an image from a blog or
     forum.


____________________________________________________________
define("TEXT_START_SLIDE", "Start slideshow");

Set the text for the link to start a slideshow of all images
in the current directory.

Tip: Also see SLIDESHOW_DELAY for timing, enabling and
     disabling.


____________________________________________________________
define("TEXT_STOP_SLIDE", "Stop slideshow");

Set the text for the link to stop the slideshow.

Tip: Also see SLIDESHOW_DELAY for timing, enabling and
     disabling.


____________________________________________________________
define("TEXT_DATE", "Date: ");

Set the text to be shown before the date. Set to "" to not
show date.
Use the SHOW_DIR_INFO, SHOW_IMAGE_INFO and SHOW_FILE_INFO to
determine where the information will be shown.


____________________________________________________________
define("TEXT_FILESIZE", "File size (bytes): ");

Set the text to be shown before the file size. Set to "" to
not show file size.
Use the SHOW_IMAGE_INFO and SHOW_FILE_INFO to determine
where the information will be shown.


____________________________________________________________
define("TEXT_IMAGESIZE", "Image size: ");

Set the text to be shown before the image size. Set to "" to
not show image size.
Use the SHOW_IMAGE_INFO to determine where the information
will be shown.


____________________________________________________________
define("TEXT_DIRS", "Sub galleries: ");

Set the text to be shown before the number of sub galleries.
Set to "" to not show number of galleries.
Use the SHOW_DIR_INFO to determine where the information
will be shown.


____________________________________________________________
define("TEXT_IMAGES", "Images: ");

Set the text to be shown before the number of images. Set to
"" to not show number of images.
Use the SHOW_DIR_INFO to determine where the information
will be shown.


____________________________________________________________
define("TEXT_FILES", "Files: ");

Set the text to be shown before the number of files. Set to
"" to not show number of files.
Use the SHOW_DIR_INFO to determine where the information
will be shown.


____________________________________________________________
define("CHARSET", "iso-8859-1");

Set the charset to be used. In order to have special chars
display correctly, a charset that support the chars used in
the gallery, must be set.

Below is a short list of charsets, that can be used (use a
search engine on the internet for others):

Universal Alphabet:        "utf-8"
Western Alphabet:          "iso-8859-1"
Central European Alphabet: "iso-8859-2"
Latin 3 Alphabet:          "iso-8859-3"
Baltic Alphabet:           "iso-8859-4"
Cyrillic Alphabet:         "iso-8859-5"
Arabic Alphabet:           "iso-8859-6"
Greek Alphabet:            "iso-8859-7"
Hebrew Alphabet:           "iso-8859-8"
Japanese:                  "shift-jis"
Chinese Traditional:       "big5"


____________________________________________________________
define("DATE_FORMAT", "Y-m-d h:i:s");

Set the format of the date/time to be shown after the
TEXT_DATE.

See a PHP manual or the following page for information on
the date format: http://php.net/date


____________________________________________________________
define("USE_JAVA", TRUE);

Set to TRUE to enable use of JavaScript. Set to FALSE to
disable use of JavaScript. If enabled JavaScript will be
used to make the pop-up window without menu bar, resizes
window to fit images, resize full screen view images to
screen and the click image to close window links.


____________________________________________________________
define("SORT_DIVIDER", "--");

Set the string that will function as a divider between the
part of the name to sort after and the name to be shown.
SORT_DIVIDER works on directories, images and files.

Example: If you have a directory called "Apples" and one
         called "Bananas", and would like "Bananas" to be
         the first one on the list.
         You could then call them: "001--Bananas" and
         "002--Apples".
         The directories will then be listed in the order
         you like, and only the text after the SORT_DIVIDER
         string will be shown.


____________________________________________________________
define("SLIDESHOW_DELAY", 5);

Set the delay in seconds for the slideshow to display images
before loading the next image. 
Set to 0 to not show link to start slideshow.


____________________________________________________________
define("THUMB_MAX_WIDTH", 160);

Set the maximum number of pixels a thumbnails width may be.

INFO: If thumbnails have been saved on server you will have
      to delete them in order to have changes to this
      setting apply.


____________________________________________________________
define("THUMB_MAX_HEIGHT", 160);

Set the maximum number of pixels a thumbnails height may be.

INFO: If thumbnails have been saved on server you will have
      to delete them in order to have changes to this
      setting apply.


____________________________________________________________
define("ENLARGE_SMALL_IMAGES", FALSE);

Set to TRUE to have thumbnails for images that are smaller
than THUMB_MAX_WIDTH and THUMB_MAX_HEIGHT enlarged.


____________________________________________________________
define("JPEG_QUALITY", 75);

Set the quality for jpeg thumbnails. Range from 0 (worst
quality and smalles file size) to 100 (best quality and
largest file size)

INFO: If thumbnails have been saved on server you will have
      to delete them in order to have changes to this
      setting apply.


____________________________________________________________
define("GALLERY_COLUMNS", 3);

Set the number of columns in thumbnail view.


____________________________________________________________
define("ROWS_PER_PAGE", 3);

Set the number of rows per page in thumbnail view.
Set to FALSE to disable splitting gallery into pages.

If the total number of directories, images and files is
larger than GALLERY_COLUMNS * ROWS_PER_PAGE, the gallery
will be split into pages. The page section will be shown
just below the navigation bar.


____________________________________________________________
define("SHOW_PAGE_NAVI", 3);

Set where to show the page navigation links.

Options:
 0 : do not show page navigation links.
 1 : show show page navigation links above thumbnails.
 2 : show show page navigation links below thumbnails.

TIP 1: If set to 0, ROWS_PER_PAGE should be set to FALSE

TIP 2: Just make a sum of the desired options.

Example: To activate option 1 and 2 you should set to 3.


____________________________________________________________
define("TABLE_BORDER_WIDTH", 1);

Set the number of pixels for the main table border width.


____________________________________________________________
define("THUMB_BORDER_WIDTH", 1);

Set the number of pixels for the thumbnail border width.


____________________________________________________________
define("THUMB_TD_PADDING", 7);

Set the number of pixels that the thumbnail box should be
larger than the thumbnail on each side.


____________________________________________________________
define("THUMB_TD_SPACING", 15);

Set the number of pixels the thumbnail boxes should be
apart.


____________________________________________________________
define("THUMB_TD_BORDER_WIDTH", 1);

Set the number of pixels for the thumbnail box borders
width.


____________________________________________________________
define("FULLIMG_BORDER_WIDTH", 2);

Set the number of pixels for the border width of the full
image.


____________________________________________________________
define("FULLIMG_TD_PADDING", 10);

Set the number of pixels that the full image box should be
larger than the full image on each side.


____________________________________________________________
define("WINDOW_EXTRA_WIDTH", 80);

Set the number of pixels to add to the width of the pop-up
window in order to make the window fit the image.
The number of pixels is the sum of border, scroll bar, etc.
of the browser window, so it will be different from browser
to browser.
The default number is made to fit Microsoft Internet
Explorer 7.0 and Mozilla Firefox 2.0.0.11.


____________________________________________________________
define("WINDOW_EXTRA_HEIGHT", 130);

Set the number of pixels to add to the height of the pop-up
window in order to make the window fit the image.
The number of pixels is the sum of border, address bar, etc.
of the browser window, so it will be different from browser
to browser.
The default number is made to fit Microsoft Internet
Explorer 7.0 and Mozilla Firefox 2.0.0.11.


____________________________________________________________
define("WINDOW_MIN_WIDTH", 250);

Set the minimum window width for pop-up windows.

This is useful when having small images like icons in
the gallery. So that the window is not resized smaller than
the text below.


____________________________________________________________
define("WINDOW_MIN_HEIGHT", 200);

Set the minimum window height for pop-up windows.


____________________________________________________________
define("TEXT_HEIGHT", 15);

Set the number of pixels to add to the height of the pop-up
window, for each line of description text, in order to make
the window fit the image.
If the font size is changed in the CSS, this would probably
also have to be changed accordingly.


____________________________________________________________
define("SCROLLBAR_WIDTH", 17);

Set the number of pixels for the width of the browser scroll
bars.
The number will be added to the height of the window if an
image is too wide to fit on the screen.
The number will also be added to the width of the window if
an image is too high to fit on the screen.
The default number is made to fit Microsoft Internet
Explorer 7.0 and Mozilla Firefox 2.0.0.11.


____________________________________________________________

  $color_table_back = "#ffffff";
  $color_table_border = "#ffffff";
  $color_table_header_back = "#ffffff";
  $color_table_header_text = "#333333";

  $color_navi_link = "#b0b0b0";
  $color_navi_hover = "#0069bb";
  $color_navi_text = "#808080";
  $color_navi_back = "#ffffff";

  $color_page_back = "#ffffff";
  $color_page_link = "#0069bb";
  $color_page_hover = "#000000";
  $color_page_mark_link = "#b0b0b0";
  $color_page_mark_hover = "#0069bb";
  $color_page_mark_back = "#505050";

  $color_desc_back = "#363636";
  $color_desc_text = "#b0b0b0";

  $color_dir_link = "#b0b0b0";
  $color_dir_hover = "#0069bb";
  $color_dir_border = "#ffffff";
  $color_dir_td_border = "#cccccc";
  $color_dir_td_back = "#ffffff";
  $color_dir_td_text = "#606060";

  $color_img_link = "#0069bb";
  $color_img_hover = "#b0b0b0";
  $color_img_border = "#ffffff";
  $color_img_td_border = "#cccccc";
  $color_img_td_back = "#ffffff";
  $color_img_td_text = "#707070";

  $color_file_link = "#a0a0a0";
  $color_file_hover = "#ffffff";
  $color_file_border = "#ffffff";
  $color_file_td_border = "#404040";
  $color_file_td_back = "#101010";
  $color_file_td_text = "#606060";

  $color_fullimg_link = "#b0b0b0";
  $color_fullimg_hover = "#ffffff";
  $color_fullimg_border = "#ffffff";
  $color_fullimg_td_back = "#303030";
  $color_fullimg_td_text = "#909090";

Set the colors to be used. If the color variable names is
not enough to indicate where it goes, then just change one
to red (#ff0000) or blue (#0000ff) and refresh the page,
you should then be able to spot it.