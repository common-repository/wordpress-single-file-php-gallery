<?php

  error_reporting(0);

  //  --------------------------------------
  //
  //     Wordpress Single File PHP Gallery (wwsfpg)
  //     Version 3.6.0
  //     Released: 11-October-2008
  //     See readme.txt for configuration
  //     Original Code by Kenny Svalgaard
  //     Wordpress Version by Mitnik
  //
  //  --------------------------------------

  //  ----------- CONFIGURATION START ------------

  define("GALLERY_ROOT", "./");
  define("THUMB_ROOT", "");
  define("SECURITY_PHRASE", "change this text!");

  define("SHOW_DIR_NAME", 1);
  define("SHOW_DIR_INFO", 5);
  define("SHOW_DIR_DESC", 5);
  define("DIR_UNDERSCORE_AS_SPACE", TRUE);
  define("DIR_NAME_FILE", "_name.txt");
  define("DIR_IMAGE_FILE", "_image.jpg");
  define("DIR_DESC_FILE", "_desc.txt");
  define("DIR_DESC_HTML", FALSE);
  define("DIR_SORT_REVERSE", FALSE);
  define("DIR_SORT_BY_TIME", FALSE);
  $dir_exclude = array();

  define("SHOW_IMAGE_NAME", 5);
  define("SHOW_IMAGE_INFO", 5);
  define("SHOW_IMAGE_DESC", 5);
  define("SHOW_IMAGE_NAVI", 2);
  define("SHOW_IMAGE_DOWNLOAD", 0);
  define("IMAGE_UNDERSCORE_AS_SPACE", TRUE);
  define("SHOW_IMAGE_EXT", FALSE);
  define("IMAGE_DESC_EXT", ".txt");
  define("IMAGE_DESC_HTML", FALSE);
  define("IMAGE_SORT_REVERSE", FALSE);
  define("IMAGE_SORT_BY_TIME", FALSE);
  define("IMAGE_IN_NEW_WINDOW", TRUE);

  define("SHOW_FILES", FALSE);
  define("SHOW_FILE_NAME", 1);
  define("SHOW_FILE_INFO", 1);
  define("SHOW_FILE_DESC", 1);
  define("FILE_UNDERSCORE_AS_SPACE", TRUE);
  define("SHOW_FILE_EXT", TRUE);
  define("FILE_IN_NEW_WINDOW", TRUE);
  define("FILE_THUMB_EXT", ".jpg");
  define("FILE_DESC_EXT", ".txt");
  define("FILE_DESC_HTML", FALSE);
  define("FILE_SORT_REVERSE", FALSE);
  define("FILE_SORT_BY_TIME", FALSE);
  $file_exclude = array();
  $file_ext_exclude = array(".php", ".txt");

  define("TEXT_GALLERY_NAME", "Wordpress Single File PHP Gallery");
  define("TEXT_HOME", "Home");
  define("TEXT_CLICK_CLOSE", "- Click image to close window -");
  define("TEXT_CLICK_FULLRES", "- Image resized to fit screen - Click image for full resolution -");
  define("TEXT_PREVIOUS", "<< Previous");
  define("TEXT_NEXT", "Next >>");
  define("TEXT_PREVIOUS_PAGE", "<< Previous page");
  define("TEXT_NEXT_PAGE", "Next page >>");
  define("TEXT_DOWNLOAD", "Download fullsize image");
  define("TEXT_IMAGE_LINK", "");
  define("TEXT_START_SLIDE", "Start slideshow");
  define("TEXT_STOP_SLIDE", "Stop slideshow");
  define("TEXT_DATE", "Date: ");
  define("TEXT_FILESIZE", "File size (bytes): ");
  define("TEXT_IMAGESIZE", "Image size: ");
  define("TEXT_DIRS", "Sub galleries: ");
  define("TEXT_IMAGES", "Images: ");
  define("TEXT_FILES", "Files: ");

  define("CHARSET", "iso-8859-1");
  define("DATE_FORMAT", "Y-m-d h:i:s");
  define("USE_JAVA", TRUE);
  define("SORT_DIVIDER", "--");
  define("SLIDESHOW_DELAY", 5);

  define("THUMB_MAX_WIDTH", 130);
  define("THUMB_MAX_HEIGHT", 130);
  define("ENLARGE_SMALL_IMAGES", FALSE);
  define("JPEG_QUALITY", 75);

  define("GALLERY_COLUMNS", 3);
  define("ROWS_PER_PAGE", 3);
  define("SHOW_PAGE_NAVI", 3);

  define("TABLE_BORDER_WIDTH", 0);
  define("THUMB_BORDER_WIDTH", 1);
  define("THUMB_TD_PADDING", 7);
  define("THUMB_TD_SPACING", 15);
  define("THUMB_TD_BORDER_WIDTH", 1);
  define("FULLIMG_BORDER_WIDTH", 2);
  define("FULLIMG_TD_PADDING", 10);

  define("WINDOW_EXTRA_WIDTH", 80);
  define("WINDOW_EXTRA_HEIGHT", 130);
  define("WINDOW_MIN_WIDTH", 300);
  define("WINDOW_MIN_HEIGHT", 300);
  define("TEXT_HEIGHT", 15);
  define("SCROLLBAR_WIDTH", 17);

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

  //  ----------- CONFIGURATION END ------------


  function wsfpg_css_link()
  {
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . wsfpg_url("", "", "", "css") . "\">";
  }


  function wsfpg_html_start($head="", $body="")
  {
    echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\"><html><head>";
    wsfpg_css_link();
    echo "<meta http-equiv=\"Content-Type\" content=\"text/html;charset=" . CHARSET . "\"><title>" . htmlspecialchars(TEXT_GALLERY_NAME) . "</title>" . $head . "</head><body" . $body . " class=\"wsfpg\"><div align=\"center\">";
  }


  function wsfpg_html_end()
  {
    echo "</div></body></html>";
  }


  function wsfpg_make_dir($dir_path)
  {
    $dirs = explode("/", $dir_path);
    $path = "";
    foreach ($dirs as $dir)
    {
      $path .= ($path ? "/" : "") . $dir;
      if(!is_dir($path))
      { 
        mkdir($path);
      }
    }
  }


  function wsfpg_array_sort(&$arr, &$arr_time, $sort_by_time, $sort_reverse)
  {
    if ($sort_by_time)
    {
      if ($sort_reverse)
      {
        array_multisort ($arr_time, SORT_DESC, SORT_NUMERIC, $arr);
      }
      else
      {
        array_multisort ($arr_time, SORT_ASC, SORT_NUMERIC, $arr);
      }
    }
    else
    {
      if ($sort_reverse)
      {
        rsort ($arr);
      }
      else
      {
        sort ($arr);
      }
    }
  }


  function wsfpg_base64url_encode($plain)
  {
    $base64 = base64_encode($plain);
    $base64url = strtr($base64, "+/", "-_");
    return rtrim($base64url, "=");
  }


  function wsfpg_base64url_decode($base64url)
  {
    $base64 = strtr($base64url, "-_", "+/");
    $plain = base64_decode($base64);
    return ($plain);
  }


  function wsfpg_url($dir = "", $img = "", $page = "", $cmd ="", $opt = "", $full_link = FALSE)
  {
    $res = $dir . "*" . $img . "*" . $page . "*" . $cmd . "*" . $opt . "*";
    return ($full_link ? $_SERVER["HTTP_HOST"] : $_SERVER["PHP_SELF"]) . "?wsfpg=" . wsfpg_base64url_encode($res . md5($res . SECURITY_PHRASE));
  }


  function wsfpg_display_name($name, $underscore_as_space, $show_ext)
  {
    $break_pos = strpos($name, SORT_DIVIDER);
    if ($break_pos !== FALSE)
    {
      $display_name = substr($name, $break_pos + strlen(SORT_DIVIDER));
    }
    else
    {
      $display_name = $name;
    }
    if ($underscore_as_space)
    {
      $display_name = str_replace("_", " ", $display_name);
    }
    if (!$show_ext)
    {
      $display_name = substr($display_name, 0, strrpos($display_name, "."));
    }
    return $display_name;
  }


  function wsfpg_image_type($file)
  {
    $type = strtolower(substr($file, strrpos($file, ".")));
    if (($type == ".jpg") or ($type == ".jpeg"))
    {
      return "jpeg";
    }
    elseif ($type == ".png")
    {
      return "png";
    }
    elseif ($type == ".gif")
    {
      return "gif";
    }
    return FALSE;
  }


  function wsfpg_get_dir($dir)
  {
    global $dir_exclude, $file_exclude, $file_ext_exclude;
    $dirs = array();
    $dirs_time = array();
    $images = array();
    $images_time = array();
    $files = array();
    $files_time = array();
    $directory_handle = @opendir(GALLERY_ROOT . $dir);
    if ($directory_handle != FALSE)
    {
      while($var = readdir($directory_handle))
      {
        if (is_dir(GALLERY_ROOT . $dir . $var))
        {
          if  (($var != ".") and ($var != "..") and !in_array(strtolower($var), $dir_exclude))
          {
            $dirs[] = $var;
            if (DIR_SORT_BY_TIME)
            {
              $dirs_time[] = filemtime(GALLERY_ROOT . $dir . $var . "/.");
            }
          }
        }
        elseif (wsfpg_image_type($var))
        {
          if ($var != DIR_IMAGE_FILE)
          {
            $images[] = $var;
            if (IMAGE_SORT_BY_TIME)
            {
              $images_time[] = filemtime(GALLERY_ROOT . $dir . $var);
            }
          }
        }
        elseif (SHOW_FILES)
        {
          if (!in_array(strtolower($var), $file_exclude) and !((strrpos($var, ".") !== FALSE) and in_array(strtolower(substr($var, strrpos($var, "."))), $file_ext_exclude)))
          {
            $files[] = $var;
            if (FILE_SORT_BY_TIME)
            {
              $files_time[] = filemtime(GALLERY_ROOT . $dir . $var);
            }
          }
        }
      }
      if (SHOW_FILES)
      {
        $item = 0;
        while($item < count($files))
        {
          $fti = array_search($files[$item] . FILE_THUMB_EXT, $images);
          if ($fti !== FALSE)
          {
            array_splice($images, $fti, 1);
            array_splice($images_time, $fti, 1);
          }
          $item++;
        }
      }
      wsfpg_array_sort($dirs, $dirs_time, DIR_SORT_BY_TIME, DIR_SORT_REVERSE);
      wsfpg_array_sort($images, $images_time, IMAGE_SORT_BY_TIME, IMAGE_SORT_REVERSE);
      wsfpg_array_sort($files, $files_time, FILE_SORT_BY_TIME, FILE_SORT_REVERSE);
      return array($dirs, $images, $files);
    }
    else
    {
      header("Location: " . $_SERVER["PHP_SELF"]);
      exit;
    }
  }


  function wsfpg_thumb($image_dir, $image_file)
  {
    if (THUMB_ROOT != "")
    {
      $thumb_file = THUMB_ROOT . $image_dir . $image_file;
    }
    else
    {
     $thumb_file = "";
    }
    $thumb_type = wsfpg_image_type($thumb_file);
    if (file_exists($thumb_file) and $thumb_type)
    {
      header("Content-type: image/" . $thumb_type);
      readfile($thumb_file);
      exit;
    }
    else
    {
      $img_type = wsfpg_image_type($image_file);
      if ($img_type == "jpeg")
      {
        if (!$image = @imagecreatefromjpeg(GALLERY_ROOT . $image_dir . $image_file))
        {
          exit;
        }
      }
      elseif ($img_type == "png")
      {
        if (!$image = @imagecreatefrompng(GALLERY_ROOT . $image_dir . $image_file))
        {
          exit;
        }
      }
      elseif ($img_type == "gif")
      {
        if (!$image = @imagecreatefromgif(GALLERY_ROOT . $image_dir . $image_file))
        {
          exit;
        }
      }
      else
      {
        exit;
      }
      $image_size = getimagesize(GALLERY_ROOT . $image_dir . $image_file);
      $image_width = $image_size[0];
      $image_height = $image_size[1];
      if (($image_width < THUMB_MAX_WIDTH) and ($image_height < THUMB_MAX_HEIGHT) and !ENLARGE_SMALL_IMAGES)
      {
        $thumb_height = $image_height;
        $thumb_width = $image_width;
      }
      else
      {
        $aspect_x = $image_width / THUMB_MAX_WIDTH;
        $aspect_y = $image_height / THUMB_MAX_HEIGHT;
        if ($aspect_x > $aspect_y)
        {
          $thumb_width = THUMB_MAX_WIDTH;
          $thumb_height = $image_height / $aspect_x;
        }
        else
        {
          $thumb_height = THUMB_MAX_HEIGHT;
          $thumb_width = $image_width / $aspect_y;
        }
      }
      $thumb = @imagecreatetruecolor($thumb_width, $thumb_height);
      imagecopyresampled($thumb, $image, 0, 0, 0, 0, $thumb_width, $thumb_height, imagesx($image), imagesy($image));
      imagedestroy($image);
      if (THUMB_ROOT != "")
      {
        if (!is_dir(THUMB_ROOT . $image_dir))
        {
          wsfpg_make_dir(THUMB_ROOT . $image_dir);
        }
        if (SHOW_IMAGE_INFO)
        {
          $fp = fopen($thumb_file . ".wsfpg", "w");
          fwrite($fp, filemtime(GALLERY_ROOT . $image_dir . $image_file) . "|" . filesize(GALLERY_ROOT . $image_dir . $image_file) . "|" . $image_width . "|" . $image_height);
          fclose($fp);
        }
      }
      header("Content-type: image/" . $thumb_type);
      if ($img_type == "jpeg")
      {
        imagejpeg($thumb, NULL, JPEG_QUALITY);
        if (THUMB_ROOT != "")
        {
          imagejpeg($thumb, $thumb_file, JPEG_QUALITY);
        }
      }
      elseif ($img_type == "png")
      {
        imagepng($thumb);
        if (THUMB_ROOT != "")
        {
          imagepng($thumb, $thumb_file);
        }
      }
      elseif ($img_type == "gif")
      {
        imagegif($thumb);
        if (THUMB_ROOT != "")
        {
          imagegif($thumb, $thumb_file);
        }
      }
      imagedestroy($thumb);
    }
  }


  function wsfpg_first_image($image_dir)
  {
    list($dirs, $images, $files) = wsfpg_get_dir($image_dir);
    if (isset($images[0]))
    {
      $result = array("dir"=>$image_dir, "file"=>$images[0]);
      return $result;
    }
    else
    {
      foreach ($dirs as $subdir)
      {
        $subresult = wsfpg_first_image($image_dir . $subdir . "/");
        if (@isset($subresult[file]))
        {
          return $subresult;
        }
      }
    }
  }


  function wsfpg_image()
  {
    global $images;
    $text_space = 0;
    $img_nr = array_search(IMAGE, $images);
    $prev_link = (($img_nr > 0) ? "<a href=\"" . wsfpg_url(GALLERY, $images[($img_nr-1)], PAGE, "imageform") . "\"><strong>" . htmlspecialchars(TEXT_PREVIOUS) . "</strong></a>" : "");
    $next_link = (($img_nr < (count($images)-1)) ? "<a href=\"" . wsfpg_url(GALLERY, $images[($img_nr+1)], PAGE, "imageform") . "\"><strong>" . htmlspecialchars(TEXT_NEXT) . "</strong></a>" : "");
    if ($prev_link or $next_link)
    {
      $next_previous = $prev_link . "&nbsp;&nbsp;[" . ($img_nr + 1) . "/" . count($images) . "]&nbsp;&nbsp;" . $next_link;
      if (SHOW_IMAGE_NAVI & 1)
      {
        $text_space += TEXT_HEIGHT;
      }
      if (SHOW_IMAGE_NAVI & 2)
      {
        $text_space += TEXT_HEIGHT;
      }
    }
    else
    {
      $next_previous = "";
    }
    if (SHOW_IMAGE_NAME & 4)
    {
      $display_name = wsfpg_display_name(IMAGE, IMAGE_UNDERSCORE_AS_SPACE, SHOW_IMAGE_EXT);
      $text_space += TEXT_HEIGHT;
    }
    else
    {
      $display_name = "";
    }
    if (SHOW_IMAGE_DESC & 4)
    {
      $desc = @file_get_contents(GALLERY_ROOT . GALLERY . IMAGE . IMAGE_DESC_EXT);
      $text_space += (substr_count(strtolower(nl2br($desc)), "<br />") * TEXT_HEIGHT); 
      if ($desc)
      {
        $text_space += TEXT_HEIGHT;
      }
    }
    if ((THUMB_ROOT != "") and (SHOW_IMAGE_INFO & 4))
    {
      $text_space += TEXT_HEIGHT;
      $filed = explode("|", @file_get_contents(THUMB_ROOT . GALLERY . IMAGE . ".wsfpg"));
      $info = @trim((TEXT_DATE ? htmlspecialchars(TEXT_DATE) . date(DATE_FORMAT, $filed[0]) . " &nbsp; &nbsp; " : "") . (TEXT_FILESIZE ? htmlspecialchars(TEXT_FILESIZE) . number_format($filed[1], 0, '', '.') . " &nbsp; &nbsp; " : "") . (TEXT_IMAGESIZE ? htmlspecialchars(TEXT_IMAGESIZE) . @$filed[2] . " x " . @$filed[3] : ""));
    }
    if (TEXT_CLICK_CLOSE != "")
    {
      $text_space += TEXT_HEIGHT;
    }
    if ((SHOW_IMAGE_DOWNLOAD & 2) and (TEXT_DOWNLOAD != ""))
    {
      $text_space += TEXT_HEIGHT;
    }
    if ((TEXT_IMAGE_LINK != "") and !((SHOW_IMAGE_DOWNLOAD & 2) and (TEXT_DOWNLOAD != "")))
    {
      $text_space += TEXT_HEIGHT;
    }
    if (SLIDESHOW_DELAY and (count($images)>1))
    {
      $text_space += TEXT_HEIGHT;
    }
    if (USE_JAVA and IMAGE_IN_NEW_WINDOW)
    {
      $add_to_head ="<script language=\"JavaScript\" TYPE=\"text/javascript\">
      <!--

      var img_full_x, img_full_y, win_x, win_y, extra_x, extra_y, action;

      extra_x = ".(WINDOW_EXTRA_WIDTH + (2 * (TABLE_BORDER_WIDTH + FULLIMG_TD_PADDING + FULLIMG_BORDER_WIDTH))).";
      extra_y = ".((WINDOW_EXTRA_HEIGHT + $text_space) + (2 * (TABLE_BORDER_WIDTH + FULLIMG_TD_PADDING + FULLIMG_BORDER_WIDTH))).";

      function resize_window(x, y)
      {
        win_x = x + extra_x;
        win_y = y + extra_y;
        if (win_x < ".WINDOW_MIN_WIDTH.") win_x = ".WINDOW_MIN_WIDTH.";
        if (win_y < ".WINDOW_MIN_HEIGHT.") win_y = ".WINDOW_MIN_HEIGHT.";
        if (win_x > window.screen.availWidth)
        {
          win_x = window.screen.availWidth;
          win_y = win_y + ".SCROLLBAR_WIDTH.";
        }
        if (win_y > window.screen.availHeight)
        {
          win_y = window.screen.availHeight;
          win_x = win_x + ".SCROLLBAR_WIDTH.";
        }
        if (win_x > window.screen.availWidth) win_x = window.screen.availWidth;
        window.moveTo(((window.screen.availWidth - win_x) / 2),((window.screen.availHeight - win_y) / 2));
        window.resizeTo(win_x, win_y);
        window.moveTo(((window.screen.availWidth - win_x) / 2),((window.screen.availHeight - win_y) / 2));
        window.focus();
      }

      function windowchange()
      {
        var avail_x, avail_y, aspect_x, aspect_y, new_img_x, new_img_y;
        self.focus();
        if (document.images)
        {
          img_full_x = document.images['fullimage'].width;
          img_full_y = document.images['fullimage'].height;
          avail_x = window.screen.availWidth - extra_x;
          avail_y = window.screen.availHeight - extra_y;
          if (((img_full_x > avail_x) || (img_full_y > avail_y)) && ".(TEXT_CLICK_FULLRES != "" ? "true" : "false").")
          {
            action = 0;
            document.all['click_image'].innerHTML = '".htmlspecialchars(TEXT_CLICK_FULLRES)."';
            aspect_x = img_full_x / avail_x;
            aspect_y = img_full_y / avail_y;
            if (aspect_x > aspect_y)
            {
              new_img_x = avail_x;
              new_img_y = img_full_y / aspect_x;
            }
            else
            {
              new_img_x = img_full_x / aspect_y;
              new_img_y = avail_y;
            }
            document.images['fullimage'].width = new_img_x;
            document.images['fullimage'].height = new_img_y;
          }
          else
          {
            action = 1;
            new_img_x = img_full_x;
            new_img_y = img_full_y;
          }
          resize_window(new_img_x, new_img_y);
        }
      }

      function full_res_close()
      {
        if (action == 1)
        {
          window.close();
        }
        else
        {
          action = 1;
          document.all['click_image'].innerHTML = '".htmlspecialchars(TEXT_CLICK_CLOSE)."';
          document.images['fullimage'].width = img_full_x;
          document.images['fullimage'].height = img_full_y;
          resize_window(img_full_x, img_full_y);
        }
      }

      //-->
      </script>";
    }
    else
    {
      $add_to_head = "";
    }
    if (SLIDESHOW_DELAY and (count($images)>1))
    {
      if ($img_nr < (count($images)-1))
      {
        $next_slide = $img_nr + 1;
      }
      else
      {
        $next_slide = 0;
      }
      if (P_OPT == "slide")
      {
        $add_to_head .= "<meta http-equiv=\"refresh\" content=\"" . SLIDESHOW_DELAY . ";url=" . wsfpg_url(GALLERY, $images[($next_slide)], PAGE, "imageform", "slide") . "\">";
      }
    }

    if (IMAGE_IN_NEW_WINDOW)
    {
      wsfpg_html_start($add_to_head, ((USE_JAVA and IMAGE_IN_NEW_WINDOW) ? " OnLoad=\"javascript:windowchange();\"" : ""));
    }
    echo "<table class=\"wsfpg\" cellspacing=0><tr><td class=\"fullimg\">";
    if (SHOW_IMAGE_NAME & 4)
    {
      echo "<strong>" . htmlspecialchars($display_name) . "</strong><br>";
    }
    if ($next_previous and (SHOW_IMAGE_NAVI & 1))
    {
      echo $next_previous . "<br>";
    }
    $img_link = (IMAGE_IN_NEW_WINDOW ? (USE_JAVA ? "javascript:full_res_close()" : "") : ((USE_JAVA and !SHOW_IMAGE_NAVI) ? "javascript:history.go(-1)" : wsfpg_url(GALLERY, "", PAGE)));
    if ($img_link)
    {
      echo "<a href=\"" . $img_link . "\">";
    }
    echo "<img id=\"fullimage\" alt=\"\" src=\"" . wsfpg_url(GALLERY, IMAGE , "" , "image") . "\">";
    if (TEXT_CLICK_CLOSE != "")
    {
      echo "<br><span id=\"click_image\">" . htmlspecialchars(TEXT_CLICK_CLOSE) . "</span>";
    }
    if ($img_link)
    {
      echo "</a>";
    }
    if ($next_previous and (SHOW_IMAGE_NAVI & 2))
    {
      echo "<br>" . $next_previous;
    }
    if ((SHOW_IMAGE_DOWNLOAD & 2) and (TEXT_DOWNLOAD != ""))
    {
      echo "<br><a href=\"" . wsfpg_url(GALLERY, IMAGE , "" , "imageform" , "dl") . "\">" . htmlspecialchars(TEXT_DOWNLOAD) . "</a>";
    }
    if (TEXT_IMAGE_LINK != "")
    {
      echo (((SHOW_IMAGE_DOWNLOAD & 2) and (TEXT_DOWNLOAD != "")) ? " - " : "<br>") . "<a href=\"http://" . wsfpg_url(GALLERY, IMAGE , "" , "imageform" , "", TRUE) . "\">" . htmlspecialchars(TEXT_IMAGE_LINK) . "</a>";
    }
    if ((SHOW_IMAGE_DESC & 4) and $desc)
    {
      echo "<br>" . (IMAGE_DESC_HTML ? nl2br($desc) : nl2br(htmlspecialchars($desc)));
    }
    if ((THUMB_ROOT != "") and (SHOW_IMAGE_INFO & 4))
    {
      echo "<br>" . @$info;
    }
    if (SLIDESHOW_DELAY and (count($images)>1))
    {
      if (P_OPT == "slide")
      {
        echo "<br><a href=\"" . wsfpg_url(GALLERY, $images[($img_nr)], PAGE, "imageform") . "\"><strong>" . htmlspecialchars(TEXT_STOP_SLIDE) . "</strong></a>";
      }
      else
      {
        echo "<br><a href=\"" . wsfpg_url(GALLERY, $images[($next_slide)], PAGE, "imageform", "slide") . "\"><strong>" . htmlspecialchars(TEXT_START_SLIDE) . "</strong></a>";
      }
    }
    echo "</td></tr></table>";
    if (IMAGE_IN_NEW_WINDOW)
    {
      wsfpg_html_end();
    }
  }


  function wsfpg()
  {
    global $dirs, $images, $files, $items_per_page, $pages;

    if (P_CMD == "imageform")
    {
      wsfpg_image();
    }
    else
    {
      $total_columns = (GALLERY_COLUMNS * 2) + 1;
      $img_width = THUMB_MAX_WIDTH + (THUMB_BORDER_WIDTH * 2);
      $img_td_width = $img_width + ((THUMB_TD_BORDER_WIDTH + THUMB_TD_PADDING) * 2);
      $table_width = (($img_td_width + THUMB_TD_SPACING) * GALLERY_COLUMNS) + THUMB_TD_SPACING + (TABLE_BORDER_WIDTH * 2);
      $write_width = (($img_td_width + THUMB_TD_SPACING) * GALLERY_COLUMNS) + THUMB_TD_SPACING - 10;
      $spacing_row = "<tr><td class=\"empty\" colspan=" . $total_columns . " height=" . THUMB_TD_SPACING . "></td></tr>";
      $spacing_col = "<td class=\"empty\" width=" . THUMB_TD_SPACING . "></td>";
      $empty_cell = "<td class=\"empty\" width=" . $img_td_width . "></td>";
      
      echo "<table class=\"wsfpg\" cellspacing=0 width=" . $table_width . ">";
      if (TEXT_GALLERY_NAME != "")
      {
        echo "<tr><th colspan=" . $total_columns . ">" . htmlspecialchars(TEXT_GALLERY_NAME) . "</th></tr>";
      }

      $links = explode("/", GALLERY);
      $navi_links = "<a href=\"" . $_SERVER["PHP_SELF"] . "\">" . htmlspecialchars(TEXT_HOME) . "</a>";
      $gal_dirs = "";
      if (GALLERY != "" and is_array($links))
      {
        for ($i=0; $i <= count($links) - 1; $i++)
        {
          if ($links[$i] != "")
          {
            $gal_dirs = "";
            for ($u = 0; $u <= $i; $u++)
            {
              $gal_dirs .= $links[$u] . "/";
            }
            $display_name = @file(GALLERY_ROOT . $gal_dirs . DIR_NAME_FILE);
            if ($display_name)
            {
              $display_name = trim($display_name[0]);
            }
            else
            {
              $display_name = wsfpg_display_name($links[$i], DIR_UNDERSCORE_AS_SPACE, TRUE);
            }
            $navi_links .= " &raquo; <a href=\"" . wsfpg_url($gal_dirs) . "\">" . htmlspecialchars($display_name) . "</a>";
          }
        }
      }
      if (TEXT_HOME)
      {
        echo "<tr><td width=" . $write_width . " colspan=" . $total_columns . " class=\"navi\">" . $navi_links . "</td></tr>";
      }

      if ((ROWS_PER_PAGE != FALSE) and ($pages > 1))
      {
        if (TEXT_PREVIOUS_PAGE)
        {
          $page_links = ((PAGE > 1) ? "<a class=\"navinorm\" href=\"" . wsfpg_url($gal_dirs, "", (PAGE - 1)) . "\">" : "" ) . htmlspecialchars(TEXT_PREVIOUS_PAGE) . ((PAGE > 1) ? "</a>&nbsp; " : "&nbsp; ");
        }
        else
        {
          $page_links = "";
        }
        for ($page_nr = 1; $page_nr <= $pages; $page_nr++)
        {
          $page_links .= "<a class=\"" . ($page_nr == PAGE ? "navimark" : "navinorm") . "\" href=\"" . wsfpg_url($gal_dirs, "", $page_nr) . "\">&nbsp;" . $page_nr . "&nbsp;</a> ";
        }
        if (TEXT_NEXT_PAGE)
        {
          $page_links .= ((PAGE < $pages) ? " &nbsp;<a class=\"navinorm\" href=\"" . wsfpg_url($gal_dirs, "", (PAGE + 1)) . "\">" : " &nbsp;" ) . htmlspecialchars(TEXT_NEXT_PAGE) . ((PAGE < $pages) ? "</a>" : "");
        }
        $start_item = ((PAGE-1) * $items_per_page);
        if (SHOW_PAGE_NAVI & 1)
        {
          echo "<tr><td width=" . $write_width . " colspan=" . $total_columns . " class=\"page\">" . $page_links . "</td></tr>";
        }
      }
      else
      {
        $start_item = 0;
      }
      if ((THUMB_ROOT != "") and (SHOW_DIR_INFO & 4))
      {
        $filed = explode("|", @file_get_contents(THUMB_ROOT . GALLERY . "/_info.wsfpg"));
        $dir_info = (TEXT_DATE ? htmlspecialchars(TEXT_DATE) . date(DATE_FORMAT, @$filed[3]) : "");
        $dir_info .= (TEXT_DIRS ? ($dir_info ? "&nbsp;&nbsp;&nbsp;" : "") . htmlspecialchars(TEXT_DIRS) . @$filed[0] : "");
        $dir_info .= (TEXT_IMAGES ? ($dir_info ? "&nbsp;&nbsp;&nbsp;" : "") . htmlspecialchars(TEXT_IMAGES) . @$filed[1] : "");
        $dir_info .= ((TEXT_FILES and SHOW_FILES) ? ($dir_info ? "&nbsp;&nbsp;&nbsp;" : "") . htmlspecialchars(TEXT_FILES) . @$filed[2] : "");
        echo "<tr><td width=" . $write_width . " class=\"navi\" colspan=" . $total_columns . ">" . $dir_info . "</td></tr>";
      }
      if (SHOW_DIR_DESC & 4)
      {
        $desc = @file_get_contents(GALLERY_ROOT . GALLERY . DIR_DESC_FILE);
        if ($desc)
        {
          echo "<tr><td width=" . $write_width . " class=\"desc\" colspan=" . $total_columns . ">" . nl2br((DIR_DESC_HTML ? $desc : htmlspecialchars($desc))) . "</td></tr>";
        }
      }
      echo $spacing_row . "<tr>";
      $row = 1;
      $col = 1;

      if (count($dirs) > 0)
      {
        $item = $start_item;
        while(($item < count($dirs)) and (($row <= ROWS_PER_PAGE) or (ROWS_PER_PAGE == FALSE)))
        {
          if ((SHOW_DIR_NAME & 1) or (SHOW_DIR_NAME & 2))
          {
            $display_name = @file(GALLERY_ROOT . GALLERY . $dirs[$item] . "/" . DIR_NAME_FILE);
            if ($display_name)
            {
              $display_name = trim($display_name[0]);
            }
            else
            {
              $display_name = wsfpg_display_name($dirs[$item], DIR_UNDERSCORE_AS_SPACE, TRUE);
            }
          }
          if (SHOW_DIR_NAME & 2)
          {
            $title = htmlspecialchars($display_name);
          }
          else
          {
            $title = "";
          }
          if ((SHOW_DIR_DESC & 1) or (SHOW_DIR_DESC & 2))
          {
            $dirdesc = @file_get_contents(GALLERY_ROOT . GALLERY . $dirs[$item] . "/" . DIR_DESC_FILE);
            if (SHOW_DIR_DESC & 2)
            {
              $title .= ((($title != "") and ($dirdesc != "")) ? "\r\n---\r\n" : "");
              $title .= htmlspecialchars($dirdesc);
            }
          }
          if ((THUMB_ROOT != "") and ((SHOW_DIR_INFO & 1) or (SHOW_DIR_INFO & 2)))
          {
            $filed = explode("|", @file_get_contents(THUMB_ROOT . GALLERY . $dirs[$item] . "/_info.wsfpg"));
            $info = @trim((TEXT_DATE ? htmlspecialchars(TEXT_DATE) . date(DATE_FORMAT, $filed[3]) . "\r\n" : "") . (TEXT_DIRS ? htmlspecialchars(TEXT_DIRS) . $filed[0] . "\r\n" : "") . (TEXT_IMAGES ? htmlspecialchars(TEXT_IMAGES) . $filed[1] . "\r\n" : "") . ((TEXT_FILES and SHOW_FILES) ? htmlspecialchars(TEXT_FILES) . @$filed[2] : ""));
            if (SHOW_DIR_INFO & 2)
            {
              $title .= ($title != "" ? "\r\n---\r\n" : "") . $info;
            }
          }
          echo $spacing_col . "<td width=" . $img_width . " class=\"dir\"><a href=\"" . wsfpg_url((GALLERY . $dirs[$item] . "/")) . "\"><img alt=\"\" title=\"" . $title . "\" src=\"" . wsfpg_url((GALLERY . $dirs[$item] . "/"), "", "", "dirthumb") . "\" width=" . $img_width . " height=" . $img_width . ">" . ((SHOW_DIR_NAME & 1) ? "<br>&raquo; " . htmlspecialchars($display_name) . " &laquo;" : "") . "</a>";
          if ((SHOW_DIR_DESC & 1) and ($dirdesc != ""))
          {
            echo "<div>" . nl2br((DIR_DESC_HTML ? $dirdesc : htmlspecialchars($dirdesc))) . "</div>";
          }
          if ((SHOW_DIR_INFO & 1) and @($info != ""))
          {
            echo "<div>" . nl2br($info) . "</div>";
          }
          echo "</td>";
          $item++;
          $col++;
          if ($col > GALLERY_COLUMNS)
          {
            echo $spacing_col . "</tr>" . $spacing_row . "<tr>";
            $col = 1;
            $row++;
          }
        }
      }

      if (count($images) > 0)
      {
        $item = ($start_item - count($dirs));
        if ($item < 0)
        {
          $item = 0;
        }
        while(($item < count($images)) and (($row <= ROWS_PER_PAGE) or (ROWS_PER_PAGE == FALSE)))
        {
          if ((SHOW_IMAGE_NAME & 1) or (SHOW_IMAGE_NAME & 2))
          {
            $display_name = wsfpg_display_name($images[$item], IMAGE_UNDERSCORE_AS_SPACE, SHOW_IMAGE_EXT);
          }
          else
          {
            $display_name = "";
          }
          if (SHOW_IMAGE_NAME & 2)
          {
            $title = htmlspecialchars($display_name);
          }
          else
          {
            $title = "";
          }
          if ((SHOW_IMAGE_DESC & 1) or (SHOW_IMAGE_DESC & 2))
          {
            $imgdesc = @file_get_contents(GALLERY_ROOT . GALLERY . $images[$item] . IMAGE_DESC_EXT);
            if (SHOW_IMAGE_DESC & 2)
            {
              $title .= ((($title != "") and ($imgdesc != "")) ? "\r\n---\r\n" : "");
              $title .= htmlspecialchars($imgdesc);
            }
          }
          if ((THUMB_ROOT != "") and ((SHOW_IMAGE_INFO & 1) or (SHOW_IMAGE_INFO & 2)))
          {
            $filed = explode("|", @file_get_contents(THUMB_ROOT . GALLERY . $images[$item] . ".wsfpg"));
            $info = @trim((TEXT_DATE ? htmlspecialchars(TEXT_DATE) . date(DATE_FORMAT, $filed[0]) . "\r\n" : "") . (TEXT_FILESIZE ? htmlspecialchars(TEXT_FILESIZE) . number_format($filed[1], 0, '', '.') . "\r\n" : "") . (TEXT_IMAGESIZE ? htmlspecialchars(TEXT_IMAGESIZE) . @$filed[2] . " x " . $filed[3] : ""));
            if (SHOW_IMAGE_INFO & 2)
            {
              $title .= ($title ? "\r\n---\r\n" : "") . $info;
            }
          }
          echo $spacing_col . "<td width=" . $img_width . " class=\"img\">";
          if (USE_JAVA and IMAGE_IN_NEW_WINDOW)
          {
            echo "<a href=\"javascript:void(null)\" onClick=\"javascript:window.open('" . wsfpg_url(GALLERY, $images[$item], "", "imageform") . "', '', 'toolbar=no, menubar=no, location=no, scrollbars=yes, resizable=yes');\">";
          }
          else
          {
            echo "<a" . (IMAGE_IN_NEW_WINDOW ? " target=\"_blank\"" : "") . " href=\"" . wsfpg_url(GALLERY, $images[$item], PAGE, "imageform") . "\">";
          }
          echo "<img alt=\"\" title=\"" . $title . "\" src=\"" . wsfpg_url(GALLERY, $images[$item], "", "thumb") . "\" height=" . $img_width . " width=" . $img_width . ">" . ((SHOW_IMAGE_NAME & 1) ? "<br>" . htmlspecialchars($display_name) : "") . "</a>";
          if ((SHOW_IMAGE_DOWNLOAD & 1) and (TEXT_DOWNLOAD != ""))
          {
            echo "<div><a href=\"" . wsfpg_url(GALLERY, $images[$item], $page, "imageform", "dl") . "\">" . htmlspecialchars(TEXT_DOWNLOAD) . "</a></div>";
          }
          if ((SHOW_IMAGE_DESC & 1) and ($imgdesc != ""))
          {
            echo "<div>" . (IMAGE_DESC_HTML ? nl2br($imgdesc) : nl2br(htmlspecialchars($imgdesc))) . "</div>";
          }
          if ((SHOW_IMAGE_INFO & 1) and @($info != ""))
          {
            echo "<div>" . nl2br($info) . "</div>";
          }
          echo "</td>";
          $item++;
          $col++;
          if ($col > GALLERY_COLUMNS)
          {
            echo $spacing_col . "</tr>" . $spacing_row . "<tr>";
            $col = 1;
            $row++;
          }
        }
      }

      if (count($files) > 0)
      {
        $item = ($start_item - count($dirs) - count($images));
        if ($item < 0)
        {
          $item = 0;
        }
        while(($item < count($files)) and (($row <= ROWS_PER_PAGE) or (ROWS_PER_PAGE == FALSE)))
        {
          $display_name = wsfpg_display_name($files[$item], FILE_UNDERSCORE_AS_SPACE, SHOW_FILE_EXT);
          if (SHOW_FILE_NAME & 2)
          {
            $title = $display_name;
          }
          else
          {
            $title = "";
          }
          if (SHOW_FILE_DESC)
          {
            $filedesc = @file_get_contents(GALLERY_ROOT . GALLERY . $files[$item] . FILE_DESC_EXT);
            if (SHOW_FILE_DESC & 2)
            {
              $title .= ((($title != "") and ($filedesc != "")) ? "\r\n---\r\n" : "");
              $title .= htmlspecialchars($filedesc);
            }
          }
          if ((THUMB_ROOT != "") and SHOW_FILE_INFO)
          {
            $filed = explode("|", @file_get_contents(THUMB_ROOT . GALLERY . $files[$item] . ".wsfpg"));
            $info = trim((TEXT_DATE ? htmlspecialchars(TEXT_DATE) . date(DATE_FORMAT, $filed[0]) . "\r\n" : "") . (TEXT_FILESIZE ? htmlspecialchars(TEXT_FILESIZE) . number_format($filed[1], 0, '', '.') : ""));
            if (SHOW_FILE_INFO & 2)
            {
              $title .= ($title ? "\r\n---\r\n" : "") . $info;
            }
          }
          echo $spacing_col . "<td width=" . $img_width . " class=\"file\"><a " . (FILE_IN_NEW_WINDOW ? "target=\"_blank\" " : "") . "href=\"" . htmlspecialchars(GALLERY_ROOT . GALLERY . $files[$item]) . "\">";
          if (FILE_THUMB_EXT and file_exists(GALLERY_ROOT . GALLERY . $files[$item] . FILE_THUMB_EXT))
          {
            echo "<img alt=\"\" title=\"" . htmlspecialchars($title) . "\" src=\"" . wsfpg_url(GALLERY, ($files[$item] . FILE_THUMB_EXT), "", "thumb") . "\"><br>";
            $file_thumb_shown = TRUE;
          }
          else
          {
            $file_thumb_shown = FALSE;
          }
          if (!(!(SHOW_FILE_NAME & 1) and $file_thumb_shown))
          {
            echo htmlspecialchars($display_name);
          }
          echo "</a>";
          if ((SHOW_FILE_DESC & 1) and ($filedesc != ""))
          {
            echo "<div>" . nl2br((FILE_DESC_HTML ? $filedesc : htmlspecialchars($filedesc))) . "</div>";
          }
          if ((SHOW_FILE_INFO & 1) and ($info != ""))
          {
            echo "<div>" . nl2br($info) . "</div>";
          }
          echo "</td>";
          $item++;
          $col++;
          if ($col > GALLERY_COLUMNS)
          {
            echo $spacing_col . "</tr>" . $spacing_row . "<tr>";
            $col = 1;
            $row++;
          }
        }
      }

      echo str_repeat($spacing_col . $empty_cell, (GALLERY_COLUMNS - $col + 1));
      echo $spacing_col . "</tr>" . ($col > 1 ? $spacing_row : "");
      if ((SHOW_PAGE_NAVI & 2) and @$page_links)
      {
        echo "<tr><td width=" . $write_width . " colspan=" . $total_columns . " class=\"pagebottom\">";
        echo $page_links;
        echo "</td></tr>";
      }
      echo "</table>";
      
    }
  }


  $get_set = FALSE;
  if (@$_GET["wsfpg"]) 
  {
    $get = explode("*", wsfpg_base64url_decode($_GET["wsfpg"]));
    if ((md5($get[0] . "*" . $get[1] . "*" . $get[2] . "*" . $get[3] . "*" . $get[4] . "*" . SECURITY_PHRASE) === $get[5]) and (strpos($get[0] . $get[1], "..") === FALSE))
    {
      define("GALLERY", $get[0]);
      define("IMAGE", $get[1]);
      define("P_PAGE", $get[2]);
      define("P_CMD", $get[3]);
      define("P_OPT", $get[4]);
      $get_set = TRUE;
    }
  }
  if (!$get_set)
  {
    define("GALLERY", "");
    define("IMAGE", "");
    define("P_PAGE", "");
    define("P_CMD", "");
    define("P_OPT", "");
  }


  if (P_CMD == "css")
  {
    header("Content-type: text/css");
    echo "

	table.wsfpg td.dir a:active, table.wsfpg td.dir a:link, table.wsfpg td.dir a:visited, table.wsfpg td.dir a:focus
	{
		color : $color_dir_link;
		text-decoration : none;
	}

	table.wsfpg td.dir a:hover
	{
		color : $color_dir_hover;
		text-decoration : none;
	}

	table.wsfpg td.img a:active, table.wsfpg td.img a:link, table.wsfpg td.img a:visited, table.wsfpg td.img a:focus
	{
		color : $color_img_link;
		text-decoration : none;
	}

	table.wsfpg td.img a:hover
	{
		color : $color_img_hover;
		text-decoration : none;
	}

	table.wsfpg td.file a:active, table.wsfpg td.file a:link, table.wsfpg td.file a:visited, table.wsfpg td.file a:focus
	{
		color : $color_file_link;
		text-decoration : none;
	}

	table.wsfpg td.file a:hover
	{
		color : $color_file_hover;
		text-decoration : none;
	}

	table.wsfpg td.navi a:active, table.wsfpg td.navi a:link, table.wsfpg td.navi a:visited, table.wsfpg td.navi a:focus
	{
		color : $color_navi_link;
		text-decoration : none;
	}

	table.wsfpg td.navi a:hover
	{
		color : $color_navi_hover;
		text-decoration : none;
	}

	table.wsfpg a.navinorm:active, table.wsfpg a.navinorm:link, table.wsfpg a.navinorm:visited, table.wsfpg a.navinorm:focus
	{
		color : $color_page_link;
		text-decoration : none;
	}

	table.wsfpg a.navinorm:hover
	{
		color : $color_page_hover;
		text-decoration : none;
	}

	table.wsfpg a.navimark:active, table.wsfpg a.navimark:link, table.wsfpg a.navimark:visited, table.wsfpg a.navimark:focus
	{
		color : $color_page_mark_link;
		text-decoration : none;
		background-color: $color_page_mark_back;
	}

	table.wsfpg a.navimark:hover
	{
		color : $color_page_mark_hover;
		text-decoration : none;
	}

	table.wsfpg td.fullimg a:active, table.wsfpg td.fullimg a:link, table.wsfpg td.fullimg a:visited, table.wsfpg td.fullimg a:focus
	{
		color : $color_fullimg_link;
		text-decoration : none;
	}

	table.wsfpg td.fullimg a:hover
	{
		color : $color_fullimg_hover;
		text-decoration : none;
	}

	table.wsfpg
	{
		border : ".TABLE_BORDER_WIDTH."px solid $color_table_border;
		background : $color_table_back;
		font-size: 12px;
		text-align : center;
		vertical-align : top;
		margin : 0px;
		padding : 0px;
	}

	table.wsfpg td
	{
		border : none;
		border-bottom : ".TABLE_BORDER_WIDTH."px solid $color_table_border;
		padding : 3px;
	}

	table.wsfpg td.img
	{
		border : ".THUMB_TD_BORDER_WIDTH."px solid $color_img_td_border;
		background : $color_img_td_back;
		color: $color_img_td_text;
		padding : ".THUMB_TD_PADDING."px;
	}

	table.wsfpg td.dir
	{
		border : ".THUMB_TD_BORDER_WIDTH."px solid $color_dir_td_border;
		background : $color_dir_td_back;
		color: $color_dir_td_text;
		padding : ".THUMB_TD_PADDING."px;
	}

	table.wsfpg td.file
	{
		border : ".THUMB_TD_BORDER_WIDTH."px solid $color_file_td_border;
		background : $color_file_td_back;
		color: $color_file_td_text;
		padding : ".THUMB_TD_PADDING."px;
	}

	table.wsfpg td.navi
	{
		background : $color_navi_back;
		color: $color_navi_text;
	}

	table.wsfpg td.page
	{
		background : $color_page_back;
	}

	table.wsfpg td.pagebottom
	{
		background : $color_page_back;
		border-top : ".TABLE_BORDER_WIDTH."px solid $color_table_border;
		border-bottom : none;
	}

	table.wsfpg td.desc
	{
		background : $color_desc_back;
		color: $color_desc_text;
	}

	table.wsfpg td.empty
	{
		border : none;
		background : $color_table_back;
		padding : 0px;
	}

	table.wsfpg td.fullimg
	{
		border: none;
		background : $color_fullimg_td_back;
		color: $color_fullimg_td_text;
		padding : ".FULLIMG_TD_PADDING."px;
	}

	table.wsfpg td.fullimg img
	{
		border : ".FULLIMG_BORDER_WIDTH."px solid $color_fullimg_border;
		margin-top : 5px;
		margin-bottom : 5px;
	}

	table.wsfpg th
	{
		border : none;
		border-bottom : ".TABLE_BORDER_WIDTH."px solid $color_table_border;
		background : $color_table_header_back;
		color: $color_table_header_text;
		font-size: 18px;
		font-weight: bold;
		text-align : center;
		padding : 5px;
	}

	table.wsfpg td.dir img
	{
		border : ".THUMB_BORDER_WIDTH."px solid $color_dir_border;
		margin : 0px;
	}

	table.wsfpg td.img img
	{
		border : ".THUMB_BORDER_WIDTH."px solid $color_img_border;
		margin : 0px;
	}

	table.wsfpg td.file img
	{
		border : ".THUMB_BORDER_WIDTH."px solid $color_file_border;
		margin : 0px;
	}

	table.wsfpg td.dir div
	{
		margin-top : 5px;
		padding-top : 5px;
		border-top : 1px solid $color_dir_td_border;
		text-align : left;
		font-size: 10px;
	}

	table.wsfpg td.img div
	{
		margin-top : 5px;
		padding-top : 5px;
		border-top : 1px solid $color_img_td_border;
		text-align : left;
		font-size: 10px;
	}

	table.wsfpg td.file div
	{
		margin-top : 5px;
		padding-top : 5px;
		border-top : 1px solid $color_file_td_border;
		text-align : left;
		font-size: 10px;
	}
    ";
    exit;
  }


  if (P_CMD == "thumb")
  {
    wsfpg_thumb(GALLERY, IMAGE);
    exit;
  }


  if (P_CMD == "dirthumb")
  {
    if ((DIR_IMAGE_FILE != "") and file_exists(GALLERY_ROOT . GALLERY . DIR_IMAGE_FILE))
    {
      wsfpg_thumb(GALLERY, DIR_IMAGE_FILE);
      exit;
    }
    else
    {
      $first_image = wsfpg_first_image(GALLERY);
      wsfpg_thumb($first_image["dir"], $first_image["file"]);
      exit;
    }
  }


  if ((P_CMD == "image") or (P_OPT == "dl"))
  {
    $image_file = GALLERY_ROOT . GALLERY . IMAGE;
    $img_type = wsfpg_image_type($image_file);
    if (file_exists($image_file) and $img_type)
    {
      if (P_OPT == "dl")
      {
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"" . IMAGE . "\"");
      }
      else
      {
        header("Content-Type: image/" . $img_type);
        header("Content-Disposition: inline; filename=\"" . IMAGE . "\"");
      }
      readfile($image_file);
    }
    else
    {
      header("Location: " . $_SERVER["PHP_SELF"]);
    }
    exit;
  }


  list($dirs, $images, $files) = wsfpg_get_dir(GALLERY);
  if ((SHOW_DIR_INFO or SHOW_FILE_INFO) and (THUMB_ROOT != "") and (P_CMD != "imageform"))
  {
    $info = count($dirs) . "|" . count($images) . "|" . count($files) . "|" . filemtime(GALLERY_ROOT . GALLERY . ".");
    $file_info = @file_get_contents(THUMB_ROOT . GALLERY . "_info.wsfpg");
    if ($file_info != $info)
    {
      if ($fp = @fopen(THUMB_ROOT . GALLERY . "_info.wsfpg", "w"))
      {
        fwrite($fp, $info);
        fclose($fp);
      }
    }
    if (SHOW_FILE_INFO)
    {
      $info_a = explode("|", $file_info);
      if (count($files) != @$info_a[2])
      {
        $item = 0;
        while($item < count($files))
        {
          if (!is_dir(THUMB_ROOT . GALLERY))
          {
            wsfpg_make_dir(THUMB_ROOT . GALLERY);
          }
          $fp = fopen(THUMB_ROOT . GALLERY . $files[$item] . ".wsfpg", "w");
          fwrite($fp, filemtime(GALLERY_ROOT . GALLERY . $files[$item]) . "|" . filesize(GALLERY_ROOT . GALLERY . $files[$item]));
          fclose($fp);
          $item++;
        }
      }
    }
  }


  if (ROWS_PER_PAGE != FALSE)
  {
    $items_per_page = (GALLERY_COLUMNS * ROWS_PER_PAGE);
    $pages = ceil((count($dirs) + count($images) + count($files)) / $items_per_page);
    if ((P_PAGE < 1) or (P_PAGE > $pages))
    {
      define("PAGE", 1);
    }
    else
    {
      define("PAGE", P_PAGE);
    }
  }


  if ((P_CMD == "imageform") and IMAGE_IN_NEW_WINDOW)
  {
    wsfpg_image();
    exit;
  }

    require('../wp-blog-header.php');
    add_action('wp_head', 'wsfpg_css_link');
    get_header();
    echo "<div id='content' class='narrowcolumn'>";
    wsfpg();
    echo "</div>";
    get_sidebar();
    get_footer();
  
?>