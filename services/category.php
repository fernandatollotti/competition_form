<?php

  function define_category( $name, $age )
  {
    $category = ['Pré Mirim', 'Mirim', 'Petiz', 'Infantil', 'Juvenil', 'Júnior', 'Sênior'];

    if ( validate_name( $name ) && validate_age( $age ))
    {
      remove_message_error();
      if ( $age <= 8 )
      {

        for ( $i = 0; $i <= count( $category ); $i++ )
        {
          if ( $category[$i] == 'Pré Mirim' ) 
          {
            set_message_success('Categoria: ' . $category[$i]);
            return null;
          }
        }
      }

      if ( $age >= 9 && $age <= 10 )
      {
        set_message_success('Categoria: Mirim');
        return;
      }

      if ( $age >= 11 && $age <= 12 )
      {
        set_message_success('Categoria: Petiz');
        return;
      }

      if ( $age >= 13 && $age <= 14 )
      {
        set_message_success('Categoria: Infantil');
        return;
      }

      if ( $age >= 15 && $age <= 16 )
      {
        set_message_success('Categoria: Juvenil');
        return;
      }

      if ( $age >= 16 && $age <= 19 )
      {
        set_message_success('Categoria: Júnior');
        return;
      }

      if ( $age > 20 )
      {
        set_message_success('Categoria: Sênior');
        return;
      }
    }
    else
    {
      remove_message_success();
      return get_message_error();
    }
  }

?>