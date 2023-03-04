<?php

  function validate_name( $name )
  {
    if ( empty( $name ) )
    {
      set_message_error('Por favor, preencha o campo com seu nome.');
      return false;
    }

    if ( strlen( $name ) < 3 ) 
    {
      set_message_error('O nome deve conter mais 3 caracteres.');
      return false;
    }

    if ( strlen( $name ) > 50 )
    {
      set_message_error('O nome está extenso, tente novamente.');
      return false;
    }

    return true;
  }

  function validate_age( $age )
  {
    if ( empty( $age ) )
    {
      set_message_error('Por favor, preencha sua idade.');
      return false;
    }

    if ( !is_numeric( $age ) )
    {
      set_message_error('Digite sua idade.');
      return false;
    }

    return true;
  }

?>