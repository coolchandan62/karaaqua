<?php
header('Content-type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
    http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

<url>
  <loc><?php echo base_url();?></loc>
  <lastmod>2025-04-14T07:58:00+00:00</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc><?php echo base_url("blogs");?></loc>
  <lastmod>2025-04-14T07:58:00+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc><?php echo base_url("service");?></loc>
  <lastmod>2025-04-14T07:58:00+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc><?php echo base_url("about-us");?></loc>
  <lastmod>2025-04-14T07:58:00+00:00</lastmod>
  <priority>0.80</priority>
</url>

<url>
  <loc><?php echo base_url("contact-us");?></loc>
  <lastmod>2025-04-14T07:58:00+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc><?php echo base_url("products");?></loc>
  <lastmod>2025-04-14T07:58:00+00:00</lastmod>
  <priority>0.80</priority>
</url>

<?php
    if($serviceList){
        foreach($serviceList As $service){
            if($service['heading_slug']!=""){
                $lastmod = date('c', strtotime($service['date'])); 
                echo '<url>';
                echo '<loc>' . base_url("service/".$service['heading_slug']) . '</loc>';
                echo '<lastmod>' . $lastmod . '</lastmod>';
                echo '<priority>0.80</priority>';
                echo '</url>';        
            }
        }
    }
?>


<?php
    if($blogList){
        foreach($blogList As $blog){
            $lastmod = date('c', strtotime($blog['date'])); 
            echo '<url>';
            echo '<loc>' . base_url("blog/".$blog['heading_slug']) . '</loc>';
            echo '<lastmod>' . $lastmod . '</lastmod>';
            echo '<priority>0.80</priority>';
            echo '</url>';        
        }
    }
?>
<?php
    if($productList){
        foreach($productList As $product){
            $lastmod = date('c', strtotime($product['date'])); 
            echo '<url>';
            echo '<loc>' . base_url("product/".$product['heading_slug']) . '</loc>';
            echo '<lastmod>' . $lastmod . '</lastmod>';
            echo '<priority>0.80</priority>';
            echo '</url>';        
        }
    }
?>
</urlset>