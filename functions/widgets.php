<?php
/**!
 * Widgets
 */

class Col_Nav_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth, $args)
    {
        $classes = empty($item->classes) ? array () : (array) $item->classes;
        $class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        !empty ( $class_names ) and $class_names = ' class="col '. esc_attr( $class_names ) . '"';
        $output .= "<div id='menu-item-$item->ID' $class_names>";
        $attributes  = '';
        !empty( $item->attr_title ) and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
        !empty( $item->target ) and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
        !empty( $item->xfn ) and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
        !empty( $item->url ) and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $item_output = $args->before
        . "<a $attributes>"
        . $args->link_before
        . $title
        . '</a></div>'
        . $args->link_after
        . $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

function illarion_widgets_init() {

  /*
  Frontpage Widgets
  */

  register_sidebar(array(
    'name' => 'Frontpage Main Content',
    'id' => 'frontpage-main',
    'description' => 'Content for the main text area on the frontpage',
    'before_widget' => false,
    'after_widget' => false,
    'before_title' => false,
    'after_title' => false
  ));

  register_sidebar(array(
    'name' => 'Frontpage Column Content',
    'id' => 'frontpage-column',
    'description' => 'Content to be included in the column area of the frontpage',
    'before_widget' => '<div class="%1$s %2$s col-md">',
    'after_widget' => '</div>',
    'before_title' => '<div>',
    'after_title' => '</div>'
  ));


  /*
  Sidebar (one widget area)
   */
  register_sidebar( array(
    'name'            => __( 'Sidebar', 'illarion' ),
    'id'              => 'sidebar-widget-area',
    'description'     => __( 'The sidebar widget area', 'illarion' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h2 class="h4">',
    'after_title'     => '</h2>',
  ) );

  /*
  Footer (1, 2, 3, or 4 areas)

  Flexbox `col-sm` gives the correct the column width:

  * If only 1 widget, then this will have full width ...
  * If 2 widgets, then these will each have half width ...
  * If 3 widgets, then these will each have third width ...
  * If 4 widgets, then these will each have quarter width ...
  ... above the Bootstrap `sm` breakpoint.
   */

  register_nav_menus( array (
    'footer-menu' => __('Footer Menu')
  ));

  /*register_sidebar( array(
    'name'            => __( 'Footer', 'illarion' ),
    'id'              => 'footer-widget-area',
    'description'     => __( 'The footer widget area', 'illarion' ),
    'before_widget'   => '<div class="%1$s %2$s col-sm">',
    'after_widget'    => '</div>',
    'before_title'    => '<h2 class="h4">',
    'after_title'     => '</h2>',
  ) );*/

}
add_action( 'widgets_init', 'illarion_widgets_init' );
