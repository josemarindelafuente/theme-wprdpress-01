<?php

class My_Theme_Walker_Nav_Menu extends Walker_Nav_Menu
{

    public function start_el( &$output, $item, $depth = 0, $args = array(), $id= 0 ) {

        // https://youtu.be/MvDAOa2zDrw?list=PLuvWCOZetD44AhINUd3WKdOt41tF8jh7B&t=618
        // explicacion del .=
        $output .= '<li class="nav-item"><a href="' . $item->url . '" class="nav-link link-dark px-2 active" aria-current="page">' . $item->title;

    }

    public function end_el( &$output, $item, $depth = 0, $args = array() ) {

        $output .= '</a></li>';

    }

}