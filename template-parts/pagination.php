<?php 

$links = paginate_links( array('type' => 'array') );

if ( empty( $links )) { return; } // validacion por si no existe paginacion

$new_links = str_replace( 'page-numbers' , 'page-link' , $links );

//var_dump($links);

?>


<nav aria-label="...">
  <ul class="pagination">

      <?php  foreach( $new_links as $link ) :  ?>

            <li class="page-item <?php if( strpos($link, 'current')  ) { echo 'active'; } ?>" > 
                <?php echo $link; ?>
            </li>

      <?php  endforeach; ?>

  </ul>

  </nav>